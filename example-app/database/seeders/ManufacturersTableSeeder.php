<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manufacturer::insert([
            ['name' => 'Audi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BMW', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mercedes', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
