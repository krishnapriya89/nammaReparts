@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Add Vehicle Part Specification') <!-- Title section -->
<style>
    .red-text {
        color: red;
    }
</style>

@section('content') <!-- Content section -->

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Vehicle Part Specification</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li> --}}
                            <li class="breadcrumb-item active" aria-current="page">Add Vehicle Part Specification</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('part_specification.index') }}" class="btn btn-primary">Vehicle Parts Table</a>
                    </div>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">

                    <div class="card">
                        <div class="card-body p-4">
                            {{-- <h5 class="mb-4">Add Vehicle Parts</h5> --}}

                            <form class="row g-3" action="{{ route('part_specification.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Select Brands</label>
                                        <select id="vehicle_brand" class="form-select" name="vehicle_brand" required>
                                            <option value="">Please Select Brands</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Select Vehicle Model</label>
                                        <select id="modelSelect" class="form-select" name="modelSelect" required>
                                            <option value="">Please Select Vehicle Model</option>
                                            <!-- Options will be dynamically populated -->
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="selectcategory">Select Category</label>
                                        <select name="selectCategory" id="selectCategory" required class="form-select">
                                            <option value="">Please Select Category</option>
                                            {{-- options will be called from ajax call --}}
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="select_sub_category">Select Sub Category</label>
                                        <select name="select_sub_category" id="select_sub_category" class="form-select">
                                            <option value="">Please Select Sub Category</option>
                                            {{-- Options will be dynamicallly populated --}}
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="parts">Select Parts</label>
                                        <select name="selectPart" id="selectPart" class="form-control">
                                            <option value="">Please Select Parts</option>
                                            {{-- options will be populated dynamically --}}
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="acessory">Accessory</label>
                                        <input type="text" class="form-control" name="accessory" id="accessory">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="outer-diameter">Outer Diameter</label>
                                        <input type="text" class="form-control" name="outer_diameter" id="outer_diameter">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="net_quantity">Net Quantity</label>
                                        <input type="text" class="form-control" name="net_quantity" id="net_quantity">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="quantity_per_axle">Quantity per Axle</label>
                                        <input type="text" class="form-control" name="quantity_per_axle" id="quantity_per_axle">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="required_quantity">Required Quantity</label>
                                        <input type="text" class="form-control" name="required_quantity" id="required_quantity">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="weight">Weight</label>
                                        <input type="text" class="form-control" name="weight" id="weight">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="country_of_origin">Country of Origin</label>
                                        <input type="text" class="form-control" name="country_of_origin" id="country_of_origin">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="fittig_position">Fitting Position</label>
                                        <input type="text" class="form-control" name="fittig_position" id="fittig_position">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inner_diameter">Inner Diameter</label>
                                        <input type="text" class="form-control" name="inner_diameter" id="inner_diameter">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="material">Material</label>
                                        <input type="text" class="form-control" name="material" id="material">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="fitting_place">Fitting Place</label>
                                        <input type="text" class="form-control" name="fitting_place" id="fitting_place">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="manufacturer">Manufacturer</label>
                                        <input type="text" class="form-control" name="manufacturer" id="manufacturer">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="address_of_manufacturer">Address of Manufacturer</label>
                                        <input type="text" class="form-control" name="address_of_manufacturer" id="address_of_manufacturer">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="mounting_type">Mounting Type</label>
                                        <input type="text" class="form-control" name="mounting_type" id="mounting_type">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pcd">PCD</label>
                                        <input type="text" class="form-control" name="pcd" id="pcd">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="number_of_holes">Number of Holes</label>
                                        <input type="text" class="form-control" name="number_of_holes" id="number_of_holes">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="diameter">Diameter</label>
                                        <input type="text" class="form-control" name="diameter" id="diameter">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="dimensions">Dimensions</label>
                                        <input type="text" class="form-control" name="dimensions" id="dimensions">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="other_specification">Other Specifications</label>
                                        <input type="text" class="form-control" name="part_specification" id="part_pecification">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-md-flex d-grid align-items-center gap-3">
                                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                                        <button type="button" class="btn btn-light px-4">Reset</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
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
        // select Category
        $('#modelSelect').on('change',function(){
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
        $('#selectCategory').on('change',function(){
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
    </script>


@endsection
