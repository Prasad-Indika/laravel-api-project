<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function getCustomers(){
        
        $customers = Customer::all();

        $data = [
            'status' => 200,
            'customer' => $customers
        ];

        return response()->json($data,200);
    }


    public function getCustomerById($id){
        
        $customer = Customer::find($id);

        $data = [
            'status' => 200,
            'customer' => $customer
        ];

        return response()->json($data,200);
    }

}
