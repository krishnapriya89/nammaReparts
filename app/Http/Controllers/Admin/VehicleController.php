<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vehicle;
use App\Models\Vehicletype;

class VehicleController extends Controller
{
    public function vehicle()
    {
        $vehicle = Vehicletype::where('active_status', 1)->get();

        return view('admin.vehicle.vehicle', compact('vehicle'));
    }
}
