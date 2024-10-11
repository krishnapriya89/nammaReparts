<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehiclePart extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vehicle_parts';

    protected $fillable = [
        'part_name',
        'part_image',
        'description',
        'price',
        'condition',
        'category_id',
        'sub_category_id',
        'vehicle_id',
        'fuel_type',
        'year',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(VehicleModel::class, 'vehicle_id');
    }

    public function fuel()
    {
        return $this->belongsTo(FuelType::class, 'fuel_type');
    }
}
