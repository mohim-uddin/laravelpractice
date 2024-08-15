<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades;
use App\Http\Controllers\session;

class AuthController extends Controller
{
        public function login()
    {
        if (Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('layout.login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credential = $request->only('email','password');
        if(Auth::attempt($credential)){
           return redirect(route('dashboard'));
        }
        return redirect(route('login'))->with("error","login failed");
        
    }

    function register()
    {
        return view("layout.register");
    }
    public function registerPost(Request $request)
    {
       $request->validate([
        "fullname" => "required",
        "email" => "required",
        "password" => "required"
       ]);
       $user = new User();
       $user->name = $request->fullname;
       $user->email = $request->email;
       $user->password = $request->password;

       if($user->save()){
        return redirect(route("login"))->with("success", "user create successfully");
       }
       return redirect(route("register"))->with("errors", "faild");

      
       
    }
        function logout(){
        Auth::logout();
        return redirect(route('login'))->with("success", "user is loggod out");
    } 
 
}
