<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Customer;

class CustomerController extends Controller
{
    

    public function placed(Request $request)
    {

    	//$cust = new Customer;


Customer::create([
          'c_name'=>request('cust_name'),
          'c_mail'=>request('c_mail'),
          'c_mobile'=>request('c_mobile'),
          'pnr'=>request('pnr'),
          'coach_no'=>request('coach_no'),
          'seat_no'=>request('seat_no');
           ]);
       $b = Customer::all()->last()->cust_id;
       
    }
}
