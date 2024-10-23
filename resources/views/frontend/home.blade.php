@extends('frontend.layouts.app')
@section('title', 'Home')

@section('content')


<div class="modal align-middle" id="login">
    <div class="modal-dialog modal-dialog-centered form-radious">
        <div class="form-radious modal-content">
            <button class="close modal-close" data-dismiss="modal">&times;</button>

            <div class="form-radious modal-body wrap-login100">
                <h5 class="form-title p-b-25">Account Login</h5>
                <form action="{{ route('login') }}" method="post" id="login_form">
                    @csrf
                    <div class="form-group">
                        <label class="login-label ">Mobile Number</label>
                        <input class="login-input" type="text" name="username" placeholder="Enter Your Mobile Number">
                    </div>
                </form>
                <div class="mt-4 text-center resend">Don't have an account?<a class="" href="#0" data-toggle="modal"
                        data-target="#MyModa3"> Sign Up</a></div>
            </div>

        </div>
    </div>
</div>


<div class="modal align-middle" id="MyModa2">
    <div class="modal-dialog modal-dialog-centered form-radious">
        <div class="form-radious modal-content">
            <button class="close modal-close" data-dismiss="modal">&times;</button>

            <div class="form-radious modal-body wrap-login100">
                <div class="text-center">
                    <h5 class="form-title">Mobile Phone Verification</h5>
                    <label class="login-subtitle">Enter the 4-digit verification code that was sent to your phone
                        number.</label>
                </div>

                <div class="otp-wrapper m-t-40">
                    <div class="otp-field">
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button type="submit" class="verify-account-btn" id="verifyOtpBtn">Verify Account</button>
                </div>
                <div class="mt-4 text-center resend">Didn't receive code? <a class="" href="#0">Resend</a></div>
            </div>

        </div>
    </div>
</div>

<div class="modal align-middle" id="MyModa3">
    <div class="modal-dialog modal-lg modal-dialog-centered form-radious">
        <div class="form-radious modal-content">
            <button class="close modal-close" data-dismiss="modal">&times;</button>

            <div class="form-radious modal-body wrap-login100">
                <div class="text-center">
                    <h5 class="form-title">Account registration </h5>
                </div>
                <form action="{{ route('registration.submit') }}" method="post" id="registrationForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="login-label ">First NAME</label>
                                <input class="login-input" type="text" name="username"
                                    placeholder="Enter Your Mobile Number">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="login-label ">Last NAME</label>
                                <input class="login-input" type="text" name="username"
                                    placeholder="Enter Your Mobile Number">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="login-label ">Email Address</label>
                                <input class="login-input" type="text" name="username"
                                    placeholder="Enter Your Mobile Number">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="login-label ">Mobile Number</label>
                                <input class="login-input" type="text" name="username"
                                    placeholder="Enter Your Mobile Number">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="text-center mt-2">
                                <button type="submit" class="verify-account-btn">Register</button>
                            </div>
                        </div>

                    </div>


            </div>
            </form>
        </div>
    </div>
</div>



<section>
    <div class="container">
        <div class="banner-wrapper border-double">
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="main-title">Reused Vehicle Spares</h1>
                    <h2 class="sub-head"> All the parts your vehicle will ever need!</h2>
                </div>
                {{-- <div class="col-sm-3">
                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#login">Login</a>
                </div> --}}
                <div class="col-sm-3">
                    @if (Auth::check())
                    <!-- Show the My Account dropdown if the user is authenticated -->
                    <div class="dropdown" id="myAccountContainer">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="myAccountButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </button>
                        <div class="dropdown-menu" aria-labelledby="myAccountButton">
                            <p class="dropdown-item">Welcome, {{ Auth::user()->first_name }}</p>
                            <div class="dropdown-divider"></div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="dropdown-item"
                                style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <!-- Show the Login button if the user is not authenticated -->
                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#login">Login</a>
                    @endif
                </div>
            </div>
        </div>

    </div>
</section>

