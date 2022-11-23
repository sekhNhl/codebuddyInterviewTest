<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
class LoginController extends Controller
{
    public function login_form(Request $request){
        $password=$request->password;
        $user=User::where('email',$request->email)->first();
        if (Hash::check($password, $user->password)&&($user->role_id==1)) {
            $user=User::where('email',$request->email)->first();
            $name=$user->name;
            $request->Session()->put('login_id',$user->id);
            return redirect('dashoboard_admin')->with(Session::put('name',$name)); 
        }
        if (Hash::check($password, $user->password)&&($user->role_id==2)) {
            $user=User::where('email',$request->email)->first();
            $name=$user->name;
            $request->Session()->put('login_id',$user->id);            
            return redirect('dashoboard_user')->with(Session::put('name',$name));
        }
       
    }

    public function dashboard_admin(){
        return view('admin');
    }
    public function dashboard_user(){
        return view('user');
    }
}
