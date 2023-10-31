<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
{
    public function approved(Request $request) {

        $rentId = $request->input('approve_id');
        $user = Auth::user();
    
        $request->session()->regenerate();
        if (Auth::user()->role == 'approver1'){
            try {
                DB::beginTransaction();
                
                $data = Rent::where('id', $rentId)->firstOrFail();
            
                $data->status = 'Waiting Second Approval';
                $data->approval_1 = $user->name;
    
                $data->save();
            
                DB::commit();
            
                return redirect('approval');
            } catch (ModelNotFoundException $ex) {
                DB::rollBack();
                return redirect('approval');
            } catch (\Exception $ex) {
                DB::rollBack();
                return redirect('approval');
            }
        }

        if (Auth::user()->role == 'approver2'){
            try {
                DB::beginTransaction();
                
                $data = Rent::where('id', $rentId)->firstOrFail();
            
                $data->status = 'Rent Approved';
                $data->approval_2 = $user->name;
    
                $data->save();
            
                DB::commit();
            
                return redirect('approval');
            } catch (ModelNotFoundException $ex) {
                DB::rollBack();
                return redirect('approval');
            } catch (\Exception $ex) {
                DB::rollBack();
                return redirect('approval');
            }
        }

        
        
    }

}