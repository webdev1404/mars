<?php

//set 0777 permissions to the listed folders
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


//remove .gitignore files
$delete_files = [
    'extensions/modules/.gitignore',
    'libraries/css/.gitignore',
    'libraries/javascript/.gitignore',
];

foreach ($delete_files as $file) {
    $file = __DIR__ . '/' . $file;

    if (is_file($file)) {
        unlink($file);
    }
}


//remove this file
unlink(__DIR__ . '/post-create-project-cmd.php');