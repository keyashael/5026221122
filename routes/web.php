<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\DosenController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/error', function () {
    return "<h1> Server Error: Ada Kesalahan di Server </h1>";
});

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

// Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pertemuan1', function () {return view('pertemuan1'); })->name('pertemuan1');
Route::get('/pertemuan2', function () {return view('pertemuan2'); })->name('pertemuan2');
Route::get('/pertemuan2css', function () {return view('pertemuan2css'); })->name('pertemuan2css');
Route::get('/pertemuan3', function () {return view('pertemuan3'); })->name('pertemuan3');
Route::get('/pertemuan7', function () {return view('pertemuan7'); })->name('pertemuan7');
Route::get('/tugas1', function () {return view('tugas1'); })->name('tugas1');
Route::get('/tugas2', function () {return view('tugas2'); })->name('tugas2');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

Route::get('/sepatu','App\Http\Controllers\SepatuController@index');
Route::get('/sepatu/tambahSepatu','App\Http\Controllers\SepatuController@tambah');
Route::post('/sepatu/store','App\Http\Controllers\SepatuController@store');
Route::get('/sepatu/edit/{kodesepatu}','App\Http\Controllers\SepatuController@edit');
Route::post('/sepatu/update','App\Http\Controllers\SepatuController@update');
Route::get('/sepatu/hapus/{kodesepatu}','App\Http\Controllers\SepatuController@hapus');
Route::get('/sepatu/cari','App\Http\Controllers\SepatuController@cari');
