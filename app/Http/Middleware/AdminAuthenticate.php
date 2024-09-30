<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next):Response
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login.form');
        }

        return $next($request);

    }


    // protected function redirectTo(Request $request): ?string
    // {
    //     if (Auth::guard('admin'))
    //         return route('admin.login.form');
    //     else
    //     return $request->expectsJson() ? null : route('login');
    // }



}
