<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Route;

require __DIR__ . '/admin.php';


//home page
Route::get('/', [HomeController::class, 'home'])->name('home');
//listing page
Route::get('/listing-page/{id}', [HomeController::class, 'listingPage'])->name('listing-page');
// part listing
Route::get('/part_listing/{id}',[HomeController::class,'partListing'])->name('part_listing');


//submit registration details
Route::post('registration', [UserRegistrationController::class, 'submitForm'])->name('registration.submit');
//login
Route::post('login', [LoginController::class, 'login'])->name('login');
// otp verification
Route::post('verify-otp', [LoginController::class, 'verifyOtp'])->name('verify-otp');
//logout

Route::post
('/logout',[LoginController::class,'logout'])->name('logout');
