<?php
/*
|--------------------------------------------------------------------------
| Caching & HTML Caching Options
|--------------------------------------------------------------------------
*/

return [
    // If true, will enable the html cache functionality
    'cache.html.enable' => false,

    // string The driver used for html caching. Supported options: text, memcache. If null, will use cache.driver
    'cache.html.driver' => 'text',

    // The urls to exclude from html caching
    'cache.html.exclude.urls' => [],

    // bool If true, will enable the compression of the cached html based on the accepted encodings of the client
    'cache.html.compression.enable' => false,

    // array The compression drivers to use for the cached html, based on the accepted encodings of the client. Supported options: gzip, brotli, zstd
    'cache.html.compression.drivers' => ['gzip'],

    // int|null The compression level to use for the cached html. If null, the default level of the driver will be used
    'cache.html.compression.level' => null,
];