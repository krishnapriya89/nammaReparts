<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class VehicleBrand extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vehicle_brands';

    protected $fillable = [
        'logo',
        'brand_name',
        'active_status'
    ];

    public function vehicles()
    {
        return $this->hasMany(VehicleModel::class, 'brand_id');
    }
    
}
