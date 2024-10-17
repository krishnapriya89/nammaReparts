<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\VehicleBrand;

class HomeController extends Controller
{
    //home page
    public function home()
    {
        $brands = VehicleBrand::all();
        return view('frontend.home', compact('brands'));
    }

    //listing page
    public function listingPage()
    {
        return view('frontend.listingpage');
    }

    //details one page
    public function detailsOne()
    {
        return view('frontend.details_one');
    }

    //details two page
    public function detailsTwo()
    {
        return view('frontend.details_two');
    }

    //details three page
    public function detailsThree()
    {
        return view('frontend.details_three');
    }

    //details four page
    public function detailsFour()
    {
        return view('frontend.details_four');
    }

    //details five page
    public function detailsFive()
    {
        return view('frontend.details_five');
    }

    //details shipping address
    public function shippingAddress()
    {
        return view('frontend.shipping_address');
    }
}
