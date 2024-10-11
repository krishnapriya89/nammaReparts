<?php

namespace App\Http\Controllers\Admin;

use App\Http\Middleware\AdminAuthenticate;
// use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin-auth')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');


    // Route::middleware(['auth:admin', AdminAuthenticate::class])->group(function () {
    //     Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // });
    Route::middleware(['auth:admin', AdminAuthenticate::class])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        //vehicle brand
        Route::resource('vehicle_brand', VehicleBrandController::class);
        //vehicle model
        Route::resource('vehicle_model', VehicleModelController::class);
        //category
        Route::resource('category', CategoryController::class);
        //subcategory
        Route::resource('subcategory', SubcategoryController::class);
        //Vehicle Parts
        Route::resource('vehicle_part', VehiclePartController::class);
    });
});
