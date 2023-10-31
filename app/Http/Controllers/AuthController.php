<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request){

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        
        if (Auth::attempt($credentials)) {
    
            $request->session()->regenerate();
            
            return redirect('dashboard');

        } else {
            return redirect('login');
        }
        }
    
        public function logout(Request $request) 
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerate();
            return redirect('login');    
        }
}