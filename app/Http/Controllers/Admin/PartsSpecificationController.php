<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleBrand;
use App\Models\VehicleModel;
use App\Models\VehiclePart;
use App\Models\Category;
use App\Models\PartSpecification;
use App\Models\SubCategory;

use Illuminate\Http\Request;


class PartsSpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specifications = PartSpecification::get();
        return view('admin.specification.index',compact('specifications'));
    }

    /**
     * Show the form for creating parts specification.
     * @param null.
     *
     */
    public function create()
    {
        $brands = VehicleBrand::where('active_status',1)->get();
        return view('admin.specification.add',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data=[
            'brand_id'=>$request->vehicle_brand,
            'vehicle_model_id'=>$request->modelSelect,
            'category_id'=>$request->selectCategory,
            'sub_category_id'=>$request->select_sub_category,
            'part_id'=>$request->selectPart,
            'accessory'=>$request->accessory,
            'outer_diameter'=>$request->outer_diameter,
            'net_quantity'=>$request->net_quantity,
            'quantity_per_axle'=>$request->quantity_per_axle,
            'required_quantity'=>$request->required_quantity,
            'weight'=>$request->weight,
            'country_of_origin'=>$request->country_of_origin,
            'fitting_position'=>$request->fittig_position,
            'inner_diameter'=>$request->inner_diameter,
            'material'=>$request->material,
            'fitting_place'=>$request->fitting_place,
            'manufacturer'=> $request->manufacturer,
            'address_manufacturer'=>$request->address_of_manufacturer,
            'mounting_type'=>$request->mounting_type,
            'pcd'=>$request->pcd,
            'number_of_holes'=>$request->number_of_holes,
            'diameter'=>$request->diameter,
            'dimensions'=>$request->dimensions,
            'other_specifications'=>$request->part_specification,
        ];
        $specification = PartSpecification::create($data);
        if($specification)
        {
            return to_route('part_specification.index')->with('success','Part Specifications added Successfully!');
        }
        return to_route('part_specification.index')->with('error','Failed to add Part specification');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Edit part specification.
     * @param $id
     *
     */
    public function edit(string $id)
    {
        $partSpecification = PartSpecification::findOrFail($id);
        $brands = VehicleBrand::all();
        $models = VehicleModel::where('brand_id', $partSpecification->brand_id)->get(); // Retrieve models based on brand
        $categories = Category::where('vehicle_model_id', $partSpecification->vehicle_model_id)->get(); // Retrieve categories based on model
        $subcategories = SubCategory::where('category_id', $partSpecification->category_id)->get(); // Retrieve subcategories based on category
        $parts = VehiclePart::where('sub_category_id', $partSpecification->sub_category_id)->get(); // Retrieve parts based on subcategory

        return view('admin.specification.edit', compact('partSpecification', 'brands', 'models', 'categories', 'subcategories', 'parts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $specification= PartSpecification::findOrFail($id);
        $specification->brand_id = $request->vehicle_brand;
        $specification->vehicle_model_id = $request->modelSelect;
        $specification->category_id = $request->selectCategory;
        $specification->sub_category_id = $request->select_sub_category;
        $specification->part_id = $request->selectPart;
        $specification->accessory = $request->accessory;
        $specification->outer_diameter = $request->outer_diameter;
        $specification->net_quantity = $request->net_quantity;
        $specification->quantity_per_axle = $request->quantity_per_axle;
        $specification->required_quantity = $request->required_quantity;
        $specification->weight = $request->weight;
        $specification->country_of_origin = $request->country_of_origin;
        $specification->fitting_position = $request->fittig_position;
        $specification->inner_diameter = $request->inner_diameter;
        $specification->material = $request->material;
        $specification->fitting_place = $request->fitting_place;
        $specification->manufacturer = $request->manufacturer;
        $specification->address_manufacturer = $request->address_of_manufacturer;
        $specification->mounting_type = $request->mounting_type;
        $specification->pcd = $request->pcd;
        $specification->number_of_holes = $request->number_of_holes;
        $specification->diameter = $request->diameter;
        $specification->dimensions = $request->dimensions;
        $specification->other_specifications = $request->part_specification;
        if($specification->save())
        {
            return to_route('part_specification.index')->with('success','Part Specification Updated Successfully!');
        }
        return to_route('part_specification.index')->with('error','Failed to Update Part specification');
    }

    /**
     * Remove the part specification.
     * @param $id.
     *
     */
    public function destroy(string $id)
    {
        $specification = PartSpecification::find($id);
        if($specification->delete())
        {
            return to_route('part_specification.index')->with('success','Part Specification Deleted Successfully!');
        }
        return to_route('part_specification.index')->with('error','Failed to Delete part specification');
    }

    //ajax call for getting vehicle models
    //@param Request $request
    public function getModels(Request $request)
    {
        $brand_id = $request->brandId;
        $models = VehicleModel::where('brand_id', $brand_id)->get();
        return response()->json([
            'models' => $models,
            'brandId' => $brand_id,
        ]);
    }
    /*get category -ajax call
    * @param Request $request
    *
    */
    public function getCategory(Request $request)
    {
        $modelId = $request->model_id;
        $categories = Category::where('vehicle_model_id',$modelId)->get();
        return response()->json([
            'categories'=>$categories,
        ]);
    }

    /**
     * get sub categories-ajax call.
     * @param Request $request.
     *
     */
    public function getSubCategory(Request $request)
    {
        $category_id = $request->categoryId;
        $subcategories = SubCategory::where('category_id',$category_id)->get();
        return response()->json([
            'subcategories'=>$subcategories,
        ]);
    }
    /**
     * get parts according to category and sub category
     * @param Request $request
     *
     */
    public function getParts(Request $request)
    {
        $category_id = $request->categoryId;
        $sub_category_id = $request->subCategoryId;
        $query = VehiclePart::where('category_id', $category_id);

        // Check if a subcategory is selected; if not, only filter by category
        if (!empty($sub_category_id)) {
            $query->where('sub_category_id', $sub_category_id);
        }

        $parts = $query->get();

        return response()->json([
            'parts' => $parts,
        ]);
        }
}
