<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHOxTp5R\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHOxTp5R/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHOxTp5R.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHOxTp5R\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHOxTp5R\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HOxTp5R',
    'container.build_id' => '2aa8e1a8',
    'container.build_time' => 1556974755,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHOxTp5R');
