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
    // string The url of the site
    'url.base' => '',

    // string CDN url for static resources. If empty, the static resources will be served from the same domain
    'url.cdn' => '',

    // string The name of the site
    'site.name' => '',

    // string The slogan of the site
    'site.slogan' => '',

    // string|array The site emails
    'site.emails' => [],

    // string The default timezone
    'site.timezone' => 'UTC',


    /*
    |--------------------------------------------------------------------------
    | Errors Options
    |--------------------------------------------------------------------------
    */
    //bool Set to true to display errors, false to hide them
    'errors.display' => false,

    //int The error level to display
    'errors.reporting' => E_ALL & ~E_NOTICE & ~E_DEPRECATED,


    /*
    |--------------------------------------------------------------------------
    | Themes Options
    |--------------------------------------------------------------------------
    */
    // string The default theme
    'theme.name' => 'mars',


    /*
    |--------------------------------------------------------------------------
    | Language & Localization Options
    |--------------------------------------------------------------------------
    */
    // string The default language
    'language.name' => 'english',

    // string The fallback language for modules
    'language.fallback' => 'english',

    // array The language codes mapping. Format: code => name
    'language.codes' => [
        'en' => 'english'
    ],

    // string The localization driver. Supported drivers: cookie, domain, path
    'localization.driver' => 'path',

    // array The enabled localization_ urls, in the format code => url. Eg: 'en' => 'https://en.mysite.com' or 'en' => 'https://mysite.en'
    'localization.urls' => [],


    /*
    |--------------------------------------------------------------------------
    | Plugins Options
    |--------------------------------------------------------------------------
    */
    // bool Set to false to disable the plugins
    'plugins.enable' => true,


    /*
    |--------------------------------------------------------------------------
    | Debug Options
    |--------------------------------------------------------------------------
    */
    // bool Set to true to enable debug mode
    'debug.enable' => false,

    // bool Set to true to enable the db debug data
    'debug.db' => false,

    // string|array If specified, will enable debug only for the listed IPs. Works only if debug is false
    'debug.ips' => [],


    /*
    |--------------------------------------------------------------------------
    | Development Options
    |--------------------------------------------------------------------------
    */
    // bool Set to true to enable development mode
    'development.enable' => false,

    // array Runs only the specified extensions in development mode, even if the development mode is not enabled
    'development.extensions' => [
        // Set to true to run the languages extension in development mode
        'languages' => false,
        // Set to true to run the themes extension in development mode
        'themes' => false,
        // Set to true to run the plugins extension in development mode
        'plugins' => false,
        // Set to true to run the modules extension in development mode
        'modules' => false,
    ],

    // string Will use this value as device, if specified. Valid values: 'desktop', 'tablet', 'smartphone'
    'development.device' => '',

    // bool If true, will reload the routes on each request
    'development.routes' => false,

    // bool Set to true to display errors, false to hide them, if development mode is enabled
    'development.errors.display' => true,

    // int The error level to display, if development mode is enabled
    'development.errors.reporting' => E_ALL,


    /*
    |--------------------------------------------------------------------------
    | Database Options
    |--------------------------------------------------------------------------
    |
    | Multiple DB servers can be used for read & write queries.
    | To use multiple servers, db.hostname, db.port, db.username, db.password and db.name must be arrays.
    | The first value in the arrays will be the write server; the read server is randomly chosen
    */
    // string The db driver. Supported drivers: mysql
    'db.driver' => 'mysql',

    // string|array The db hostname
    'db.hostname' => 'localhost',

    // string|array The db port
    'db.port' => '3306',

    // string|array The db username
    'db.username' => '',

    // string|array The db password
    'db.password' => '',

    // string|array The db name
    'db.name' => '',


    /*
    |--------------------------------------------------------------------------
    | Memcache Options
    |--------------------------------------------------------------------------
    */
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


    /*
    |--------------------------------------------------------------------------
    | Caching & Page Caching Options
    |--------------------------------------------------------------------------
    */
    // string The driver used for caching. Supported options: file, php, memcache. If memcache is used, memcache.enable must be true
    'cache.driver' => 'php',

    // bool If true, will enable the page cache functionality
    'cache.page.enable' => false,

    // string The driver used for page caching. Supported options: file, memcache
    'cache.page.driver' => 'file',

    // int The value - in hours - of the Expires header
    'cache.page.expire_hours' => 24,

    // bool If true will minify the cached content
    'cache.page.minify' => false,


    /*
    |--------------------------------------------------------------------------
    | Mailer Options
    |--------------------------------------------------------------------------
    */
    // string The driver used to send mail. Supported options: phpmailer
    'mail.driver' => 'phpmailer',

    // string The default email address used as the 'From' address
    'mail.from' => '',

    // string The default name address used as the 'From' name
    'mail.from_name' => '',

    // bool Set to true if the mails are to be sent using smtp
    'mail.smtp.enable' => false,

    // string The smtp host
    'mail.smtp.host' => '',

    // string The smtp port
    'mail.smtp.port'=> '',

    // string The smtp username
    'mail.smtp.username' => '',

    // string The smtp password
    'mail.smtp.password' => '',

    // string The smtp secure connection. Supported options: tls, ssl
    'mail.smtp.secure' => '',


    /*
    |--------------------------------------------------------------------------
    | Security Options
    |--------------------------------------------------------------------------
    */
    // bool If the value is true the installation dir is used as the basedir. If array, will use the specified paths. If string, will use the specified path. If false, no limitation is applied
    'security.open_basedir' => true,

    // bool The trusted proxies from which we'll accept the HTTP_X_FORWARDED_FOR header
    'security.trusted_proxies' => [],


    /*
    |--------------------------------------------------------------------------
    | HTTP Response Options
    |--------------------------------------------------------------------------
    */
    // array Additional headers to send with each HTTP response
    'http.response.headers.list' => [
        'X-Content-Type-Options' => 'nosniff',
        'X-Frame-Options' => 'SAMEORIGIN',
        'Referrer-Policy' => 'no-referrer-when-downgrade',
        //'Strict-Transport-Security' => 'max-age=31536000; includeSubDomains; preload',
    ],

    // bool If true, will enable the Content Security Policy header
    'http.response.headers.csp.enable' => false,
    
    // bool If true, will use a nonce for the Content Security Policy header
    'http.response.headers.csp.use_nonce' => false,

    // array The Content Security Policy header. If specified, will override the default values
    'http.response.headers.csp.list' => [
        'default-src' => "",
        'script-src' => "",
        'style-src' => "",
        'font-src' => "",
        'img-src' => "",
    ],


    /*
    |--------------------------------------------------------------------------
    | Hint Options
    |--------------------------------------------------------------------------
    */
    // array The urls to preload
    'hints.preload' => [
        // The css urls to preload
        'css' => [],
        // The javascript urls to preload
        'javascript' => [],
        // The fonts urls to preload
        'fonts' => [],
        // The images urls to preload
        'images' => []
    ],

    // array The urls to preconnect
    'hints.preconnect' => [],

    // bool If true, will enable the Early Hints functionality
    'hints.early_hints.enable' => false,

    // array The Early Hints headers
    'hints.early_hints.list' => [
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
    | Cookies Options
    |--------------------------------------------------------------------------
    */
    // int The interval, in days, for which the cookies will be valid
    'cookie.expire_days' => 30,

    // string The path on the server in which the cookie will be available
    'cookie.path' => '/',

    // string The domain that the cookie is available to
    'cookie.domain' => '',

    // bool If true the cookie will only be sent over secure connections
    'cookie.secure' => false,

    // bool If true, the cookie will be accessible only through the HTTP protocol.
    'cookie.httponly' => true,

    // string The SameSite attribute of the cookie. Supported options: Lax, Strict, None
    'cookie.samesite' => '',


    /*
    |--------------------------------------------------------------------------
    | Session Options
    |--------------------------------------------------------------------------
    */
    // string The session driver. Supported options: php, memcache, db
    'session.driver' => 'php',

    // string The session table, if the session driver is db. It must be created
    'session.table' => 'sessions',

    // string Prefix to apply to all session keys, if any
    'session.prefix' => '',

    // string The path where the sessions will be saved
    'session.save_path' => '',

    // string The session name
    'session.name' => '',

    // int|null The lifetime of the session cookie, in seconds. If null, the session cookie will expire when the browser is closed
    'session.cookie.lifetime' => null,

    // string|null The path of the session cookie
    'session.cookie.path' => null,

    // string|null The domain of the session cookie
    'session.cookie.domain' => null,

    // bool|null If true the session cookie will only be sent over secure connections.
    'session.cookie.secure' => null,

    // bool|null If true, the session cookie will be accessible only through the HTTP protocol
    'session.cookie.httponly' => true,

    // string|null The SameSite attribute of the session cookie. Supported options: Lax, Strict, None
    'session.cookie.samesite' => null,


    /*
    |--------------------------------------------------------------------------
    | Crypt Options
    |--------------------------------------------------------------------------
    */
    // string The crypt driver. Supported options: openssl, sodium
    'crypt.driver' => 'sodium',

    // array The secret keys used for encryption. The key in use is the last one in the list. Indexes must be strings. For sodium the key must be 32 chars long
    'crypt.keys' => [],


    /*
    |--------------------------------------------------------------------------
    | Serializer Options
    |--------------------------------------------------------------------------
    */
    // string The serializer driver. Supported options: php, json, igbinary
    'serializer.driver' => 'php',


    /*
    |--------------------------------------------------------------------------
    | Captcha Options
    |--------------------------------------------------------------------------
    */
    // bool If true, will enable the captcha functionality
    'captcha.enable' => false,

    // string The captcha driver. Supported options: recaptcha2, recaptcha3
    'captcha.driver' => 'recaptcha3',

    // string The recaptcha site key
    'captcha.recaptcha.site_key' => '',

    // string The recaptcha secret key
    'captcha.recaptcha.secret_key' => '',

    // float The minimum score required to consider the captcha valid (recaptcha3 only)
    'captcha.recaptcha.min_score' => 0.5,


    /*
    |--------------------------------------------------------------------------
    | HTTP Accelerators Options
    |--------------------------------------------------------------------------
    */
    // bool If true, will enable the accelerators functionality
    'accelerator.enable' => false,

    // string The accelerator driver. Supported options: varnish
    'accelerator.driver' => 'varnish',


    /*
    |--------------------------------------------------------------------------
    | Drivers Options
    |--------------------------------------------------------------------------
    | List of additional drivers to register in the format name => class
    */
    'drivers' => [
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