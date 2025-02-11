<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('Homepage');

Route::get('/about', function () {
    return view('about_me');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/faq', function () {
    return view('faq');
})->name('Frequently asked Questions');

Route::get('/blogs', function () {
   return view('blog_home');
});
