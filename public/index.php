<?php
namespace Mars;

//the path where the application is located
$base_path = dirname(__DIR__);

require($base_path . '/vendor/autoload.php');

$app = App::obj();

try {
    require($base_path . '/app/boot.php');

    $app->start();
    $app->router->execute();
    $app->end();

} catch (\Error | \Exception | Exception $e) {
    $app->log->exception($e);

    //throw the exception, if in development mode. If not, show a fatal error screen
    if ($app->config->development) {
        throw $e;
    } else {
        $error = $app->config->debug ? $e->getMessage() : App::__('error.fatal.error');

        $app->fatalError($error);
    }
}
