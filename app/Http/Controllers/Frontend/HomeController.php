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
        $categories = Category::with('parts')->where('status', 1)->distinct('category_name')->take(8)->get();
        return view('frontend.home', compact('brands', 'categories'));
    }

    public function listingPage($brandId)
    {
        // Fetch vehicle parts along with related vehicle (actualVehicle) and vehicleModel data
        $vehicleparts = VehiclePart::with(['category', 'subcategory', 'vehiclemodel', 'vehicle', 'fuel'])
            ->whereHas('vehiclemodel', function ($query) use ($brandId) {
                $query->where('brand_id', $brandId);
            })
            ->get();
        // Get the brand name for displaying on the listing page
        $brand = VehicleBrand::findOrFail($brandId);
        $vehicleName = $brand->brand_name;
        $vehicle_models = VehicleModel::where('brand_id', $brandId)->where('status', 1)->get();
        return view('frontend.listingpage', compact('vehicleparts', 'vehicleName', 'vehicle_models'));
    }

    /**
     * Part listing page
     * @param 
     *
     */
    public function partListing($id)
    {

        $part = VehiclePart::with('vehicleModel.brand')->where('id', $id)->first();
       //dd($part);
        return view('frontend.part_listing', compact('part'));
    }

     /**
     * Shipping address page
     *
     */
    public function shippingaddress()
    {
        return view('frontend.shipping_address');
    }

     /**
     * My cart
     *
     */
    public function mycart()
    {
        return view('frontend.mycart');
    }
}
