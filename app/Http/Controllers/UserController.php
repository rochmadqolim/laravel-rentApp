<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request) {

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role_id' => $request->input('role_id'),
        ]);

        return redirect('user');
    }

    public function destroy($id){
    
        $unit = User::find($id);


            $unit->delete();
            return redirect('user');
    }

    public function update(Request $request, $id){
        
        $user = User::find($id);
        $user->update($request->all());
    
        return redirect('user');
    }
}