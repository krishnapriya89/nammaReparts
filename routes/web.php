<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Route;

require __DIR__ . '/admin.php';

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home'])->name('home');


 //submit registration details
 Route::post('registration',[UserRegistrationController::class,'submitForm'])->name('registration.submit');
 //login
 Route::post('login',[LoginController::class,'login'])->name('login');
 // otp verification
 Route::post('verify-otp',[LoginController::class,'verifyOtp'])->name('verify-otp');
