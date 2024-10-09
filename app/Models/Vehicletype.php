<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicletype extends Model
{
    use HasFactory;

    protected $table = 'vehicletype'; // Change this if your table is named differently

    // Disable Laravel's default timestamps
    public $timestamps = false;

    protected $fillable = [
        'wheels',
        'active_status',
        'created_on',  // Add this if you need to insert `created_on` manually
        'modified_on', // Add this if you need to insert `modified_on` manually
    ];

    public function vehicles()
    {
        return $this->hasMany(VehicleModel::class, 'vehicle_type');
    }
}
