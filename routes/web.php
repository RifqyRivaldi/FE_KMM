<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/paket-belajar', function () {
    return view('paket-belajar');
})->name('paket-belajar');

Route::get('/keunggulan', function () {
    return view('keunggulan');
})->name('keunggulan');

Route::get('/testimoni', function () {
    return view('testimoni');
})->name('testimoni');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/panduan', function () {
    return view('panduan');
})->name('panduan');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');
