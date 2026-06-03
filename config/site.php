<?php
/**
 * Site Options
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Site Options
    |--------------------------------------------------------------------------
    */
    // string The url of the site
    'url.base' => '',

    // string CDN url for static resources. If empty, the static resources will be served from the same domain
    'url.cdn' => '',

    // string The name of the site
    'site.name' => '',

    // string The slogan of the site
    'site.slogan' => '',

    // string|array The site emails
    'site.emails' => [],

    // string The default timezone
    'site.timezone' => 'UTC',

    // string The prefix of the <title> tag
    'site.title.prefix' => '',

    // string The suffix of the <title> tag
    'site.title.suffix' => '',

    // string The separator of the title parts
    'site.title.separator' => ' - ',


    /*
    |--------------------------------------------------------------------------
    | Theme Options
    |--------------------------------------------------------------------------
    */
    // string The default theme
    'theme.name' => 'mars',


    /*
    |--------------------------------------------------------------------------
    | Language & Localization Options
    |--------------------------------------------------------------------------
    */
    // string The default language
    'language.name' => 'english',

    // array The language codes mapping. Format: code => name
    'language.codes' => [
        'en' => 'english'
    ],

    // string The localization driver. Supported drivers: cookie, domain, path
    'localization.driver' => 'path',

    // array The enabled localization_urls, in the format code => url. Eg: 'en' => 'https://en.mysite.com' or 'en' => 'https://mysite.en'
    'localization.urls' => [],
];