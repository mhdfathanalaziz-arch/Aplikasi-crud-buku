<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('kategori', App\Http\Controllers\KategoriController::class);
route::resource('penerbit', App\Http\Controllers\PenerbitController::class);
route::resource('buku', App\Http\Controllers\BukuController::class);
