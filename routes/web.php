<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

// Static Routes
Route::get('/', [StaticContentController::class, 'homePage'])->name('home');
Route::get('/about', [StaticContentController::class, 'aboutMe'])->name('aboutMe');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');

// Resource Routes
Route::resource('faqs', QuestionController::class);
Route::resource('blogs', BlogController::class);
