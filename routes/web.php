<?php

use App\Http\Controllers\KeranjangController;
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

// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/coba', [App\Http\Controllers\CobaController::class, 'coba'])->name('coba');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'show'])->name('cart');

Route::get('/kelolaPesanan', [App\Http\Controllers\PesananController::class, 'show'])->name('kelolaPesanan');

Route::get('/laporanTransaksi', [App\Http\Controllers\TransaksiController::class, 'show'])->name('laporanTransaksi');

// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class])->name('register');

Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/cart/add',[KeranjangController::class, 'addToCart'])->name('cart.add');
Route::get('/show-cart', [KeranjangController::class,'showCart'])->name('cart.show');
Route::get('/test-cart', function (){
    return view('product');
});

