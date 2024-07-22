<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Administrator\Auth\Login::index');
$routes->get('/dashboard', 'Administrator\Dashboard\Dashboard::index');
$routes->get('/dashboard/pengumuman', 'Administrator\Pengumuman\Pengumuman::index');
$routes->get('/dashboard/tahun-akademik', 'Administrator\Tahun_Akademik\TahunAkademik::index');
$routes->get('/dashboard/kelas', 'Administrator\Kelas\Kelas::index');
$routes->get('/dashboard/siswa', 'Administrator\Siswa\Siswa::index');
$routes->get('/dashboard/siswa/create', 'Administrator\Siswa\Siswa::create');
