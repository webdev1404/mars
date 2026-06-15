<?php
/*
|--------------------------------------------------------------------------
| Compression Options
|--------------------------------------------------------------------------
*/

return [
    // string The compression driver. Supported options: gzip, brotli, zstd
    'compression.driver' => 'gzip',

    // int The compression level. If null, the default level of the driver will be used
    // Supported options for gzip: -1 (default), 0 (no compression), 1 (fastest), 9 (slowest).
    // See the documentation of the specific driver for more details on the supported levels
    'compression.level' => null,
];
