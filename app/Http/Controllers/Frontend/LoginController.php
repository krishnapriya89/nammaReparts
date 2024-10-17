<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Otplog;
use GuzzleHttp\Client;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    //login
    public function login(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|digits:10',
        ]);


        // Get the phone number and generate the OTP
        $phoneNumber = $request->phone_number;
        $user = User::where('mobile', $phoneNumber)->first();

        if (!$user) {
            // If phone number not found in the database, return error response
            return response()->json([
                'success' => false,
                'message' => 'Phone number not registered. Please sign up first.',
            ], 404);
        }
        $otp = rand(1000, 9999);
        $expiryTime = Carbon::now()->addMinutes(7);

        // Log OTP generation (optional)
        Log::info("Generated OTP: $otp for phone number: $phoneNumber");

        // Store OTP in the database (optional if you have a table for OTP logs)
        // You can create a model for Otplog and use it like this
        Otplog::create([
            'phone_number' => $phoneNumber,
            'otp' => $otp,
            'expiry_time' => $expiryTime
        ]);

        // Send the OTP to the phone number via Kaleyra API
        try {
            $client = new Client();
            // $url = 'https://api.kaleyra.io/v1/' . env('KALEYRA_ACCOUNT_ID') . '/messages';

            $url = 'https://api.kaleyra.io/v1/' . config('services.kaleyra.account_id') . '/messages';

            $response = $client->post($url, [
                'headers' => [
                    'api-key' => config('services.kaleyra.api_key'),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'to' => '91' . $phoneNumber, // Make sure to prepend '91' for Indian numbers or other country codes.
                    'sender' => config('services.kaleyra.sender_id'),
                    'body' => 'Dear Customer, Your OTP is ' . $otp . '. Treat this as confidential - AAKRI',
                    'type' => 'TXN', // Transactional SMS type
                    'template_id' => config('services.kaleyra.template_id'),
                ],
            ]);

            $responseData = json_decode($response->getBody(), true);

            if ($response->getStatusCode() == 202 || $response->getStatusCode() == 200 && isset($responseData['data'])) {
                return response()->json(['success' => true, 'message' => 'OTP sent successfully!']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to send OTP.'], 500);
            }
        } catch (\Exception $e) {
            Log::error('Kaleyra API Error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    //verify otp
    public function verifyOtp(Request $request)
    {
        $otp = $request->otp;
        $phone_number = $request->phone_number;

        $verify_otp = Otplog::where('phone_number', $phone_number)
            ->where('otp', $otp)
            ->where('expiry_time', '>', Carbon::now())
            ->first();

        if ($verify_otp) {
            Log::info('OTP verification successful', [
                'phone_number' => $phone_number,
                'otp' => $otp,
            ]);

            $user = User::where('mobile', $phone_number)->first();
            Auth::login($user);

            return response()->json(['success' => true, 'message' => 'OTP verified successfully','user_id'=>$user->id,'user_name' => $user->first_name,]);
        } else {
            Log::warning('OTP verification failed', [
                'phone_number' => $phone_number,
                'otp' => $otp,
                'current_time' => Carbon::now(),
            ]);
            return response()->json(['success' => false, 'message' => 'Invalid or expired OTP'], 400);
        }
    }

    //logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}
