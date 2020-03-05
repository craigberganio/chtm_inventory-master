<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function authenticate(){

    	request()->validate([
    		'username'=>'required',
    		'password'=>'required'
    	]);


    	if(Auth::attempt([
    		'username' => request()->username, 
    		'password' => request()->password
    	])) {
    		return redirect('/dashboard');
    	}

    	return view('login')->with('error', 'Invalid Credentials');
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }
}
