<?php

use App\Controllers\Administrator\Atur_Item_Tagihan\AturItemTagihan;
use App\Controllers\Administrator\Dashboard\Dashboard;
use App\Controllers\Administrator\Informasi_Sekolah\InformasiSekolah;
use App\Controllers\Administrator\Kelas\Kelas;
use App\Controllers\Administrator\Pengumuman\Pengumuman;
use App\Controllers\Administrator\Reminder_Tagihan\ReminderTagihan;
use App\Controllers\Administrator\Siswa\Siswa;
use App\Controllers\Administrator\Tahun_Akademik\TahunAkademik;
use App\Controllers\Administrator\Transaksi_Tagihan\TransaksiTagihan;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/login', 'Administrator\Auth\Login::index');
// $routes->get('/dashboard', 'Administrator\Dashboard\Dashboard::index');
// $routes->get('/dashboard/pengumuman', 'Administrator\Pengumuman\Pengumuman::index');
// $routes->get('/dashboard/tahun-akademik', 'Administrator\Tahun_Akademik\TahunAkademik::index');
// $routes->get('/dashboard/kelas', 'Administrator\Kelas\Kelas::index');
// $routes->get('/dashboard/siswa', 'Administrator\Siswa\Siswa::index');
// $routes->get('/dashboard/siswa/create', 'Administrator\Siswa\Siswa::create');
// $routes->post('/dashboard/pengumuman', 'Form::index');



$routes->group('dashboard', ['namespace' => ''], static function ($routes) {
    $routes->resource('/', ['namespace' => '', 'controller' => Dashboard::class]);
    $routes->resource('pengumuman', ['namespace' => '', 'controller' => Pengumuman::class]);
});

$routes->group('dashboard/data-master', ['namespace' => ''], static function ($routes) {
    $routes->resource('tahun-akademik', ['controller' => TahunAkademik::class]);
    $routes->resource('kelas', ['controller' => Kelas::class]);
    $routes->resource('siswa', ['controller' => Siswa::class]);
});

$routes->group('dashboard/laporan-keuangan', ['namespace' => ''], static function ($routes) {
    $routes->resource('transaksi-tagihan', ['controller' => TransaksiTagihan::class]);
    $routes->resource('reminder-tagihan', ['controller' => ReminderTagihan::class]);
    $routes->resource('atur-item-tagihan', ['controller' => AturItemTagihan::class]);
});

$routes->group('dashboard/pengaturan-sistem', ['namespace' => ''], static function ($routes) {
    $routes->resource('informasi-sekolah', ['controller' => InformasiSekolah::class]);
});
