<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\VehicleBrand;
use App\Models\VehicleType;

class VehicleBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiclelist = VehicleBrand::orderBy('id','desc')->get();
        // Pass the data to the view
        return view('admin.vehiclebrand.index', compact('vehiclelist'));
        //return view('admin.vehiclebrand.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicle_types = VehicleType::get();
        return view('admin.vehiclebrand.add',compact('vehicle_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:3048',
            'brand_name' => 'required',
            'active_status' => 'required',
            'vehicle_type_id'=> 'required'
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('vehiclelogo images', $fileName, 'public');

            $fileUrl = asset('storage/' . $filePath);

            $data = [
                'vehicle_type_id'=>$request->vehicle_type_id,
                'logo' => $fileUrl,
                'brand_name' => $request->brand_name,
                'active_status' => $request->active_status,

            ];
            $vehicle = VehicleBrand::create($data);

            if ($vehicle) {
                return to_route('vehicle_brand.index')->with('success', 'Vehicle Brand Created Successfully!');
            } else {
                return to_route('vehicle_brand.index')->with('error', 'Failed to Create Vehicle Brand');
            }
        } else {
            return to_route('vehicle_brand.index')->with('error', 'Image is required');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicleBrand = VehicleBrand::findOrFail($id);
        $vehicle_types = VehicleType::get();
        // Pass the data to the edit view
        return view('admin.vehiclebrand.edit', compact('vehicleBrand','vehicle_types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:3048', // Make logo nullable in case user doesn't want to update it
            'brand_name' => 'required',
            'active_status' => 'required',
            'vehicle_type_id'=> 'required'
        ]);

        // Find the existing vehicle brand by ID
        $vehicle = VehicleBrand::findOrFail($id);

        // Prepare the data array for updating the record
        $data = [
            'brand_name' => $request->brand_name,
            'active_status' => $request->active_status, // Keep the existing active_status unless you want to update it
            'vehicle_type_id'=>$request->vehicle_type_id,
        ];

        // Check if a new logo is uploaded
        if ($request->hasFile('logo')) {
            // Delete old logo if exists (optional)
            if ($vehicle->logo) {
                // Remove the old image file if you want
                $oldFilePath = str_replace(asset('storage'), '', $vehicle->logo); // Get relative path
                Storage::disk('public')->delete($oldFilePath);
            }

            // Handle the new logo upload
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('vehiclelogo images', $fileName, 'public');
            $fileUrl = asset('storage/' . $filePath);

            // Add logo URL to the data array
            $data['logo'] = $fileUrl;
        }

        // Update the vehicle brand record with new data
        $vehicle->update($data);

        // Check if update was successful and return a response
        if ($vehicle) {
            return to_route('vehicle_brand.index')->with('success', 'Vehicle Brand Updated Successfully!');
        } else {
            return to_route('vehicle_brand.index')->with('error', 'Failed to Update Vehicle Brand');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicle = VehicleBrand::find($id);
        if($vehicle->delete())
        {
            return to_route('vehicle_brand.index')->with('success','Vehicle Brand Deleted Successfully!');
        }
        return to_route('vehicle_brand.index')->with('error','Failed to Delete Vehicle Brand');
    }
}
