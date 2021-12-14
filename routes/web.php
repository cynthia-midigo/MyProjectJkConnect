<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartsController;

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



Route::get('/', [ProductsController::class, 'index']);


Auth::routes();

Route::match(['get','post'],'/cart', [CartsController::class, 'store'])->name('cart');
Route::match(['get','post'],'/checkout', [CartsController::class, 'index'])->name('checkout');
Route::match(['get','post'],'/checkout/get/items', [CartsController::class, 'getCartItemsForCheckout']);
Route::match(['get','post'],'/process/user/payment', [CartsController::class, 'processPayment']);
