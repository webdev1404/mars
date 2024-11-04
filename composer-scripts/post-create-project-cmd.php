<?php
$base_dir = dirname(__DIR__);

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
    $dir = $base_dir . '/' . $dir;

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
    $file = $base_dir . '/' . $file;

    if (is_file($file)) {
        unlink($file);
    }
}


//remove this file
unlink(__FILE__);

rmdir(__DIR__);