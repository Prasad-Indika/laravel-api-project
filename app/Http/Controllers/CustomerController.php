<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Validator;

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

    public function saveCustomer(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'contact'=> 'required',
            'salary' => 'required'
        ]);

        if($validator->fails()){
           
            return 'Error';
        }else{
            $customer = new Customer;

            $customer->name=$request->name;
            $customer->contact=$request->contact;
            $customer->salary=$request->salary;

            $customer->save();

            $data = [
                "status"=>200,
                "message"=>'data successufuly Added'

            ];
            return response()->json($data,200);

        }

    }

}
