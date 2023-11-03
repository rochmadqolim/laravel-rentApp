<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
            
     public function run(): void
     {
         Schema::disableForeignKeyConstraints();
         Unit::truncate();
         Schema::enableForeignKeyConstraints();
     
         $vehicleData = [
            ['name' => 'Bulldozer', 'brand_id' => 1, 'status' => 'Unit Available'],
            ['name' => 'Excavator', 'brand_id' => 5, 'status' => 'Unit Available'],
            ['name' => 'Forklift', 'brand_id' => 8, 'status' => 'Unit Available'],
            ['name' => 'Crane', 'brand_id' => 6, 'status' => 'Unit Not Available'],
            ['name' => 'Backhoe Loader', 'brand_id' => 1, 'status' => 'Unit Available'],
            ['name' => 'Dump Truck', 'brand_id' => 7, 'status' => 'Unit Not Available'],
            ['name' => 'Excavator', 'brand_id' => 3, 'status' => 'Unit Available'],
            ['name' => 'Forklift', 'brand_id' => 8, 'status' => 'Unit Available'],
            ['name' => 'Crane', 'brand_id' => 9, 'status' => 'Unit Not Available'],
            ['name' => 'Backhoe Loader', 'brand_id' => 5, 'status' => 'Unit Available'],
            ['name' => 'Bulldozer', 'brand_id' => 4, 'status' => 'Unit Not Available'],
            ['name' => 'Dump Truck', 'brand_id' => 2, 'status' => 'Unit Not Available'],
            ['name' => 'Excavator', 'brand_id' => 4, 'status' => 'Unit Available'],
            ['name' => 'Forklift', 'brand_id' => 8, 'status' => 'Unit Available'],
            ['name' => 'Crane', 'brand_id' => 9, 'status' => 'Unit Not Available'],
            ['name' => 'Backhoe Loader', 'brand_id' => 6, 'status' => 'Unit Available'],
            ['name' => 'Dump Truck', 'brand_id' => 7, 'status' => 'Unit Not Available'],
            ['name' => 'Excavator', 'brand_id' => 1, 'status' => 'Unit Available'],
            ['name' => 'Tractor', 'brand_id' => 5, 'status' => 'Unit Available'],
            ['name' => 'Loader', 'brand_id' => 5, 'status' => 'Unit Not Available'],
            ['name' => 'Truck', 'brand_id' => 2, 'status' => 'Unit Available'],
            ['name' => 'Excavator', 'brand_id' => 7, 'status' => 'Unit Available'],
            ['name' => 'Crane', 'brand_id' => 9, 'status' => 'Unit Not Available'],
            ['name' => 'Forklift', 'brand_id' => 8, 'status' => 'Unit Available'],
            ['name' => 'Dump Truck', 'brand_id' => 2, 'status' => 'Unit Available'],
            ['name' => 'Truck', 'brand_id' => 2, 'status' => 'Unit Available'],
            ['name' => 'Loader', 'brand_id' => 6, 'status' => 'Unit Available'],
            ['name' => 'Tractor', 'brand_id' => 6, 'status' => 'Unit Available'],
        ];
        
     
         DB::table('units')->insert($vehicleData);
     }
     
     
}