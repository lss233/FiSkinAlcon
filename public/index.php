<?php
if(!isset($_COOKIE['Fi_Auth'])){
  setcookie('Fi_Auth','NULL');
}else{
$auth =  $_COOKIE['Fi_Auth'];
if (!$auth) {
    $AlreadyLogin=true;
} else {
    $AlreadyLogin=false;
}
}
error_reporting(0);
error_reporting(ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);

define('APP_PATH', realpath('..'));

try {

    /**
     * Read the configuration
     */
    $config = include APP_PATH . "/app/config/config.php";

    /**
     * Read auto-loader
     */
    include APP_PATH . "/app/config/loader.php";

    /**
     * Read services
     */
    include APP_PATH . "/app/config/services.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
$di->set('dispatcher', function() use ($di) {
    $dispatcher = new Phalcon\Mvc\Dispatcher();
    return $dispatcher;
});
