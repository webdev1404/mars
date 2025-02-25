<?php
//Memcache Config Options

return [
    'enable' => false,        		//If true will enable the memory cache functionality
	'driver' => 'memcached', 		//The driver used for memcache. Supported options: memcache, memcached, redis
	'host' => '127.0.0.1',   		//The memcache host
	'port' => '11211',       		//The memcache port
];