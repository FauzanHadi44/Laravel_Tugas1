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

Route::get('/beranda2', function () {
    return view('pages2.beranda2');
})->name('beranda2');

Route::get('/kontak2', function () {
    return view('pages2.kontak2');
})->name('kontak2');

Route::get('/projek2', function () {
    return view('pages2.projek2');
})->name('projek2');