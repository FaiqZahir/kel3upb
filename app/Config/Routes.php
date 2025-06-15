<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/loket', 'LoketController::index');
    $routes->get('/loket/create', 'LoketController::create');
    $routes->post('/loket/store', 'LoketController::store');
    $routes->get('/loket/edit/(:num)', 'LoketController::edit/$1');
    $routes->post('/loket/update/(:num)', 'LoketController::update/$1');
    $routes->get('/loket/delete/(:num)', 'LoketController::delete/$1');

    $routes->get('/pelayanan', 'PelayananController::index');
    $routes->get('/pelayanan/create', 'PelayananController::create');
    $routes->post('/pelayanan/store', 'PelayananController::store');
    $routes->get('/pelayanan/edit/(:num)', 'PelayananController::edit/$1');
    $routes->post('/pelayanan/update/(:num)', 'PelayananController::update/$1');
    $routes->get('/pelayanan/delete/(:num)', 'PelayananController::delete/$1');

    $routes->get('/antrian', 'AntrianController::index');
    $routes->get('/antrian/create', 'AntrianController::create');
    $routes->post('/antrian/store', 'AntrianController::store');
    $routes->get('/antrian/edit/(:num)', 'AntrianController::edit/$1');
    $routes->post('/antrian/update/(:num)', 'AntrianController::update/$1');
    $routes->get('/antrian/delete/(:num)', 'AntrianController::delete/$1');
    $routes->get('antrian/invoice/(:num)', 'AntrianController::invoice/$1');
});

$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::login');
$routes->get('/logout', 'LoginController::logout');