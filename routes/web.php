<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\postController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

Route::get('/', [postController::class, 'laravel']);

Route::get('/login', [loginController::class, 'index']);

Route::get('/register', [registerController::class, 'index']);

Route::post('/register/post', [registerController::class, 'store']);

Route::get('/home', [postController::class,'home']);

Route::get('/tambahProduk', [postController::class,'tambahProduk']);

Route::get('/ubahProduk', [postController::class,'ubahProduk']);

Route::get('/home/{produk:slug}', [postController::class,'produk']);

Route::get('/pedagang', [postController::class,'pedagang']);

Route::get('/dashboard/reports', [postController::class,'reports']);

Route::get('/dashboard/profiles', [postController::class,'profiles']);

Route::resource('/dashboard/orders', DashboardProdukController::class);