<?php

error_reporting(E_ALL);

define('APP_PATH', realpath('.'));

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
     * Path to vendor directory
     */
    include $config->application->vendor."autoload.php";
    
    /*
    *  Read the routes
    */

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    Facade::setFacadeApplication($application);
    include APP_PATH . "/app/routes.php";

    
    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage();
}
