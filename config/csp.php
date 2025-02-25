<?php
//Content Security Policy Config Options

return [
    'enable' => true, 		    //If true, will enable the Content Security Policy header
	'use_nonce' => true, 	    //If true, will use a nonce for the Content Security Policy header,
    
    'list' => [                 //The Content Security Policy header. If specified, will override the default values
        'default-src' => '',
        'script-src' => '',
        'style-src' => '',
        'font-src' => '',
        'img-src' => '',
    ],

    'defaults' => [             //The default values for the Content Security Policy header
        'default-src' => "'self'",
		'script-src' => "'self' 'unsafe-inline'",
        'style-src' => "'self' 'unsafe-inline'",
        'object-src' => "'none'"
    ]
];