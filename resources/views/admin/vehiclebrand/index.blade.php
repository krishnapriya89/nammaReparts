@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Vehicle Brand List') <!-- Title section -->
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vehicle Brand List</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">

                        <li class="breadcrumb-item active" aria-current="page">Brand List Table</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('vehicle_brand.create')}}" class="btn btn-primary">Add Vehicle Brand</a>
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
                                <th>Vehicle Brand Logo</th>
                                <th>Vehicle Brand Name</th>
                                <th>Created On</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehiclelist as $vehiclelists)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    @if($vehiclelists->logo)
                                    <img src="{{ $vehiclelists->logo }}" alt="Vehicle Logo" class="mt-2" style="max-width: 100px;">
                                    @else
                                    No Image Available
                                    @endif
                                </td>
                                <td>{{$vehiclelists->brand_name}}</td>
                                <td>{{$vehiclelists->created_at}}</td>
                                <td>
                                    @if($vehiclelists->active_status == 1)
                                    <button class="btn btn-success">Active</button>
                                    @else
                                    <button class="btn btn-danger">Inactive</button>
                                    @endif
                                </td>
                                <td>
                                    <!-- Edit Category-->
                                    <a href="{{ route('vehicle_brand.edit', $vehiclelists->id) }}">
                                        <i class="fas fa-pencil" style="color: black;"></i>
                                    </a>
                                    <!-- Delete Category-->
                                    <form action="{{ route('vehicle_brand.destroy', $vehiclelists->id) }}" method="POST" style="display:inline-block;">
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