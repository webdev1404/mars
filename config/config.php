<?php

return [
    //Site Options
    'key' => '',                        //The secret key of the site
    'url' => '',                        //The url of the site
    'url_static' => '',                 //The base url from where the static resources will be served


    //Themes and Language Options
    'language' => 'english',            //The default language
    'theme' => 'my-theme',              //The default theme


    //Timezone Options
    'timezone' => 'UTC',                //The default timezone


    //Debug Options
    'debug' => false,                   //Set to true to enable debug mode    
    'debug_db' => false,                //Set to true to enable the db debug data
    'debug_plugins' => false,           //Set to true to enable the plugins debug data
    'debug_ips' => [],                  //If specified, will enable debug only for the listed IPs. Works only if debug is false


    //Development Options
    'development' => false,              //Set to true to enable development mode
    'development_display_errors' => 1,    //Set to 1 to display errors, 0 to hide them, if development mode is enabled
    'development_display_error_reporting' => E_ALL, //The error level to display, if development mode is enabled
    'development_device' => '',         //Will use this value as device, if specified. Valid values: 'desktop', 'tablet', 'smartphone'


    //Plugins Options
    'plugins_enable' => true,           //Set to false to disable the plugins,


    //Security Options
    'open_basedir' => true,             //If true, will set the open_basedir to the base path. If false, will disable it. If string, will set it to the specified value
    'trusted_proxies' => [],            //The trusted proxies from which we'll accept the HTTP_X_FORWARDED_FOR header


    //Database Options
    /*
        Multiple DB servers can be used for read & write queries.
        To use multiple servers, db_hostname, db_port, db_username, db_password, db_name and db_persistent must be arrays.
        The first value in the arrays will be the write server; the read server is randomly chosen
    */
    'db_driver' => 'mysql',             //The db driver. Supported drivers: mysql
    'db_hostname' => 'localhost',       //The db hostname
    'db_port' => '3306',                //The db port
    'db_username' => '',                //The db username
    'db_password' => '',                //The db password
    'db_name' => '',                    //The db name
    'db_persistent' => false,           // If true, the db connection will be persistent. Change it only if you know what you're doing
    'db_charset' => 'utf8mb4',          //The db charset

    
    //Memcache Options
    'memcache_enable' => false,         //If true will enable the memory cache functionality
    'memcache_driver' => 'memcached',   //The driver used for memcache. Supported options: memcache, memcached, redis
    'memcache_host' => '127.0.0.1',     //The memcache host
    'memcache_port' => '11211',         //The memcache host port


    //Caching
    'cache_driver' => 'file',           //The driver used for caching. Supported options: file, memcache

    //Page Caching
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


    //Custom Headers
    'headers' => [                      //Custom headers to be sent with the response
        'X-Content-Type-Options' => 'nosniff',
        'X-Frame-Options' => 'SAMEORIGIN',
        'Referrer-Policy' => 'no-referrer-when-downgrade',
        //'Strict-Transport-Security' => 'max-age=31536000; includeSubDomains; preload',
    ],


    //Content Security Policy Options
    'csp_enable' => false,              //If true, will enable the Content Security Policy header
    'csp_use_nonce' => false,           //If true, will use a nonce for the Content Security Policy header
    'csp_list' => [                     //The Content Security Policy header. If specified, will override the default values
        'default-src' => "",
        'script-src' => "",
        'style-src' => "",
        'font-src' => "",
        'img-src' => "",
    ],
    

    //Early Hints Options
    'early_hints_enable' => false,      //If true, will enable the early hints functionality
    'early_hints_list' => [             //The early hints headers
        'preload' => [
            'style' => [                //The styles to be sent as early hints  
            ],
            'script' => [               //The scripts to be sent as early hints
            ],
            'font' => [                 //The fonts to be sent as early hints    
            ],
            'image' => [                //The images to be sent as early hints
            ]
        ],               
        'preconnect' => [               //The preconnect urls to be sent with the response
        ]              
    ],


    //Preload & Preconnect Options
    'preload' => [
        'css' => [],                    //The css urls to preload
        'javascript' => [],             //The javascript urls to preload
        'fonts' => [],                  //The fonts urls to preload
        'images' => []                  //The images urls to preload
    ],                    
    'preconnect' => [],                 //The urls to preconnect


    //Cookies Options
    'cookie_expire_days' => 30,         //The interval, in days, for which the cookies will be valid
    'cookie_path' => '/',               //The path on the server in which the cookie will be available
    'cookie_domain' => '',              //The domain that the cookie is available to
    'cookie_secure' => false,           //If true the cookie will only be sent over secure connections
    'cookie_httponly' => true,          //If true, the cookie will be accessible only through the HTTP protocol.
    

    //Session Options
    'session_driver' => 'php',          //The session driver. Supported options: php, memcache, db
    'session_table' => 'sessions',      //The session table, if the session driver is db. It must be created
    'session_prefix' => '',             //Prefix to apply to all session keys, if any
    'session_save_path' => '',          //The path where the sessions will be saved
    'session_name' => '',               //The session name
    'session_cookie_path' => null,      //The path of the session cookie
    'session_cookie_domain' => null,    //The domain of the session cookie
    'session_cookie_secure' => null,    //If true the session cookie will only be sent over secure connections.
    'session_cookie_httponly' => true,  //If true, the session cookie will be accessible only through the HTTP protocol
    'session_cookie_samesite' => null,  //The SameSite attribute of the session cookie. Supported options: Lax, Strict, None


    //HTTP Accelerators Options
    'accelerator_enable' => false,      //If true, will enable the accelerators functionality
    'accelerator_driver' => 'varnish',  //The accelerator driver. Supported options: varnish


    //Drivers Options - list of additional drivers to register in the format name => class
    'drivers' => [
        'drivers' => [],
        'accelerators' => [],
        'cachable' => [],
        'captcha' => [],
        'db' => [],
        'device' => [],
        'images' => [],
        'mail' => [],
        'memcache' => [],
        'response' => [],
        'serializer' => [],
        'session' => [],
        'templates' => []
    ]
];