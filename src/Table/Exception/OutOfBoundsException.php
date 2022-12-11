<?php

declare(strict_types=1);

namespace Laminas\Text\Table\Exception;

use Laminas\Text\Exception;

class OutOfBoundsException extends Exception\OutOfBoundsException implements ExceptionInterface
{
}
