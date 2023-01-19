<?php

use App\Http\Controllers\c_mitra;
use App\Http\Controllers\Mitra\DashMitraController;
use App\Http\Controllers\Mitra\ListPostMitraController;
use App\Http\Controllers\Mitra\ProfileMitraController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invoice;
use App\Http\Controllers\user\c_chekin;

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
Route::post('chekin', [c_chekin::class, 'chekin']);

