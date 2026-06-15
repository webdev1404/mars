<?php
/*
|--------------------------------------------------------------------------
| Captcha Options
|--------------------------------------------------------------------------
*/

return [
    // bool If true, will enable the captcha functionality
    'captcha.enable' => false,

    // string The captcha driver. Supported options: recaptcha2, recaptcha3
    'captcha.driver' => 'recaptcha3',

    // string The recaptcha site key
    'captcha.recaptcha.site_key' => '',

    // string The recaptcha secret key
    'captcha.recaptcha.secret_key' => '',

    // float The minimum score required to consider the captcha valid (recaptcha3 only)
    'captcha.recaptcha.min_score' => 0.5,
];
