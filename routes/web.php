<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLoginMiddleware;

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
Route::match(['get', 'post'], '/registration', [ProductController::class, 'registration'])->name('registration');
Route::match(['get', 'post'], '/login', [UserController::class, 'login'])->name('login');
Route::get('/',[ProductController::class, 'index'])->name('product');
Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::post('/addToCart',[ProductController::class, 'addToCart'])->name('addToCart');
Route::get('/items', [ProductController::class, 'cartItem'])->name('items');
Route::get('/logout', [ProductController::class, 'logout'])->name('logout');
Route::get('/cartList', [ProductController::class, 'cartList'])->name('cartList');
Route::get('/removeCart/{id}', [ProductController::class, 'removeCart'])->name('removeCart');
Route::get('/orderNow', [ProductController::class, 'orderNow'])->name('orderNow');
Route::post('/orderPlays', [ProductController::class, 'orderPlays'])->name('orderPlays');
Route::get('/ordersList', [ProductController::class, 'ordersList'])->name('ordersList');
