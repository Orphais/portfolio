<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOqIOwTj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOqIOwTj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOqIOwTj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOqIOwTj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOqIOwTj\App_KernelDevDebugContainer([
    'container.build_hash' => 'OqIOwTj',
    'container.build_id' => '5b0497c8',
    'container.build_time' => 1735999755,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOqIOwTj');
