<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //nav content
$routes->get('/', 'Home::index');
$routes->get('/product', 'Home::product');
$routes->get('/about', 'Home::about');

//order
$routes->get('/order/(:num)', 'Order::dataforform/$1');
$routes->post('/save', 'Order::makeorder');
$routes->get('/orderlist', 'Order::orderlist');

//update
$routes->post('/updateproduct', 'Order::updateorder');
$routes->post('/updateaction', 'Order::updateaction');
$routes->post('/deleteproduct', 'Order::deleteorder');

//bukti transaksi
$routes->post('/uploadstruk', 'Order::uploadStruk');