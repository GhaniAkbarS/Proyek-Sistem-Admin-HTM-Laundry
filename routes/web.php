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

Route::get('/layout', function () {
    return view('layouts.home');
});
Route::resource('/harga',\App\Http\Controllers\hargaController::class);
Route::resource('/owner', \App\Http\Controllers\ownerController::class);
Route::resource('/pakaian', \App\Http\Controllers\LaundryController::class);
Route::resource('/pelanggan', \App\Http\Controllers\pelangganController::class);
Route::resource('/transaksi', \App\Http\Controllers\transaksiController::class);