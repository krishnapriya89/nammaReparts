<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get();
       return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
            'status'=>'required'
        ]);

        $data=[
            'category_name'=>$request->category_name,
            'status'=>$request->status

        ];
        $category = category::create($data);
        if($category) {
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_name'=>'required',
            'status'=>'required'
        ]);
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->status =  $request->status;
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
