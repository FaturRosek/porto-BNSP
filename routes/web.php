<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', [LandingController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/proseslogin', [LoginController::class, 'autentikasi']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
// Route::post('/store', [ProdukController::class, 'store'])->name('store');
Route::resource('/produk', ProdukController::class);
