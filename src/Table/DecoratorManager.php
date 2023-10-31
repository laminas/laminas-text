<?php

namespace Laminas\Text\Table;

use Laminas\ServiceManager\AbstractPluginManager;
use Laminas\ServiceManager\ConfigInterface;
use Laminas\ServiceManager\Exception\InvalidServiceException;
use Laminas\ServiceManager\Factory\InvokableFactory;

use function get_debug_type;
use function sprintf;

/**
 * Plugin manager implementation for text table decorators
 *
 * Enforces that decorators retrieved are instances of
 * Decorator\DecoratorInterface. Additionally, it registers a number of default
 * decorators.
 *
 * @psalm-import-type FactoriesConfigurationType from ConfigInterface
 * @template-extends AbstractPluginManager<Decorator\DecoratorInterface>
 */
class DecoratorManager extends AbstractPluginManager
{
    /**
     * Default set of decorators
     *
     * @var array<non-empty-string, non-empty-string>
     */
    protected $aliases = [
        'ascii'   => Decorator\Ascii::class,
        'Ascii'   => Decorator\Ascii::class,
        'blank'   => Decorator\Blank::class,
        'Blank'   => Decorator\Blank::class,
        'unicode' => Decorator\Unicode::class,
        'Unicode' => Decorator\Unicode::class,

        // Legacy Zend Framework aliases
        'Zend\Text\Table\Decorator\Ascii'   => Decorator\Ascii::class,
        'Zend\Text\Table\Decorator\Unicode' => Decorator\Unicode::class,
        'Zend\Text\Table\Decorator\Blank'   => Decorator\Blank::class,

        // v2 normalized FQCNs
        'zendtexttabledecoratorascii'   => Decorator\Ascii::class,
        'zendtexttabledecoratorblank'   => Decorator\Blank::class,
        'zendtexttabledecoratorunicode' => Decorator\Unicode::class,
    ];

    /** @var FactoriesConfigurationType */
    protected $factories = [
        Decorator\Ascii::class             => InvokableFactory::class,
        Decorator\Unicode::class           => InvokableFactory::class,
        Decorator\Blank::class             => InvokableFactory::class,
        'laminastexttabledecoratorascii'   => InvokableFactory::class,
        'laminastexttabledecoratorblank'   => InvokableFactory::class,
        'laminastexttabledecoratorunicode' => InvokableFactory::class,
    ];

    /** @inheritDoc */
    protected $instanceOf = Decorator\DecoratorInterface::class;

    /**
     * {@inheritdoc} (v3)
     */
    public function validate(mixed $instance)
    {
        if ($instance instanceof $this->instanceOf) {
            // we're okay
            return;
        }

        throw new InvalidServiceException(sprintf(
            'Plugin of type %s is invalid; must implement %s\Decorator\DecoratorInterface',
            get_debug_type($instance),
            __NAMESPACE__
        ));
    }

    /**
     * Validate the plugin (v2)
     *
     * Checks that the decorator loaded is an instance of Decorator\DecoratorInterface.
     *
     * @return void
     * @throws Exception\InvalidDecoratorException
     */
    public function validatePlugin(mixed $plugin)
    {
        try {
            $this->validate($plugin);
        } catch (InvalidServiceException $e) {
            throw new Exception\InvalidDecoratorException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
