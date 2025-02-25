<?php
//Mail Config Options

return [
    'driver' => 'phpmailer', 				//The driver used to send mail. Supported options: phpmailer
	'from' => '', 							//The default email address used as the 'From' address
	'from_name' => '',						//The default name address used as the 'From' name
	'smtp' => false, 						//Set to true if the mails are to be sent using smtp
	'smtp_host' => '', 						//The smtp host
	'smtp_port'=> '', 						//The smtp port
	'smtp_username' => '', 					//The smtp username
	'smtp_password' => '', 					//The smtp password
	'smtp_secure' => '', 					//tls/ssl
];