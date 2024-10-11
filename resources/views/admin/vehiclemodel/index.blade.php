@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Vehicle Model List') <!-- Title section -->
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vehicle Model List</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">

                        <li class="breadcrumb-item active" aria-current="page">Vehicle Model List Table</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('vehicle_model.create')}}" class="btn btn-primary">Add Vehicle Model</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl No:</th>
                                <th>Vehicle Brand</th>
                                <th>Vehicle Name</th>
                                <th>Vehicle Image</th>
                                <th>Vehicle Model</th>
                                <th>Year</th>
                                <th>Vehicle Fuel Type</th>
                                <th>Vehicle Engine Type</th>
                                <th>Vehicle Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehicleModels as $vehicleModel)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$vehicleModel->brand->brand_name}}</td>
                                <td>{{$vehicleModel->vehicle_name}}</td>
                                <td>
                                    @if($vehicleModel->vehicle_image)
                                    <img src="{{ $vehicleModel->vehicle_image }}" alt="Vehicle Logo" class="mt-2" style="max-width: 100px;">
                                    @else
                                    No Image Available
                                    @endif
                                </td>
                                <td>{{$vehicleModel->model}}</td>
                                <td>{{$vehicleModel->year}}</td>
                                <td>{{$vehicleModel->fuel->fuel_type}}</td>
                                <td>{{$vehicleModel->engine}}</td>
                                <td>{{$vehicleModel->type->wheels}}</td>
                                <td>
                                    @if($vehicleModel->status == 1)
                                    <button class="btn btn-success">Active</button>
                                    @else
                                    <button class="btn btn-danger">Inactive</button>
                                    @endif
                                </td>

                                <td>
                                    <!-- Edit Category-->
                                    <a href="{{ route('vehicle_model.edit', $vehicleModel->id) }}">
                                        <i class="fas fa-pencil" style="color: black;"></i>
                                    </a>
                                    <!-- Delete Category-->
                                    <form action="{{ route('vehicle_model.destroy', $vehicleModel->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this category?')">
                                            <i class="fa fa-trash" style="color: black;"></i>

                                        </button>
                                    </form>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
