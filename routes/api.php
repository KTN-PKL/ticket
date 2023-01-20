<?php

use App\Http\Controllers\c_mitra;
use App\Http\Controllers\Mitra\DashMitraController;
use App\Http\Controllers\Mitra\ListPostMitraController;
use App\Http\Controllers\Mitra\ProfileMitraController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invoice;
use App\Http\Controllers\user\c_chekin;
use App\Http\Controllers\user\c_pesan_masif;
use App\Http\Controllers\user\c_list;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('mitra', [DashMitraController::class, 'index']);
Route::get('mitra/{id}', [DashMitraController::class, 'mitra']);
Route::get('mitra/profile/{id}', [ProfileMitraController::class, 'profile']);
Route::get('mitra/listpost/{id}', [ListPostMitraController::class, 'listpost']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('midtrans/callback', [invoice::class, 'callback']);
Route::post('chekin', [c_chekin::class, 'chekin']); //isi data request {kode_tiket}
Route::get('pesanmasif/{id}', [c_pesan_masif::class, 'create']); //untuk mengambil data user {email, nama, whatsapp}  debagai data default di pesan masif menggunakan parameter id_pengguna
Route::post('pesanmasif/pesan', [c_pesan_masif::class, 'store']); //untuk membuat pesan masif, isi data request {id_pengguna, id_paket, nik, waktu_kunjungan, qty}
Route::get('list/kategori', [c_list::class, 'kategori']); //untuk memanggil list kategori
Route::get('list/wisata/{id}', [c_list::class, 'wisata']); //untuk memanggil list wisata bedasarkan id_kategori dengan parameeter id_kategori
Route::get('list/paket/{id}', [c_list::class, 'paket']); //untuk memanggil list paket bedasarkan id_wisata dengan parameeter id_wisata