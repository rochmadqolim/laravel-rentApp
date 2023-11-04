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

    public function form(Request $request)
    {
        $title = "Form";
        $name = Auth::user()->name;

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

        
        return view('form',['title'=> $title, 'units'=> $units, 'drivers'=> $drivers, 'name' => $name, 'rents'=> $rents]);
    }
    
    public function returnForm()
    {
        $title = "Return Form";
        $name = Auth::user()->name;

        $rents = Rent::all();
        
        return view('returnForm',['title'=> $title, 'rents'=> $rents, 'name' => $name]);
    }

    public function user(Request $request)
    {
        $title = "User Setting";
        $user = Auth::user();
        $roles = Role::all();

    
        $users = new User();
        if ($request->get('search')) {
            $users = $users->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        $users = $users->get();
    
        return view('user', ['title' => $title, 'users' => $users , 'user' => $user , 'roles' => $roles]);
    }
    
    public function driver(Request $request)
    {
        $title = "Driver";
        $name = Auth::user()->name;
    
        $drivers = new Driver;
        if ($request->get('search')) {
            $drivers = $drivers->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        $drivers = $drivers->orderBy('name', 'asc')->get();
    
        return view('driver', ['name' => $name, 'title' => $title, 'drivers' => $drivers]);
    }
    
    

    public function unit(Request $request)
    {
        $title = "Unit";
        $name = Auth::user()->name;
        $brands = Brand::all();

        $units = new Unit();
        if ($request->get('search')) {
            $units = $units->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        $units = $units->orderBy('name', 'asc')->get();
    
        return view('unit', ['name' => $name, 'title' => $title, 'units' => $units, 'brands' => $brands]);
    }

    public function log()
    {
        $title = "Log";
        $name = Auth::user()->name;

        $rents = Rent::orderBy('updated_at', 'desc')->get();

    
        return view('log', ['title' => $title, 'rents' => $rents, 'name' => $name]);
    }
    
    public function approval(Request $request)
    {
        $title = "Approval";
        $role = Auth::user();

        $rents = new Rent();
        if ($request->get('search')) {
            $rents = $rents->where('name', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        $rents = $rents->get();
        
        return view('approval', ['title' => $title, 'rents' => $rents, 'role' => $role]);
        
    }
    

    public function export(){
        return Excel::download(new RentExport, 'rent-list-'.Carbon::now()->toDateTimeLocalString().'.xlsx');
    }
}