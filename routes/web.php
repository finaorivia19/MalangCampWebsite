<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('index');
// })->middleware('auth');

Route::get('/', function () {
    return view('index');
});

Route::get('/account', function () {
    return view('account');

Route::get('/live-chat', function () {
    return view('live-chat');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/update-account', function () {
    return view('updateAccount');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/verification', [App\Http\Controllers\CobaController::class, 'coba'])->name('coba');

Route::get('/contact-us', function () {
    return view('contactUs');
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/coba', [App\Http\Controllers\CobaController::class, 'coba'])->name('coba');

// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class])->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
