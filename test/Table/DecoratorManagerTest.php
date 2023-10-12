<?php

declare(strict_types=1);

namespace LaminasTest\Text\Table;

use Laminas\ServiceManager\ServiceManager;
use Laminas\ServiceManager\Test\CommonPluginManagerTrait;
use Laminas\Text\Table\Decorator\DecoratorInterface;
use Laminas\Text\Table\DecoratorManager;
use Laminas\Text\Table\Exception\InvalidDecoratorException;
use PHPUnit\Framework\TestCase;

class DecoratorManagerTest extends TestCase
{
    use CommonPluginManagerTrait;

    protected static function getPluginManager(): DecoratorManager
    {
        return new DecoratorManager(new ServiceManager());
    }

    /** @return class-string<InvalidDecoratorException> */
    protected function getV2InvalidPluginException(): string
    {
        return InvalidDecoratorException::class;
    }

    /** @return class-string<DecoratorInterface> */
    protected function getInstanceOf(): string
    {
        return DecoratorInterface::class;
    }
}
