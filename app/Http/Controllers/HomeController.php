<?php

namespace App\Http\Controllers;

use App\Exports\RentExport;
use App\Models\Brand;
use App\Models\Driver;
use App\Models\Rent;
use App\Models\Role;
use App\Models\Unit;
use App\Models\User;
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
        $auth = Auth::user();

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
            'auth' => $auth, 
            'success' => $success, 
        ]);
    }

    public function form(Request $request)
    {
        $title = "Form";
        $auth = Auth::user();

        $rents = new Rent();
        if ($request->get('search')) {
            $rents = $rents->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        $rents = $rents->get();

        $units = Unit::orderBy('status', 'asc')
             ->orderBy('name', 'asc')
             ->get();
        
        $drivers = Driver::where('status', 'Available')
             ->orderBy('name', 'asc')
             ->get();

        
        return view('form',['title'=> $title, 'units'=> $units, 'drivers'=> $drivers, 'auth' => $auth, 'rents'=> $rents]);
    }
    

    public function user(Request $request)
    {
        $title = "User Setting";
        $auth = Auth::user();
        $roles = Role::all();

    
        $users = new User();
        if ($request->get('search')) {
            $users = $users->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        $users = $users->get();
    
        return view('user', ['title' => $title, 'users' => $users , 'auth' => $auth , 'roles' => $roles]);
    }
    
    public function driver(Request $request)
    {
        $title = "Driver";
        $auth = Auth::user();
    
        $drivers = new Driver;
        if ($request->get('search')) {
            $drivers = $drivers->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        $drivers = $drivers->orderBy('name', 'asc')->get();
    
        return view('driver', ['auth' => $auth, 'title' => $title, 'drivers' => $drivers]);
    }
    
    

    public function unit(Request $request)
    {
        $title = "Unit";
        $auth = Auth::user();
        $brands = Brand::all();

        $units = new Unit();
        if ($request->get('search')) {
            $units = $units->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        $units = $units->orderBy('name', 'asc')->get();
    
        return view('unit', ['auth' => $auth, 'title' => $title, 'units' => $units, 'brands' => $brands]);
    }

    public function log()
    {
        $title = "Log";
        $auth = Auth::user();

        $rents = Rent::orderBy('updated_at', 'desc')->get();

    
        return view('log', ['title' => $title, 'rents' => $rents, 'auth' => $auth]);
    }
    
    public function approval(Request $request)
    {
        $title = "Approval";
        $auth = Auth::user();


        $rents = new Rent();
        if ($request->get('search')) {
            $rents = $rents->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        $rents = $rents->get();
        
        return view('approval', ['title' => $title, 'rents' => $rents, 'auth' => $auth]);
        
    }
    

    public function export(){
        return Excel::download(new RentExport, 'rent-list-'.Carbon::now()->toDateTimeLocalString().'.xlsx');
    }
}