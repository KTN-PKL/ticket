<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_mitra;
use App\Http\Controllers\c_kategori;
use App\Http\Controllers\c_fasilitas;
use App\Http\Controllers\c_postingan;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/test1', function () {
//     return view('mitra.postingan.index');
// });
// Route::get('/test2', function () {
//     return view('mitra.postingan.create');
// });

// Route::get('/test3', function () {
//     return view('mitra.postingan.edit');
// });

Route::controller(c_mitra::class)->group(function () {
    Route::get('/mitra/akun', 'index')->name('mitra.akun');
    Route::post('/mitra/akun/store', 'store')->name('mitra.akun.store');
    Route::get('/mitra/akun/create', 'create')->name('mitra.akun.create');
    Route::get('/mitra/akun/edit/{id}', 'edit')->name('mitra.akun.edit');
    Route::post('/mitra/akun/update/{id}', 'update')->name('mitra.akun.update');
    Route::get('/mitra/akun/destroy/{id}', 'destroy')->name('mitra.akun.destroy');
    Route::get('/mitra/akun/detail/{id}', 'detail')->name('mitra.akun.detail');
    Route::get('/mitra/akun/active/{id}', 'active')->name('mitra.akun.active');
    Route::get('/mitra/akun/inactive/{id}', 'inactive')->name('mitra.akun.inactive');
});

Route::controller(c_postingan::class)->group(function () {
    // Route::get('/mitra', 'index')->name('mitra');
    // Route::get('/mitra/postingan/mitra/{id}', 'postingan')->name('mitra.postingan');
    Route::post('/mitra/postingan/store/{id}', 'store')->name('mitra.postingan.store');
    Route::get('/mitra/postingan/create/{id}', 'create')->name('mitra.postingan.create');
    Route::get('/mitra/postingan/edit/{id}', 'edit')->name('mitra.postingan.edit');
    Route::post('/mitra/postingan/update/{id}', 'update')->name('mitra.postingan.update');
    Route::get('/mitra/postingan/destroy/{id}', 'destroy')->name('mitra.postingan.destroy');
    Route::get('/mitra/postingan/detail/{id}', 'detail')->name('mitra.postingan.detail');
    // Route::get('/mitra/postingan/active/{id}', 'active')->name('mitra.postingan.active');
    // Route::get('/mitra/postingan/inactive/{id}', 'inactive')->name('mitra.postingan.inactive');
});

Route::controller(c_kategori::class)->group(function () {
    Route::get('/kategori', 'index')->name('kategori');
    Route::post('/kategori/store', 'store')->name('kategori.store');
    Route::get('/kategori/create', 'create')->name('kategori.create');
    Route::get('/kategori/edit/{id}', 'edit')->name('kategori.edit');
    Route::post('/kategori/update/{id}', 'update')->name('kategori.update');
    Route::get('/kategori/destroy/{id}', 'destroy')->name('kategori.destroy');
});

Route::controller(c_fasilitas::class)->group(function () {
    Route::get('/fasilitas', 'index')->name('fasilitas');
    Route::post('/fasilitas/store', 'store')->name('fasilitas.store');
    Route::get('/fasilitas/create', 'create')->name('fasilitas.create');
    Route::get('/fasilitas/edit/{id}', 'edit')->name('fasilitas.edit');
    Route::post('/fasilitas/update/{id}', 'update')->name('fasilitas.update');
    Route::get('/fasilitas/destroy/{id}', 'destroy')->name('fasilitas.destroy');
});
