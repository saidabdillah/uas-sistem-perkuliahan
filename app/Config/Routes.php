<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/login', 'LoginController::create');
// $routes->post('/login', 'LoginController::store');


$routes->get('/', 'ProductController::index');
$routes->get('/list', 'ProductController::index');
$routes->post('add-product', 'ProductController::store');
$routes->get('edit-product/(:num)', 'ProductController::edit/$1');
$routes->post('update-product', 'ProductController::update');
$routes->post('delete-product', 'ProductController::delete');
