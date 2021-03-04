<?php

use app\core\Router;

// Error display setting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Class autoloader
spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class . '.php');
    
    if (file_exists($path)) {
        require $path;
    }
});

// Session initialization
session_start();

// Router initialization
$router = new Router;
$router->execute();