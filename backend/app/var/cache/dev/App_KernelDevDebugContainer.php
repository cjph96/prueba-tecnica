<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV7JYxXM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV7JYxXM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV7JYxXM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV7JYxXM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerV7JYxXM\App_KernelDevDebugContainer([
    'container.build_hash' => 'V7JYxXM',
    'container.build_id' => 'd5338ccb',
    'container.build_time' => 1633426876,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV7JYxXM');
