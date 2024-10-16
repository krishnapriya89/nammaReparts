<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartSpecification extends Model
{
    use HasFactory;
    protected $table="part_specifications";
     protected $fillable=['brand_id','vehicle_model_id','category_id','sub_category_id','part_id',
     'accessory','outer_diameter','net_quantity','quantity_per_axle','required_quantity','weight(kg)',
     'country_of_origin','fitting_position','inner_diameter','material','fitting_place','manufacturer',
     'address_manufacturer','mounting_type','pcd','number_of_holes','diameter','dimensions','other_specifications'];

     public function brand()
     {
        return $this->belongsTo(VehicleBrand::class,'brand_id');
     }

     public function vehicleModel()
     {
        return $this->belongsTo(VehicleModel::class,'vehicle_model_id');
     }

     public function category()
     {
        return $this->belongsTo(Category::class,'category_id');

     }
     public function subCategory()
     {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
     }

     public function part()
     {
        return $this->belongsTo(VehiclePart::class,'part_id');
     }
}
