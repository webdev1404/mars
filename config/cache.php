<?php
//Cache Config Options

return [
    'driver' => 'file',           //The driver used for caching. Supported options: file, memcache

	'page_enable' => false,       //If true, will enable the content cache functionality
    'page_driver' => 'file',      //The driver used for content caching. Supported options:file, memcache
    'page_expire_hours' => 24,    //The value - in hours - of the Expires header
    'page_minify' => false,       //If true will minify the cached content
];