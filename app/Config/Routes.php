<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/shop', 'Shop::index');
$routes->get('/shop/product', 'Shop::product');
$routes->get('/home', 'Home::index');
$routes->get('/shop/product/(:segment)', 'Shop::product/$1');

service('auth')->routes($routes);
