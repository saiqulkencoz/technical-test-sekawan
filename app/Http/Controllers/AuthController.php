<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;

class AuthController extends Controller
{
    public function login(){
        return view('master.login');
    }
    public function postlogin(Request $request){
        // return dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            if(Auth()->user()->name=="Admin"){
                return redirect('/kendaraan');
            }
            if(Auth()->user()->name=="Manager A"){
                return redirect('/request-a');
            }
            else{
                return redirect('/request-b');
            }
        }
        return redirect('/login');
    }
    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
