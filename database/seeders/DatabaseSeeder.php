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
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();
    
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('123'),
                'role_id' => 1,
            ],
            [
                'name' => 'approver',
                'email' => 'approver1@mail.com',
                'password' => Hash::make('123'),
                'role_id' => 2,
            ],
            [
                'name' => 'approver',
                'email' => 'approver2@mail.com',
                'password' => Hash::make('123'),
                'role_id' => 3,
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