@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Add Vehicle Brand') <!-- Title section -->
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
                        {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Add Vehicle Brand</li>
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
                        {{-- <h5 class="mb-4">Add Vehicle Brand</h5> --}}
                        <form class="row g-3" action="{{route('vehicle_brand.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="logo" class="col-sm-3 col-form-label">Vehicle Brand Logo Image</label>
                                <input type="file" id="logo" name="logo" multiple>
                            </div>
                            <div class="col-md-6">
                                <label for="brand_name" class="col-sm-3 col-form-label">Brand Name</label>
                                <input type="text" class="form-control" id="brand_name" name="brand_name"
                                    placeholder="Enter Brand">
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