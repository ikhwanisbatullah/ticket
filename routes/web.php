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
//LEVEL USER ADMIN

//Route Admin

Route::get('/', function () {
    return view('masterAdmin');
});
Route::get('/index', 'AdminController@index');

Route::get('/admin/login', 'AdminController@login_index');

Route::post('/admin/login/proses', 'AdminController@login_post');

Route::get('/admin/dashboard', 'AdminController@dashboard');

Route::get('/admin/logout', 'AdminController@logout');

Route::get('/admin/gantiPassword', 'AdminController@ganti_password_index');

Route::post('/admin/gantiPasswordPost', 'AdminController@ganti_password_post');

//Route Kategori Konten

Route::get('/admin/dataKonten/kategoriKonten', 'KontenWebController@kategori_konten');

Route::post('/admin/dataKonten/kategoriKonten/tambahKategoriKonten', 'KontenWebController@tambah_kategori_konten');

Route::post('/admin/dataKonten/kategoriKonten/ubahKategoriKonten', 'KontenWebController@ubah_kategori_konten');

Route::get('/admin/dataKonten/kategoriKonten/hapusKategoriKonten/{kd_kategori_konten}', 'KontenWebController@hapus_kategori_konten');

//Route Konten
Route::get('/admin/dataKonten/konten', 'KontenWebController@konten');

Route::post('/admin/dataKonten/konten/tambahKonten', 'KontenWebController@tambah_konten');

Route::post('/admin/dataKonten/konten/ubahKonten', 'KontenWebController@ubah_konten');

Route::get('/admin/dataKonten/konten/hapusKonten/{kd_konten}', 'KontenWebController@hapus_konten');