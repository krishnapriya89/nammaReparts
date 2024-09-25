<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    //Show login form
    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->intended(route('admin.login.form')); // Redirect to the admin dashboard or any other authenticated page
        }

        $encryptedEmail     = Cookie::get('reparts_email', '');
        $encryptedPassword  = Cookie::get('reparts_password', '');
        $remember           = Cookie::get('reparts_remember', false);

        $email              = $encryptedEmail ? Crypt::decrypt($encryptedEmail) : '';
        $password           = $encryptedPassword ? Crypt::decrypt($encryptedPassword) : '';

        return view('admin.auth.login', compact('email', 'password', 'remember'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);
        $credentials = $request->only('email','password');
        $remember = $request->filled('remember');
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1, 'user_type' => 'Admin'], $remember)) {
            if($remember)
            {
                $this->setRememberMeCookie($request->email, $request->password);
            }
            else{
                $this->clearRememberMeCookie();
            }
            return to_route('admin.dashboard');
        }
        else{
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);

        }
    }

    private function setRememberMeCookie($email, $password)
    {
        $encryptedEmail     = encrypt($email);
        $encryptedPassword  = encrypt($password);

        Cookie::queue('reparts_email', $encryptedEmail, 43200); // Expires in 30 days
        Cookie::queue('reparts_password', $encryptedPassword, 43200); // Expires in 30 days
        Cookie::queue('reparts_remember', true, 43200); // Expires in 30 days
    }

    private function clearRememberMeCookie()
    {
        Cookie::queue(Cookie::forget('reparts_email'));
        Cookie::queue(Cookie::forget('reparts_password'));
        Cookie::queue(Cookie::forget('reparts_remember'));
    }

    /**
     * logout
     *
     *
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login.form');
    }

}
