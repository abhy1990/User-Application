<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as Users;
use Redirect;
use Session;

class LoginController extends Controller
{



    //Login For admin and users
    public function login(Request $request)
{
    
  $user_data = Users::where('email', $request->input('email'))->where('password',md5($request->input('password')))->where('status',1)->get();


    if(!$user_data->isEmpty()){

        if($user_data[0]->user_type == 1)
        {
            Session(['user_id' => $user_data[0]->id,
            'name' => $user_data[0]->name,
            'email' => $user_data[0]->email,
            'user_type' => $user_data[0]->user_type,
          ]);
          
            session()->flash('message', 'Login Successfull');
            session()->flash('alert-class', 'alert-success');
            return redirect('admin/dashboard');
          
        }else if($user_data[0]->user_type == 0)
        {
            Session(['user_id' => $user_data[0]->id,
            'name' => $user_data[0]->name,
            'email' => $user_data[0]->email,
            'user_type' => $user_data[0]->user_type,
          ]);
            session()->flash('message', 'Login Successfull');
            session()->flash('alert-class', 'alert-success');
            return redirect('user/profile');
           
        }
            
        }
        else{
           
            session()->flash('message', 'Please Check Credentials');
            session()->flash('alert-class', 'alert-danger');
            return Redirect::back();
        } 

}

public function logout()
{
  session()->flush();  
  session()->flash('message', 'You have been successfully Loggedout');
  session()->flash('alert-class', 'alert-success');
  Redirect::to('/')->send();
}

}
