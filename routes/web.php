<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use Illuminate\Http\Request; 
use App\Http\Controllers\KelolaBarangController;
use App\Http\Controllers\DataController;

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
});

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

Route::get('/kelolaPaket', function () {
    return view('kelolaPaket');
});

Route::get('/paketDetail', function () {
    return view('paketDetail');
});

Route::get('/paketDetailMember', function () {
    return view('paketDetailMember');
});

Route::get('/updatePaket', function () {
    return view('updatePaket');
});

Route::get('/tambahPaket', function () {
    return view('tambahPaket');
})->name('tambah-paket');

// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/data/{id}', 'DataController@destroy')->name('data.destroy');


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

Auth::routes();

Route::resource('paket', PaketController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
