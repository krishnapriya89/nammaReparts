@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Add Vehicle Parts') <!-- Title section -->
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
            <div class="breadcrumb-title pe-3">Vehicle Parts</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Add Vehicle Parts</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('vehicle_part.index')}}" class="btn btn-primary">Vehicle Parts Table</a>
                </div>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-12 mx-auto">

                <div class="card">
                    <div class="card-body p-4">
                        {{-- <h5 class="mb-4">Add Vehicle Parts</h5> --}}

                        <form class="row g-3" action="{{ route('vehicle_part.store') }}" method="POST" enctype="multipart/form-data" id="vehicle_part_form">
                            @csrf

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="part_name" class="col-form-label">Part Name</label>
                                    <input type="text" class="form-control" id="part_name" name="part_name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="part_image" class="col-form-label">Part Image</label>
                                <input type="file" class="form-control" id="part_image" name="part_image" multiple required>
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="col-form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Select Vehicle Model</label>
                                <select id="vehicle_id" class="form-select" name="vehicle_id" required>
                                    <option value="">Please Select Vehicle Model</option>
                                    @foreach($vehiclemodellists as $vehiclemodellist)
                                        <option value="{{ $vehiclemodellist->id }}">{{ $vehiclemodellist->model }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Select Category</label>
                                <select id="category_id" class="form-select" name="category_id" required>
                                    <option value="">Please Select Category</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Select Part Sub Category</label>
                                <select id="sub_category_id" class="form-select" name="sub_category_id" >
                                    <option value="">Please Select Sub Category</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Select Fuel Type</label>
                                <select id="fuel_type" class="form-select" name="fuel_type" required>
                                    <option value="">Please Select Fuel Type</option>
                                    @foreach($fuellists as $fuellist)
                                        <option value="{{ $fuellist->id }}">{{ $fuellist->fuel_type }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="year" class="col-sm-3 col-form-label">Year</label>
                                <input type="date" class="form-control datepicker" id="year" name="year" />
                            </div>

                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select" name="status" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <br>
                                @error('status')
                                    <small class="red-text">Please Enter Category Name </small>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="description" class="col-form-label">Description</label>
                                <div class="card">
                                    <div class="card-body">
                                        <div id="editor">

                                        </div>
                                        <textarea id="description" name="description" style="display: none;"></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Condition</label>
                                    <div>
                                        <input type="radio" id="good" name="condition" value="good" required>
                                        <label for="good">Good</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="fair" name="condition" value="fair">
                                        <label for="fair">Fair</label>
                                    </div>
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
    $(document).ready(function(){
        $('#vehicle_id').change(function(){
            const vehicleId = $(this).val();
            $('#category_id').empty().append('<option value="">Please Select Category</option>');
            $('#sub_category_id').empty().append('<option value="">Please Select Sub Category</option>');
            if(vehicleId)
        {
            $.ajax({
                type:'GET',
                url:'/admin-auth/categories/',
                data:{
                    vehicleId:vehicleId,
                },
                success:function(data)
                {
                    console.log(data);
                    data.forEach(function(category) {
                        $('#category_id').append(`<option value="${category.id}">${category.category_name}</option>`);
                    });

                }
            });
        }
        });
        $('#category_id').change(function(){
            const categoryId = $(this).val();
            $('#sub_category_id').empty().append('<option value="">Please Select Sub Category</option>');
            if(categoryId)
        {
            $.ajax({
                url:'/admin-auth/subcategories/',
                type:'GET',
                data:{
                    categoryId:categoryId
                },
                success:function(data)
                {
                    console.log(data);
                    data.forEach(function(subcategory){
                        $('#sub_category_id').append(`<option value="${subcategory.id}">${subcategory.subcategory_name}</option>`);
                    });

                }
            });
        }
        });

    });
   // Initialize Quill


$(document).ready(function() {
    // Initialize the Quill editor on DOM ready
   var quill = new Quill('#editor', {
        theme: 'snow'
    });

    // Form submission logic
    $('#vehicle_part_form').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Check if quill is initialized
        if (!quill) {
            console.error("Quill editor is not initialized!");
            return;
        }

        // Use Quill API to get editor content
        var editorContent = quill.root.innerHTML;
        console.log("Editor content: ", editorContent); // Debugging

        // Set content to the hidden textarea
        $('#description').val(editorContent);

        // Ensure value is set
        console.log("Textarea value: ", $('#description').val());

        // Submit the form after setting the textarea value
        this.submit();
    });
});


</script>
@endsection
