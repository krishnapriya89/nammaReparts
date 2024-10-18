<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes,ImageTrait;

    protected $table="categories";

    protected $fillable=['vehicle_model_id','category_name','status'];

    protected $imageDirectory = 'category-image';

    public function getImageDirectory()
    {
        return $this->imageDirectory;
    }

    public function vehicleModel()
    {
        return $this->belongsTo(VehicleModel::class);
    }

    public function parts()
    {
        return $this->hasMany(VehiclePart::class,'category_id');
    }
}
