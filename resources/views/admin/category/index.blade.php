@extends('admin.layouts.app') <!-- Extends the main layout -->

@section('title', 'category') <!-- Title section -->
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Category</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">

                        <li class="breadcrumb-item active" aria-current="page">Category Table</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('category.create')}}" class="btn btn-primary">Add Category</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl No:</th>
                                <th>Vehicle Model</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->vehicleModel ? $category->vehicleModel->model :''}}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    @if($category->status == 1)
                                    <button class="btn btn-success">Active</button>
                                    @else
                                    <button class="btn btn-danger">Inactive</button>
                                    @endif
                                </td>
                                <td>
                                     <!-- Edit Category-->
                                    <a href="{{ route('category.edit', $category->id) }}" >
                                        <i class="fas fa-pencil" style="color: black;"></i>
                                    </a>
                                     <!-- Delete Category-->
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline-block;">
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
                        <tfoot>
                            {{-- <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr> --}}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
