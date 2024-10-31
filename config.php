<?php
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);


return [
    //Site Options
    'key' => '',                        //The secret key of the site
    'url' => '',                        //The url of the site
    'url_static' => '',                 //The base url from where the static resources will be served


    //Debug Options
    'debug' => false,                   //Set to true to enable debug mode
    'debug_ips' => [],                  //If specified, will enable debug only for the listed IPs. Works only if debug is false


    //Development Options
    'development' => false,              //Set to true to enable development mode
    'development_display_errors' => 1,    //Set to 1 to display errors, 0 to hide them, if development mode is enabled
    'development_display_error_reporting' => E_ALL, //The error level to display, if development mode is enabled
    'development_device' => '',         //Will use this value as device, if specified. Valid values: 'desktop', 'tablet', 'smartphone'


    //Plugins Options
    'plugins_enable' => true,           //Set to false to disable the plugins,
    'plugins' => [],                    //List of plugins to load


    //Themes and Language Options
    'language' => 'english',            //The default language
    'theme' => 'my-theme',              //The default theme


    //Memcache Options
    'memcache_enable' => false,         //If true will enable the memory cache functionality
    'memcache_driver' => 'memcached',   //The driver used for memcache. Supported options: memcache, memcached, redis
    'memcache_host' => '127.0.0.1',     //The memcache host
    'memcache_port' => '11211',         //The memcache host


    //Database Options
    /*
        Multiple DB servers can be used for read & write queries.
        To use multiple servers, db_hostname, db_port, db_username, db_password, db_database and db_persistent must be arrays.
        The first value in the arrays will be the write server; the read server is randomly chosen
    */
    'db_driver' => 'pdo',               //The db driver. Supported drivers: pdo
    'db_hostname' => 'localhost',       //The db hostname
    'db_port' => '3306',                //The db port
    'db_username' => '',                //The db username
    'db_password' => '',                //The db password
    'db_name' => '',                    //The db name
    'db_persistent' => false,           // If true, the db connection will be persistent. Change it only if you know what you're doing
    'db_charset' => 'utf8mb4',          //The db charset
    'db_debug' => false,                //Set to true to enable the db debug data


    //Content Cachng
    'cache_page_enable' => false,       //If true, will enable the content cache functionality
    'cache_page_driver' => 'file',      //The driver used for content caching. Supported options:file, memcache
    'cache_page_expire_hours' => 24,    //The value - in hours - of the Expires header
    'cache_page_minify' => false,       //If true will minify the cached content


    //Mailer Options
    'mail_driver' => 'phpmailer',       //The driver used to send mail. Supported options: phpmailer
    'mail_from' => '',                  //The default email address used as the 'From' address
    'mail_from_name' => '',             //The default name address used as the 'From' name
    'mail_smtp' => false,               //Set to true if the mails are to be sent using smtp
    'mail_smtp_host' => '',             //The smtp host
    'mail_smtp_port'=> '',              //The smtp port
    'mail_smtp_username' => '',         //The smtp username
    'mail_smtp_password' => '',         //The smtp password
    'mail_smtp_secure' => '',           //tls/ssl


    //Performance Options
    'http2_push' => false,


    //Proxy Options
    'trusted_proxies' => [],            //The trusted proxies from which we'll accept the HTTP_X_FORWARDED_FOR header


    //HTTP Accelerators Options
    'accelerator_enable' => false,      //If true, will enable the accelerators functionality
    'accelerator_driver' => 'varnish',  //The accelerator driver. Supported options: varnish


    //Drivers Options - list of additional drivers to register in the format name => class
    'drivers' => [
        'memcache' => [],
        'cachable' => [],
        'accelerators' => [],
        'db' => [],
        'mail' => [],
        'session' => [],
        'device' => [],
        'response' => []
    ]
];
