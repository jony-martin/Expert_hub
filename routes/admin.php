<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\UserController;
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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //general setting route list
    Route::resource('settings', SettingsController::class);
    //resource routes
    Route::resource('users', UserController::class);
});

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {

        // product routes
        Route::resource('products', ProductController::class);
        // banner routes
        Route::resource('banners', BannerController::class);
    });
