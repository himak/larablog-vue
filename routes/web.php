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
// auth
Auth::routes();

// home
Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// posts
Route::resource('posts', \App\Http\Controllers\PostController::class);

// comments
Route::resource('comments', \App\Http\Controllers\CommentController::class)->only(['store', 'update', 'destroy']);

// admin
Route::get('/admin/{any?}', function (){
   return view('layouts.admin');
})->where('any', '.*');
