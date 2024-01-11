<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;

Route::get('/', [MenuController::class, 'index']);

// Menampilkan halaman menu makanan
Route::get('/menu/makanan', [MenuController::class, 'menuMakanan']);

// Menampilkan halaman menu minuman
Route::get('/menu/minuman', [MenuController::class, 'menuMinuman']);

// Display the order form
Route::get('/order/form', [MenuController::class, 'orderForm'])->middleware('auth');

// Handle the order submission
Route::post('/order/store', [MenuController::class, 'store'])->middleware('auth');

// Display the list of orders
Route::get('/orders', [MenuController::class, 'showOrders'])->middleware('auth');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// Menampilkan formulir login, hanya dapat diakses oleh tamu.
// Memberikan nama 'login' pada rute untuk referensi lebih mudah.
// Memerlukan pengguna untuk menjadi tamu (belum login).

Route::post('/login', [LoginController::class, 'authenticate']);
// Memproses permintaan login.

Route::post('/logout', [LoginController::class, 'logout']);
// Memproses permintaan logout.