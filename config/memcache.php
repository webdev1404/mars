<?php
/*
|--------------------------------------------------------------------------
| Memcache Options
|--------------------------------------------------------------------------
*/

return [
    // bool If true will enable the memory cache functionality
    'memcache.enable' => false,

    // string The key used for memcache. Must be specific to the project
    'memcache.key' => '',

    // string The driver used for memcache. Supported options: memcached, redis
    'memcache.driver' => 'memcached',

    // string The memcache host
    'memcache.host' => '127.0.0.1',

    // string The memcache host port
    'memcache.port' => '11211',
];
