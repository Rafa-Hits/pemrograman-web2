<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::search');
$routes->get('/cart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');
