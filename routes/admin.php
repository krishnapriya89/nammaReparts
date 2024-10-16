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
        //select category under vehicle model-ajax call
        Route::get('categories', [VehicleModelController::class, 'getCategory'])->name('categories');
        //select sub categories under category-ajax call
        Route::get('subcategories',[VehicleModelController::class,'getSubcategory'])->name('subcategories');
        
        Route::get('categories_update', [VehicleModelController::class, 'getCategory_update'])->name('categories_update');
        //select sub categories under category-ajax call
        Route::get('subcategories_update',[VehicleModelController::class,'getSubcategory_update'])->name('subcategories_update');
        //parts specification for vehicle parts
        Route::resource('part_specification',PartsSpecificationController::class);

        //get vehicle model  -ajax call
        Route::get('get-model',[PartsSpecificationController::class,'getModels'])->name('get-model');
        //get categories under model-ajax call
        Route::get('get-category',[PartsSpecificationController::class,'getCategory'])->name('get-category');
        //get subcategories under category -ajax call
        Route::get('get-subcategory',[PartsSpecificationController::class,'getSubCategory'])->name('get-subcategory');
        //get parts according to category and sub category
        Route::get('get-parts',[PartsSpecificationController::class,'getParts'])->name('get-parts');

    });
});
