<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Admin;
use DB;

class toeditcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $users = DB::table('users')
            ->join('restaurants', 'users.rest_id', '=', 'restaurants.rest_id')
            ->join('stations','users.stn_id', 'LIKE', 'stations.stn_id')->get();


        return view('admin.toedit.edit',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.toedit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('users')
            ->join('restaurants', 'users.rest_id', '=', 'restaurants.rest_id')
            ->join('stations','users.stn_id', 'LIKE', 'stations.stn_id')->get();

        $users = $user->where('id','=',$id);

        return view('admin.toedit.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::where('id','=',$id)->get();
        return view('admin.toedit.edit1',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = User::where('id','=',$id)->get();
        // return $request->status;
        $i = $request->status;
        DB::table('users')->where('id',$id)->update(['status' => $i]);
        return redirect('/toedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
