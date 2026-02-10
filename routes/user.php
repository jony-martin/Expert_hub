<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','user'])->group(function () {

    Route::get('/user/dashboard', [AdminController::class, 'index'])->name('user.dashboard');

    // product routes
    Route::resource('products', ProductController::class);

});