<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNaC32Ir\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNaC32Ir/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNaC32Ir.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNaC32Ir\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerNaC32Ir\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'NaC32Ir',
    'container.build_id' => 'c505f8c3',
    'container.build_time' => 1542357680,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNaC32Ir');
