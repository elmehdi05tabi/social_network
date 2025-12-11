<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show () {
        return view('login.login') ;
    }
    public function login (Request $request) {
        $email = $request->email ; 
        $password = $request->password ; 
        $credentials = ['email'=>$email,'password'=>$password] ;
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate() ; 
            return to_route('profiles.index')->with('success','Good Connection') ; 
        }else {
            return back()->withErrors([
                'email'=>'Email Or Password Increct' 
            ])->onlyInput('email') ;
        } ; 
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate() ;
        $request->session()->regenerateToken() ; 
        return to_route('profiles.index')->with('success','Your Logout') ; 
    }
}
