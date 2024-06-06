<?php
    $router->get('/', 'HomeController@index');
    $router->get('/products', 'ProductController@index');
    $router->get('/about', 'AboutController@index');