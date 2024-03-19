<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseDetails;

class PurchaseDetailsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'car_model' => 'required|string',
            'car_color' => 'required|string',
            'car_price' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'contact_number' => 'required|string',
        ]);

        $purchaseDetails = PurchaseDetails::create([
            'car_model' => $validatedData['car_model'],
            'car_color' => $validatedData['car_color'],
            'car_price' => $validatedData['car_price'],
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'contact_number' => $validatedData['contact_number'],
        ]);
        // Create a new purchase details record in the database
        // $purchaseDetails = PurchaseDetails::create($validatedData);

        // Optionally, you can return a response or redirect the user
        return redirect()->route('purchase');
    }
}
