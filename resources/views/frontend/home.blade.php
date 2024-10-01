@extends('frontend.layouts.app')
@section('title', 'Home')

@section('content')

<div class="modal align-middle" id="login">
    <div class="modal-dialog modal-dialog-centered form-radious">
        <div class="form-radious modal-content">
                <button class="close modal-close" data-dismiss="modal">&times;</button>

            <div class="form-radious modal-body wrap-login100">
              <h5 class="form-title p-b-25">Account Login</h5>
              <form action="{{route('login')}}" method="post" id="login_form">
                    @csrf
                    <div class="form-group">
                        <label class="login-label ">Mobile Number</label>
                        <input class="login-input" type="text" name="phone_number" id="phone_number" placeholder="Enter Your Mobile Number">
                    </div>
                </form>


              <div class="mt-4 text-center resend">Don't have an account?<a class="" href="#0" data-toggle="modal" data-target="#MyModa3"> Sign Up</a></div>
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
            <label class="login-subtitle">Enter the 4-digit verification code that was sent to your phone number.</label>
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
            <div class="mt-4 text-center resend">Didn't receive code? <a class="" href="#0" id="resend_otp">Resend</a></div>
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
          <form action="{{route('registration.submit')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="login-label ">Firtst NAME</label>
                        <input class="login-input" type="text" name="first_name" placeholder="Enter Your First Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="login-label ">Last NAME</label>
                        <input class="login-input" type="text" name="last_name" placeholder="Enter Your Last Name">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="login-label ">Email Address</label>
                        <input class="login-input" type="email" name="email" placeholder="Enter Your Email">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="login-label ">Mobile Number</label>
                        <input class="login-input" type="number"  name="phone_number" placeholder="Enter Your Mobile Number">
                    </div>
                    @error('phone_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
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
</div>
<section>
    <div class="container">
        <div class="banner-wrapper">
    <div class="row">
        <div class="col-sm-9">
            <h1 class="main-title" >Reused Vehicle Spares</h1>
            <h2 class="sub-head"> ALL THE PARTS YOUR vehicle  WILL EVER NEED!</h2>
        </div>
        <div class="col-sm-3">
            <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#login">Login</a>
        </div>
    </div>
</div>
<div class="form-padding">
<div class="row">
<div class="col-sm-12"><h3 class="sub-sub-head">Find Your Auto Parts</h3></div>
<div class="col-md-3">
    <select class="form-control sele-opt" >
    <option value="1">Select Make</option>
    <option value="2">Select Make 1</option>
    <option value="3">Select Make 2</option>
    <option value="4">Select Make 3</option>
    <option value="5">Select Make 4</option>
    <option value="6">Select Make 5</option>
    <option value="7">Select Make 6</option>
    <option value="8">Select Make 7</option>
  </select></div>
<div class="col-md-3">

    <select class="form-control sele-opt" >
        <option value="1">Select Model</option>
        <option value="2">Select Model 1</option>
        <option value="3">Select Model 2</option>
        <option value="4">Select Model 3</option>
        <option value="5">Select Model 4</option>
        <option value="6">Select Model 5</option>
        <option value="7">Select Model 6</option>
        <option value="8">Select Model 7</option>
      </select>

    </div>
    <div class="col-md-3">

        <select class="form-control sele-opt" >
            <option value="1">Select Year</option>
            <option value="2">Select Year 1</option>
            <option value="3">Select Year 2</option>
            <option value="4">Select Year 3</option>
            <option value="5">Select Year 4</option>
            <option value="6">Select Year 5</option>
            <option value="7">Select Year 6</option>
            <option value="8">Select Year 7</option>
        </select>

    </div>
    <div class="col-md-3"><a href="javascript:;" class="btn verify-account-btn">Find Auto Parts</a></div>
    </div>
    </div>
    </div>
</section>

<section class="Shop-by-Brands">
    <div class="container">
        <h2 class="Shop-by-Brands-title">Shop by <span>Brands</span></h2>
        <div class="title-line"></div>

        <div class="row">
            <div class="col-md-6">
                <h4 class="shop-by-brand-sub-head"> <span>Two </span> and <span> Three </span>Wheeler</h4>
                <div class="shop-by-brand-wrapper">


                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo1.png')}}" alt="logo"> <span>Mercedes Benz</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo2.png')}}" alt="logo"> <span>BMW</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo3.png')}}" alt="logo"> <span>Infinity</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo4.png')}}" alt="logo"> <span>Audi</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo5.png')}}" alt="logo"> <span>Honda</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo6.png')}}" alt="logo"> <span>Volkswagen</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo7.png')}}" alt="logo"> <span>Ford</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo8.png')}}" alt="logo"> <span>Mitsubishi</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo9.png')}}" alt="logo"> <span>Chevrolet</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo10.png')}}" alt="logo"> <span>Subaru</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo11.png')}}" alt="logo"> <span>Nissan</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo12.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo13.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo14.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo15.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo16.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo17.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo18.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo19.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo19.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo20.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo21.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo22.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo23.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo24.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            </div>

            <div class="col-md-6">
                <h4 class="shop-by-brand-sub-head"> <span>Four   </span>Wheeler and <span> commercial  </span>vehicle</h4>
                <div class="shop-by-brand-wrapper">


                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo1.png')}}" alt="logo"> <span>Mercedes Benz</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo2.png')}}" alt="logo"> <span>BMW</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-1.png')}}" alt="logo"> <span>Infinity</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-2.png')}}" alt="logo"> <span>Audi</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo7.png')}}" alt="logo"> <span>Honda</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-3.png')}}" alt="logo"> <span>Volkswagen</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-4.png')}}" alt="logo"> <span>Ford</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-5.png')}}" alt="logo"> <span>Mitsubishi</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-6.png')}}" alt="logo"> <span>Chevrolet</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo11.png')}}" alt="logo"> <span>Subaru</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-7.png')}}" alt="logo"> <span>Nissan</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-8.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-9.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-10.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-11.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-12.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/four-12.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo18.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo19.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo19.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo20.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo21.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo22.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo23.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="brand-container">
                            <div class="brand-logo">
                                <a href="#"><img src="{{asset('frontend/images/logo24.png')}}" alt="logo"> <span>KIA</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            </div>

            </div>
        </div>
    </div>
