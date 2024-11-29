<?php

namespace ContainerO9GB5aL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EntityListener\UserListener' shared autowired service.
     *
     * @return \App\EntityListener\UserListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityListener'.\DIRECTORY_SEPARATOR.'UserListener.php';

        return $container->privates['App\\EntityListener\\UserListener'] = new \App\EntityListener\UserListener(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));
    }
}
