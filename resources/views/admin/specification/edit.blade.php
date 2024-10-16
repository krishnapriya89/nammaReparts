@extends('admin.layouts.app')

@section('title', 'Edit Vehicle Part Specification')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!-- Your breadcrumb and page header code here -->

        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="row g-3" action="{{ route('part_specification.update', $partSpecification->id) }}" method="POST">
                            @csrf

                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Select Brand</label>
                                    <select id="vehicle_brand" class="form-select" name="vehicle_brand" required>
                                        <option value="">Please Select Brand</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $brand->id == $partSpecification->brand_id ? 'selected' : '' }}>
                                                {{ $brand->brand_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Select Vehicle Model</label>
                                    <select id="modelSelect" class="form-select" name="modelSelect" required>
                                        <option value="">Please Select Vehicle Model</option>
                                        @foreach ($models as $model)
                                            <option value="{{ $model->id }}" {{ $model->id == $partSpecification->vehicle_model_id ? 'selected' : '' }}>
                                                {{ $model->vehicle_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="selectCategory">Select Category</label>
                                    <select name="selectCategory" id="selectCategory" required class="form-select">
                                        <option value="">Please Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $partSpecification->category_id ? 'selected' : '' }}>
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="select_sub_category">Select Sub Category</label>
                                    <select name="select_sub_category" id="select_sub_category" class="form-select">
                                        <option value="">Please Select Sub Category</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $subcategory->id == $partSpecification->sub_category_id ? 'selected' : '' }}>
                                                {{ $subcategory->subcategory_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="selectPart">Select Part</label>
                                    <select name="selectPart" id="selectPart" class="form-select">
                                        <option value="">Please Select Part</option>
                                        @foreach ($parts as $part)
                                            <option value="{{ $part->id }}" {{ $part->id == $partSpecification->part_id ? 'selected' : '' }}>
                                                {{ $part->part_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="accessory">Accessory</label>
                                    <input type="text" class="form-control" name="accessory" id="accessory" value="{{ $partSpecification->accessory }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="outer-diameter">Outer Diameter</label>
                                    <input type="text" class="form-control" name="outer_diameter" id="outer_diameter" value="{{ $partSpecification->outer_diameter }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="net_quantity">Net Quantity</label>
                                    <input type="text" class="form-control" name="net_quantity" id="net_quantity" value="{{ $partSpecification->net_quantity }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="quantity_per_axle">Quantity per Axle</label>
                                    <input type="text" class="form-control" name="quantity_per_axle" id="quantity_per_axle" value="{{ $partSpecification->quantity_per_axle }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="required_quantity">Required Quantity</label>
                                    <input type="text" class="form-control" name="required_quantity" id="required_quantity" value="{{ $partSpecification->required_quantity }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="weight">Weight</label>
                                    <input type="text" class="form-control" name="weight" id="weight" value="{{ $partSpecification->weight}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="country_of_origin">Country of Origin</label>
                                    <input type="text" class="form-control" name="country_of_origin" id="country_of_origin" value="{{ $partSpecification->country_of_origin }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="fittig_position">Fitting Position</label>
                                    <input type="text" class="form-control" name="fittig_position" id="fittig_position" value="{{ $partSpecification->fitting_position }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inner_diameter">Inner Diameter</label>
                                    <input type="text" class="form-control" name="inner_diameter" id="inner_diameter" value="{{ $partSpecification->inner_diameter }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="material">Material</label>
                                    <input type="text" class="form-control" name="material" id="material" value="{{ $partSpecification->material}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="fitting_place">Fitting Place</label>
                                    <input type="text" class="form-control" name="fitting_place" id="fitting_place" value="{{ $partSpecification->fitting_place }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="manufacturer">Manufacturer</label>
                                    <input type="text" class="form-control" name="manufacturer" id="manufacturer" value="{{ $partSpecification->manufacturer }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="address_of_manufacturer">Address of Manufacturer</label>
                                    <input type="text" class="form-control" name="address_of_manufacturer" id="address_of_manufacturer" value="{{ $partSpecification->address_of_manufacturer }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="mounting_type">Mounting Type</label>
                                    <input type="text" class="form-control" name="mounting_type" id="mounting_type" value="{{ $partSpecification->mounting_type }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="pcd">PCD</label>
                                    <input type="text" class="form-control" name="pcd" id="pcd" value="{{ $partSpecification->pcd }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="number_of_holes">Number of Holes</label>
                                    <input type="text" class="form-control" name="number_of_holes" id="number_of_holes" value="{{ $partSpecification->number_of_holes }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="diameter">Diameter</label>
                                    <input type="text" class="form-control" name="diameter" id="diameter" value="{{ $partSpecification->diameter }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dimensions">Dimensions</label>
                                    <input type="text" class="form-control" name="dimensions" id="dimensions" value="{{ $partSpecification->dimensions}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="other_specification">Other Specifications</label>
                                    <input type="text" class="form-control" name="part_specification" id="part_pecification" value="{{ $partSpecification->other_specifications}}">
                                </div>
                            </div>

                            <!-- Repeat similar blocks for other fields -->

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary px-4">Update</button>
                                <a href="{{ route('part_specification.index') }}" class="btn btn-light px-4">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Fetch models, categories, subcategories, and parts dynamically
        $('#vehicle_brand').on('change', function() {
            var brandId = $(this).val();
            if (brandId) {
                $.ajax({
                    url: "/admin-auth/get-model/",
                    type: "GET",
                    data: {
                        brandId: brandId

                    },
                    success: function(response) {
                        console.log(response.models); // Log the models data
                        var modelSelect = $('#modelSelect');
                        modelSelect.empty(); // Clear the dropdown
                        modelSelect.append('<option value="">Please Select Vehicle Model</option>');
                        $.each(response.models, function(key, model) {
                            modelSelect.append('<option value="' + model.id + '">' + model
                                .vehicle_name + '</option>');
                        });
                    },
                });
            }
        });

        $('#modelSelect').on('change', function() {
            var model_id = $(this).val();
            if(model_id)
        {
            $.ajax({
                url:"/admin-auth/get-category",
                type:'GET',
                data:{
                    model_id:model_id
                },
                success:function(response)
                {
                    console.log(response.categories);
                    var categorySelect = $('#selectCategory');
                    categorySelect.empty();
                    categorySelect.append('<option value="">Please Select Category</option>');
                    $.each(response.categories,function(key,category){
                        categorySelect.append('<option value="'+ category.id +'">'+category.category_name+'</option>');
                    });
                }
            });
        }

        });

        $('#selectCategory').on('change', function() {
            var category_id = $(this).val();
            if(category_id)
        {
            $.ajax({
                url:'/admin-auth/get-subcategory',
                type:'GET',
                data:{
                    categoryId:category_id,
                },
                success:function(response)
                {
                  var selectSubcategory = $('#select_sub_category');
                  selectSubcategory.empty();
                  selectSubcategory.append('<option value="">Please Select Sub Category</option>');
                  $.each(response.subcategories,function(key,subcategory){
                    selectSubcategory.append('<option value=" '+subcategory.id+ ' ">'+subcategory.subcategory_name+'</option>')
                  });
                }
            });
        }

        });

        $('#select_sub_category,#selectCategory').on('change',function(){
            var categoryId = $('#selectCategory').val();
            var subCategoryId = $('#select_sub_category').val();
            if(categoryId)
        {
            $.ajax({
                url:'/admin-auth/get-parts',
                type:'GET',
                data:{
                    categoryId : categoryId,
                    subCategoryId : subCategoryId
                },
                success:function(response)
                {
                    var selectPart = $('#selectPart');
                    selectPart.empty();
                    selectPart.append('<option value="">Please Select Part</option>');
                    $.each(response.parts,function(key,part){
                        selectPart.append('<option value=" '+part.id+' ">'+part.part_name+'</option>')
                    });
                }
            });
        }
        })
    });
</script>

@endsection
