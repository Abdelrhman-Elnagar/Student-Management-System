<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('Auth.register');
    }
    public function registerPost(Request $request){
        // dd($request);
        $user= new User();

        $user->fName=$request->fname;
        $user->lName=$request->lname;
        $user->email=$request->email;
        // $user->password=Hash::make($request->pass);
        $user->password=$request->pass;

        $user->save();

        return to_route('login')->with('success','Register successfully');

    }
    
    public function login(){
        return view('Auth.login');
    }
    public function loginPost(Request $request){
        $inputs=[
            'email'=>$request->email,
            'password'=>$request->pass,
        ];

        if(Auth::attempt($inputs)){
            return to_route('student.index')->with('login','login success');
        }else{
            return back()->with('error','email or password error');
        }
    }



    public function logout(){
        Auth::logout();
        return to_route('login');
    }
}
