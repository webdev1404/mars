<?php

return [
    // Default change frequency for sitemap entries
    'sitemap.change_frequency' => 'weekly',

    // Default priority for sitemap entries
    'sitemap.priority' => 0.5,

    // The types of routes we'll include in the sitemap and the data for each
    'sitemap.routes.types' => [
        'page' => ['change_frequency' => 'weekly', 'priority' => 0.5],
        'module' => ['change_frequency' => 'weekly', 'priority' => 0.5],
        'template' => ['change_frequency' => 'weekly', 'priority' => 0.5],
        'callable' => ['change_frequency' => 'weekly', 'priority' => 0.5]
    ]
];
