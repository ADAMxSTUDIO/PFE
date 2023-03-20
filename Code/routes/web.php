<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\FilterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Picture resource routes
Route::resource('picture', PictureController::class);
// Index page - import pictures
Route::get('/', [PictureController::class, 'index'])->name('index');
// Picture filters
Route::get('/filter', FilterController::class)->name('picture.filter');
// Category index page
Route::get('/category', [CategoryController::class, 'index']);
// Pictures of a specific category page
Route::get('/category/{title}', [CategoryController::class, 'picture'])->name('category.picture');



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::any('')->missing(function() {
//     return view('away');
// });