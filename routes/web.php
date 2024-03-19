<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PurchaseDetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['web'])->group(function () {

    Route::middleware(['auth', 'auth.redirect'])->group(function () {
        Route::get('/cars', function () {
            return view('cars');
        })->name('cars');

        Route::get('/manufacturers', function () {
            return view('manufacturers');
        })->name('manufacturers');
        
        Route::get('/purchase', function () {
            return view('purchase');
        })->name('purchase');
        

        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');

        Route::post('/purchase', [PurchaseDetailsController::class, 'store']);


    });

    Route::post('/register', [CustomersController::class, 'register']);
    
    Route::post('/login', [CustomersController::class, 'login']);
    
    Route::post('/logout', [CustomersController::class, 'logout']);
    
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/home', function () {
        return view('home');
    })->name('home');
    
});