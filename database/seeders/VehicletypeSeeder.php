<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Vehicletype;

class VehicletypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicletype::create([
            'wheels'    =>  '2 Wheeler',
            'active_status'     =>  '1',
            'created_on'    => now(), // Or any custom date
        ]);
        Vehicletype::create([
            'wheels'    =>  '3 Wheeler',
            'active_status'     =>  '1',
            'created_on'    => now(), // Or any custom date
        ]);
        Vehicletype::create([
            'wheels'    =>  '4 Wheeler',
            'active_status'     =>  '1',
            'created_on'    => now(), // Or any custom date
        ]);
    }
}