</section>

<section class="Shop-by-parts">
    <div class="container">
        <h4 class="Shop-by-parts-title">Shop By <span> Parts</span></h4>
        <div class="th-block-categories__list">
            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/car-metal-bearings-500x500-1-300x300.webp')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">
                            Bearings </h4>
                        <ul class="th-category-card__children"><li>
                            <a href="javascript:;">
                            Clutch Bearings </a></li><li>
                            <a href="javascript:;">
                            Front Wheel Bearings </a></li><li>
                            <a href="javascript:;">
                            Front Wheel Hubs </a></li><li>
                            <a href="javascript:;">
                            Rear Wheel Bearings </a></li><li>
                            <a href="javascript:;">
                            Rear Wheel Hubs </a></li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/Body-Parts-300x300.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Body Parts </h4>
                        <ul class="th-category-card__children"><li>
                            <a href="javascript:;">
                                A/C Blower Motor </a></li><li>
                            <a href="javascript:;">
                                Bumper Brackets </a></li><li>
                            <a href="javascript:;">
                                Bumper Nozzle Caps </a></li><li>
                            <a href="javascript:;">
                                Coolant Bottle Caps</a></li><li>
                            <a href="javascript:;">
                                Coolant Bottles </a></li>
                                <li>
                                    <a href="javascript:;">
                                        Dicky Locks </a></li>
                                        <li>
                                            <a href="javascript:;">
                                                Door Channels </a></li>
                                                <li>
                                                    <a href="javascript:;">
                                                        Door Locks  </a></li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/Brake-Parts-300x300.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Brakes </h4>
                        <ul class="th-category-card__children"><li>
                            <a href="javascript:;">
                                Caliper Bracket </a></li><li>
                            <a href="javascript:;">
                                Caliper Kits </a></li><li>
                            <a href="javascript:;">
                                Caliper Pin </a></li><li>
                            <a href="javascript:;">
                                Caliper Piston </a></li><li>
                            <a href="javascript:;">
                                Front Brake Discs </a></li><li>
                            <a href="javascript:;">
                                Front Brake Pads </a></li><li>
                                    <a href="javascript:;">
                                        Rear Brake Discs</a></li><li>
                                            <a href="javascript:;">
                                                Rear Brake Liners </a>
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
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/EDYHNK7319-300x300.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Clutch Components </h4>
                        <ul class="th-category-card__children"><li>
                            <a href="javascript:;">
                                Clutch Plates And Pressure Plates  </a></li><li>
                            <a href="javascript:;">
                                Fly Wheel Assembly  </a></li><li>
                            <a href="javascript:;">
                                Sleave Cylinders  </a></li><li>
                            <a href="javascript:;">
                                Upper Clutch Master Cylinder </a></li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/automotive-control-cable-500x500-1-300x300.webp')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Control Cables </h4>
                        <ul class="th-category-card__children"><li>
                            <a href="javascript:;">
                                Back Door ( Dicky ) Cables  </a></li><li>
                            <a href="javascript:;">
                                Bonnet Cables </a></li><li>
                            <a href="javascript:;">
                                Fuel Lid Cables  </a></li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/eletrics.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">
                            Electrics </h4>
                        <ul class="th-category-card__children"><li>
                            <a href="javascript:;">
                                ABS Sensors  </a></li><li>
                            <a href="javascript:;">
                                Air Mass Sensors  </a></li><li>
                            <a href="javascript:;">
                                Fuel Gauge  </a></li><li>
                            <a href="javascript:;">
                                Head Light Bulbs  </a></li><li>
                            <a href="javascript:;">
                                Speedo Sensors  </a></li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/Engine-Parts-300x300.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Engine </h4>
                        <ul class="th-category-card__children"><li>
                            <a href="javascript:;">
                                Air Cleaner Assembly  </a></li><li>
                            <a href="javascript:;">
                                Air Intake Hose  </a></li><li>
                            <a href="javascript:;">
                                Alternator Hose  </a></li><li>
                            <a href="javascript:;">
                                Alternator Pulleys  </a></li><li>
                            <a href="javascript:;">
                                Bosche Pump Gear  </a></li>
                                <li>
                                    <a href="javascript:;">
                                        Cam Gear   </a></li>
                                        <li>
                                            <a href="javascript:;">
                                                Chain Tensioner Assembly </a></li>
                                                <li>
                                                    <a href="javascript:;">
                                                        Crank Pulley  </a></li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/Filters-300x300.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Filters  </h4>
                        <ul class="th-category-card__children"><li>
                            <a href="javascript:;">
                                A/C Filter   </a></li><li>
                            <a href="javascript:;">
                                Air Filter  </a></li><li>
                            <a href="javascript:;">
                                Fuel Filter  </a></li><li>
                            <a href="javascript:;">
                                Oil Filter   </a></li><li>
                            <a href="javascript:;">
                                RTransmission Filter  </a></li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/steering-and-suspension-parts.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Steering And Suspension </h4>
                        <ul class="th-category-card__children"><li>
                            <a href="javascript:;">
                                Airmatic Compressor Assemblies  </a></li><li>
                            <a href="javascript:;">
                                Balance Rod Bushes  </a></li><li>
                            <a href="javascript:;">
                                Bushing Kits  </a></li><li>
                            <a href="javascript:;">
                                Camber Bolts  </a></li><li>
                            <a href="javascript:;">
                                Dead Axle Bushes </a></li><li>
                                    <a href="javascript:;">
                                        Front Coil Pads  </a></li><li>
                                            <a href="javascript:;">
                                                Front Shock Absorber Bearings  </a></li><li>
                                                <a href="javascript:;">
                                                    Front Shock Absorber Kits  </a></li>
                        </ul>
                        <div>
                            <a href="javascript:;" class="parts-show-all-btn">Show All </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="seal-week-wrapper">
    <div class="container">

        <div class="common-section-title">
            <div class="common-section-title-left">
                <div class="section-title">
                    <h4>Deals For This Week</h4>
                </div>

            </div>
            <div class="common-more-btn">
                <a href="#">View More <i class="flaticon-right-arrow"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-block-one week-deal-one">
                    <div class="ribon fs_13">8%</div>
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/f-1.png')}}" alt="parts"></div>
                    </div>
                    <div class="product-block-one-cintent">
                        <h4 class="fs_15"><a href="#">R1 Concepts® – eLINE Series Plain Brake Rotors </a></h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star empty-star"></i>
                            <span>1  review </span>
                        </div>
                        <div class="price-container">
                            <div class="price fs_15 fw_medium">$268.99 <span>$168.99</span></div>
                            <div class="price-cart"><a href="#"><i class="flaticon-shopping-cart"></i></a></div>
                        </div>
                    </div>
                    <div class="product-block-one-heart">
                        <a href=""><i class="far fa-heart"></i></a>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-block-one week-deal-one">
                    <div class="ribon fs_13">8%</div>
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/f-2.png')}}" alt="parts"></div>
                    </div>
                    <div class="product-block-one-cintent">
                        <h4 class="fs_15"><a href="#">Spyder® – Projector Headlights halogen </a></h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star empty-star"></i>
                            <span>1  review </span>
                        </div>
                        <div class="price-container">
                            <div class="price fs_15 fw_medium">$268.99 <span>$168.99</span></div>
                            <div class="price-cart"><a href="#"><i class="flaticon-shopping-cart"></i></a></div>
                        </div>
                    </div>
                    <div class="product-block-one-heart">
                        <a href=""><i class="far fa-heart"></i></a>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-block-one week-deal-one">
                    <div class="ribon fs_13">Super Price</div>
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/f-3.png')}}" alt="parts"></div>
                    </div>
                    <div class="product-block-one-cintent">
                        <h4 class="fs_15"><a href="#">Spender® - Wheeler   for all car tires  17/30ins </a></h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star empty-star"></i>
                            <span>1  review </span>
                        </div>
                        <div class="price-container">
                            <div class="price fs_15 fw_medium">$268.99 <span>$168.99</span></div>
                            <div class="price-cart"><a href="#"><i class="flaticon-shopping-cart"></i></a></div>
                        </div>
                    </div>
                    <div class="product-block-one-heart">
                        <a href=""><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-block-one week-deal-one">
                    <div class="ribon fs_13">8%</div>
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/f-4.png')}}" alt="parts"></div>
                    </div>
                    <div class="product-block-one-cintent">
                        <h4 class="fs_15"><a href="#">All Weather Terrain Barker  AbS/PRO for Car </a></h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star empty-star"></i>
                            <span>1  review </span>
                        </div>
                        <div class="price-container">
                            <div class="price fs_15 fw_medium">$268.99 <span>$168.99</span></div>
                            <div class="price-cart"><a href="#"><i class="flaticon-shopping-cart"></i></a></div>
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

