@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Add Vehicle Model') <!-- Title section -->
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
            <div class="breadcrumb-title pe-3">Vehicle Model</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Add Vehicle Model</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('vehicle_model.index')}}" class="btn btn-primary">Vehicle Model Table</a>
                </div>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-12 mx-auto">

                <div class="card">
                    <div class="card-body p-4">
                        {{-- <h5 class="mb-4">Add Vehicle Model</h5> --}}
                        <form class="row g-3" action="{{route('vehicle_model.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label class="form-label">Select Vehicle Brand</label>
                                <select id="brand_id" class="form-select" name="brand_id">
                                    <option value="">Please Select Brand</option>
                                    @foreach($vehiclebrandlists as $vehiclebrandlist)
                                    <option value="{{$vehiclebrandlist->id}}">{{ $vehiclebrandlist->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="vehicle_name" class="col-sm-3 col-form-label">Vehicle Name</label>
                                <input type="text" class="form-control" id="vehicle_name" name="vehicle_name">
                            </div>
                            <div class="col-md-6">
                                <label for="vehicle_image" class="col-sm-3 col-form-label">Vehicle Image</label>
                                <input type="file" id="vehicle_image" name="vehicle_image" multiple>
                            </div>
                            <div class="col-md-6">
                                <label for="model" class="col-sm-3 col-form-label">Vehicle Model</label>
                                <input type="text" class="form-control" id="model" name="model">
                            </div>
                            <div class="col-md-6">
                                <label for="year" class="col-sm-3 col-form-label">Year</label>
                                <input type="date" class="form-control datepicker" id="year" name="year" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Select Fuel Type</label>
                                <select id="fuel_type" class="form-select" name="fuel_type">
                                    <option value="">Please Select Fuel type</option>
                                    @foreach($fuellists as $fuellist)
                                    <option value="{{$fuellist->id}}">{{ $fuellist->fuel_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="engine_type" class="col-sm-3 col-form-label">Engine Type</label>
                                <input type="text" class="form-control" id="engine_type" name="engine_type">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Select Vehicle Type</label>
                                <select id="vehicle_type" class="form-select" name="vehicle_type">
                                    <option value="">Please Select Vehicle type</option>
                                    @foreach($vehicletypelists as $vehicletypelist)
                                    <option value="{{$vehicletypelist->id}}">{{ $vehicletypelist->wheels}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <br>
                                @error('status')
                                <small class="red-text">Please Enter Category Name </small>
                                @enderror
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