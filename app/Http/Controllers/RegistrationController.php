<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class RegistrationController extends Controller
{
   public function index(){
    return view('registration');
   }
   public function login(){
    return view('login');
   }
   public function regd_data(Request $request){
    
    $data=array('name'=>$request->username,'email'=>$request->email,'password'=>Hash::make($request->password),'role_id'=>$request->role_id);
    $getter=User::create($data);
    if($getter){
        return back()->with('message','Registration successfully !!Thank You');
    }
   }
   
}
