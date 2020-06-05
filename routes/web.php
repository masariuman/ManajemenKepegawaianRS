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

Route::get('/', 'dasarPegawaiController@index')->name('dasar_pegawai');
Route::get('/dasar_pegawai/baru', 'dasarPegawaiController@create');
Route::post('/dasar_pegawai/tambah', 'dasarPegawaiController@store');
Route::get('/dasar_pegawai/{id}/ubah', 'dasarPegawaiController@edit');
Route::patch('/dasar_pegawai/update/{id}', 'dasarPegawaiController@update');
Route::delete('/dasar_pegawai/delete', 'dasarPegawaiController@delete');

Route::get('/riwayat_pendidikan_formal', 'riwayatPendidikanFormalController@index')->name('riwayat_pendidikan_formal');
Route::get('/riwayat_pendidikan_formal/baru', 'riwayatPendidikanFormalController@create');
Route::post('/riwayat_pendidikan_formal/tambah', 'riwayatPendidikanFormalController@store')->name('riwayat_pendidikan_formal_tambah');
Route::get('/riwayat_pendidikan_formal/{id}/ubah', 'riwayatPendidikanFormalController@edit');
Route::patch('/riwayat_pendidikan_formal/update/{id}', 'riwayatPendidikanFormalController@update');
Route::delete('/riwayat_pendidikan_formal/delete', 'riwayatPendidikanFormalController@delete');

Route::get('/riwayat_diklat_fungsional', 'riwayatDiklatFungsionalController@index')->name('riwayat_diklat_fungsional');
Route::get('/riwayat_diklat_fungsional/baru', 'riwayatDiklatFungsionalController@create');
Route::post('/riwayat_diklat_fungsional/tambah', 'riwayatDiklatFungsionalController@store');
Route::get('/riwayat_diklat_fungsional/{id}/ubah', 'riwayatDiklatFungsionalController@edit');
Route::patch('/riwayat_diklat_fungsional/update/{id}', 'riwayatDiklatFungsionalController@update');
Route::delete('/riwayat_diklat_fungsional/delete', 'riwayatDiklatFungsionalController@delete');

Route::get('/riwayat_diklat_teknis', 'riwayatDiklatTeknisController@index')->name('riwayat_diklat_teknis');
Route::get('/riwayat_diklat_teknis/baru', 'riwayatDiklatTeknisController@create');
Route::post('/riwayat_diklat_teknis/tambah', 'riwayatDiklatTeknisController@store');
Route::get('/riwayat_diklat_teknis/{id}/ubah', 'riwayatDiklatTeknisController@edit');
Route::patch('/riwayat_diklat_teknis/update/{id}', 'riwayatDiklatTeknisController@update');
Route::delete('/riwayat_diklat_teknis/delete', 'riwayatDiklatTeknisController@delete');

Route::get('/riwayat_diklat_penjenjangan-struktural', 'riwayatDiklatPerjenjanganStrukturalController@index')->name('riwayat_diklat_penjenjangan-struktural');
Route::get('/riwayat_diklat_penjenjangan-struktural/baru', 'riwayatDiklatPerjenjanganStrukturalController@create');
Route::post('/riwayat_diklat_penjenjangan-struktural/tambah', 'riwayatDiklatPerjenjanganStrukturalController@store');
Route::get('/riwayat_diklat_penjenjangan-struktural/{id}/ubah', 'riwayatDiklatPerjenjanganStrukturalController@edit');
Route::patch('/riwayat_diklat_penjenjangan-struktural/update/{id}', 'riwayatDiklatPerjenjanganStrukturalController@update');
Route::delete('/riwayat_diklat_penjenjangan-struktural/delete', 'riwayatDiklatPerjenjanganStrukturalController@delete');

Route::get('/riwayat_kepangkatan', 'riwayatKepangkatanController@index')->name('riwayat_kepangkatan');
Route::get('/riwayat_kepangkatan/baru', 'riwayatKepangkatanController@create');
Route::post('/riwayat_kepangkatan/tambah', 'riwayatKepangkatanController@store');
Route::get('/riwayat_kepangkatan/{id}/ubah', 'riwayatKepangkatanController@edit');
Route::patch('/riwayat_kepangkatan/update/{id}', 'riwayatKepangkatanController@update');
Route::delete('/riwayat_kepangkatan/delete', 'riwayatKepangkatanController@delete');

Route::get('/riwayat_jabatan_struktural', 'riwayatJabatanStrukturalController@index')->name('riwayat_jabatan_struktural');
Route::get('/riwayat_jabatan_struktural/baru', 'riwayatJabatanStrukturalController@create');
Route::post('/riwayat_jabatan_struktural/tambah', 'riwayatJabatanStrukturalController@store');
Route::get('/riwayat_jabatan_struktural/{id}/ubah', 'riwayatJabatanStrukturalController@edit');
Route::patch('/riwayat_jabatan_struktural/update/{id}', 'riwayatJabatanStrukturalController@update');
Route::delete('/riwayat_jabatan_struktural/delete', 'riwayatJabatanStrukturalController@delete');

