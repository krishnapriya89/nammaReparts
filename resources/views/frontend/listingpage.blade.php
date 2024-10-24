@extends('frontend.layouts.app')
@section('title', 'Listing Page')

@section('content')



<section>
    <div class="container">
        <div class="banner-inner-wrapper">
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="main-title2">Rear Wheel Bearing Parts for {{ $vehicleName }} </h1>
                </div>

            </div>
        </div>

    </div>
</section>



<section>
    <div class="container">
        <div class="form-padding">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="sub-sub-head">Find Your Auto Parts</h3>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select class="form-control sele-opt">
                            <option value="1">Select Model</option>
                            <option value="2">Maruti Suzuki New Dzire</option>
                            <option value="3">Select Mode 2</option>
                            <option value="4">Select Mode 3</option>
                            <option value="5">Select Mode 4</option>
                            <option value="6">Select Mode 5</option>
                            <option value="7">Select Mode 6</option>
                            <option value="8">Select Mode 7</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select class="form-control sele-opt">
                            <option value="1">Select Parts</option>
                            <option value="2">Select Parts 1</option>
                            <option value="3">Select Parts 2</option>
                            <option value="4">Select Parts 3</option>
                            <option value="5">Select Parts 4</option>
                            <option value="6">Select Parts 5</option>
                            <option value="7">Select Parts 6</option>
                            <option value="8">Select Parts 7</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select class="form-control sele-opt">
                            <option value="1">Select Sub Parts</option>
                            <option value="2">Select Sub Parts 1</option>
                            <option value="3">Select Sub Parts 2</option>
                            <option value="4">Select Sub Parts 3</option>
                            <option value="5">Select Sub Parts 4</option>
                            <option value="6">Select Sub Parts 5</option>
                            <option value="7">Select Sub Parts 6</option>
                            <option value="8">Select Sub Parts 7</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3"><a href="javascript:;" class="btn verify-account-btn">Search Parts</a></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">


        <div class="row">

            @if($vehicleparts->isEmpty())
            <div class="col-12">
                <p class="text-center">No vehicle parts available for this brand.</p>
            </div>
            @else
            @foreach($vehicleparts as $part)

            <div class="col-lg-3 col-md-6">
                <div class="products-listing-wra">
                    <a href="{{ route('part_listing', $part->id) }}">
                        <div class="product-image-wra">
                            <div class="image"><img src="{{ asset($part->part_image) }}" alt="{{ $part->part_name }}"></div>
                        </div>
                        <div class="product-list-content-wra">
                            <h5 class="v-brand">{{ $vehicleName }} / {{ $part->vehicle->model ?? 'Unknown Model' }}</h5>
                            <h4 class="fs_15 parts-title">{{ $part->part_name }}</h4>

                            <div class="price-container">
                                <div class="price fs_15 fw_medium"><span>₹{{ $part->price }}</span></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @endif
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