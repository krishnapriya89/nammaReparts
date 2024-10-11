<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vehicle_models';

    protected $fillable = [
        'brand_id',
        'vehicle_name',
        'vehicle_image',
        'model',
        'year',
        'fuel_type',
        'engine',
        'power',
        'vehicle_type',
        'status'
    ];

    public function brand()
    {
        return $this->belongsTo(VehicleBrand::class, 'brand_id');
    }

    public function fuel()
    {
        return $this->belongsTo(FuelType::class, 'fuel_type');
    }

    public function type()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type');
    }
}
