<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\VehicleModel;
use App\Models\FuelType;
use App\Models\VehiclePart;

class VehiclePartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicleparts = VehiclePart::with(['category', 'subcategory', 'vehicle', 'fuel'])->get();
        return view('admin.vehiclepart.index', compact('vehicleparts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorylists = Category::orderBy('id', 'desc')->get();
        $subCategorylists = SubCategory::orderBy('id', 'desc')->get();
        $vehiclemodellists = VehicleModel::orderBy('id', 'desc')->get();
        $fuellists = FuelType::orderBy('id', 'desc')->get();
        return view('admin.vehiclepart.add', compact('categorylists', 'subCategorylists', 'vehiclemodellists', 'fuellists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'part_name' => 'required|max:255',
            'part_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:4096',
            // 'description' => 'required|max:255',
            'price' => 'required',
            'condition' => 'required',
            'vehicle_id' => 'required',
            'fuel_type' => 'required',
            'year' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('part_image')) {
            $file = $request->file('part_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('vehicle parts image', $fileName, 'public');

            $fileUrl = asset('storage/' . $filePath);

            $data = [
                'part_name' => $request->part_name,
                'part_image' => $fileUrl,
                'description' => $request->description,
                'price' => $request->price,
                'condition' => $request->condition,
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'vehicle_id' => $request->vehicle_id,
                'fuel_type' => $request->fuel_type,
                'year' => $request->year,
                'status' => $request->status

            ];

            $vehiclepart = VehiclePart::create($data);

            if ($vehiclepart) {
                return to_route('vehicle_part.index')->with('success', 'Vehicle Part Created Successfully!');
            } else {
                return to_route('vehicle_part.index')->with('error', 'Failed to Create Vehicle Part');
            }
        } else {
            return to_route('vehicle_part.index')->with('error', 'Image is required');
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
        $categorylists = Category::orderBy('id', 'desc')->get();
        $subCategorylists = SubCategory::orderBy('id', 'desc')->get();
        $vehiclemodellists = VehicleModel::orderBy('id', 'desc')->get();
        $fuellists = FuelType::orderBy('id', 'desc')->get();
        $vehicleparts = VehiclePart::with(['category', 'subcategory', 'vehicle', 'fuel'])->findOrFail($id);

        return view('admin.vehiclepart.edit', compact('categorylists', 'subCategorylists', 'vehiclemodellists', 'fuellists', 'vehicleparts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'part_name' => 'required|max:255',
            'part_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'description' => 'required|max:255',
            'price' => 'required',
            'condition' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'vehicle_id' => 'required',
            'fuel_type' => 'required',
            'year' => 'required',
            'status' => 'required',
        ]);

        // Find the existing vehicle model
        $vehiclepart = VehiclePart::findOrFail($id);

        // Check if a new image is uploaded
        if ($request->hasFile('part_image')) {
            $file = $request->file('part_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('vehicle parts image', $fileName, 'public');
            $fileUrl = asset('storage/' . $filePath);
        } else {
            // Keep the current image if no new one is uploaded
            $fileUrl = $vehiclepart->part_image;
        }

        // Update the vehicle part data
        $vehiclepart->update([
            'part_name' => $request->part_name,
            'part_image' => $fileUrl,
            'description' => $request->description,
            'price' => $request->price,
            'condition' => $request->condition,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'vehicle_id' => $request->vehicle_id,
            'fuel_type' => $request->fuel_type,
            'year' => $request->year,
            'status' => $request->status,
        ]);

        // Redirect back to the index page with a success message
        return to_route('vehicle_part.index')->with('success', 'Vehicle Part Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehiclepart = VehiclePart::find($id);
        if ($vehiclepart->delete()) {
            return to_route('vehicle_part.index')->with('success', 'Vehicle Part Deleted Successfully!');
        }
        return to_route('vehicle_part.index')->with('error', 'Failed to Delete Vehicle Part');
    }
}
