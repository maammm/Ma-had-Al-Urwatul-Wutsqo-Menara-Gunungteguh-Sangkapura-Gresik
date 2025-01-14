<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pendaftaran;

Route::get('/pendaftaran', [pendaftaran::class, 'showForm']);
Route::post('/pendaftaran', [pendaftaran::class, 'store'])->name('pendaftaran.siswa.store');

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/tendik', function () {
    return view('tendik');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});