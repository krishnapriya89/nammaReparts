@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Vehicle Part List') <!-- Title section -->
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vehicle Part List</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">

                        <li class="breadcrumb-item active" aria-current="page">Vehicle Part List Table</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('vehicle_part.create')}}" class="btn btn-primary">Add Vehicle Part</a>
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
                                <th>Part Image</th>
                                <th>Part Name</th>
                                <th>Brand Name</th>  
                                <th>Vehicle Model</th>                               
                                <th>Year</th>
                                <th>Vehicle Fuel Type</th>
                                <th>Price</th>
                                <th>Condition</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehicleparts as $vehiclepart)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    @if($vehiclepart->part_image)
                                    <img src="{{ $vehiclepart->part_image }}" alt="Vehicle Logo" class="mt-2" style="max-width: 100px;">
                                    @else
                                    No Image Available
                                    @endif
                                </td>
                                <td>{{$vehiclepart->part_name}}</td>
                                <td>{{$vehiclepart->vehicle->vehicle_name}}</td> 
                                <td>{{$vehiclepart->vehicle->model}}</td> 
                                <td>{{$vehiclepart->year}}</td>                             
                                <td>{{$vehiclepart->fuel->fuel_type}}</td>
                                <td>{{$vehiclepart->price}}</td>
                                <td>{{$vehiclepart->condition}}</td>

                                <td>
                                    @if($vehiclepart->status == 1)
                                    <button class="btn btn-success">Active</button>
                                    @else
                                    <button class="btn btn-danger">Inactive</button>
                                    @endif
                                </td>

                                <td>
                                    <!-- Edit Category-->
                                    <a href="{{ route('vehicle_part.edit', $vehiclepart->id) }}">
                                        <i class="fas fa-pencil" style="color: black;"></i>
                                    </a>
                                    <!-- Delete Category-->
                                    <form action="{{ route('vehicle_part.destroy', $vehiclepart->id) }}" method="POST" style="display:inline-block;">
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
