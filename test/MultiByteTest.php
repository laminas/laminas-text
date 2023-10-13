<?php

declare(strict_types=1);

namespace LaminasTest\Text;

use Laminas\Text;
use PHPUnit\Framework\TestCase;

/**
 * @group      Laminas_Text
 * @psalm-suppress DeprecatedMethod
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
