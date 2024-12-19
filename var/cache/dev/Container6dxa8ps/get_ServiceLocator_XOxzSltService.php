<?php

namespace Container6dxa8ps;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XOxzSltService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XOxzSlt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XOxzSlt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'security' => '?',
        ]);
    }
}
