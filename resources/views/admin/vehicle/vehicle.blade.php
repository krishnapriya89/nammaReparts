@extends('admin.layouts.app')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="form-body">
                            <form method="POST" 
                                enctype="multipart/form-data">
                                @csrf
                                <h5 class="mb-4">Vehicle Details Adding</h5>
                                <div class="row mb-3">
                                    <label for="image" class="col-sm-3 col-form-label">Vehicle Brand Logo Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" id="image" name="image" multiple>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="make" class="col-sm-3 col-form-label">Brand</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="make" name="make"
                                            placeholder="Enter Brand">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="model" class="col-sm-3 col-form-label">Model</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="model" name="model"
                                            placeholder="Enter Model">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="year" class="col-sm-3 col-form-label">Year</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="year" name="year"
                                            placeholder="Enter Date & Year">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="vehicle_type" class="col-sm-3 col-form-label">Vehicle Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="vehicle_type" name="vehicle_type">
                                            <option value="" disabled selected>Select Vehicle Type</option>
                                            @foreach($vehicle as $vehicles)
                                            <option value="{{ $vehicles->id }}">{{ $vehicles->wheels }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end row-->

@endsection