<section class="seal-week-wrapper">
    <div class="container border-double">
        <div class=" mt-5 mb-4">
            <h2 class="Shop-by-Brands-title mb-4">Deals For This <span>Week</span></h2>

            <div class="owl-carousel owl-2">
                <div class="media-29101">
                    <div class="product-block-one week-deal-one">
                        <div class="ribon fs_13">8%</div>
                        <div class="product-block-one-image">
                            <div class="image"><img src="{{ asset('frontend/images/f-1.png') }}" alt="parts"></div>
                        </div>
                        <div class="product-block-one-cintent">
                            <h5 class="v-brand">Maruti / ertiga</h5>
                            <h4 class="fs_15 parts-title"><a href="#">Front Wheel Bearings</a></h4>

                            <div class="price-container">
                                <div class="price fs_15 fw_medium">₹268.99 <span>₹168.99</span></div>
                            </div>
                        </div>
                        <div class="product-block-one-heart">
                            <a href=""><i class="far fa-heart"></i></a>
                        </div>

                    </div>
                </div>
                <div class="media-29101">
                    <div class="product-block-one week-deal-one">
                        <div class="ribon fs_13">8%</div>
                        <div class="product-block-one-image">
                            <div class="image"><img src="{{ asset('frontend/images/f-2.png') }}" alt="parts"></div>
                        </div>
                        <div class="product-block-one-cintent">
                            <h5 class="v-brand">Maruti / ertiga</h5>
                            <h4 class="fs_15 parts-title"><a href="#">Front Wheel Bearings</a></h4>

                            <div class="price-container">
                                <div class="price fs_15 fw_medium">₹268.99 <span>₹168.99</span></div>
                            </div>
                        </div>
                        <div class="product-block-one-heart">
                            <a href=""><i class="far fa-heart"></i></a>
                        </div>

                    </div>
                </div>
                <div class="media-29101">
                    <div class="product-block-one week-deal-one">
                        <div class="ribon fs_13">Super Price</div>
                        <div class="product-block-one-image">
                            <div class="image"><img src="{{ asset('frontend/images/f-3.png') }}" alt="parts"></div>
                        </div>
                        <div class="product-block-one-cintent">
                            <h5 class="v-brand">Maruti / ertiga</h5>
                            <h4 class="fs_15 parts-title"><a href="#">Front Wheel Bearings</a></h4>

                            <div class="price-container">
                                <div class="price fs_15 fw_medium">₹268.99 <span>₹168.99</span></div>
                            </div>
                        </div>
                        <div class="product-block-one-heart">
                            <a href=""><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media-29101">
                    <div class="product-block-one week-deal-one">
                        <div class="ribon fs_13">8%</div>
                        <div class="product-block-one-image">
                            <div class="image"><img src="{{ asset('frontend/images/f-4.png') }}" alt="parts"></div>
                        </div>
                        <div class="product-block-one-cintent">
                            <h5 class="v-brand">Maruti / ertiga</h5>
                            <h4 class="fs_15 parts-title"><a href="#">Front Wheel Bearings</a></h4>

                            <div class="price-container">
                                <div class="price fs_15 fw_medium">₹268.99 <span>₹168.99</span></div>
                            </div>
                            <div class="product-block-one-heart">
                                <a href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="media-29101">
                    <div class="product-block-one week-deal-one">
                        <div class="ribon fs_13">8%</div>
                        <div class="product-block-one-image">
                            <div class="image"><img src="{{ asset('frontend/images/f-2.png') }}" alt="parts"></div>
                        </div>
                        <div class="product-block-one-cintent">
                            <h5 class="v-brand">Maruti / ertiga</h5>
                            <h4 class="fs_15 parts-title"><a href="#">Front Wheel Bearings </a></h4>

                            <div class="price-container">
                                <div class="price fs_15 fw_medium">₹268.99 <span>₹168.99</span></div>
                            </div>
                        </div>
                        <div class="product-block-one-heart">
                            <a href=""><i class="far fa-heart"></i></a>
                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>
</section>

<section class="Shop-by-Brands">
    <div class="container">
        <h2 class="Shop-by-Brands-title">Shop by <span>Brands</span></h2>

        <div class="title-line"></div>

        <div class="row">
            <div class="col-md-12">
                <ul class="cbp-rfgrid text-center">
                    @foreach($brands as $brand)
                    <li>
                        <a href="{{ route('listing-page', $brand->id) }}">
                            <div class="service-icon-img">
                                <img src="{{ asset($brand->logo) }}" alt="{{ $brand->brand_name }}">
                            </div>
                            <h4>{{ $brand->brand_name }}</h4>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="Shop-by-parts">
    <div class="container">
        <h2 class="Shop-by-Brands-title mb-4">Shop by <span>Parts</span></h2>

        @include('frontend.includes.shop_by_part')

    </div>
