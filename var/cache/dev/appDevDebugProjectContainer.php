<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerU8a4l62\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerU8a4l62/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerU8a4l62.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerU8a4l62\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerU8a4l62\appDevDebugProjectContainer([
    'container.build_hash' => 'U8a4l62',
    'container.build_id' => 'a8750731',
    'container.build_time' => 1582502464,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerU8a4l62');
