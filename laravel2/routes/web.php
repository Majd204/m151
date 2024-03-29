<?php

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

Route::get('/', [\App\Http\Controllers\ProductController::class, 'list']);

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'list']);

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);

Route::view('/login', 'login');

Route::view('/register', 'register');

Route::post('/store', [\App\Http\Controllers\UserController::class, 'store']);

Route::post('/logs', [\App\Http\Controllers\UserController::class, 'logs']);

Route::view('/cart', 'cart');

Route::get('/addtocart/{id}', [\App\Http\Controllers\OrderController::class, 'addtocart']);

Route::get('/ordering', [\App\Http\Controllers\OrderController::class, 'ordering']);
