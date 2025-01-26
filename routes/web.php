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

Route::get('/about2', function () {
    return view('about2', ['title' => 'About']);
});

Route::get('/blog2', function () {
    return view('blog2', ['title' => 'Blog']);
});

Route::get('/contact2', function () {
    return view('contact2', ['title' => 'Contact']);
});
