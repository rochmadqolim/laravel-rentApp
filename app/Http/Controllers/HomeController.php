<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        $title = "Dashboard";
        return view('dashboard',['title'=> $title]);
    }
    public function logs()
    {
        $title = "Rent Logs";
        return view('logs',['title'=> $title]);
    }
    public function rent()
    {
        $title = "Rent Form";
        return view('rent',['title'=> $title]);
    }
    public function approval()
    {
        $title = "Approval";
        return view('approved',['title'=> $title]);
    }
}