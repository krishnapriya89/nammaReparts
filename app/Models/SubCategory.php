<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SubCategory extends Model
{
    use HasFactory;



    protected $table= "sub_categories";

    protected $fillable =['category_id','subcategory_name','status'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function vehicleModel()
    {
        return $this->hasOneThrough(VehicleModel::class,Category::class,'id','id','category_id', 'vehicle_model_id');
    }
}
