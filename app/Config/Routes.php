<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::index');
$routes->get('menu', 'Menu::index');

$routes->get('/login', 'Auth::login');
$routes->get('/daftar', 'Auth::daftar');
$routes->get('/lupa_password', 'Auth::lupa_password');

$routes->get('/buat_password', function () {
    $data = [
        'title' => 'home',
    ];
    return view('auth/buat_password', $data);
});

$routes->get('/home', function () {
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
$routes->get('/lainnya', 'Lainnya::index');

$routes->get('/store_withdraw', 'Lainnya::withdraw');

$routes->get('/store_setor', 'Lainnya::setor');

$routes->get('profile/pengaturan', 'Profile::pengaturan_profile');

$routes->group('profile', static function ($routes) {
    $routes->get('/', 'Profile::index');
    $routes->get('/ganti-password', 'Profile::ganti_password');
    $routes->get('/mutasi-saldo', 'Profile::mutasi-saldo');
    $routes->get('/catatan-aktifitas', 'Profile::catatan_aktifitas');
    $routes->get('/catatan-withdraw', 'Profile::catatan_withdraw');
});
