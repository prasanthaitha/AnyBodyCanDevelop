<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Customer;

class CustomerController extends Controller
{
    
    public function placed(Request $request)
    {

    $c=Customer::all()->last();

          $c->c_name=$request->input('cust_name');
          $c->c_mail=$request->input('c_mail');
          $c->c_mobile=$request->input('c_mobile');
          $c->pnr=$request->input('pnr');
          $c->coach_no=$request->input('coach_no');
          $c->seat_no=$request->input('seat_no');
           $c->save();

$b = Customer::all()->last()->cust_id;


$order=new \App\Order;
$order->cust_id= $b;
$order->bill=$request->input('sum');
$order->save();



	




    }


    // public function test(Request $request)
    // {

    //   $name1=request('q');
    //   $val = array_first($name,function())
    //   $name=request('r');
    //   return $name.'      '.$name1;
    // }
}
