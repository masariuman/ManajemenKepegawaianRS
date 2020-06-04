<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard-manajemenrs');
// })->name('dashboard-manajemenrs');

Route::post('tambah', 'RiwayatPendidikanFormalController@tambah')->name('tambah');

Route::get('/', function () {
    return view('dasar_pegawai');
})->name('dasar_pegawai');

Route::get('/riwayat_pendidikan_formal', function () {
    return view('riwayat_pendidikan_formal');
})->name('riwayat_pendidikan_formal');

Route::get('/riwayat_diklat_fungsional', function () {
    return view('riwayat_diklat_fungsional');
})->name('riwayat_diklat_fungsional');

Route::get('/riwayat_diklat_teknis', function () {
    return view('riwayat_diklat_teknis');
})->name('riwayat_diklat_teknis');

Route::get('/riwayat_diklat_penjenjangan-struktural', function () {
    return view('riwayat_diklat_penjenjangan-struktural');
})->name('riwayat_diklat_penjenjangan-struktural');

Route::get('/riwayat_kepangkatan', function () {
    return view('riwayat_kepangkatan');
})->name('riwayat_kepangkatan');

Route::get('/riwayat_jabatan_struktural', function () {
    return view('riwayat_jabatan_struktural');
})->name('riwayat_jabatan_struktural');

Route::get('/riwayat_jabatan_fungsional', function () {
    return view('riwayat_jabatan_fungsional');
})->name('riwayat_jabatan_fungsional');

Route::get('/istri-suami', function () {
    return view('istri-suami');
})->name('istri-suami');

Route::get('/anak', function () {
    return view('anak');
})->name('anak');

Route::get('/skp', function () {
    return view('skp');
})->name('skp');

Route::get('/seminar-lokakarya-simposium', function () {
    return view('seminar-lokakarya-simposium');
})->name('seminar-lokakarya-simposium');

Route::get('/tanda_jasa-penghargaan', function () {
    return view('tanda_jasa-penghargaan');
})->name('tanda_jasa-penghargaan');

Route::get('/hukum_disiplin', function () {
    return view('hukum_disiplin');
})->name('hukum_disiplin');

Route::get('/keanggotaan_organisasi', function () {
    return view('keanggotaan_organisasi');
})->name('keanggotaan_organisasi');

Route::get('/keluarga_kandung', function () {
    return view('keluarga_kandung');
})->name('keluarga_kandung');

Route::get('/keluarga_istri-suami', function () {
    return view('keluarga_istri-suami');
})->name('keluarga_istri-suami');

Route::get('/riwayat_pekerjaan-jabatan', function () {
    return view('riwayat_pekerjaan-jabatan');
})->name('riwayat_pekerjaan-jabatan');