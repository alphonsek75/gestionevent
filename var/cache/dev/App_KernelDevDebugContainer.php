<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6Fyumzz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6Fyumzz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6Fyumzz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6Fyumzz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6Fyumzz\App_KernelDevDebugContainer([
    'container.build_hash' => '6Fyumzz',
    'container.build_id' => 'd7d7b23a',
    'container.build_time' => 1606602117,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6Fyumzz');