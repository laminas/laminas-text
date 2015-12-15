<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Text\Table;

use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\ServiceManager\AbstractPluginManager;

/**
 * Plugin manager implementation for text table decorators
 *
 * Enforces that decorators retrieved are instances of
 * Decorator\DecoratorInterface. Additionally, it registers a number of default
 * decorators.
 */
class DecoratorManager extends AbstractPluginManager
{
    /**
     * Default set of decorators
     *
     * @var array
     */
    protected $aliases = [
        'ascii'   => Decorator\Ascii::class,
        'blank'   => Decorator\Blank::class,
        'unicode' => Decorator\Unicode::class,
    ];


    protected $factories = [
        Decorator\Ascii::class      => InvokableFactory::class,
        Decorator\Blank::class      => InvokableFactory::class,
        Decorator\Unicode::class    => InvokableFactory::class,
    ];

    protected $instanceOf = Decorator\DecoratorInterface::class;
}
