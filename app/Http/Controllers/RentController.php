<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Rent;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    public function storeRent(Request $request) {
        $request['rent_date'] = Carbon::now()->toDateString();
        

        try {
            DB::beginTransaction();
            Rent::create($request->all());
            $unit = Unit::findOrFail($request->unit_id);
            $unit->status = 'Unit Not Available';
            $unit->save();
            $driver = Driver::findOrFail($request->driver_id);
            $driver->status = 'Not Available';
            $driver->save();
    
            DB::commit();
            return redirect('rentLog');
        } catch (\Throwable $th) {
            DB::rollBack();
    
            return redirect('rentForm');
        }
    }
    
    public function storeReturn(Request $request)
    {
        $unit_id = $request->input('unit_id');
        $driver_id = $request->input('driver_id');
        
        try {
            DB::beginTransaction();
    
            $rentData = Rent::where('unit_id', $unit_id)
                ->where('driver_id', $driver_id)
                ->firstOrFail();
    
            $rentData->return_date = Carbon::now()->toDateString();
            $rentData->save();
            
    
            $driver = Driver::findOrFail($driver_id);
            $driver->status = 'Available';
            $driver->save();

            $unit = Unit::findOrFail($unit_id);
            $unit->status = 'Unit Available';
            $unit->save();

            $rentData->status = 'Returned';
            $rentData->save();
    
            DB::commit();
    
            return redirect('returnLog');
        } catch (ModelNotFoundException $ex) {
            DB::rollBack();
            return redirect('returnForm');
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect('returnForm');
        }
    }
    
}