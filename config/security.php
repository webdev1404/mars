<?php
/*
|--------------------------------------------------------------------------
| Security Options
|--------------------------------------------------------------------------
*/

return [
    // If the value is true the installation dir is used as the basedir. If array, will use the specified paths. If string, will use the specified path. If false, no limitation is applied
    'security.open_basedir' => true,

    // The trusted proxies from which we'll accept the HTTP_X_FORWARDED_FOR header
    'security.trusted_proxies' => [],
];

