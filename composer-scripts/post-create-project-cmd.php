<?php
$base_dir = dirname(__DIR__);

//set 0777 permissions to the listed folders
$dirs_writeable = [
    'data',
    'data/log',
    'data/tmp',
    'data/cache',
    'data/cache/css',
    'data/cache/js',
    'data/cache/data',
    'data/cache/pages',
    'data/cache/routes',
    'data/cache/templates',
];

foreach ($dirs_writeable as $dir) {
    $dir = $base_dir . '/' . $dir;

    if (is_dir($dir)) {
        chmod($dir, 0777);
    }
}

//remove this file
unlink(__FILE__);


if (is_empty_dir(__DIR__)) {
    rmdir(__DIR__);
}

function is_empty_dir($dir)
{
    return (($files = @scandir($dir)) && count($files) <= 2);
}
