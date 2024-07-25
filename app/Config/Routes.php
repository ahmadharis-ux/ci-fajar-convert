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
$routes->get('/lupa_password',function (){
    $data = [
        'title' => 'home'
    ];
    return view('auth/lupa_password', $data);
});
$routes->get('/buat_password',function (){
    $data = [
        'title' => 'home',
    ];
    return view('auth/buat_password', $data);
});
$routes->get('/home',function (){
    $data = [
        'title' => 'Dashboard',
        'active' => 'dashboard',
        'username' => 'Ahmad Haris',
        'saldo' => 100000,
        'transaksi' => 2500000,
    ];
    return view('dashboard/index', $data);
});
// Lainnya
$routes->get('/lainnya',function (){
    $data = [
        'title' => 'Lainnya',
        'active' => 'lainnya',
        'username' => 'Ahmad Haris',
        'saldo' => 100000,
        'transaksi' => 2500000,
    ];
    return view('lainnya/index', $data);
});
$routes->get('/store_withdraw',function (){
    $data = [
        'title' => 'New Withdraw',
        'active' => 'lainnya',
        'username' => 'Ahmad Haris',
        'saldo' => 100000,
        'transaksi' => 2500000,
    ];
    return view('withdraw/create', $data);
});
$routes->get('/store_setor',function (){
    $data = [
        'title' => 'New Withdraw',
        'active' => 'lainnya',
        'username' => 'Ahmad Haris',
        'saldo' => 100000,
        'transaksi' => 2500000,
    ];
    return view('setor/create', $data);
});

$routes->group('home', static function ($routes) {
    $routes->get('/', 'Home::home');
});

$routes->group('menu', static function ($routes) {
    $routes->get('/', 'Menu::index');
});

$routes->get('account', 'Home::account');
$routes->get('account/profile', 'Home::profile');
