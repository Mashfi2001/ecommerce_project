<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SaleController;


Route::get('/', function () {
    return view('home');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');


Route::get('/storage', function () {
    $products = Product::all();
    return view('storage', compact('products'));
});

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::resource('products', ProductController::class);
Route::resource('users', UserController::class);

Route::get('/admin_products', function () {
    return view('add_product');
});

Route::post('/logout', function () {
    session()->flush();
    return redirect('/account')->with('success', 'You have been logged out.');
})->name('logout');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/increase', [CartController::class, 'increase'])->name('cart.increase');
Route::post('/cart/decrease', [CartController::class, 'decrease'])->name('cart.decrease');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
/*Route::post('/verify-otp', [UserController::class, 'verifyOtp']);
Route::get('/verify-otp', function () {
    return view('verify_otp');
});*/
//Auth::Routes([
    //veri
//]);


