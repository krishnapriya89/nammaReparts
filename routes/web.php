<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Route;

require __DIR__ . '/admin.php';


//home page
Route::get('/',[HomeController::class,'home'])->name('home');
 //listing page
 Route::get('/listing-page',[HomeController::class,'listingPage'])->name('listing-page');


 //submit registration details
 Route::post('registration',[UserRegistrationController::class,'submitForm'])->name('registration.submit');
 //login
 Route::post('login',[LoginController::class,'login'])->name('login');
 // otp verification
 Route::post('verify-otp',[LoginController::class,'verifyOtp'])->name('verify-otp');

