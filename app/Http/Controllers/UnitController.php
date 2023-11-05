<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    public function store(Request $request) {

        Unit::create([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
        ]);

        return redirect('unit');
    }

    public function destroy($id){
    
        $unit = Unit::find($id);


            $unit->delete();
            return redirect('unit');
    }

    public function update(Request $request, $id) {
        $unit = Unit::find($id);
    
        $unit->update([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand')
        ]);
    
        return redirect('unit');
    }
    

}