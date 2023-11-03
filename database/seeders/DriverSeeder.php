<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Driver::truncate();
        Schema::enableForeignKeyConstraints();
    
        $driverData = [
            ['name' => 'Budi Santoso', 'phone' => '081234567890', 'status' => 'Available'],
            ['name' => 'Cahyo Pratama', 'phone' => '085678912345', 'status' => 'Available'],
            ['name' => 'Dedy Susanto', 'phone' => '081090909090', 'status' => 'Not Available'],
            ['name' => 'Fauzi Maulana', 'phone' => '081200123456', 'status' => 'Available'],
            ['name' => 'Gunawan Widodo', 'phone' => '085600998877', 'status' => 'Available'],
            ['name' => 'Hendra Saputra', 'phone' => '081270505050', 'status' => 'Available'],
            ['name' => 'Irfan Nugroho', 'phone' => '085601234567', 'status' => 'Not Available'],
            ['name' => 'Joko Santosa', 'phone' => '081211112233', 'status' => 'Not Available'],
            ['name' => 'Krisna Prabowo', 'phone' => '085600987654', 'status' => 'Available'],
            ['name' => 'Luki Wijaya', 'phone' => '081298765432', 'status' => 'Available'],
            ['name' => 'Maulana Hidayat', 'phone' => '085601111222', 'status' => 'Not Available'],
            ['name' => 'Nugroho Wicaksono', 'phone' => '081201231212', 'status' => 'Available'],
            ['name' => 'Onno Utomo', 'phone' => '085612121212', 'status' => 'Available'],
            ['name' => 'Prabowo Kusuma', 'phone' => '081299999999', 'status' => 'Not Available'],
            ['name' => 'Rudi Setiawan', 'phone' => '085621212121', 'status' => 'Available'],
            ['name' => 'Surya Wijaya', 'phone' => '081201234567', 'status' => 'Available'],
            ['name' => 'Teguh Purnama', 'phone' => '085678900000', 'status' => 'Not Available'],
            ['name' => 'Umar Said', 'phone' => '081201200000', 'status' => 'Available'],
            ['name' => 'Andi', 'phone' => '085611100000', 'status' => 'Available'],
            ['name' => 'Eka', 'phone' => '085634567890', 'status' => 'Available'],
            ['name' => 'Farhan', 'phone' => '081212312345', 'status' => 'Available'],
            ['name' => 'Joko', 'phone' => '081212345555', 'status' => 'Not Available'],
            ['name' => 'Kurniawan', 'phone' => '085634564564', 'status' => 'Available'],
            ['name' => 'Oscar', 'phone' => '085634567896', 'status' => 'Not Available'],
            ['name' => 'Rizal', 'phone' => '081299999999', 'status' => 'Not Available'],
        ];
        
    
        DB::table('drivers')->insert($driverData);
    }
    
    
}