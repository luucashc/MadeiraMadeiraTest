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
