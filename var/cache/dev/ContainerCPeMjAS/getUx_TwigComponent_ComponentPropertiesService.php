<?php

namespace ContainerCPeMjAS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_ComponentPropertiesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.component_properties' shared service.
     *
     * @return \Symfony\UX\TwigComponent\ComponentProperties
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentProperties.php';

        return $container->privates['ux.twig_component.component_properties'] = new \Symfony\UX\TwigComponent\ComponentProperties(($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()), ['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon' => NULL], ($container->privates['cache.ux.twig_component'] ?? $container->getCache_Ux_TwigComponentService()));
    }
}
