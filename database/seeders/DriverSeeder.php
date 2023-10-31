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
            ['name' => 'Agus Setiawan', 'status' => 'Not Available'],
            ['name' => 'Budi Santoso', 'status' => 'Available'],
            ['name' => 'Cahyo Pratama', 'status' => 'Available'],
            ['name' => 'Dedy Susanto', 'status' => 'Available'],
            ['name' => 'Eko Sutanto', 'status' => 'Not Available'],
            ['name' => 'Fauzi Maulana', 'status' => 'Available'],
            ['name' => 'Gunawan Widodo', 'status' => 'Available'],
            ['name' => 'Hendra Saputra', 'status' => 'Available'],
            ['name' => 'Irfan Nugroho', 'status' => 'Not Available'],
            ['name' => 'Joko Santosa', 'status' => 'Available'],
            ['name' => 'Krisna Prabowo', 'status' => 'Available'],
            ['name' => 'Luki Wijaya', 'status' => 'Available'],
            ['name' => 'Maulana Hidayat', 'status' => 'Not Available'],
            ['name' => 'Nugroho Wicaksono', 'status' => 'Available'],
            ['name' => 'Onno Utomo', 'status' => 'Available'],
            ['name' => 'Prabowo Kusuma', 'status' => 'Not Available'],
            ['name' => 'Rudi Setiawan', 'status' => 'Available'],
            ['name' => 'Surya Wijaya', 'status' => 'Available'],
            ['name' => 'Teguh Purnama', 'status' => 'Not Available'],
            ['name' => 'Umar Said', 'status' => 'Available'],
            ['name' => 'Andi', 'status' => 'Available'],
            ['name' => 'Dwi', 'status' => 'Not Available'],
            ['name' => 'Eka', 'status' => 'Available'],
            ['name' => 'Farhan', 'status' => 'Available'],
            ['name' => 'Guntur', 'status' => 'Not Available'],
            ['name' => 'Hadi', 'status' => 'Available'],
            ['name' => 'Indra', 'status' => 'Available'],
            ['name' => 'Joko', 'status' => 'Not Available'],
            ['name' => 'Kurniawan', 'status' => 'Available'],
            ['name' => 'Lutfi', 'status' => 'Not Available'],
            ['name' => 'Mukti', 'status' => 'Available'],
            ['name' => 'Nasir', 'status' => 'Available'],
            ['name' => 'Oscar', 'status' => 'Not Available'],
            ['name' => 'Purnomo', 'status' => 'Available'],
            ['name' => 'Qodir', 'status' => 'Available'],
            ['name' => 'Rizal', 'status' => 'Not Available'],
            ['name' => 'Surya', 'status' => 'Available'],
            ['name' => 'Tono', 'status' => 'Available'],
            ['name' => 'Usman', 'status' => 'Available'],
            ['name' => 'Vikri', 'status' => 'Available'],
            ['name' => 'Wahyu', 'status' => 'Available'],
        ];
    
        DB::table('drivers')->insert($driverData);
    }
    
    
}