<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_mitra;
use App\Http\Controllers\c_kategori;

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

Route::get('/index', function () {
    return view('mitra/akun/index');
});
Route::get('/createmitra', function () {
    return view('mitra/akun/index');
});
Route::get('/test', function () {
    return view('mitra/akun/detail');
});

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

Route::controller(c_kategori::class)->group(function () {
    Route::get('/kategori', 'index')->name('kategori');
    Route::post('/kategori/store', 'store')->name('kategori.store');
    Route::get('/kategori/create', 'create')->name('kategori.create');
    Route::get('/kategori/edit/{id}', 'edit')->name('kategori.edit');
    Route::post('/kategori/update/{id}', 'update')->name('kategori.update');
    Route::get('/kategori/destroy/{id}', 'destroy')->name('kategori.destroy');
});
