<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transport;

class TransportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transportsData = [
            [
                'car_model_id' => 1,
                'car_number' => 'ABC123',
                'fuel_tank_capacity' => 100,
                'average_fuel_consumption' => 12.5,
                'projected_distance' => 800,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'car_model_id' => 4,
                'car_number' => 'LT3123',
                'fuel_tank_capacity' => 100,
                'average_fuel_consumption' => 14,
                'projected_distance' => 710,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'car_model_id' => 7,
                'car_number' => 'LT0090',
                'fuel_tank_capacity' => 100,
                'average_fuel_consumption' => 14,
                'projected_distance' => 710,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Transport::insert($transportsData);
    }
}
