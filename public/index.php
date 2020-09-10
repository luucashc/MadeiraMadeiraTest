<?php

/* Defining url */
define('BASE_PATH', realpath(dirname(__FILE__) . '/../'));

require BASE_PATH . '/vendor/autoload.php';

/* Abbreviating path */
$route = preg_replace('/^([a-z]+).*$/i', '$1', ltrim($_SERVER['REQUEST_URI'], '/'));

/* If the route is empty, use "index" as the default */
if (empty($route)) {
    $route = 'index';
}

/* Assembling the class name with namespace */
$class = 'Controller\\' . ucfirst($route) . 'Controller';

/* If the class does not exist, it gives a 404 error (not found) */
if (!class_exists($class)) {
    echo '404 not found';
    exit;
}

/* Creates a controller class and calls its index */
$controller = new $class;
$controller->index();
