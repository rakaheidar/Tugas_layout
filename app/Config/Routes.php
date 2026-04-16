<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('produk', 'ProdukController::index');
$routes->get('produk/tambah', 'ProdukController::tambah');
$routes->post('produk/simpan', 'ProdukController::simpan');
$routes->get('transaksi', 'TransaksiController::index');
