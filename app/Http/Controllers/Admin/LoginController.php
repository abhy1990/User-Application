<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
      
     $user_data = Customers::where('email', $request->input('email'))->where('password',md5($request->input('password')))->get();
    
    
        if(!$user_data->isEmpty()){
          if(session()->has('brand')){
          $Customer_vehicles = new Customer_vehicles;
    
        
          $Customer_vehicles->userid    =  $user_data[0]->id;
          $Customer_vehicles->brand    =   session('brand');
          $Customer_vehicles->model    =   session('model');
          $Customer_vehicles->year    =  session('year');
          $Customer_vehicles->engine    = session('engine');
          $Customer_vehicles->save();
    
          $zip_details        =   explode(',',session('zipcode'));
          $zip_code           =   $zip_details[0];
          $street             =   $zip_details[1];
          $city               =   $zip_details[2];
          $county             =   $zip_details[3];
          $Customer_requests = new Customer_requests;
    
          $Customer_requests->zipcode             =  session('zipcode');
          $Customer_requests->userid              =  $user_data[0]->id;
          $Customer_requests->vehicle_id          =  $Customer_vehicles->id;
          $Customer_requests->mileage             =  session('mileage');
          $Customer_requests->trim                =   session('trim');
          $Customer_requests->selected_service    =   session('selected_service');
          $Customer_requests->request_date        =  date('Y-m-d H:i:s');
          $Customer_requests->zipcode_only        =  $zip_code;
          $Customer_requests->save();
          session()->flush();
          }
    
    
            Session(['user_id' => $user_data[0]->id,
            'name' => $user_data[0]->name,
            'email' => $user_data[0]->email,
            'phone' => $user_data[0]->phone_number,
            'file' =>$user_data[0]->file,
          ]);
            $data = $request->session()->all();
           
            return redirect('car_user/dashboard');
          }else{
            session()->flash('message', 'Please Check Credentials');
            session()->flash('alert-class', 'alert-danger');
            return view('car_user/login');
          } 
           
    }
}
