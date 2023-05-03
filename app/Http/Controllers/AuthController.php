<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');

    }

    public function register(){
        return view('auth.register');
    }

    public function Logout(){
        Auth::Logout();
        return redirect('/login');
    }

    public function postregister(Request $request){
       $user = new \App\Models\User;
       $user->role ="pegawai";
       $user->email =$request->email;
       $user->password =bcrypt($request->password);
       $user->nama =$request->nama;
       $user->alamat =$request->alamat;
       $user->notlpon =$request->notlpon;
       $user->save();

       return redirect('/login');
    }   
    
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');
        }
        return redirect('/dashboard');
}

}