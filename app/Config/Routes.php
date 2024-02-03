<?php

use CodeIgniter\Router\RouteCollection;


// auth
// $routes->get('/', 'Home::index');

$routes->get('/auth/login', 'Auth::login');
