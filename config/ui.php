<?php
/*
|--------------------------------------------------------------------------
| UI Options
|--------------------------------------------------------------------------

UI options for the application. These options can be used to configure the behavior of the UI components, such as pagination and menus.
*/

return [
    // bool If true, will show the breadcrumb
    'breadcrumbs.show' => true,
    
    // string The home breadcrumb name
    'breadcrumbs.home' => 'Home',

    // int The max number of pagination links to show
    'pagination.max_links' => 10,

    // int The number of items that should be displayed on each page
    'pagination.items_per_page' => 30,
];

