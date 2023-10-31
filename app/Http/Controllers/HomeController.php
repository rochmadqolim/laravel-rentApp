<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Rent;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        $title = "Dashboard";
        $name = Auth::user()->name;

        $units = Unit::count();
        $drivers = Driver::count();
        $rents = Rent::count();

        return view('dashboard',['title'=> $title, 'units'=> $units, 'drivers'=> $drivers, 'rents'=> $rents, compact('name')]);
    }

    
    public function rentForm()
    {
        $title = "Rent Form";

        $units = Unit::orderBy('status', 'asc')
             ->orderBy('name', 'asc')
             ->get();
        
        $drivers = Driver::where('status', 'Available')
             ->orderBy('name', 'asc')
             ->get();

        
        return view('rentForm',['title'=> $title, 'units'=> $units, 'drivers'=> $drivers]);
    }
    public function returnForm()
    {
        $title = "Return Form";
        $rents = Rent::all();
        
        return view('returnForm',['title'=> $title, 'rents'=> $rents]);
    }

    public function rentLog()
    {
        $title = "Rent Log";
    
        $rents = Rent::orderBy('updated_at', 'desc')->get();

    
        return view('rentLog', ['title' => $title, 'rents' => $rents]);
    }

    public function returnLog()
    {
        $title = "Renturn Log";
        $rents = Rent::orderBy('updated_at', 'desc')->get();

    
        return view('returnLog', ['title' => $title, 'rents' => $rents]);
    }
    
    public function approval()
    {
        $title = "Approval";
        $role = Auth::user();
        
        $rents = Rent::with(['driver', 'unit'])
        ->orderBy('updated_at', 'desc')
        ->get();
        
        return view('approval', ['title' => $title, 'rents' => $rents, 'role' => $role]);
        
    }
}