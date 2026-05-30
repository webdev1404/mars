<?php
// Utility which cleans the cache directory

$cache_dir = dirname(__FILE__, 2) . '/data/cache';

$exclude_dirs = ['assets'];

$dirs_array = [
    'assets/css',
    'assets/js',
];

$dirs = new \DirectoryIterator($cache_dir);
foreach ($dirs as $dir) {
    if ($dir->isDot() || !$dir->isDir()) {
        continue;
    }

    $path = $dir->getPathname();
    if (in_array(basename($path), $exclude_dirs)) {
        continue;
    }

    clean_dir($path);
}

//clean the dirs listed in $dirs_array
foreach ($dirs_array as $dir) {
    $path = $cache_dir . '/' . $dir;
    if (is_dir($path)) {
        clean_dir($path);
    }
}


function clean_dir(string $path)
{
    echo "Cleaning directory: {$path}\n";

    $directory_iterator = new \RecursiveDirectoryIterator($path, \RecursiveDirectoryIterator::SKIP_DOTS | \RecursiveDirectoryIterator::CURRENT_AS_SELF);
    $iterator = new \RecursiveIteratorIterator($directory_iterator, \RecursiveIteratorIterator::CHILD_FIRST);

    foreach ($iterator as $file) {
        if ($file->isDir()) {
            if (!rmdir($file->getPathname())) {
                die("Failed to delete directory: " . $file->getPathname());
            }
        } else {
            if (!unlink($file->getPathname())) {
                die("Failed to delete file: " . $file->getPathname());
            }
        }
    }
}
