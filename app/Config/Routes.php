<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Login', 'Cindex1::login');

$routes->get('/Compras', 'Cindex2::compras');
