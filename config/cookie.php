<?php
/*
|--------------------------------------------------------------------------
| Cookie Options
|--------------------------------------------------------------------------
*/

return [
    // int The interval, in days, for which the cookies will be valid
    'cookie.expire_days' => 30,

    // string The path on the server in which the cookie will be available
    'cookie.path' => '/',

    // string The domain that the cookie is available to
    'cookie.domain' => '',

    // bool If true the cookie will only be sent over secure connections
    'cookie.secure' => true,

    // bool If true, the cookie will be accessible only through the HTTP protocol.
    'cookie.httponly' => true,

    // string The SameSite attribute of the cookie. Supported options: Lax, Strict, None
    'cookie.samesite' => '',
];
