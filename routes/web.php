<?php

use Illuminate\Support\Facades\Route;

// 2 Routing tanpa parameter
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

// 3 Routing dengan parameter
Route::get('/user/{name}', function ($name) {
    return view('user', ['name' => $name]);
});

Route::get('/post/{slug}', function ($slug) {
    return view('post', ['slug' => $slug]);
});

Route::get('/category/{id}', function ($id) {
    return view('category', ['id' => $id]);
});