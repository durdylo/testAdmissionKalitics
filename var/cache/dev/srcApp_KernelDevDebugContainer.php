<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9S2UwwJ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9S2UwwJ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9S2UwwJ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9S2UwwJ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container9S2UwwJ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '9S2UwwJ',
    'container.build_id' => 'a4b2071e',
    'container.build_time' => 1597566146,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9S2UwwJ');
