<?php

declare(strict_types=1);

use PHPUnit\Framework\Error\Deprecated;

if (! class_exists(Deprecated::class)) {
    class_alias(PHPUnit_Framework_Error_Deprecated::class, Deprecated::class);
}
