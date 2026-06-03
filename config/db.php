<?php
/*
|--------------------------------------------------------------------------
| Database Options
|--------------------------------------------------------------------------
|
| Multiple DB servers can be used for read & write queries.
| To use multiple servers, db.hostname, db.port, db.username, db.password and db.name must be arrays.
| The first value in the arrays will be the write server; the read server is randomly chosen
*/

return [
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
];
