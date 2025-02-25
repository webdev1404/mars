<?php
//Early Hints Config Options

return [
    'enable' => true, 		//If true, will enable the early hints functionality

	'headers' => [          //The early hints headers
        'preload' => [
            'style' => [    //The styles to be sent as early hints  
            ],
            'script' => [   //The scripts to be sent as early hints
            ],
            'font' => [     //The fonts to be sent as early hints    
            ],
            'image' => [   //The images to be sent as early hints
            ]
        ],               
        'preconnect' => [   //The preconnect urls to be sent with the response
        ]     
    ]      
];