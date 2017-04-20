<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Customer;
use \App\Placed_Order;

class RestaurantController extends Controller
{

 public function book(Request $request)
    {   $sum=0;
     
    $i=1;
    
    $customer= new Customer;
  //  $customer->c_name="ankur";
   $customer->save();


    // $placed=new PlacedOrder;
     $b = Customer::all()->last()->cust_id;

 

    for($i=1;$i<3;$i=$i+1){
        if(($request->input(-$i))!=0){
       $placed=new Placed_Order;
       $placed->cust_id = $b;
       $placed->rest_id = $request->input('rest');
       $placed->dish_id = $request->input(+$i);
       $placed->quantity=$request->input(-$i);
       $q=$request->input($i);
         $sum= $sum + ($q*$placed->quantity);
       $placed->save();

  }}
    // $q[1]=$request->input(1);
    
    //  $r[1]=$request->input(-1);
     



   // $sum= $sum + ($q[$i]*$r[$i]);
    
    $a=1;
    return  view('menu',compact('q','r','sum','a'));

    }
}
