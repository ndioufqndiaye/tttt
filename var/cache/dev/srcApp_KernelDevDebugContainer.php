<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYrCWDtv\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYrCWDtv/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYrCWDtv.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYrCWDtv\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYrCWDtv\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YrCWDtv',
    'container.build_id' => '611901fe',
    'container.build_time' => 1564325270,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYrCWDtv');
