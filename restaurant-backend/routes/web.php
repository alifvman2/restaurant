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

Route::resource('/Makanan', App\Http\Controllers\MakananController::class);
Route::resource('/Pembeli', App\Http\Controllers\PembeliController::class);
Route::resource('/Transaksi', App\Http\Controllers\TransaksiController::class);
