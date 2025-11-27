<?php
/**
 * Site Options
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Site Options
    |--------------------------------------------------------------------------
    */
    // The url of the site
    'url' => '',

    // CDN url for static resources. If empty, the static resources will be served from the same domain
    'url_cdn' => '',

    // The name of the site
    'site_name' => '',

    // The slogan of the site
    'site_slogan' => '',

    // The site emails
    'site_emails' => [],


    /*
    |--------------------------------------------------------------------------
    | Themes Options
    |--------------------------------------------------------------------------
    */
    // The default theme
    'theme' => 'mars',


    /*
    |--------------------------------------------------------------------------
    | Language & Localization Options
    |--------------------------------------------------------------------------
    */
    // The default language
    'language' => 'english',

    // The fallback language for modules
    'language_fallback' => 'english',

    // The language codes mapping. Format: code => name
    'language_codes' => [
        'en' => 'english'
    ],

    // The localization driver. Supported drivers: cookie, domain, path
    'localization_driver' => 'path',

    // The enabled localization_ urls, in the format code => url. Eg: 'en' => 'https://en.mysite.com' or 'en' => 'https://mysite.en'
    'localization_urls' => [],


    /*
    |--------------------------------------------------------------------------
    | Plugins Options
    |--------------------------------------------------------------------------
    */
    // Set to false to disable the plugins
    'plugins_enable' => true,


    /*
    |--------------------------------------------------------------------------
    | Timezone Options
    |--------------------------------------------------------------------------
    */
    // The default timezone
    'timezone' => 'UTC',


    /*
    |--------------------------------------------------------------------------
    | Debug Options
    |--------------------------------------------------------------------------
    */

    //Set to 1 to display errors, 0 to hide them
    'display_errors' => 0,

    //The error level to display
    'error_reporting' => E_ALL & ~E_NOTICE & ~E_DEPRECATED,

    // Set to true to enable debug mode
    'debug' => false,

    // Set to true to enable the db debug data
    'debug_db' => false,

    // If specified, will enable debug only for the listed IPs. Works only if debug is false
    'debug_ips' => [],


    /*
    |--------------------------------------------------------------------------
    | Development Options
    |--------------------------------------------------------------------------
    */
    // Set to true to enable development mode
    'development' => false,

    // Runs only the specified extensions in development mode, even if the development mode is not enabled
    'development_extensions' => [
        // Set to true to run the languages extension in development mode
        'languages' => false,
        // Set to true to run the themes extension in development mode
        'themes' => false,
        // Set to true to run the plugins extension in development mode
        'plugins' => false,
        // Set to true to run the modules extension in development mode
        'modules' => false,
    ],

    // Set to 1 to display errors, 0 to hide them, if development mode is enabled
    'development_display_errors' => 1,

    // The error level to display, if development mode is enabled
    'development_display_error_reporting' => E_ALL,

    // Will use this value as device, if specified. Valid values: 'desktop', 'tablet', 'smartphone'
    'development_device' => '',

    // If true, will reload the routes on each request
    'development_routes' => false,


    /*
    |--------------------------------------------------------------------------
    | Security Options
    |--------------------------------------------------------------------------
    */
    // If the value is true the installation dir is used as the basedir. If array, will use the specified paths. If string, will use the specified path. If false, no limitation is applied
    'open_basedir' => true,

    // The trusted proxies from which we'll accept the HTTP_X_FORWARDED_FOR header
    'trusted_proxies' => [],


    /*
    |--------------------------------------------------------------------------
    | Database Options
    |--------------------------------------------------------------------------
    |
    | Multiple DB servers can be used for read & write queries.
    | To use multiple servers, db_hostname, db_port, db_username, db_password, db_name and db_persistent must be arrays.
    | The first value in the arrays will be the write server; the read server is randomly chosen
    |
    */
    // The db driver. Supported drivers: mysql
    'db_driver' => 'mysql',

    // The db hostname
    'db_hostname' => 'localhost',

    // The db port
    'db_port' => '3306',

    // The db username
    'db_username' => '',

    // The db password
    'db_password' => '',

    // The db name
    'db_name' => '',

    // If true, the db connection will be persistent. Change it only if you know what you're doing
    'db_persistent' => false,

    // The db charset
    'db_charset' => 'utf8mb4',


    /*
    |--------------------------------------------------------------------------
    | Memcache Options
    |--------------------------------------------------------------------------
    */
    // If true will enable the memory cache functionality
    'memcache_enable' => false,

    // The key used for memcache. Must be specific to the project
    'memcache_key' => '',

    // The driver used for memcache. Supported options: memcache, memcached, redis
    'memcache_driver' => 'memcached',

    // The memcache host
    'memcache_host' => '127.0.0.1',

    // The memcache host port
    'memcache_port' => '11211',

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    */
    // The driver used for caching. Supported options: file, php, memcache. If memcache is used, memcache_enable must be true
    'cache_driver' => 'php',


    /*
    |--------------------------------------------------------------------------
    | Page Caching
    |--------------------------------------------------------------------------
    */
    // If true, will enable the page cache functionality
    'cache_page_enable' => false,

    // The driver used for page caching. Supported options: file, memcache
    'cache_page_driver' => 'file',

    // The value - in hours - of the Expires header
    'cache_page_expire_hours' => 24,

    // If true will minify the cached content
    'cache_page_minify' => false,


    /*
    |--------------------------------------------------------------------------
    | Mailer Options
    |--------------------------------------------------------------------------
    */
    // The driver used to send mail. Supported options: phpmailer
    'mail_driver' => 'phpmailer',

    // The default email address used as the 'From' address
    'mail_from' => '',

    // The default name address used as the 'From' name
    'mail_from_name' => '',

    // Set to true if the mails are to be sent using smtp
    'mail_smtp' => false,

    // The smtp host
    'mail_smtp_host' => '',

    // The smtp port
    'mail_smtp_port'=> '',

    // The smtp username
    'mail_smtp_username' => '',

    // The smtp password
    'mail_smtp_password' => '',

    // tls/ssl
    'mail_smtp_secure' => '',


    /*
    |--------------------------------------------------------------------------
    | Custom Headers
    |--------------------------------------------------------------------------
    */
    // Custom headers to be sent with the response
    'headers' => [
        'X-Content-Type-Options' => 'nosniff',
        'X-Frame-Options' => 'SAMEORIGIN',
        'Referrer-Policy' => 'no-referrer-when-downgrade',
        //'Strict-Transport-Security' => 'max-age=31536000; includeSubDomains; preload',
    ],


    /*
    |--------------------------------------------------------------------------
    | Content Security Policy Options
    |--------------------------------------------------------------------------
    */
    // If true, will enable the Content Security Policy header
    'csp_enable' => false,

    // If true, will use a nonce for the Content Security Policy header
    'csp_use_nonce' => false,

    // The Content Security Policy header. If specified, will override the default values
    'csp_list' => [
        'default-src' => "",
        'script-src' => "",
        'style-src' => "",
        'font-src' => "",
        'img-src' => "",
    ],


    /*
    |--------------------------------------------------------------------------
    | Early Hints Options
    |--------------------------------------------------------------------------
    */
    // If true, will enable the early hints functionality
    'early_hints_enable' => false,

    // The early hints headers
    'early_hints_list' => [
        'preload' => [
            // The styles to be sent as early hints
            'style' => [],
            // The scripts to be sent as early hints
            'script' => [],
            // The fonts to be sent as early hints
            'font' => [],
            // The images to be sent as early hints
            'image' => []
        ],
        // The preconnect urls to be sent with the response
        'preconnect' => []
    ],


    /*
    |--------------------------------------------------------------------------
    | Preload & Preconnect Options
    |--------------------------------------------------------------------------
    */
    'preload' => [
        // The css urls to preload
        'css' => [],
        // The javascript urls to preload
        'javascript' => [],
        // The fonts urls to preload
        'fonts' => [],
        // The images urls to preload
        'images' => []
    ],

    // The urls to preconnect
    'preconnect' => [],


    /*
    |--------------------------------------------------------------------------
    | Cookies Options
    |--------------------------------------------------------------------------
    */
    // The interval, in days, for which the cookies will be valid
    'cookie_expire_days' => 30,

    // The path on the server in which the cookie will be available
    'cookie_path' => '/',

    // The domain that the cookie is available to
    'cookie_domain' => '',

    // If true the cookie will only be sent over secure connections
    'cookie_secure' => false,

    // If true, the cookie will be accessible only through the HTTP protocol.
    'cookie_httponly' => true,


    /*
    |--------------------------------------------------------------------------
    | Session Options
    |--------------------------------------------------------------------------
    */
    // The session driver. Supported options: php, memcache, db
    'session_driver' => 'php',

    // The session table, if the session driver is db. It must be created
    'session_table' => 'sessions',

    // Prefix to apply to all session keys, if any
    'session_prefix' => '',

    // The path where the sessions will be saved
    'session_save_path' => '',

    // The session name
    'session_name' => '',

    // The path of the session cookie
    'session_cookie_path' => null,

    // The domain of the session cookie
    'session_cookie_domain' => null,

    // If true the session cookie will only be sent over secure connections.
    'session_cookie_secure' => null,

    // If true, the session cookie will be accessible only through the HTTP protocol
    'session_cookie_httponly' => true,

    // The SameSite attribute of the session cookie. Supported options: Lax, Strict, None
    'session_cookie_samesite' => null,


    /*
    |--------------------------------------------------------------------------
    | Crypt Options
    |--------------------------------------------------------------------------
    */
    // The crypt driver. Supported options: openssl, sodium
    'crypt_driver' => 'sodium',

    // The secret keys used for encryption. The key in use is the last one in the list. Indexes must be strings. For sodium the key must be 32 chars long
    'crypt_keys' => [],


    /*
    |--------------------------------------------------------------------------
    | Serializer Options
    |--------------------------------------------------------------------------
    */
    // The serializer driver. Supported options: php, json, igbinary
    'serializer_driver' => 'php',


    /*
    |--------------------------------------------------------------------------
    | Captcha Options
    |--------------------------------------------------------------------------
    */
    // If true, will enable the captcha functionality
    'captcha_enable' => false,

    // The captcha driver. Supported options: recaptcha2, recaptcha3
    'captcha_driver' => 'recaptcha3',

    // The recaptcha site key
    'captcha_recaptcha_site_key' => '',

    // The recaptcha secret key
    'captcha_recaptcha_secret_key' => '',

    // The minimum score required to consider the captcha valid (recaptcha3 only)
    'captcha_recaptcha_min_score' => 0.5,


    /*
    |--------------------------------------------------------------------------
    | HTTP Accelerators Options
    |--------------------------------------------------------------------------
    */
    // If true, will enable the accelerators functionality
    'accelerator_enable' => false,

    // The accelerator driver. Supported options: varnish
    'accelerator_driver' => 'varnish',


    /*
    |--------------------------------------------------------------------------
    | Drivers Options
    |--------------------------------------------------------------------------
    | List of additional drivers to register in the format name => class
    */

    'drivers' => [
        'drivers' => [],
        'accelerators' => [],
        'cachable' => [],
        'captcha' => [],
        'crypt' => [],
        'db' => [],
        'device' => [],
        'images' => [],
        'localization' => [],
        'mail' => [],
        'memcache' => [],
        'response' => [],
        'serializer' => [],
        'session' => [],
        'templates' => []
    ],
];