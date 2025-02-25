<?php
//Headers Config Options

return [
    'headers' => [                      //Custom headers to be sent with the response
        'X-Content-Type-Options' => 'nosniff',
        'X-Frame-Options' => 'SAMEORIGIN',
        'Referrer-Policy' => 'no-referrer-when-downgrade',
        //'Strict-Transport-Security' => 'max-age=31536000; includeSubDomains; preload',
    ],
];
