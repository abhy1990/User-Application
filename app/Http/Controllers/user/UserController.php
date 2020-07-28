<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User as Users;
use Redirect;
use Session;
class UserController extends Controller
{
    




    public function profile()
    {
         
        if( Session::has('user_id')){
            if(session('user_type') == 1)
            {
                return Redirect::back(); 
            }
        }else{
            Redirect::to('/')->send();
        }
        $user_data = Users::where('id', session('user_id'))->get();
        return view('user/profile',compact('user_data'));
    }

    PUBLIC function edit_user(Request $request)
    {
        
        if( Session::has('user_id')){
            if(session('user_type') == 1)
            {
                return Redirect::back(); 
            }
        }else{
            Redirect::to('/')->send();
        }

        if(($request->input('password') !="")&&($request->input('password') != $request->input('c_password'))){
            session()->flash('message', 'Password Doesnot Match');
            session()->flash('alert-class', 'alert-danger');
            return Redirect::back(); 
          }
          $user_data = Users::where('id', session('user_id'))->get();
        $password = $user_data[0]->password;
        if($request->input('password') !=""){
            $password = md5($request->input('password'));
        }
        $name = $user_data[0]->image;
          if($request->file('profile_image') !=""){
            $file = $request->file('profile_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $name = str_replace(' ', '_', $name);
    
            $file->move(public_path() . '/uploads/profile', $name);
           
          }
        

        

        DB::table('Users')
      ->where('id',$request->input('id'))
      ->update(['name' => $request->input('name'),'password' =>$password ,'address' =>$request->input('address'),'image' =>$name]);
          
      session()->flash('message', 'Updated Successfully');
      session()->flash('alert-class', 'alert-success');
      return Redirect::back(); 
    }
}
