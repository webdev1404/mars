<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Errors Options
    |--------------------------------------------------------------------------
    */
    // bool Set to true to display errors, false to hide them
    'errors.display' => false,

    // int The error level to display
    'errors.reporting' => E_ALL & ~E_NOTICE & ~E_DEPRECATED,
    

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
        // Set to true to run the languages in development mode. If array, will run only the specified languages in development mode
        'languages' => false,
        // Set to true to run the themes in development mode. If array, will run only the specified themes in development mode
        'themes' => false,
        // Set to true to run the plugins in development mode. If array, will run only the specified plugins in development mode
        'plugins' => false,
        // Set to true to run the modules in development mode. If array, will run only the specified modules in development mode
        'modules' => false
    ],

    // string Will use this value as device, if specified. Valid values: 'desktop', 'tablet', 'smartphone'
    'development.device' => '',

    // bool If true, will reload the routes on each request
    'development.routes' => false,

    // If true, will always regenerate the version param for the assets urls, thus preventing caching
    'development.assets.css' => false,

        // If true, will always regenerate the version param for the assets urls, thus preventing caching
    'development.assets.js' => false,

    // bool Set to true to display errors, false to hide them, if development mode is enabled
    'development.errors.display' => true,

    // int The error level to display, if development mode is enabled
    'development.errors.reporting' => E_ALL,
];