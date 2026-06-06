<?php
/*
|--------------------------------------------------------------------------
| Headers Options
|--------------------------------------------------------------------------
*/

return [
    // array Additional headers to send with each HTTP response
    'headers.list' => [
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
    // bool If true, will enable the Content Security Policy header
    'headers.csp.enable' => false,
    
    // bool If true, will use a nonce for the Content Security Policy header
    'headers.csp.use_nonce' => true,

    // bool If true, will allow the 'unsafe-inline' value for the script-src and style-src directives
    'headers.csp.unsafe_inline' => false,

    // array The Content Security Policy header. If specified, will be added to the list of directives
    'headers.csp.list' => [
        //'default-src' => "",
        //'script-src' => "",
        //'style-src' => "",
        //'font-src' => "",
        //'img-src' => "",
    ],

    /*
    |--------------------------------------------------------------------------
    | 103 Early Hints Options
    |--------------------------------------------------------------------------
    */
    // bool If true, will enable the Early Hints functionality
    'headers.early_hints.enable' => false,

    // array The Early Hints headers
    'headers.early_hints.list' => [
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
];
