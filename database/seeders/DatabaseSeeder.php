<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
    
        $userData = [
            [
                'name' => 'this admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('123'),
                'role' => 'admin',
            ],
            [
                'name' => 'this approver 1',
                'email' => 'approver1@mail.com',
                'password' => Hash::make('123'),
                'role' => 'approver1',
            ],
            [
                'name' => 'this approver 2',
                'email' => 'approver2@mail.com',
                'password' => Hash::make('123'),
                'role' => 'approver2',
            ],
        ];
    
        DB::table('users')->insert($userData);
    
        // \App\Models\User::factory(10)->create();
    
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
    
}