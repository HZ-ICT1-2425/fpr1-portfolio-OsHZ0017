<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about_me');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


// Resource Routes
Route::resource('faqs', QuestionController::class);
Route::resource('blogs', BlogController::class);
