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

Route::get('/CAT', function () {
    return view('CAT');
})->name('CAT');

Route::get('/keunggulan', function () {
    return view('keunggulan');
})->name('keunggulan');

Route::get('/testimoni', function () {
    return view('testimoni');
})->name('testimoni');

Route::get('/paket_soal', function () {
    return view('paket_soal');
})->name('paket_soal');

Route::get('/panduan', function () {
    return view('panduan');
})->name('panduan');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/dashboard_admin', function () {
    return view('dashboard_admin');
})->name('dashboard_admin');

Route::get('/content', function () {
    return view('content');
})->name('content');

Route::get('/index_admin', function () {
    return view('index_admin');
})->name('index_admin');

Route::get('/sidebar', function () {
    return view('sidebar');
})->name('sidebar');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');

