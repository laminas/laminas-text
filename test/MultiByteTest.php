<?php

/**
 * @see       https://github.com/laminas/laminas-text for the canonical source repository
 * @copyright https://github.com/laminas/laminas-text/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-text/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Text;

use Laminas\Text;

/**
 * @group      Laminas_Text
 */
class MultiByteTest extends \PHPUnit_Framework_TestCase
{
    public function testWordWrapTriggersDeprecatedError()
    {
        $this->setExpectedException('PHPUnit_Framework_Error_Deprecated');
        $line = Text\MultiByte::wordWrap('äbüöcß', 2, ' ', true);
    }

    public function testStrPadTriggersDeprecatedError()
    {
        $this->setExpectedException('PHPUnit_Framework_Error_Deprecated');
        $text = Text\MultiByte::strPad('äääöö', 2, 'ö');
    }
}
