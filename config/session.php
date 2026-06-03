<?php
/*
|--------------------------------------------------------------------------
| Session Options
|--------------------------------------------------------------------------
*/

return [
    // string The session driver. Supported options: php, memcache, db
    'session.driver' => 'php',

    // string The session table, if the session driver is db. It must be created. See: vendor/webdev1404/mars-framework/sql/session/db.sql
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
    'session.cookie.path' => '/',

    // string|null The domain of the session cookie
    'session.cookie.domain' => null,

    // bool|null If true the session cookie will only be sent over secure connections.
    'session.cookie.secure' => true,

    // bool|null If true, the session cookie will be accessible only through the HTTP protocol
    'session.cookie.httponly' => true,

    // string|null The SameSite attribute of the session cookie. Supported options: Lax, Strict, None
    'session.cookie.samesite' => null,
];
