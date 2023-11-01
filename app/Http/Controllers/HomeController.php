<?php

namespace App\Http\Controllers;

use App\Exports\RentExport;
use App\Models\Driver;
use App\Models\Rent;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

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
        $unitUsed = Unit::where('status', 'Unit Not Available')->count();
        $unitReady = Unit::where('status', 'Unit Available')->count();
        $drivers = Driver::count();
        $driverReady = Driver::where('status', 'Available')->count();
        $rents = Rent::count();
        $success = Rent::where('status', 'Returned')->count();

        return view('dashboard', [
            'title' => $title,
            'units' => $units,
            'unitUsed' => $unitUsed, 
            'unitReady' => $unitReady, 
            'drivers' => $drivers,
            'driverReady' => $driverReady,
            'rents' => $rents,
            'name' => $name, 
            'success' => $success, 
        ]);
    }

    
    public function rentForm()
    {
        $title = "Rent Form";
        $name = Auth::user()->name;

        $units = Unit::orderBy('status', 'asc')
             ->orderBy('name', 'asc')
             ->get();
        
        $drivers = Driver::where('status', 'Available')
             ->orderBy('name', 'asc')
             ->get();

        
        return view('rentForm',['title'=> $title, 'units'=> $units, 'drivers'=> $drivers, 'name' => $name]);
    }
    public function returnForm()
    {
        $title = "Return Form";
        $name = Auth::user()->name;

        $rents = Rent::all();
        
        return view('returnForm',['title'=> $title, 'rents'=> $rents, 'name' => $name]);
    }

    public function rentLog()
    {
        $title = "Rent Log";
        $name = Auth::user()->name;

    
        $rents = Rent::orderBy('updated_at', 'desc')->get();

    
        return view('rentLog', ['title' => $title, 'rents' => $rents , 'name' => $name]);
    }

    public function returnLog()
    {
        $title = "Renturn Log";
        $name = Auth::user()->name;

        $rents = Rent::orderBy('updated_at', 'desc')->get();

    
        return view('returnLog', ['title' => $title, 'rents' => $rents, 'name' => $name]);
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

    public function export(){
        return Excel::download(new RentExport, 'rent-list-'.Carbon::now()->toDateTimeLocalString().'.xlsx');
    }
}