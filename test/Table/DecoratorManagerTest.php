<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Text\Table;

use PHPUnit_Framework_TestCase as TestCase;
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
