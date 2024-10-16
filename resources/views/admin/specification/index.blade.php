@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'Vehicle Part Specification') <!-- Title section -->
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vehicle Part Specification  List</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">

                        <li class="breadcrumb-item active" aria-current="page">Vehicle Part Specification List Table</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('part_specification.create')}}" class="btn btn-primary">Add Vehicle Part Specifications</a>
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
                                <th>Brand</th>3
                                <th>Model</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Part</th>
                                <th>Accessory</th>
                                <th>Outer Diameter</th>
                                <th>Net Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($specifications as $specification)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $specification->brand->brand_name}}</td>
                                <td>{{ $specification->vehicleModel->vehicle_name}}</td>
                                <td>{{ $specification->category->category_name}}</td>
                                <td>{{ $specification->subCategory->subcategory_name}}</td>
                                <td>{{ $specification->part->part_name}}</td>
                                <td>{{ $specification->accessory}}</td>
                                <td>{{ $specification->outer_diameter }}</td>
                                <td>{{ $specification->net_quantity}}</td>
                                <td>
                                    <a href="{{ route('part_specification.edit', $specification->id) }}">
                                        <i class="fas fa-pencil" style="color: black;"></i>
                                    </a>
                                    <!-- Delete Category-->
                                    <form action="{{ route('part_specification.destroy', $specification->id) }}" method="POST" style="display:inline-block;">
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
