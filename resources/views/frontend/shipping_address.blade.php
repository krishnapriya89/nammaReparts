@extends('frontend.layouts.app')
@section('title', 'Details Page')

@section('content')


<section>
    <div class="container">
        <div class="banner-inner-wrapper">
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="main-title">Shipping Address </h1>
                </div>

            </div>
        </div>

    </div>
</section>

<section>
    <div class="container">
        <h2 class="Shop-by-Brands-title mt-4 mb-4">Contact Details </h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">First Name</label>
                    <input type="text" class="form-control form-control-1" id="formGroupExampleInput" placeholder="Example input">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Last Name</label>
                    <input type="text" class="form-control form-control-1" id="formGroupExampleInput" placeholder="Example input">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Mobile Number</label>
                    <input type="text" class="form-control form-control-1" id="formGroupExampleInput" placeholder="Example input">
                </div>
            </div>

        </div>

        <h2 class="Shop-by-Brands-title mt-4 mb-4">Address </h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Zip Code</label>
                    <input type="text" class="form-control form-control-1" id="formGroupExampleInput" placeholder="Example input">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Landmark</label>
                    <input type="text" class="form-control form-control-1" id="formGroupExampleInput" placeholder="Example input">
                </div>
            </div>

        </div>

        <div class="cart-table table-responsive shop_cart_table mb-40 roundedTable mt-3 total-table">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="pro-remove text-right " colspan="2">
                            <a href="javascript:;" class="btn btn-primary">Back</a>
                            <a href="Review.html" class="btn verify-account-btn"> Proceed </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</section>

@endsection