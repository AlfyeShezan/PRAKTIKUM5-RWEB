<?php

use Illuminate\Support\Facades\Route;

// 2 Routing tanpa parameter
Route::get('/', function () {
    return 'Selamat Datang di Halaman Utama';
});

Route::get('/contact', function () {
    return 'Ini adalah Halaman Kontak';
});

// 3 Routing dengan parameter
Route::get('/user/{name}', function ($name) {
    return "Halo, Selamat datang $name!";
});

Route::get('/post/{slug}', function ($slug) {
    return "Menampilkan postingan dengan slug: $slug";
});

Route::get('/category/{id}', function ($id) {
    return "Menampilkan kategori dengan ID: $id";
});