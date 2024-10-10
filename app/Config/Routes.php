<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

#menu login
$routes->get('/login', 'Login::index');
$routes->post('/logging', 'Login::logging');
$routes->group('', ['filter' => 'login'], static function ($routes) {
# menu awal
$routes->get('/home', 'Home::index');
$routes->get('/event', 'Home::event');
$routes->get('/market', 'Market::index');

#menu register
$routes->get('/register', 'Register::index');
$routes->post('/regist', 'Register::regist');


#menu profile dan edit
$routes->get('/profile', 'Profile::index');
$routes->get('/editprofile', 'Editprofile::index');
$routes->post('/editprofile/update', 'Profile::update');
#$routes->post('/editprofile', 'Profile::update');

#menu keranjang
$routes->get('/cartada/add/(:segment)', 'Cartada::add/$1');
$routes->get('/cart', 'Cart::index');
$routes->get('/cartada', 'Cartada::index');

});
#$routes->get('/profile', 'Profile::index');
#$routes->get('/editprofile', 'Editprofile::index');
#$routes->post('/edit', 'Profile::edit');