<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserRegistrationController extends Controller
{
    //insert registration details

    public function showRegistrationForm()
    {
        return view('frontend.register');
    }

    /**
     * Submit registration details
     * @param  Request $request
     *
     */
    public function submitForm(Request $request)
    {
        $request->validate([
            'phone_number'=>'required|unique:users,mobile',
        ]);
        $data = [
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=> $request->email,
            'mobile'=>$request->phone_number,
        ];
        User::create($data);
        return redirect()->route('registration.form')->with('success', 'Registration successful!');
    }
}
