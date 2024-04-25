<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/home', 'Home::index');
$routes->get('/produk', 'Produk::index');
$routes->get('/tranksaksicontroller', 'Keranjang::index');
$routes->get('/tambah', 'ProdukController::inputdata');

$routes->get('/keranjang', 'Layout::keranjang');
$routes->get('/produk', 'layout::produk');

#1. untuk menampilkan halaman login
#2. untuk mengirim data user login
#3. untuk mengakhiri sesi
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->get('keranjang', 'TransaksiController::index', ['filter' => 'auth']);
