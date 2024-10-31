<?php

$dirs_writeable = [
    'log',
    'tmp',
    'cache/css',
    'cache/js',
    'cache/pages',
    'cache/templates',
];

foreach ($dirs_writeable as $dir) {
    $dir = __DIR__ . '/' . $dir;

    if (is_dir($dir)) {
        chmod($dir, 0777);
    }
}


unlink(__DIR__ . '/post-create-project-cmd.php');