Route::get('/riwayat_jabatan_fungsional', 'riwayatJabatanFungsionalController@index')->name('riwayat_jabatan_fungsional');
Route::get('/riwayat_jabatan_fungsional/baru', 'riwayatJabatanFungsionalController@create');
Route::post('/riwayat_jabatan_fungsional/tambah', 'riwayatJabatanFungsionalController@store');
Route::get('/riwayat_jabatan_fungsional/{id}/ubah', 'riwayatJabatanFungsionalController@edit');
Route::patch('/riwayat_jabatan_fungsional/update/{id}', 'riwayatJabatanFungsionalController@update');
Route::delete('/riwayat_jabatan_fungsional/delete', 'riwayatJabatanFungsionalController@delete');

Route::get('/istri-suami', 'istriSuamiController@index')->name('istri-suami');
Route::get('/istri-suami/baru', 'istriSuamiController@create');
Route::post('/istri-suami/tambah', 'istriSuamiController@store');
Route::get('/istri-suami/{id}/ubah', 'istriSuamiController@edit');
Route::patch('/istri-suami/update/{id}', 'istriSuamiController@update');
Route::delete('/istri-suami/delete', 'istriSuamiController@delete');

Route::get('/anak', 'anakController@index')->name('anak');
Route::get('/anak/baru', 'anakController@create');
Route::post('/anak/tambah', 'anakController@store');
Route::get('/anak/{id}/ubah', 'anakController@edit');
Route::patch('/anak/update/{id}', 'anakController@update');
Route::delete('/anak/delete', 'anakController@delete');

Route::get('/skp', 'skpController@index')->name('skp');
Route::get('/skp/baru', 'skpController@create');
Route::post('/skp/tambah', 'skpController@store');
Route::get('/skp/{id}/ubah', 'skpController@edit');
Route::patch('/skp/update/{id}', 'skpController@update');
Route::delete('/skp/delete', 'skpController@delete');

Route::get('/seminar-lokakarya-simposium', 'seminarController@index')->name('seminar-lokakarya-simposium');
Route::get('/seminar-lokakarya-simposium/baru', 'seminarController@create');
Route::post('/seminar-lokakarya-simposium/tambah', 'seminarController@store');
Route::get('/seminar-lokakarya-simposium/{id}/ubah', 'seminarController@edit');
Route::patch('/seminar-lokakarya-simposium/update/{id}', 'seminarController@update');
Route::delete('/seminar-lokakarya-simposium/delete', 'skpContrseminarControlleroller@delete');

Route::get('/tanda_jasa-penghargaan', 'penghargaanController@index')->name('tanda_jasa-penghargaan');
Route::get('/tanda_jasa-penghargaan/baru', 'penghargaanController@create');
Route::post('/tanda_jasa-penghargaan/tambah', 'penghargaanController@store');
Route::get('/tanda_jasa-penghargaan/{id}/ubah', 'skpContpenghargaanControllerroller@edit');
Route::patch('/tanda_jasa-penghargaan/update/{id}', 'penghargaanController@update');
Route::delete('/tanda_jasa-penghargaan/delete', 'penghargaanController@delete');

Route::get('/hukum_disiplin', 'hukumanController@index')->name('hukum_disiplin');
Route::get('/hukum_disiplin/baru', 'hukumanController@create');
Route::post('/hukum_disiplin/tambah', 'hukumanController@store');
Route::get('/hukum_disiplin/{id}/ubah', 'hukumanController@edit');
Route::patch('/hukum_disiplin/update/{id}', 'hukumanController@update');
Route::delete('/hukum_disiplin/delete', 'hukumanController@delete');

Route::get('/keanggotaan_organisasi', 'organisasiController@index')->name('keanggotaan_organisasi');
Route::get('/keanggotaan_organisasi/baru', 'organisasiController@create');
Route::post('/keanggotaan_organisasi/tambah', 'organisasiController@store');
Route::get('/keanggotaan_organisasi/{id}/ubah', 'organisasiController@edit');
Route::patch('/keanggotaan_organisasi/update/{id}', 'organisasiController@update');
Route::delete('/keanggotaan_organisasi/delete', 'organisasiController@delete');

Route::get('/keluarga_kandung', 'keluargaKandungController@index')->name('keluarga_kandung');
Route::get('/keluarga_kandung/baru', 'keluargaKandungController@create');
Route::post('/keluarga_kandung/tambah', 'keluargaKandungController@store');
Route::get('/keluarga_kandung/{id}/ubah', 'keluargaKandungController@edit');
Route::patch('/keluarga_kandung/update/{id}', 'keluargaKandungController@update');
Route::delete('/keluarga_kandung/delete', 'keluargaKandungController@delete');

Route::get('/keluarga_istri-suami', 'keluargaIstriSuamiController@index')->name('keluarga_istri-suami');
Route::get('/keluarga_istri-suami/baru', 'keluargaIstriSuamiController@create');
Route::post('/keluarga_istri-suami/tambah', 'keluargaIstriSuamiController@store');
Route::get('/keluarga_istri-suami/{id}/ubah', 'keluargaIstriSuamiController@edit');
Route::patch('/keluarga_istri-suami/update/{id}', 'keluargaIstriSuamiController@update');
Route::delete('/keluarga_istri-suami/delete', 'keluargaIstriSuamiController@delete');


Route::resource('riwayat_pekerjaan-jabatan', 'riwayatJabatanTeknisController');


// GET	/photos
// GET	/photos/create
// POST	/photos
// GET	/photos/{photo}
// GET	/photos/{photo}/edit
// PUT/PATCH	/photos/{photo}
// DELETE	/photos/{photo}

