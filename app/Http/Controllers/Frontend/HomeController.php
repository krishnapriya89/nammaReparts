<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\VehicleBrand;
use App\Models\VehiclePart;
use App\Models\VehicleModel;

class HomeController extends Controller
{
    //home page
    public function home()
    {
        $brands = VehicleBrand::where('active_status', 1)->get();
        $categories = Category::with('parts')->where('status', 1)->distinct('category_name') ->take(8)->get();
        return view('frontend.home', compact('brands', 'categories'));
    }

    //listing page
    public function listingPage($brandId)
    {
        $vehicleparts = VehiclePart::with(['category', 'subcategory', 'vehicle', 'fuel'])
            ->whereHas('vehicle', function ($query) use ($brandId) {
                $query->where('brand_id', $brandId);
            })
            ->get();

        // Get the brand name for displaying on the listing page
        $brand = VehicleBrand::findOrFail($brandId);
        $vehicleName = $brand->brand_name;
        $vehicle_models = VehicleModel::where('brand_id',$brandId)->where('status', 1)->get();
        return view('frontend.listingpage', compact('vehicleparts', 'vehicleName','vehicle_models'));
    }

    /**
     * Part listing page
     * @param $categoryId
     *
     */
    public function partListing($id)
    {
        $category = Category::where('id',$id)->first();
        $categoryName= $category->category_name;
        $categories = Category::where('category_name', $categoryName)->pluck('id');
        $parts = VehiclePart::whereIn('category_id',$categories)->get();
        $categories = Category::with('parts')->where('status', 1)->distinct('category_name') ->take(8)->get();
        return view('frontend.part_listing',compact('category','parts','categories'));
    }









}
