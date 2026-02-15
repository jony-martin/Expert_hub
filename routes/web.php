<?php

use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('auth.register');
// });

Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index')->name('home');
    Route::get('/shop', 'shop')->name('shop');

    // product details route
    Route::resource('product', ProductController::class);

});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::resource('profile', ProfileController::class);

});
