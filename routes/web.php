<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
//    return view('/welcome');
});

//Route::get('/chat', function () { return view('/chat'); });
Route::get('/profile', function () { return view('/profile'); });
//Route::get('/topics', function () { return view('/topics'); });
Route::get('/rateusers', function () { return view('/rateusers'); });
Route::get('/users', function () { return view('/users'); });
Route::get('/reports', function () { return view('/reports'); });

Route::resource('topics', \App\Http\Controllers\TopicController::class);
Route::resource('comments', \App\Http\Controllers\CommentsController::class);
Route::resource('chats', \App\Http\Controllers\ChatController::class);
Route::resource('rateusers', \App\Http\Controllers\RateUserController::class);
Route::resource('users', \App\Http\Controllers\UsersController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
