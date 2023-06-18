<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KelolaBarangController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LiveChatController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/account', function () {
    return view('account');
})->middleware('auth');

Route::get('/update-account', function () {
    return view('updateAccount');
})->middleware('auth');

Route::get('/home', function () {
    return redirect('/');
})->name('home');

Route::get('/contact-us', function () {
    return view('contactUs');
})->middleware('auth');

Route::delete('/data/{id}', [DataController::class, 'destroy'])->name('data.destroy')->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('kelolaBarang', KelolaBarangController::class);

Route::post('register', [RegisterController::class, 'register'])->name('register-otp');

Route::get('/otp', [OTPController::class, 'show'])->name('verification-get');
Route::post('/otp', [OTPController::class, 'verify'])->name('verification-post');

Route::get('/live-chat/{user_id}', [LiveChatController::class, 'index']);
