<?php

/**
 * @see       https://github.com/laminas/laminas-text for the canonical source repository
 * @copyright https://github.com/laminas/laminas-text/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-text/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Text;

use Laminas\Text;
use PHPUnit\Framework\Error\Deprecated;
use PHPUnit\Framework\TestCase;

/**
 * @group      Laminas_Text
 */
class MultiByteTest extends TestCase
{
    public function testWordWrapTriggersDeprecatedError()
    {
        $this->expectDeprecation();
        $line = Text\MultiByte::wordWrap('äbüöcß', 2, ' ', true);
    }

    public function testStrPadTriggersDeprecatedError()
    {
        $this->expectDeprecation();
        $text = Text\MultiByte::strPad('äääöö', 2, 'ö');
    }
}
