<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
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

// Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::get("/register",[UserController::class,'register']);
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

Route::get('dashboard', [AccountController::class, 'dashboard']); 
Route::get('order/history', [AccountController::class, 'myAccount']); 
Route::get('account/detail', [AccountController::class, 'accDetails']); 



//ADMIN SIDE
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

//Product
Route::get('product', [AdminController::class, 'viewProduct']);
Route::get('product/add', [AdminController::class, 'addProduct']);
Route::post('product/store', [AdminController::class, 'storeProduct']);
// Route::get('product/edit/{id}', [AdminController::class, 'editProduct']);
Route::get('product/delete/{id}', [AdminController::class, 'deleteProduct']);

//Combo
Route::get('combo', [AdminController::class, 'viewCombo']);
Route::get('combo/add', [AdminController::class, 'addCombo']);
// Route::get('combo/edit/{id}', [AdminController::class, 'editCombo']);
// Route::get('combo/delete/{id}', [AdminController::class, 'deleteCombo']);

//Slider
Route::get('slider', [AdminController::class, 'viewSlider']);
Route::get('slider/add', [AdminController::class, 'addSlider']);
// Route::get('slider/edit/{id}', [AdminController::class, 'editSlider']);
// Route::get('slider/delete/{id}', [AdminController::class, 'deleteSlider']);

//Order
Route::get('order', [AdminController::class, 'viewOrder']);


//Feedback
Route::get('feedback', [AdminController::class, 'viewFeedback']);
