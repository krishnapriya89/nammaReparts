<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicle'; // Change this if your table is named differently

    // Disable Laravel's default timestamps
    public $timestamps = false;

    protected $fillable = [
        'image',
        'make',
        'model',
        'year',
        'vehicle_type',
        'active_status',
        'delete_status',
        'created_on',  // Add this if you need to insert `created_on` manually
    ];
}
