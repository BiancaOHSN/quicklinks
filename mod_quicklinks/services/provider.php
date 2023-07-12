<?php
/*
 *  package: Quicklinks
 *  copyright: Copyright (c) 2023. Bianca Roelandschap | OHSN
 *  license: GNU General Public License version 2 or later
 *  link: https://www.ohsn.nl
 */

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Extension\Service\Provider\HelperFactory;
use Joomla\CMS\Extension\Service\Provider\Module;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

/**
 * The quicklinks module service provider.
 *
 * @since  1.0.0
 */
return new class implements ServiceProviderInterface {
    /**
     * Registers the service provider with a DI container.
     *
     * @param Container $container The DI container.
     *
     * @return  void
     *
     * @since   1.0.0
     */
    public function register(Container $container)
    {
        $container->registerServiceProvider(new ModuleDispatcherFactory('\\OHSN\\Module\\Quicklinks'));
        $container->registerServiceProvider(new HelperFactory('\\OHSN\\Module\\Quicklinks\\Administrator\\Helper'));

        $container->registerServiceProvider(new Module);
    }
};
