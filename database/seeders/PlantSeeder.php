<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plants = [];
        for($i = 0; $i < 100; $i++) {
            $plants[] = [
                'berat_basah' => rand(999,999999),
                'drc' => rand(1, 100),
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ];
        }
    
        Plant::insert($plants);
    }
}
