<?php

use App\Http\Controllers\produkController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('/produks', [produkController::class, 'read'])->name('produks.read');
route::get('/produks/create', [produkController::class, 'create'])->name('produks.create');
route::post('/produks/submit', [produkController::class, 'submit'])->name('produks.submit');
route::get('/produks/edit/{id}', [produkController::class, 'edit'])->name('produks.edit');
route::post('/produks/update/{id}', [produkController::class, 'update'])->name('produks.update');
route:Route::delete('/produks/delete/{id}', [produkController::class, 'delete'])->name('produks.delete');

Route::resource('pegawai', PegawaiController::class);