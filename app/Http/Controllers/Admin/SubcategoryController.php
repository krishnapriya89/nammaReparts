<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\Category;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of subcategories
     * @param null.
     *
     */
    public function index()
    {
        $subcategories = SubCategory::with('category','vehicleModel')->orderBy('id','desc')->get();
        return view('admin.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a subcategory.
     * @param null.
     *
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        return view('admin.subcategory.add',compact('categories'));
    }

    /**
     * Store the details of sub category.
     * @param $request $request.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'category'=> 'required',
            'sub_category_name'=>'required',
            'status'=>'required'
        ]);
        $data = [
            'category_id' => $request->category,
            'subcategory_name' => $request->sub_category_name,
            'status' => $request->status,
        ];
        $sub_category =SubCategory::create($data);
        if($sub_category)
        {
            return to_route('subcategory.index')->with('success','Sub Category Created Successfully!');
        }
        return to_route('subcategory.index')->with('error','Failed to Create Subcategory');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Edit the sub category form.
     * @param $id.
     *
     */
    public function edit(string $id)
    {
        $subcategory = SubCategory::with('category')->where('id',$id)->first();
        $categories = Category::where('status',1)->get();
        return view('admin.subcategory.edit',compact('subcategory','categories'));
    }

    /**
     * Update the the subcategory details.
     * @param Request $request,$id.
     *
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category'=> 'required',
            'sub_category_name'=>'required',
            'status'=>'required'
        ]);
        $subcategory = Subcategory::find($id);
        $subcategory->category_id = $request->category;
        $subcategory->subcategory_name = $request->sub_category_name;
        $subcategory->status = $request->status;
        if($subcategory->save())
        {
            return to_route('subcategory.index')->with('success','Subcategory Updated Successfully!');
        }
        return to_route('subcategory.index')->with('error','Failed to Update Sub Category');
    }

    /**
     * Remove Subcategory.
     * @param $id.
     *
     */
    public function destroy(string $id)
    {
        $subcategory = Subcategory::find($id);
        if($subcategory->delete())
        {
            return to_route('subcategory.index')->with('success','Subcategory Deleted Successfully!');
        }
        return to_route('subcategory.index')->with('error','failed to delete sub Category');
    }
}
