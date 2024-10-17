@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Add Category') <!-- Title section -->
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
            <div class="breadcrumb-title pe-3">Category</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('category.index')}}" class="btn btn-primary">Category Table</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-12 mx-auto">

                <div class="card">
                    <div class="card-body p-4">
                        {{-- <h5 class="mb-4">Add Category</h5> --}}
                        <form class="row g-3" action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="input7" class="form-label">Select vehicle Model</label>
                                    <select id="input7" class="form-select" name="vehicle_model">
                                        <option value="">Select Model</option>
                                        @foreach($vehicle_models as $model)
                                        <option value="{{ $model->id }}">{{ $model->model }}</option>
                                        @endforeach
                                    </select>
                                    @error('vehicle_model')
                                    <small class="red-text">Please Enter Vehicle Model</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="input1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="input1" placeholder="Category Name" name="category_name">
                                    <br>
                                    @error('category_name')
                                    <small class="red-text">Please Enter Category Name </small>
                                    @enderror
                                </div>


                            </div>

                            <div class="col-md-6">
                                <label for="input7" class="form-label">Status</label>
                                <select id="input7" class="form-select" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <br>
                                @error('status')
                                <small class="red-text">Please Enter Status </small>
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


@endsection <!-- End of content section -->
