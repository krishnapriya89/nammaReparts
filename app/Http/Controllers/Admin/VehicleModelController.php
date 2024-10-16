<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\VehicleBrand;
use App\Models\FuelType;
use App\Models\VehicleType;
use App\Models\VehicleModel;
use App\Models\Category;
use App\Models\SubCategory;

class VehicleModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicleModels = VehicleModel::with(['brand', 'fuel', 'type'])->get();
        return view('admin.vehiclemodel.index', compact('vehicleModels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehiclebrandlists = VehicleBrand::orderBy('id', 'desc')->get();
        $fuellists = FuelType::orderBy('id', 'desc')->get();
        $vehicletypelists = VehicleType::orderBy('id', 'desc')->get();
        return view('admin.vehiclemodel.add', compact('vehiclebrandlists', 'fuellists', 'vehicletypelists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required',
            'vehicle_name' => 'required|max:255',
            'power' => 'required',
            'vehicle_image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:4048',
            'model' => 'required|max:255',
            'year' => 'required',
            'fuel_type' => 'required',
            'engine' => 'required|max:255',
            'vehicle_type' => 'required',
            'status' => 'required'
        ]);

        if ($request->hasFile('vehicle_image')) {
            $file = $request->file('vehicle_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('vehicle images', $fileName, 'public');

            $fileUrl = asset('storage/' . $filePath);

            $data = [
                'brand_id' => $request->brand_id,
                'vehicle_name' => $request->vehicle_name,
                'vehicle_image' => $fileUrl,
                'model' => $request->model,
                'year' => $request->year,
                'fuel_type' => $request->fuel_type,
                'engine' => $request->engine,
                'power' => $request->power,
                'vehicle_type' => $request->vehicle_type,
                'status' => $request->status

            ];

            $vehicle = VehicleModel::create($data);

            if ($vehicle) {
                return to_route('vehicle_model.index')->with('success', 'Vehicle Model Created Successfully!');
            } else {
                return to_route('vehicle_model.index')->with('error', 'Failed to Create Vehicle Model');
            }
        } else {
            return to_route('vehicle_model.index')->with('error', 'Image is required');
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
        $vehiclebrandlists = VehicleBrand::orderBy('id', 'desc')->get();
        $fuellists = FuelType::orderBy('id', 'desc')->get();
        $vehicletypelists = VehicleType::orderBy('id', 'desc')->get();

        $vehicleModel = VehicleModel::with(['brand', 'fuel', 'type'])->findOrFail($id);

        return view('admin.vehiclemodel.edit', compact('vehicleModel', 'vehiclebrandlists', 'fuellists', 'vehicletypelists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'brand_id' => 'required',
            'vehicle_name' => 'required|max:255',
            'power' => 'required',
            'vehicle_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4048', // Nullable because the image may not always be updated
            'model' => 'required|max:255',
            'year' => 'required',
            'fuel_type' => 'required',
            'engine' => 'required|max:255',
            'vehicle_type' => 'required',
            'status' => 'required'
        ]);

        // Find the existing vehicle model
        $vehicleModel = VehicleModel::findOrFail($id);

        // Check if a new image is uploaded
        if ($request->hasFile('vehicle_image')) {

            $file = $request->file('vehicle_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('vehicle images', $fileName, 'public');
            $fileUrl = asset('storage/' . $filePath);
        } else {

            // Keep the current image if not updated
            $fileUrl = $vehicleModel->vehicle_image;
        }


        // Update the vehicle model data
        $vehicleModel->update([
            'brand_id' => $request->brand_id,
            'vehicle_name' => $request->vehicle_name,
            'vehicle_image' => $fileUrl, // Either the new or the existing image
            'model' => $request->model,
            'year' => $request->year,
            'fuel_type' => $request->fuel_type,
            'engine' => $request->engine,
            'power' => $request->power,
            'vehicle_type' => $request->vehicle_type,
            'status' => $request->status
        ]);

        // Redirect back to the index page with a success message
        return to_route('vehicle_model.index')->with('success', 'Vehicle Model Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicleModel = VehicleModel::find($id);
        if ($vehicleModel->delete()) {
            return to_route('vehicle_model.index')->with('success', 'Vehicle Model Deleted Successfully!');
        }
        return to_route('vehicle_model.index')->with('error', 'Failed to Delete Vehicle Model');
    }

    /**
     * select categorirs under vehiclemodel
     * @param $vehicle_id
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function getCategory(Request $request)
    {
        $vehicle_id = $request->vehicleId;
        $categories = Category::where('vehicle_model_id', $vehicle_id)->get();
        return response()->json($categories);
    }
    /**
     * select subcategories unde category
     * @param $categoryId.
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function getSubcategory(Request $request)
    {
        $categoryId = $request->categoryId;
        $subcategories = SubCategory::where('category_id', $categoryId)->get();
        return response()->json($subcategories);
    }
}
