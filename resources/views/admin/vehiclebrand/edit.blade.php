@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Edit Vehicle Brand') <!-- Title section -->
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
            <div class="breadcrumb-title pe-3">Vehicle Brand</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item active" aria-current="page">Edit Vehicle Brand</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('vehicle_brand.index')}}" class="btn btn-primary">Vehicle Brand Table</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="row g-3" action="{{ route('vehicle_brand.update', $vehicleBrand->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- This is necessary for the update form -->

                            <div class="col-md-6">
                                <label for="logo" class="col-sm-3 col-form-label">Vehicle Brand Logo Image</label>
                                <input type="file" id="logo" name="logo" class="form-control">
                                @if($vehicleBrand->logo)
                                    <div class="mt-2">
                                        <img src="{{ $vehicleBrand->logo }}" alt="Current Logo" style="max-width: 100px;">
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="brand_name" class="col-sm-3 col-form-label">Brand Name</label>
                                <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ $vehicleBrand->brand_name }}" placeholder="Enter Brand">
                            </div>

                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                    <a href="{{ route('vehicle_brand.index') }}" class="btn btn-light px-4">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
