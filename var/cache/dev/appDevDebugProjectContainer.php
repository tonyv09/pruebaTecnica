<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4dmi22j\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4dmi22j/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container4dmi22j.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container4dmi22j\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container4dmi22j\appDevDebugProjectContainer([
    'container.build_hash' => '4dmi22j',
    'container.build_id' => '25b887cc',
    'container.build_time' => 1557252110,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4dmi22j');
