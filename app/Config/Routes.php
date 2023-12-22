<?php

use App\Controllers\JurusanController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\KehadiranController;
use \App\Controllers\MahasiswaController;
use \App\Controllers\MataKuliahController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::create');
$routes->post('/login', 'LoginController::store');


// Mahasiswa
$routes->get('/dashboard/mahasiswa', [MahasiswaController::class, 'index']);
$routes->get('/dashboard/mahasiswa/tambah', [MahasiswaController::class, 'create']);
$routes->get('/dashboard/kehadiran', [KehadiranController::class, 'index']);

// Mata Kuliah
$routes->get('/dashboard/matakuliah', [MataKuliahController::class, 'index']);

// Jurusan
$routes->get('/dashboard/jurusan', [JurusanController::class, 'index']);
$routes->get('/dashboard/jurusan/tambah', [JurusanController::class, 'create']);
$routes->post('/dashboard/jurusan', [JurusanController::class, 'store']);
$routes->get('/dashboard/jurusan/(:segment)/edit', [JurusanController::class, 'edit']);
$routes->put('/dashboard/jurusan/(:segment)', [JurusanController::class, 'update']);
$routes->delete('/dashboard/jurusan/(:segment)', [JurusanController::class, 'delete']);
