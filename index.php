<?php
namespace Mars;

require(__DIR__ . '/vendor/autoload.php');

$app = App::get();

try {
    require(__DIR__ . '/app/boot.php');
    require(__DIR__ . '/app/routes.php');

    $app->start();
    $router->execute();
    $app->end();

} catch (\Error | \Exception | Exception $e) {
    $app->log->exception($e);

    $app->fatalError($e->getMessage());
}
