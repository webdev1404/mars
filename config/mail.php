<?php
/*
|--------------------------------------------------------------------------
| Mailer Options
|--------------------------------------------------------------------------
*/

return [
    // string The driver used to send mail. Supported options: phpmailer
    'mail.driver' => 'phpmailer',

    // string The default email address used as the 'From' address
    'mail.from' => '',

    // string The default name address used as the 'From' name
    'mail.from_name' => '',

    // bool Set to true if the mails are to be sent using smtp
    'mail.smtp.enable' => false,

    // string The smtp host
    'mail.smtp.host' => '',

    // string The smtp port
    'mail.smtp.port' => '',

    // string The smtp username
    'mail.smtp.username' => '',

    // string The smtp password
    'mail.smtp.password' => '',

    // string The smtp secure connection. Supported options: tls, ssl
    'mail.smtp.secure' => '',
];
