@extends('frontend.layouts.app')
@section('title', 'Listing Page')

@section('content')

<section>
    <div class="container">
        <div class="banner-inner-wrapper">
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="main-title">My Cart </h1>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="mt-5">
    <div class="container">


        <div class="my-cart-table cart-table table-responsive shop_cart_table mb-40 roundedTable">
            <table class="table">
                <tbody>

                    <tr>
                        <td class="pro-thumbnail"><a href="#"><img src="images/01.png" class="img-responsive"></a></td>
                        <td class="pro-title text-left">
                            <h6 class="cart-title">Seal, Front Wheel Bearing Oil Outer</h6>


                        </td>

                        <td class="pro-quantity">
                            <div class="qty mt-2 mb-2">
                                <h6 class="cart-title"><span>Brand</span> SUZUKI</h6>
                        </td>
                        <td class="pro-subtotal">
                            <div class="cart-price">₹316.00 <span class="line-throught">₹330.00 </span> </div>
                        </td>
                        <td class="pro-remove text-right"><a href="javascript:;" class="remove-btn">×</a></td>
                    </tr>


                </tbody>
            </table>
        </div>

        <div class="my-cart-table cart-table table-responsive shop_cart_table mb-40 roundedTable  mt-4">
            <table class="table">
                <tbody>

                    <tr>
                        <td class="pro-thumbnail"><a href="#"><img src="images/01.png"></a></td>
                        <td class="pro-title text-left">
                            <h6 class="cart-title">Seal, Front Wheel Bearing Oil Outer</h6>
                        </td>

                        <td class="pro-quantity">
                            <h6 class="cart-title"><span>Brand</span> SUZUKI</h6>
                        </td>
                        <td class="pro-subtotal">
                            <div class="cart-price">₹316.00 <span class="line-throught">₹330.00 </span> </div>
                        </td>
                        <td class="pro-remove text-right"><a href="javascript:;" class="remove-btn">×</a></td>
                    </tr>


                </tbody>
            </table>
        </div>

        <div class="my-cart-table cart-table table-responsive shop_cart_table mb-40 roundedTable  mt-4">
            <table class="table">
                <tbody>

                    <tr>
                        <td class="pro-thumbnail"><a href="#"><img src="images/01.png"></a></td>
                        <td class="pro-title text-left">
                            <h6 class="cart-title">Seal, Front Wheel Bearing Oil Outer</h6>
                        </td>

                        <td class="pro-quantity">
                            <h6 class="cart-title"><span>Brand</span> SUZUKI</h6>
                        </td>
                        <td class="pro-subtotal">
                            <div class="cart-price">₹316.00 <span class="line-throught">₹330.00 </span> </div>
                        </td>
                        <td class="pro-remove text-right"><a href="javascript:;" class="remove-btn">×</a></td>
                    </tr>


                </tbody>
            </table>
        </div>

        <div class="my-cart-table cart-table table-responsive shop_cart_table mb-40 roundedTable mt-4">
            <table class="table">
                <tbody>

                    <tr>
                        <td class="pro-thumbnail"><a href="#"><img src="images/01.png"></a></td>
                        <td class="pro-title text-left">
                            <h6 class="cart-title">Seal, Front Wheel Bearing Oil Outer</h6>
                        </td>

                        <td class="pro-quantity">
                            <h6 class="cart-title"><span>Brand</span> SUZUKI</h6>
                        </td>
                        <td class="pro-subtotal">
                            <div class="cart-price">₹316.00 <span class="line-throught">₹330.00 </span> </div>
                        </td>
                        <td class="pro-remove text-right"><a href="javascript:;" class="remove-btn">×</a></td>
                    </tr>


                </tbody>
            </table>
        </div>


        <div class="cart-table table-responsive shop_cart_table mb-40 roundedTable mt-3 total-table">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="pro-subtotal td-75">
                            <div class="cart-price sub-total">SUBTOTAL (1 item): </span> </div>
                        </td>
                        <td class="pro-remove ">
                            <div class="cart-price">₹316.00 </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="pro-subtotal td-75">
                            <div class="cart-price sub-total">Total Savings (1 item):</span> </div>
                        </td>
                        <td class="pro-remove ">
                            <div class="cart-price">- ₹14.00 </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="pro-subtotal td-75">
                            <div class="cart-price sub-total">Delivery Charge</span> </div>
                        </td>
                        <td class="pro-remove ">
                            <div class="cart-price">₹82.00 </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="pro-subtotal td-75">
                            <div class="cart-price sub-total">Platform Fee </span> </div>
                        </td>
                        <td class="pro-remove ">
                            <div class="cart-price">₹20.00 </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="pro-subtotal td-75">
                            <div class="cart-price g-total">Grand Total </span> </div>
                        </td>
                        <td class="pro-remove ">
                            <div class="cart-price g-total-value">₹418.00 </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="pro-remove text-right " colspan="2">
                            <a href="javascript:;" class="btn btn-primary">Back</a>
                            <a href="Payment-Method.html" class="btn verify-account-btn">Continue</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
</section>



<section class="feature-wrapper mt-4">
    <div class="container text-center">
        <div class="section pb_70" id="section-template--14221051559994__1632218905c29fe3a1">
            <div class="container">
                <div class="row no-gutters">


                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">

                            <div class="icon">
                                <i> <img src="images/Free-Delivery-icon.png" class="img-responsive"> </i>
                            </div>

                            <div class="icon_box_content">

                                <h5>Free Delivery</h5>


                                <p>If you are going to use of Lorem, you need to be sure there anything</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">

                            <div class="icon">
                                <i> <img src="images/30-Day-Return-icon.png" class="img-responsive"> </i>
                            </div>

                            <div class="icon_box_content">

                                <h5>30 Day Return</h5>


                                <p>If you are going to use of Lorem, you need to be sure there anything</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">

                            <div class="icon">
                                <i> <img src="images/54x7.png" class="img-responsive"> </i>
                            </div>

                            <div class="icon_box_content">

                                <h5>27/4 Support</h5>


                                <p>If you are going to use of Lorem, you need to be sure there anything</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {
        $('.count').prop('disabled', true);
        $(document).on('click', '.plus', function() {
            $('.count').val(parseInt($('.count').val()) + 1);
        });
        $(document).on('click', '.minus', function() {
            $('.count').val(parseInt($('.count').val()) - 1);
            if ($('.count').val() == 0) {
                $('.count').val(1);
            }
        });
    });
</script>

@endsection