<section class="feature-wrapper">
    <div class="container text-center">
        <div class="section pb_70" id="section-template--14221051559994__1632218905c29fe3a1">
            <div class="container">
              <div class="row no-gutters">


          <div class="col-lg-4">
                  <div class="icon_box icon_box_style1">

                    <div class="icon">
                        <i> <img src="{{asset('frontend/images/Free-Delivery-icon.png')}}" class="img-responsive"> </i>
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
                        <i> <img src="{{asset('frontend/images/30-Day-Return-icon.png')}}" class="img-responsive"> </i>
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
                      <i> <img src="{{asset('frontend/images/54x7.png')}}" class="img-responsive"> </i>
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
        $(document).ready(function(){
                $('#phone_number').on('input',function(){
                const phone_number = $(this).val();
                if(phone_number.length === 10)
                {
                    $('#login_form').submit();
                }
            });
         //submit the login form
        $('#login_form').on('submit', function (event) {
                event.preventDefault(); // Prevent the default form submission

                    $.ajax({
                        url: $(this).attr('action'), // Use the form action URL
                        method: 'POST',
                        data: $(this).serialize(), // Serialize the form data
                        success: function (response) {
                            if (response.success) {
                                $('#login').modal('hide');
                                $('#MyModa2').modal('show'); // Show the OTP modal
                            } else {
                                alert(response.message); // Show error message if OTP not sent
                            }
                        },
                        error: function (xhr) {
                            const errorMessage = xhr.responseJSON.message || 'An error occurred.';
                            alert(errorMessage); // Show error message if request fails
                        }
                    });
                });

        $('.otp-field input').on('keyup', function (e) {
        if ($(this).val().length >= $(this).attr('maxlength')) {
            $(this).next('input').focus();
        }
        if (e.key === 'Backspace' && $(this).val() === '') {
            $(this).prev('input').focus();
        }
        });
        //verify otp
        $('#verifyOtpBtn').on('click',function(e){
            e.preventDefault();
            const otp = $('.otp-field input').map(function () {
                return $(this).val();
            }).get().join(''); // Join all OTP inputs
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url:'/verify-otp',
                method:'POST',
                data:{
                    _token:csrfToken,
                    otp:otp,
                    phone_number:$('#phone_number').val()
                },
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        alert("Success: " + response.message);
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
        $('#resend_otp').on('click',function(e){
            e.preventDefault();
            var phone_number = $('#phone_number').val();
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url:'/login',
                type:'POST',
                data:{
                    _token:csrfToken,
                    phone_number:phone_number
                },
                success:function(response)
                {
                    if (response.success) {
                        alert('OTP has been resent to your phone number.');
                    } else {
                        alert('Failed to resend OTP. Please try again.');
                    }
                }
            });

        });

    });

    </script>
