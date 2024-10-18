<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\models\VehicleModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of all Categories.
     * @param null.
     *
     */
    public function index()
    {
        $categories = Category::with('vehicleModel')->orderBy('id','desc')->get();
       return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a category.
     * @param null.
     *
     */
    public function create()
    {
        $vehicle_models = VehicleModel::where('status',1)->get();
        return view('admin.category.add',compact('vehicle_models'));
    }

    /**
     * Store Category.
     * @param Request $request.
     *
     */
    public function store(Request $request)
    {

        $request->validate([
            'category_name'=>'required',
            'vehicle_model'=>'required',
            'status'=>'required',
            'image_files' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $category = new Category();

        $category->vehicle_model_id = $request->vehicle_model;
        $category->category_name = $request->category_name;
        $category->status = $request->status;
        if($request->hasFile('image_files'))
        {
            $file = $request->file('image_files');
            $category->image= $category->uploadImage($file, $category->getImageDirectory());
        }

        if($category->save()) {
            return to_route('category.index')->with('success', 'Category Created Successfully!');
        } else {
            return to_route('category.index')->with('error', 'Failed to Create Category');
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
     * Edit category Details.
     * @param $id.
     *
     */
    public function edit(string $id)
    {
        $category = Category::where('id',$id)->first();
        $vehicle_models = VehicleModel::where('status',1)->get();
        return view('admin.category.edit',compact('category','vehicle_models'));
    }

    /**
     * Update Category Details.
     * @param Request $request ,$id.
     *
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_name'=>'required',
            'vehicle_model'=>'required',
            'status'=>'required'
        ]);
        $category = Category::find($id);
        $category->vehicle_model_id = $request->vehicle_model;
        $category->category_name = $request->category_name;
        $category->status =  $request->status;
        if($request->hasFile('image_files'))
        {
            if($category->image != '' || $category->image != NULL)
            $category->deleteImage('image_files');
            $file = $request->file('image_files');
            $category->image = $category->uploadImage($file, $category->getImageDirectory());
        }
        if($category->save())
        {
            return to_route('category.index')->with('success','Category Updated successfully!');
        }
        return to_route('category.index')->with('error','failed to Update Category');
    }

    /**
     * Remove category
     * @param $id
     *
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if($category->delete())
        {
            return to_route('category.index')->with('success','Category Deleted Successfully!');
        }
        return to_route('category.index')->with('error','Failed to Delete Category');
    }
}
