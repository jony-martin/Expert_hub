<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::resource('profile', ProfileController::class);

    // product routes
    Route::resource('products', ProductController::class);

});