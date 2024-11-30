<?php

namespace ContainerM43Rxhy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GxT3F9JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gxT3F9J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gxT3F9J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.AbuX7CZ', 'get_ServiceLocator_AbuX7CZService', true],
            'App\\Controller\\UserController::editPassword' => ['privates', '.service_locator.AbuX7CZ', 'get_ServiceLocator_AbuX7CZService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.AbuX7CZ', 'get_ServiceLocator_AbuX7CZService', true],
            'App\\Controller\\UserController:editPassword' => ['privates', '.service_locator.AbuX7CZ', 'get_ServiceLocator_AbuX7CZService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::editPassword' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:editPassword' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
