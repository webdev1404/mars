<?php

return [
    //Site Options
    'key' => '',                        //The secret key of the site
    'url' => '',                        //The url of the site
    'url_static' => '',                 //The base url from where the static resources will be served


    //Debug Options
    'debug' => false,                   //Set to true to enable debug mode    
    'debug_db' => false,                //Set to true to enable the db debug data
    'debug_plugins' => false,           //Set to true to enable the plugins debug data
    'debug_ips' => [],                  //If specified, will enable debug only for the listed IPs. Works only if debug is false


    //Development Options
    'development' => false,              //Set to true to enable development mode
    'development_display_errors' => 1,    //Set to 1 to display errors, 0 to hide them, if development mode is enabled
    'development_display_error_reporting' => E_ALL, //The error level to display, if development mode is enabled
    'development_device' => '',         //Will use this value as device, if specified. Valid values: 'desktop', 'tablet', 'smartphone'


    //Themes and Language Options
    'language' => 'english',            //The default language
    'theme' => 'my-theme',              //The default theme
];