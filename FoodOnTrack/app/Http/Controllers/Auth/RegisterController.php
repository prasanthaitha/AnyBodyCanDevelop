<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Station;
use App\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rest_name' => 'required|string|max:255',
            'station_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $s=$data['station_name'];
        $sid = Station::where('stn_name','LIKE',$s)->get();

        $rest = new \App\Restaurant;
     
        $rest->rest_name=$data['rest_name'];
        $rest->stn_id=$sid[0]->stn_id;
        $rest->save();

        $r = Restaurant::all()->last()->rest_id;

        return User::create([
            'rest_id' => $r,
            'stn_id' => $sid[0]->stn_id,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
