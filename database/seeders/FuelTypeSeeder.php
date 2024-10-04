<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FuelType;

class FuelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelType::insert([
            ['fuel_type'    =>  'Petrol'],
            ['fuel_type'    =>  'Diesel'],
            ['fuel_type'    =>  'CNG'],
            ['fuel_type'    =>  'Electric']
        ]);
    }
}
