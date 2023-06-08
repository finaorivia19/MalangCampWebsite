<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request; 
use App\Http\Controllers\KelolaBarangController;

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

Auth::routes();

Route::get('/', function () {
    return view('index');
})->middleware('auth');

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/account', function () {
    return view('account');
})->middleware('auth');;

Route::get('/live-chat', function () {
    return view('live-chat');
})->middleware('auth');;

Route::get('/coba', function () {
    return view('coba');
})->middleware('auth');;

Route::get('/update-account', function () {
    return view('updateAccount');
})->middleware('auth');;

Route::get ('/lupaPassword', function () {
    return view('lupaPassword');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');;

Route::get('/verification', [App\Http\Controllers\CobaController::class, 'coba'])->name('coba');

Route::get('/contact-us', function () {
    return view('contactUs');
})->middleware('auth');;

Route::delete('/data/{id}', 'DataController@destroy')->name('data.destroy')->middleware('auth');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/coba', [App\Http\Controllers\CobaController::class, 'coba'])->name('coba');

// Route::get('/kelolaBarang', function () {
//     return view('kelolaBarang');
// });

Route::resource('kelolaBarang', KelolaBarangController::class);

// Route::get('/kelolaBarang', [App\Http\Controllers\KelolaBarangController::class, 'kelolaBarang'])->name('keloalaBarang');

// Route::post('/kelolaBarang', [KelolaBarangController::class, 'kelolaBarang']);

// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class])->name('register');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
