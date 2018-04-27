<?php
/**
 * @see       https://github.com/zendframework/zend-text for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-text/blob/master/LICENSE.md New BSD License
 */

namespace ZendTest\Text\Table;

use PHPUnit\Framework\TestCase;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\Test\CommonPluginManagerTrait;
use Zend\Text\Table\Decorator\DecoratorInterface;
use Zend\Text\Table\DecoratorManager;
use Zend\Text\Table\Exception\InvalidDecoratorException;

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
