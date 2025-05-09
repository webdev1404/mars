<?php
use Mars\Content\Page;
use Mars\Content\Template;

$router = $app->router;

//the routes are defined here
$router->get('/', function() {
    return 'Hello, World!';
});