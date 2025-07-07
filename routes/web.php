<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/projek', function () {
    return view('pages.projek');
})->name('projek');
