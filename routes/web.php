<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartlist']);
Route::get('/cart/delete/{id}', [ProductController::class, 'cartDelete']); 
Route::get('checkout', [ProductController::class, 'checkout']); 

Route::post("checkout-detail",[ProductController::class,'checkoutDetail']);

Route::post("payment",[ProductController::class,'payment']);
Route::get('payment/status', [ProductController::class, 'paymentStatus'])->name('payment-status'); 
Route::post('user/payment/callback', [ProductController::class, 'callBack'])->name('payment-callback'); 

Route::get('orders', [ProductController::class, 'orderHistory']); 

Route::get('feedback', [ProductController::class, 'feedback']); 
