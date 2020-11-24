<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
     public function addcustomer(){
         $customer = new customer;
         $customer->firstname = request('firstname');
        $customer->lastname = request('lastname');
        $customer->email = request('email');
        $customer->telephone = request('telephone');
        $customer->vehicle = request('vehicle');
        $customer->save();
         return redirect('/');
     }
}
