<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\VehicleType;

class VehicletypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleType::create([
            'wheels'    =>  '2 Wheeler',
            'active_status'     =>  '1',
            'created_on'    => now(), // Or any custom date
        ]);
        VehicleType::create([
            'wheels'    =>  '3 Wheeler',
            'active_status'     =>  '1',
            'created_on'    => now(), // Or any custom date
        ]);
        VehicleType::create([
            'wheels'    =>  '4 Wheeler',
            'active_status'     =>  '1',
            'created_on'    => now(), // Or any custom date
        ]);
    }
}
