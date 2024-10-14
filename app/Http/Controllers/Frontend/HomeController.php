<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home page
    public function home()
    {
        return view('frontend.home');
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
}
