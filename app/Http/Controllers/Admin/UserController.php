<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User as Users;
use Redirect;
use Session;

class UserController extends Controller
{

    


    public function dashboard()
    {
        if( Session::has('user_id')){
            if(session('user_type') == 0)
            {
                return Redirect::back(); 
            }
        }else{
            Redirect::to('/')->send();
        }
        $user_data = Users::where('id', session('user_id'))->get();
        return view('admin/dashboard',compact('user_data'));
    }
    
    public function all_users()
    {
       
        if( Session::has('user_id')){
            if(session('user_type') == 0)
            {
                return Redirect::back(); 
            }
        }else{
            Redirect::to('/')->send();
        }
        $user_data = Users::paginate(5);
        return view('admin/all_users',compact('user_data'));
    }

    
    public function activate($id)
    {
        
        if( Session::has('user_id')){
            if(session('user_type') == 0)
            {
                return Redirect::back(); 
            }
        }else{
            Redirect::to('/')->send();
        }
        DB::table('users')
        ->where('id',$id)
        ->update(['status' => 1]);
        session()->flash('message', 'Updated Successfully');
        session()->flash('alert-class', 'alert-success');
        return Redirect::back(); 
    }

    public function deactivate($id)
    {
        if( Session::has('user_id')){
            if(session('user_type') == 0)
            {
                return Redirect::back(); 
            }
        }else{
            Redirect::to('/')->send();
        }
        DB::table('users')
        ->where('id',$id)
        ->update(['status' => 0]);
        session()->flash('message', 'Updated Successfully');
        session()->flash('alert-class', 'alert-success');
        return Redirect::back(); 
    }
   
}
