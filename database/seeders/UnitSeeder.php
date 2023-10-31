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
             ['name' => 'Bulldozer', 'brand' => 'Komatsu', 'status' => 'Unit Available'],
             ['name' => 'Dump Truck', 'brand' => 'Hino', 'status' => 'Unit Not Available'],
             ['name' => 'Excavator', 'brand' => 'Caterpillar', 'status' => 'Unit Available'],
             ['name' => 'Forklift', 'brand' => 'Toyota', 'status' => 'Unit Available'],
             ['name' => 'Crane', 'brand' => 'Liebherr', 'status' => 'Unit Not Available'],
             ['name' => 'Backhoe Loader', 'brand' => 'JCB', 'status' => 'Unit Available'],
             ['name' => 'Bulldozer', 'brand' => 'Caterpillar', 'status' => 'Unit Not Available'],
             ['name' => 'Dump Truck', 'brand' => 'Volvo', 'status' => 'Unit Not Available'],
             ['name' => 'Excavator', 'brand' => 'Hitachi', 'status' => 'Unit Available'],
             ['name' => 'Forklift', 'brand' => 'Nissan', 'status' => 'Unit Available'],
             ['name' => 'Crane', 'brand' => 'Kobelco', 'status' => 'Unit Not Available'],
             ['name' => 'Backhoe Loader', 'brand' => 'John Deere', 'status' => 'Unit Available'],
             ['name' => 'Bulldozer', 'brand' => 'Case', 'status' => 'Unit Not Available'],
             ['name' => 'Dump Truck', 'brand' => 'Isuzu', 'status' => 'Unit Not Available'],
             ['name' => 'Excavator', 'brand' => 'Kubota', 'status' => 'Unit Available'],
             ['name' => 'Forklift', 'brand' => 'Mitsubishi', 'status' => 'Unit Available'],
             ['name' => 'Crane', 'brand' => 'Terex', 'status' => 'Unit Not Available'],
             ['name' => 'Backhoe Loader', 'brand' => 'New Holland', 'status' => 'Unit Available'],
             ['name' => 'Bulldozer', 'brand' => 'Hyundai', 'status' => 'Unit Not Available'],
             ['name' => 'Dump Truck', 'brand' => 'Scania', 'status' => 'Unit Not Available'],
             ['name' => 'Excavator', 'brand' => 'Doosan', 'status' => 'Unit Available'],
             ['name' => 'Tractor', 'brand' => 'John Deere', 'status' => 'Unit Available'],
             ['name' => 'Loader', 'brand' => 'Caterpillar', 'status' => 'Unit Not Available'],
             ['name' => 'Truck', 'brand' => 'MAN', 'status' => 'Unit Available'],
             ['name' => 'Excavator', 'brand' => 'Volvo', 'status' => 'Unit Available'],
             ['name' => 'Crane', 'brand' => 'Terex', 'status' => 'Unit Not Available'],
             ['name' => 'Forklift', 'brand' => 'Toyota', 'status' => 'Unit Available'],
             ['name' => 'Dump Truck', 'brand' => 'Hino', 'status' => 'Unit Available'],
             ['name' => 'Truck', 'brand' => 'Mercedes-Benz', 'status' => 'Unit Available'],
             ['name' => 'Loader', 'brand' => 'Kubota', 'status' => 'Unit Available'],
             ['name' => 'Tractor', 'brand' => 'New Holland', 'status' => 'Unit Available'],
         ];
     
         DB::table('units')->insert($vehicleData);
     }
     
     
}