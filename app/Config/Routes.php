<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tisoledat', 'Home::dashboard');
$routes->get('/tikosewad', 'Home::login');
