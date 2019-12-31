<?php

/**
 * @see       https://github.com/laminas/laminas-text for the canonical source repository
 * @copyright https://github.com/laminas/laminas-text/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-text/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Text\Table;

use Laminas\ServiceManager\ServiceManager;
use Laminas\ServiceManager\Test\CommonPluginManagerTrait;
use Laminas\Text\Table\Decorator\DecoratorInterface;
use Laminas\Text\Table\DecoratorManager;
use Laminas\Text\Table\Exception\InvalidDecoratorException;
use PHPUnit_Framework_TestCase as TestCase;

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
