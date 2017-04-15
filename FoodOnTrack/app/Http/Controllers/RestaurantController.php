<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{

 public function book(Request $request)
    {   $sum=0;
     
    $i=1;
    
    for($i=1;$i<20;$i=$i+1){
    $q[$i]=$request->input($i);
    
    $r[$i]=$request->input(-$i);
     
    $sum= $sum + ($q[$i]*$r[$i]);
    }
    $a=1;
    return  view('menu',compact('q','r','sum','a'));

    }
}
