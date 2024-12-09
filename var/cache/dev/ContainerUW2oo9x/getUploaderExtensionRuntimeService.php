<?php

namespace ContainerUW2oo9x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUploaderExtensionRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime' shared service.
     *
     * @return \Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'UploaderExtensionRuntime.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'UploaderHelperInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'UploaderHelper.php';

        return $container->privates['Vich\\UploaderBundle\\Twig\\Extension\\UploaderExtensionRuntime'] = new \Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime(new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(($container->privates['vich_uploader.storage.file_system'] ?? $container->load('getVichUploader_Storage_FileSystemService'))));
    }
}
