<?php
    require __DIR__ . '/../vendor/autoload.php';
    require "../helpers.php";

    use Framework\Router;

    // Instantiate the router
    $router = new Router();

    // Get routes
    $routes = require basePath('routes.php');

    // Get current URI and HTTP method
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    //$uri = $_SERVER['REQUEST_URI']; 
    $method = $_SERVER['REQUEST_METHOD'];

    // Route the request
    $router->route($uri, $method);