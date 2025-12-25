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
        $email = $request->email; 
        $password = $request->password; 
        $credentials = ['email'=>$email,'password'=>$password] ;
        if(Auth::attempt($credentials)){
            $request->session()->regenerate() ;
            if(Auth::user()->email_verified_at!==Null) {
                return to_route('publications.index')->with('success',"You are now connected.") ; 
            }else{
                Auth::logout() ; 
                return back()->withErrors([
                    'email'=>'Please verify your email first' 
                ])->onlyInput();
            } ;
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
        return to_route('publications.index')->with('success','Your Logout') ; 
    }
}
