<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/wind', function () {
    return view('wind', ['title' => 'Dashboard']);
});

Route::get('/tentang', function () {
    return view('tentang', ['title' => 'Tentang']);
});

Route::get('/artikel', function () {
    return view('artikel', ['title' => 'Artikel']);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Kontak']);
});
