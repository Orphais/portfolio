<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIR9TKEs\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIR9TKEs/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIR9TKEs.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIR9TKEs\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIR9TKEs\App_KernelDevDebugContainer([
    'container.build_hash' => 'IR9TKEs',
    'container.build_id' => 'c11ddf2c',
    'container.build_time' => 1736330323,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIR9TKEs');