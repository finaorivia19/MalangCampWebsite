<?php

use Illuminate\Support\Facades\Route; 
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/coba', function () {
//     return view('coba');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/coba', [App\Http\Controllers\CobaController::class, 'coba'])->name('coba');

// Route::get('/kelolaBarang', function () {
//     return view('kelolaBarang');
// });

Route::resource('kelolaBarang', KelolaBarangController::class);

// Route::get('/kelolaBarang', [App\Http\Controllers\KelolaBarangController::class, 'kelolaBarang'])->name('keloalaBarang');

// Route::post('/kelolaBarang', [KelolaBarangController::class, 'kelolaBarang']);

// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class])->name('register');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();