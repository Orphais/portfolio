<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUW2oo9x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUW2oo9x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUW2oo9x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUW2oo9x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUW2oo9x\App_KernelDevDebugContainer([
    'container.build_hash' => 'UW2oo9x',
    'container.build_id' => 'e170ca43',
    'container.build_time' => 1733819249,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUW2oo9x');
