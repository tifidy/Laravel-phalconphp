<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->modelsDir,
        $config->application->facadesDir
    )
)->register();


$loader->registerNamespaces(array(
	'Resources' 	=> $config->application->resourcesDir,
     'Controllers'  => $config->application->controllersDir,
	'Libs'	     => $config->application->libsDir
));