</section>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{ asset('frontend/images/Body-Parts-300x300.jpg') }}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Body Parts </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    RH Front Door </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    LH Front Door</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    LH Rear Door </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Dashboard </a>
                            </li>
                            <li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{ asset('frontend/images/axels.png') }}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Axels</h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Front Dead Axle </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Rear Dead Axle </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Axle Left </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Axle Right</a>
                            </li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{ asset('frontend/images/steering-suspension.png') }}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Steering & suspensions</h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Front Shocker+Spring(LH)</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Shocker+Spring(RH)</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Rear Shocker(RH) </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Rear Shocker(LH) </a>
                            </li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{ asset('frontend/images/electrical.png') }}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">
                            Electrics </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Speedometer </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Fuses Box </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Horn </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Speaker(3/6 Inch) </a>
                            </li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{ asset('frontend/images/gear.png') }}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Gear Box </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Secondary Gear Box-4WD </a>
                            </li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{ asset('frontend/images/wheel.png') }}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">TYRES &WHEELS</h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Rim 1</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Rim 2</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Rim 3</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Rim 4 </a>
                            </li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <img src="{{ asset('frontend/images/ad-banner.png') }}" class="img-responsive">
            </div>

        </div>
    </div>
</section>



<section class="feature-wrapper">
    <div class="container text-center">
        <div class="section pb_70" id="section-template--14221051559994__1632218905c29fe3a1">
            <div class="container">
                <div class="row no-gutters">


                    <div class="col-lg-4">
                        <div class="icon_box icon_box_style1">

                            <div class="icon">
                                <i> <img src="{{ asset('frontend/images/Free-Delivery-icon.png') }}" class="img-responsive"> </i>
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
                                <i> <img src="{{ asset('frontend/images/30-Day-Return-icon.png') }}" class="img-responsive"> </i>
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
                                <i> <img src="{{ asset('frontend/images/54x7.png') }}" class="img-responsive"> </i>
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

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#phone_number').on('input', function() {
            const phone_number = $(this).val();
            if (phone_number.length === 10) {
                $('#login_form').submit();
            }
        });
        //submit the login form
        $('#login_form').on('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: $(this).attr('action'), // Use the form action URL
                method: 'POST',
                data: $(this).serialize(), // Serialize the form data
                success: function(response) {
                    if (response.success) {
                        $('#login').modal('hide');
                        $('#MyModa2').modal('show'); // Show the OTP modal
                    } else {
                        alert(response.message); // Show error message if OTP not sent
                    }
                },
                error: function(xhr) {
                    const errorMessage = xhr.responseJSON.message || 'An error occurred.';
                    alert(errorMessage); // Show error message if request fails
                }
            });
        });

        $('.otp-field input').on('keyup', function(e) {
            if ($(this).val().length >= $(this).attr('maxlength')) {
                $(this).next('input').focus();
            }
            if (e.key === 'Backspace' && $(this).val() === '') {
                $(this).prev('input').focus();
            }
        });
        //verify otp
        $('#verifyOtpBtn').on('click', function(e) {
            e.preventDefault();
            const otp = $('.otp-field input').map(function() {
                return $(this).val();
            }).get().join(''); // Join all OTP inputs
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/verify-otp',
                method: 'POST',
                data: {
                    _token: csrfToken,
                    otp: otp,
                    phone_number: $('#phone_number').val()
                },
                success: function(response) {

                    if (response.success) {
                        alert("Success: " + response.message);
                        location.reload();
                        $('#MyModa2').modal('hide');
                        // $('#loginContainer').addClass('d-none'); // Hide login container
                        // $('#myAccountContainer').removeClass('d-none');

                    } else {
                        alert("Error: " + response.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText); // Log error response for debugging
                    alert('Something went wrong. Please try again.');
                }
            });
        });
        //resend otp
        $('#resend_otp').on('click', function(e) {
            e.preventDefault();
            var phone_number = $('#phone_number').val();
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/login',
                type: 'POST',
                data: {
                    _token: csrfToken,
                    phone_number: phone_number
                },
                success: function(response) {
                    if (response.success) {
                        alert('OTP has been resent to your phone number.');
                    } else {
                        alert('Failed to resend OTP. Please try again.');
                    }
                }
            });

        });
        $('#registrationForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            let formData = $(this).serialize(); // Serialize form data
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                success: function(response) {
                    // If registration is successful, hide the modal
                    $('#MyModa3').modal('hide');
                    toastr.success(
                        "Registration successful!"); // Toastr message for success
                },
                error: function(xhr) {
                    // If there are validation errors, keep the modal open and display errors
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let phoneNumberError = errors.phone_number ? errors.phone_number[
                            0] : '';

                        // Show the modal again (optional if it is already open)
                        $('#MyModa3').modal('show');

                        // Clear previous error messages
                        $('#phoneNumberError').text('');

                        // Display the error message
                        if (phoneNumberError) {
                            $('#phoneNumberError').text(phoneNumberError);
                        }
                    }
                }
            });
        });

        // show all parts
        $('.parts-show-all-btn').click(function() {
            var $this = $(this);
            var $parentContent = $this.closest('.icon-content');
            $parentContent.find('.hiddenPart').slideDown();
            $this.hide();
        });

    });
</script>
