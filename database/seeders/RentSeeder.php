<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Rent;
use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Rent::truncate();
        Schema::enableForeignKeyConstraints();
    
        $faker = \Faker\Factory::create();
    
        $startDate = '2023-10-10';
        $endDate = '2023-10-17';
    
        for ($i = 1; $i <= 12; $i++) {

            $driverId = Driver::where('status', 'Not Available')->inRandomOrder()->first()->id;
            $unitId = Unit::where('status', 'Unit Not Available')->inRandomOrder()->first()->id;
    
            $rentalData = [
                'rent_date' => $faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d'),
                'name' => $faker->name,
                'unit_id' => $unitId, 
                'driver_id' => $driverId,
            ];
    
            DB::table('rents')->insert($rentalData);
        }
    }
    
}