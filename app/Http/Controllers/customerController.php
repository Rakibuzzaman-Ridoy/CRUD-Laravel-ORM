<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class customerController extends Controller
{
    public function insertCustomerFormOpen()
    {
        return view('insertCustomerFormOpen');
    }

    public function insertCustomerFormOpenPost(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate([
            "name"=>"required|string",
            "email"=>"email",
            "password"=>"required|confirmed",
            "password_confirmation"=>"required",
            "country"=>"required|string",
            "state"=>"required|string",
            "address"=>"required",
            "dob"=>"required|date",
            "gender"=>"required"
           ]);

           $customer = New Customer;
           $customer->customer_name                     = $request['name'];
           $customer->email                             = $request['email'];
           $customer->password                          = md5($request['password']);
           $customer->password_confirmation             = md5($request['password_confirmation']);
           $customer->gender                            = $request['gender']; 
           $customer->dob                               = $request['dob'];
           $customer->country                           = $request['country'];
           $customer->state                             = $request['state'];
           $customer->address                           = $request['address'];
           $customer->save();

           return redirect('/customerDataShow');
        
    }

    public function customerDataShow()
    {
        $customer = Customer::all();
        $data = compact('customer');
        return view('customerDataShow')->with($data);
    }

    public function customerDataDelete($id)
    {
                    //Type 1
        // Customer::find($id)->delete();
        // return redirect()->back();

                    //Type 2
        $customer = Customer::find($id);
        if(!is_null($customer))
        {
            $customer->delete();
            return redirect('/customerDataShow');
        }
        else
        {
            return redirect('/customerDataShow');
        }
    }

    public function customerDataEdit($id)
    {
        $customer = Customer::find($id);
        $data = compact('customer','id');

        if(is_null($customer))
        {
            return redirect('/customerDataShow');
        }
        else
        {
            return view('customerDataUpdate')->with($data);
        }
        
    }


    public function customerDataUpdate(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->customer_name                     = $request['name'];
        $customer->email                             = $request['email'];
        $customer->gender                            = $request['gender']; 
        $customer->dob                               = $request['dob'];
        $customer->country                           = $request['country'];
        $customer->state                             = $request['state'];
        $customer->address                           = $request['address'];
        $customer->save();

        return redirect('/customerDataShow');

    }

    
}
