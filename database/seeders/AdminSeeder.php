<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'first_name'    =>  'Admin',
            'user_type'     =>  'Admin',
            'email'         =>  'admin@admin.com',
            'username'      =>  'admin@admin.com',
            'password'      =>  Hash::make('x7I9>5dOz7I£0'),
            'status'        =>  1,
        ]);
    }
}
