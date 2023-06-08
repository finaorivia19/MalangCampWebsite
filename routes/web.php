<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
