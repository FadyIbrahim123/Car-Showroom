<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Cars;
use Illuminate\Support\Facades\Auth; // Make sure to include this line

class CustomersController extends Controller
{
    public function register(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|min:2',
        ]);

        // Create a new user
        $customer = Customers::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Redirect or do something after successful registration
        return redirect()->route('cars');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

    
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->route('cars');
            } else {
                // Authentication failed...
                return redirect()->back()->withErrors(['email_login' => 'Incorrect email or password.']);
            }
        
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home'); // Change 'home' to the desired route after logout
    }

}
