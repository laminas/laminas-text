<?php

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

    protected function getPluginManager()
    {
        return new DecoratorManager(new ServiceManager());
    }

    protected function getV2InvalidPluginException()
    {
        return InvalidDecoratorException::class;
    }

    protected function getInstanceOf()
    {
        return DecoratorInterface::class;
    }
}
