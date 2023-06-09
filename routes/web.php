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

Route::get('/account', function () {
    return view('account');
})->middleware('auth');;

Route::get('/live-chat', function () {
    return view('live-chat');
})->middleware('auth');;

Route::get('/otp', function () {
    return view('otp');
});

Route::get('/update-account', function () {
    return view('updateAccount');
})->middleware('auth');;

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/contact-us', function () {
    return view('contactUs');
})->middleware('auth');;

Route::delete('/data/{id}', 'DataController@destroy')->name('data.destroy')->middleware('auth');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::resource('kelolaBarang', KelolaBarangController::class);

// Route::get('/kelolaBarang', [App\Http\Controllers\KelolaBarangController::class, 'kelolaBarang'])->name('keloalaBarang');

// Route::post('/kelolaBarang', [KelolaBarangController::class, 'kelolaBarang']);
