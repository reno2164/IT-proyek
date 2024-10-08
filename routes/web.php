<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard',['title'=>'halaman beranda']);
});

Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('pegawai', \App\Http\Controllers\PegawaiController::class);
