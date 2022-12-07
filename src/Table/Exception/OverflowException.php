<?php

declare(strict_types=1);

namespace Laminas\Text\Table\Exception;

use Laminas\Text\Exception;

class OverflowException extends Exception\OverflowException implements ExceptionInterface
{
}
