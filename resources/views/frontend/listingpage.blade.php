@extends('frontend.layouts.app')
@section('title', 'Listing Page')

@section('content')


<section>
    <div class="container">
        <div class="banner-inner-wrapper">
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="main-title">{{ $vehicleName }}</h1>
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
                    <select class="form-control sele-opt" class="selectModel" id="selectModel">
                        <option value="1">Select Model</option>
                        @foreach($vehicle_models as $model)
                        <option value="{{ $model->id }}">{{ $model->model }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-3">

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
                <div class="col-md-3">

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
                <div class="col-md-3"><a href="javascript:;" class="btn verify-account-btn">Search Parts</a></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">

        <div>
            <div class="row">
                <div class="col-md-8">
                    <h1 class="main-title-details mt-5">Parts for {{ $vehicleName }}</h1>
                </div>
            </div>
        </div>

        <div class="row">
            @if($vehicleparts->isEmpty())
            <div class="col-12">
                <p class="text-center">No vehicle parts available for this brand.</p>
            </div>
            @else
            @foreach($vehicleparts as $part)
            <div class="col-lg-3 col-md-6">
                <div class="product-block-one week-deal-one">
                    <a href="details5.html">
                        <div class="ribon fs_13">8%</div>
                        <div class="product-block-one-image">
                            <div class="image"> <img src="{{ asset($part->part_image) }}" alt="{{ $part->name }}"></div>
                        </div>
                        <div class="product-block-one-cintent">
                            <h4 class="fs_15 product-item-tile__title">{{ $part->part_name }} </h4>
                            <div class="price-container">
                                <div class="price fs_15 fw_medium"><span>₹{{ $part->price }}</span></div>
                            </div>
                            <div>
                                <h6 class="details-brand-name"> {{ $part->vehicle->model->model_name ?? 'Unknown Model' }}</h6>
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


<section class="mt-5">
    <div class="container">
        <h4 class="Shop-by-parts-title">Shop By <span> Parts</span></h4>
        <div class="th-block-categories__list">
            <div class="th-block-categories__item">
                <div class="icon-bx-wraper left">
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/car-metal-bearings-500x500-1-300x300.webp')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">
                            Bearings </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Clutch Bearings </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Wheel Bearings </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Wheel Hubs </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Rear Wheel Bearings </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Rear Wheel Hubs </a>
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
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/Body-Parts-300x300.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Body Parts </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    A/C Blower Motor </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Bumper Brackets </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Bumper Nozzle Caps </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Coolant Bottle Caps</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Coolant Bottles </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Dicky Locks </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Door Channels </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Door Locks </a>
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
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/Brake-Parts-300x300.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Brakes </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Caliper Bracket </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Caliper Kits </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Caliper Pin </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Caliper Piston </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Brake Discs </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Brake Pads </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Rear Brake Discs</a>
                            </li>
                            <li>
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
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Clutch Plates And Pressure Plates </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Fly Wheel Assembly </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Sleave Cylinders </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Upper Clutch Master Cylinder </a>
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
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/automotive-control-cable-500x500-1-300x300.webp')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Control Cables </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Back Door ( Dicky ) Cables </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Bonnet Cables </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Fuel Lid Cables </a>
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
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/eletrics.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">
                            Electrics </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    ABS Sensors </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Air Mass Sensors </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Fuel Gauge </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Head Light Bulbs </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Speedo Sensors </a>
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
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/Engine-Parts-300x300.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Engine </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Air Cleaner Assembly </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Air Intake Hose </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Alternator Hose </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Alternator Pulleys </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Bosche Pump Gear </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Cam Gear </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Chain Tensioner Assembly </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Crank Pulley </a>
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
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/Filters-300x300.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Filters </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    A/C Filter </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Air Filter </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Fuel Filter </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Oil Filter </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    RTransmission Filter </a>
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
                    <div class="icon-bx-sm"><img src="{{asset('frontend/images/steering-and-suspension-parts.jpg')}}"></div>
                    <div class="icon-content">
                        <h4 class="parts-title">Steering And Suspension </h4>
                        <ul class="th-category-card__children">
                            <li>
                                <a href="javascript:;">
                                    Airmatic Compressor Assemblies </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Balance Rod Bushes </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Bushing Kits </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Camber Bolts </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Dead Axle Bushes </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Coil Pads </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Shock Absorber Bearings </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Front Shock Absorber Kits </a>
                            </li>
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


<section class="seal-week-wrapper"></section>
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
                        <span>1 review </span>
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
                        <span>1 review </span>
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
                    <h4 class="fs_15"><a href="#">Spender® - Wheeler for all car tires 17/30ins </a></h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star empty-star"></i>
                        <span>1 review </span>
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
                    <h4 class="fs_15"><a href="#">All Weather Terrain Barker AbS/PRO for Car </a></h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star empty-star"></i>
                        <span>1 review </span>
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
