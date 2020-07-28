<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as Users;
use Redirect;
use Session;


class RegistrationController extends Controller
{


    // public function __construct()
    // {
       
    //     if( Session::has('user_id')){
            
    //     }else{
    //         Redirect::to('/')->send();
    //     }
       
    // }


    public function register(Request $request)
    {
        $data = Users::where('email', $request->input('email'))->get();
        if(!$data->isEmpty()){
          session()->flash('message', 'Email already Exist');
          session()->flash('alert-class', 'alert-danger');
          return Redirect::back(); 
        }
        if($request->input('password') != $request->input('c_password')){
          session()->flash('message', 'Password Doesnot Match');
          session()->flash('alert-class', 'alert-danger');
          return Redirect::back(); 
        }
        $Users = new Users;

        $Users->name        = $request->input('name');
        $Users->email       = $request->input('email');
        $Users->password    = md5($request->input('password'));
        $Users->address    = $request->input('address');
        $Users->status      = 1;
        $Users->user_type      = 0;

        $Users->save();
        $user_data = Users::where('email', $request->input('email'))->get();
       
        Session(['user_id' => $user_data[0]->id,
        'name' => $user_data[0]->name,
        'email' => $user_data[0]->email,
        'user_type' => $user_data[0]->user_type,
      ]);
      return redirect('user/profile');
    }
}
