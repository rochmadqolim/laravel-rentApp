<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Brand::truncate();
        Schema::enableForeignKeyConstraints();

        $brands = [
            ['name' => 'Komatsu'],
            ['name' => 'Hino'],
            ['name' => 'Hitachi'],
            ['name' => 'Sany'],
            ['name' => 'Caterpillar'],
            ['name' => 'Liebherr'],
            ['name' => 'Volvo'],
            ['name' => 'Toyota'],
            ['name' => 'Kobelco'],
        ];
        
        DB::table('brands')->insert($brands);
        
    }
}