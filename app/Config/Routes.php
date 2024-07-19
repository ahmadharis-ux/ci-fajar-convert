<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::index');
$routes->get('menu', 'Menu::index');
$routes->get('/login', 'Login::index');
$routes->get('/daftar', 'Daftar::index');

$routes->group('home', static function ($routes) {
    $routes->get('/', 'Home::home');
});

$routes->group('menu', static function ($routes) {
    $routes->get('/', 'Menu::index');
});

$routes->get('account', 'Home::account');
$routes->get('account/profile', 'Home::profile');
