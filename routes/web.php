<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});

Route::get('/account', function () {
    return view('account');
});




//Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::resource('products', ProductController::class);
Route::resource('users', UserController::class);

Route::get('/admin_products', [ProductController::class, 'addProducts'])->name('addProducts');
Route::post('/logout', function () {
    session()->flush();
    return redirect('/account')->with('success', 'You have been logged out.');
})->name('logout');

/*Route::post('/verify-otp', [UserController::class, 'verifyOtp']);
Route::get('/verify-otp', function () {
    return view('verify_otp');
});*/
//Auth::Routes([
    //veri
//]);


