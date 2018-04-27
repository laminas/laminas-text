<?php
/**
 * @see       https://github.com/zendframework/zend-text for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-text/blob/master/LICENSE.md New BSD License
 */

namespace ZendTest\Text;

use PHPUnit\Framework\Error\Deprecated;
use PHPUnit\Framework\TestCase;
use Zend\Text;

/**
 * @group      Zend_Text
 */
class MultiByteTest extends TestCase
{
    public function testWordWrapTriggersDeprecatedError()
    {
        $this->expectException(Deprecated::class);
        $line = Text\MultiByte::wordWrap('äbüöcß', 2, ' ', true);
    }

    public function testStrPadTriggersDeprecatedError()
    {
        $this->expectException(Deprecated::class);
        $text = Text\MultiByte::strPad('äääöö', 2, 'ö');
    }
}
