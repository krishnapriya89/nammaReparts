@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Update Vehicle Part') <!-- Title section -->

@section('content') <!-- Content section -->
<div class="page-wrapper">
    <div class="page-content">
        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vehicle Part</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item active" aria-current="page">Update Vehicle Part</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('vehicle_part.index')}}" class="btn btn-primary">Vehicle Part Table</a>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Update Form -->
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="row g-3" action="{{ route('vehicle_part.update', $vehicleparts->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-md-6">
                                <label for="part_name" class="col-sm-3 col-form-label">Part Name</label>
                                <input type="text" class="form-control" id="part_name" name="part_name" value="{{ $vehicleparts->part_name }}">
                            </div>

                            <div class="col-md-6">
                                <label for="part_image" class="col-sm-3 col-form-label">Part Image</label>
                                <input type="file" class="form-control" id="part_image" name="part_image">
                                @if($vehicleparts->part_image)
                                <br>
                                <img src="{{ $vehicleparts->part_image }}" alt="part Image" style="max-width: 100px;">
                                @else
                                <p>No Image Available</p>
                                @endif
                            </div>


                            {{-- <div class="col-md-6">
                                <label for="description" class="col-form-label">Description</label>
                                <div class="card">
                                    <div class="card-body">
                                        <div id="editor">

                                        </div>
                                        <textarea id="description" name="description" style="display: none;">{{ old('description', $vehicleparts->description) }}</textarea>
                                    </div>
                                </div>

                            </div> --}}

                            <div class="col-md-6">
                                <label for="price" class="col-sm-3 col-form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $vehicleparts->price }}">
                            </div>


                            <div class="col-md-6">
                                <label class="form-label">Select Part Category</label>
                                <select id="category_id" class="form-select" name="category_id">
                                    <option value="">Please Select Part Category</option>
                                    @foreach($categorylists as $categorylist)
                                    <option value="{{$categorylist->id}}" {{ $vehicleparts->category_id == $categorylist->id ? 'selected' : '' }}>
                                        {{ $categorylist->category_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- <div class="col-md-6">
                                <label class="form-label">Select Part Sub Category</label>
                                <select id="sub_category_id" class="form-select" name="sub_category_id">
                                    <option value="">Please Select Part Sub Category</option>
                                    @foreach($subCategorylists as $subCategorylist)
                                    <option value="{{$subCategorylist->id}}" {{ $vehicleparts->sub_category_id == $subCategorylist->id ? 'selected' : '' }}>
                                        {{ $subCategorylist->subcategory_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div> --}}

                            <div class="col-md-6">
                                <label class="form-label">Select Vehicle Model</label>
                                <select id="vehicle_id" class="form-select" name="vehicle_id">
                                    <option value="">Please Select Vehicle Model</option>
                                    @foreach($vehiclemodellists as $vehiclemodellist)
                                    <option value="{{$vehiclemodellist->id}}" {{ $vehicleparts->vehicle_id == $vehiclemodellist->id ? 'selected' : '' }}>
                                        {{ $vehiclemodellist->vehicle_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Select Fuel Type</label>
                                <select id="fuel_type" class="form-select" name="fuel_type">
                                    <option value="">Please Select Fuel Type</option>
                                    @foreach($fuellists as $fuellist)
                                    <option value="{{$fuellist->id}}" {{ $vehicleparts->fuel_type == $fuellist->id ? 'selected' : '' }}>
                                        {{ $fuellist->fuel_type }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="year" class="col-sm-3 col-form-label">Date</label>
                                <input type="date" class="form-control" id="year" name="year" value="{{ $vehicleparts->year }}">
                            </div>

                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select" name="status">
                                    <option value="1" {{ $vehicleparts->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $vehicleparts->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div>
                                <label for="condition" class="col-sm-3 col-form-label">Condition</label>
                                <br>
                                <input type="radio" id="good" name="condition" value="good"
                                    {{ old('condition', $vehicleparts->condition) == 'good' ? 'checked' : '' }}>
                                <label for="good">Good</label>
                            </div>

                            <div>
                                <input type="radio" id="fair" name="condition" value="fair"
                                    {{ old('condition', $vehicleparts->condition) == 'fair' ? 'checked' : '' }}>
                                <label for="fair">Fair</label>
                            </div>


                            <!-- Submit and Reset Buttons -->
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                    <a href="{{route('vehicle_model.index')}}" class="btn btn-light px-4">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Update Form -->

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    // Initialize the Quill editor on DOM ready
   var quill = new Quill('#editor', {
        theme: 'snow'
    });

    // Set old value to Quill editor if it exists
    var oldDescription = $('#description').val();
    if (oldDescription) {
        quill.root.innerHTML = oldDescription; // Set old description in the editor
    }


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
