<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('customer',[CustomerController::class,'getCustomers']);

Route::get('customer/{id}',[CustomerController::class,'getCustomerById']);

Route::post('customer',[CustomerController::class,'saveCustomer']);

Route::put('customer/{id}',[CustomerController::class,'updateCustomer']);

Route::delete('customer/{id}',[CustomerController::class,'deleteCustomer']);