<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Otplog;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;


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
        $otp = rand(1000, 9999);
        $expiryTime = Carbon::now()->addMinutes(5);

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
            // dd($responseData);
            if ($response->getStatusCode() == 202 ||$response->getStatusCode() == 200 && isset($responseData['data'])) {
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
       return $request->all();
    }

}
