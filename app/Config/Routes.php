<?php

use CodeIgniter\Router\RouteCollection;
use \App\Controllers\StudentController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::create');
$routes->post('/login', 'LoginController::store');


$routes->get('/dashboard/students', [StudentController::class, 'index']);
