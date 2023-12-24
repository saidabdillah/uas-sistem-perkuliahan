<?php

use App\Controllers\JurusanController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\KehadiranController;
use \App\Controllers\MahasiswaController;
use \App\Controllers\MataKuliahController;
use App\Database\Migrations\Mahasiswa;
use App\Database\Migrations\MataKuliah;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::create');
$routes->post('/login', 'LoginController::store');


// Mahasiswa
$routes->get('/mahasiswa', [MahasiswaController::class, 'index']);
$routes->get('/mahasiswa/(:num)/edit', [MahasiswaController::class, 'edit']);
$routes->put('/mahasiswa/(:num)/update', [MahasiswaController::class, 'update']);

// Mata Kuliah
$routes->get('/matakuliah', [MataKuliahController::class, 'index']);
$routes->get('/matakuliah/tambah', [MataKuliahController::class, 'create']);
$routes->post('/matakuliah', [MataKuliahController::class, 'store']);
$routes->get('/matakuliah/(:segment)/edit', [MataKuliahController::class, 'edit']);
$routes->put('/matakuliah/(:segment)/update', [MataKuliahController::class, 'update']);
$routes->delete('/matakuliah/(:segment)/hapus', [MataKuliahController::class, 'delete']);

$routes->get('/matakuliah/test', [MataKuliah::class, 'test']);

// Jurusan
$routes->get('/jurusan', [JurusanController::class, 'index']);
$routes->get('/jurusan/tambah', [JurusanController::class, 'create']);
$routes->post('/jurusan', [JurusanController::class, 'store']);
$routes->get('/jurusan/(:segment)/edit', [JurusanController::class, 'edit']);
$routes->put('/jurusan/(:segment)', [JurusanController::class, 'update']);
$routes->delete('/jurusan/(:segment)/hapus', [JurusanController::class, 'delete']);

// Kehadiran
$routes->get('/kehadiran', [KehadiranController::class, 'index']);
