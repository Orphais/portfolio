<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYUaVd3F\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYUaVd3F/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYUaVd3F.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYUaVd3F\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYUaVd3F\App_KernelDevDebugContainer([
    'container.build_hash' => 'YUaVd3F',
    'container.build_id' => 'a349812e',
    'container.build_time' => 1734642950,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYUaVd3F');
