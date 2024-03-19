<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user's ID matches the requested user ID
            if (Auth::user()->id == $request->route('user_id')) {
                return $next($request);
            }
        }

        // If not authorized, redirect or return an error response
        return redirect('/')->with('error', 'Unauthorized access');
    }
}
