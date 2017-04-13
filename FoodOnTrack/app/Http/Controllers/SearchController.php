<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Train;
use \App\Cross;
use \App\Restaurant;
use DB;

class SearchController extends Controller
{
    
public function search(Request $request)
{

     $q=$request->input('searchtr');
    

     $tra = DB::table('crosses')
            ->join('trains', 'crosses.train_no', '=', 'trains.train_no')
            ->join('stations','crosses.stn_id', 'LIKE', 'stations.stn_id')->get();
           // return $tra;

    $tras=$tra->where('train_no','=',$q);
   // $stas=$tras->get(['stn_name']);
    //return $tras;
    // $stas=Cross::where('train_no','=',$tras[0]->train_no)->orderBy('time','ASC')->get();  
    // $name=DB::->join('station','stas.stn_id','LIKE','station.stn_id')->get();
    return view('trains',compact('tras'));

}

public function station($stn_id){


     $sta=Restaurant::where('stn_id',$stn_id)->get();
     //return $sta;
     return view('rest',compact('sta'));




}


public function restaur($rest_id)
{

 $foos = DB::table('contains')
            ->join('restaurants', 'contains.rest_id', '=', 'contains.rest_id')
            ->join('foods', 'contains.dish_id', '=', 'foods.dish_id')->get();
  

  $foo=$foos->where('rest_id','=',$rest_id);
  //return $foo;
  return view('menu',compact('foo'));



}




}
