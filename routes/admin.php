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
        // vehicle crud
        Route::get('vehicle', [VehicleController::class, 'vehicle'])->name('admin.vehicle');
    });
});
