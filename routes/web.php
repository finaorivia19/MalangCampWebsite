<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\PaketController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact-us', function () {
    return view('contactUs');
});

Route::get('/kelolaPaket', function () {
    return view('kelolaPaket');
});

Route::get('/updatePaket', function () {
    return view('updatePaket');
});

Route::get('/tambahPaket', function () {
    return view('tambahPaket');
});

Route::get('/paket', function () {
    return view('paket');
});

// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/coba', [App\Http\Controllers\CobaController::class, 'coba'])->name('coba');

// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class])->name('register');

Auth::routes();

// Route::resource('paket', PaketController::class);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

