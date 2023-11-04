<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function store(Request $request) {

        Driver::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
        ]);

        return redirect('driver');
    }

    public function destroy($id){
    
        $driver = Driver::find($id);


            $driver->delete();
            return redirect('driver');
    }
}