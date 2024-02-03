<?php

use CodeIgniter\Router\RouteCollection;


// auth
// $routes->get('/', 'Home::index');

// login
$routes->get('/auth/login',                     'Auth::login');
$routes->post('/auth/login_submit',             'Auth::login_submit');

// sign up
$routes->get('/auth/new_account',               'Auth::new_account');
$routes->post('/auth/new_account_submit',       'Auth::new_account_submit');

// forgot password
$routes->get('/auth/forgot_password',           'Auth::forgot_password');
$routes->post('/auth/forgot_password_submit',   'Auth::forgot_password_submit');