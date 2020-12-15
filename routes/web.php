<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// home
Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// auth
Auth::routes();


// post
Route::resource('posts', \App\Http\Controllers\PostController::class);
