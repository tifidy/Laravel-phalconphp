<?php
/**
 * Services are globally registered in this file
 *
 * @var \Phalcon\Config $config
 */

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Session\Adapter\Files as SessionAdapter;
//dispatcher
use Phalcon\Mvc\Dispatcher as MvcDispatcher;
use Phalcon\Events\Manager as EventsManager;
//flash message



use Windwalker\Renderer\BladeRenderer as BladeRenderer;


try {
/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

$di->set('router', function(){
    $router = new Phalcon\Mvc\Router(false);
    return $router;
}, true);
/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->set('url', function () use ($config) {
    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
}, true);

/**
 * Setting up the view component
 */
$di->setShared('view', function () use ($config) {
    $view = new View();
    $view->setViewsDir($config->application->viewsDir);
/*    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($config) {
            $volt = new VoltEngine($view, $di);
            $volt->setOptions(array(
                'compiledPath' => $config->application->cacheDir,
                'compiledSeparator' => '_'
            ));
            return $volt;
        },
        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
    ));*/
    return $view;
});

$di->set('viewb', function() use($config) {
    

    $paths = array($config->application->viewsDir);

    $renderer = new \Libs\Blade($paths, array('cache_path' => $config->application->cacheDir));

    return $renderer;
});


/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->set('db', function () use ($config) {
    return new DbAdapter($config->database->toArray());
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->set('modelsMetadata', function () {
    return new MetaDataAdapter();
});

/**
 * Start the session the first time some component request the session service
 */
$di->setShared('session', function () {
    $session = new SessionAdapter();
    $session->start();

    return $session;
});

$di->set('flash', function() {
    return new Phalcon\Flash\Session();
});



$di->set('response', function(){
    $response = new \Libs\Response();
    return $response;
});

$di->set('config', function() use ($config) {
    return $config;
});

$di->setShared('assets', function () {
    return new Phalcon\Assets\Manager();
});

$di->set('dispatcher', function () {

    // Create an EventsManager
    $eventsManager = new EventsManager();

    /* 
    * Event below is only responsible for checking to see if user is logged in to the system.
    */
    $eventsManager->attach('dispatch:beforeDispatch', new \Libs\RouteFilter());
    /* 
    * Event below is only responsible for checking to see if user has valid permission to acces the route.
    */
    $eventsManager->attach("dispatch:beforeExecuteRoute", new \Libs\RouteFilter());



    $dispatcher = new MvcDispatcher();

    // Bind the EventsManager to the dispatcher
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;

}, true);


$di->setShared('auth', function()
{
    $auth = new \Libs\Auth();
    return $auth;
});

$di->setShared('request', function()
{
    $input = new \Libs\Request();
    return $input;
});

} catch (\Exception $e) {
     echo "Exception: ", $e->getMessage();
}