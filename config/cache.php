<?php
/*
|--------------------------------------------------------------------------
| Caching & Page Caching Options
|--------------------------------------------------------------------------
*/

return [
    // The driver used for caching. Supported options: serialized, php, memcache. If memcache is used, memcache.enable must be true
    'cache.driver' => 'serialized',

    // If true, will enable the page cache functionality
    'cache.page.enable' => false,

    // string The driver used for page caching. Supported options: text, memcache. If null, will use cache.driver
    'cache.page.driver' => 'text',

    // The urls to exclude from page caching
    'cache.page.exclude.urls' => [],

    // bool If true, will enable the compression of the cached pages based on the accepted encodings of the client
    'cache.page.compression.enable' => false,

    // array The compression drivers to use for the cached pages, based on the accepted encodings of the client. Supported options: gzip, brotli, zstd
    'cache.page.compression.drivers' => ['gzip'],

    // int|null The compression level to use for the cached pages. If null, the default level of the driver will be used
    'cache.page.compression.level' => null,
];
