<?php
/*
|--------------------------------------------------------------------------
| Crypt Options
|--------------------------------------------------------------------------
*/

return [
    // string The crypt driver. Supported options: openssl, sodium
    'crypt.driver' => 'openssl',

    // array The secret keys used for encryption. The key in use is the last one in the list. Indexes must be strings. For sodium the key must be 32 chars long
    'crypt.keys' => [],
];
