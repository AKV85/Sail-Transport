<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarModel;


class CarModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarModel::insert([
            [
                'manufacturer_id' => 1,
                'name' => 'A8',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'manufacturer_id' => 1,
                'name' => 'Q8',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'manufacturer_id' => 1,
                'name' => 'e-tron GT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'manufacturer_id' => 2,
                'name' => 'M8',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'manufacturer_id' => 2,
                'name' => 'X7',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'manufacturer_id' => 2,
                'name' => 'i7',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'GLS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'AMG GT Coupe',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'GLA',
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
    }
}
