<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Route;

require __DIR__ . '/admin.php';


//home page
Route::get('/', [HomeController::class, 'home'])->name('home');
//listing page
Route::get('/listing-page', [HomeController::class, 'listingPage'])->name('listing-page');
//details 1 page
Route::get('/details_one', [HomeController::class, 'detailsOne'])->name('details_one');
//details 2 page
Route::get('/details_two', [HomeController::class, 'detailsTwo'])->name('details_two');
//details 3 page
Route::get('/details_three', [HomeController::class, 'detailsThree'])->name('details_three');
//details 4 page
Route::get('/details_four', [HomeController::class, 'detailsFour'])->name('details_four');
//details 5 page
Route::get('/details_five', [HomeController::class, 'detailsFive'])->name('details_five');
//shipping address page
Route::get('/shipping_address', [HomeController::class, 'shippingAddress'])->name('shipping_address');


//submit registration details
Route::post('registration', [UserRegistrationController::class, 'submitForm'])->name('registration.submit');
//login
Route::post('login', [LoginController::class, 'login'])->name('login');
// otp verification
Route::post('verify-otp', [LoginController::class, 'verifyOtp'])->name('verify-otp');
