@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Update Vehicle Model') <!-- Title section -->

@section('content') <!-- Content section -->
<div class="page-wrapper">
    <div class="page-content">
        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vehicle Model</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item active" aria-current="page">Update Vehicle Model</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('vehicle_model.index')}}" class="btn btn-primary">Vehicle Model Table</a>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Update Form -->
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="row g-3" action="{{ route('vehicle_model.update', $vehicleModel->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Select Vehicle Brand -->
                            <div class="col-md-6">
                                <label class="form-label">Select Vehicle Brand</label>
                                <select id="brand_id" class="form-select" name="brand_id">
                                    <option value="">Please Select Brand</option>
                                    @foreach($vehiclebrandlists as $vehiclebrandlist)
                                    <option value="{{$vehiclebrandlist->id}}" {{ $vehicleModel->brand_id == $vehiclebrandlist->id ? 'selected' : '' }}>
                                        {{ $vehiclebrandlist->brand_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Vehicle Name -->
                            <div class="col-md-6">
                                <label for="vehicle_name" class="col-sm-3 col-form-label">Vehicle Name</label>
                                <input type="text" class="form-control" id="vehicle_name" name="vehicle_name" value="{{ $vehicleModel->vehicle_name }}">
                            </div>

                            <!-- Vehicle Image -->
                            <div class="col-md-6">
                                <label for="vehicle_image" class="col-sm-3 col-form-label">Vehicle Image</label>
                                <input type="file" id="vehicle_image" name="vehicle_image">
                                @if($vehicleModel->vehicle_image)
                                <br>
                                <img src="{{ $vehicleModel->vehicle_image }}" alt="Vehicle Image" style="max-width: 100px;">
                                @else
                                <p>No Image Available</p>
                                @endif
                            </div>

                            <!-- Vehicle Model -->
                            <div class="col-md-6">
                                <label for="model" class="col-sm-3 col-form-label">Vehicle Model</label>
                                <input type="text" class="form-control" id="model" name="model" value="{{ $vehicleModel->model }}">
                            </div>

                            <!-- Year -->
                            <div class="col-md-6">
                                <label for="year" class="col-sm-3 col-form-label">Year</label>
                                <input type="date" class="form-control datepicker" id="year" name="year" value="{{ $vehicleModel->year }}">
                            </div>

                            <!-- Select Fuel Type -->
                            <div class="col-md-6">
                                <label class="form-label">Select Fuel Type</label>
                                <select id="fuel_type" class="form-select" name="fuel_type">
                                    <option value="">Please Select Fuel type</option>
                                    @foreach($fuellists as $fuellist)
                                    <option value="{{$fuellist->id}}" {{ $vehicleModel->fuel_type == $fuellist->id ? 'selected' : '' }}>
                                        {{ $fuellist->fuel_type }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Engine Type -->
                            <div class="col-md-6">
                                <label for="engine_type" class="col-sm-3 col-form-label">Engine Type</label>
                                <input type="text" class="form-control" id="engine_type" name="engine_type" value="{{ $vehicleModel->engine_type }}">
                            </div>

                            <!-- Select Vehicle Type -->
                            <div class="col-md-6">
                                <label class="form-label">Select Vehicle Type</label>
                                <select id="vehicle_type" class="form-select" name="vehicle_type">
                                    <option value="">Please Select Vehicle type</option>
                                    @foreach($vehicletypelists as $vehicletypelist)
                                    <option value="{{$vehicletypelist->id}}" {{ $vehicleModel->vehicle_type == $vehicletypelist->id ? 'selected' : '' }}>
                                        {{ $vehicletypelist->wheels }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select" name="status">
                                    <option value="1" {{ $vehicleModel->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $vehicleModel->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
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
@endsection
