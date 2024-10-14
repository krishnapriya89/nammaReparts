@extends('frontend.layouts.app')
@section('title', 'Details Page')

@section('content')
<section>
    <div class="container">
        <div class="banner-inner-wrapper">
            <div class="row">

                <div class="col-sm-4">
                    <div class="detsils-banner">
                        <img src="{{asset('frontend/images/72b0977.webp')}}" alt="" title="" class="img-responsive">
                    </div>

                </div>

                <div class="col-sm-8">
                    <h1 class="main-title-details">MARUTI </h1>
                    <h6>10.1990 - 05.2000 </h6>


                </div>
            </div>

            <div>

                <div class="Selected-spec d-flex justify-content-lg-start justify-content-md-center justify-content-center">
                    <div class="d-flex flex-column align-items-left">
                        <div><span class="Selected-spec-label">Engine type </span></div>
                        <p class="pt-1 Selected-spec-details">Petrol </p>
                    </div>
                    <div class="d-flex flex-column align-items-left  ms-1">
                        <span class="Selected-spec-label">Engine codes </span>
                        <p class="pt-1 Selected-spec-details">F10A</p>
                    </div>
                    <div class="d-flex flex-column align-items-left ms-1">
                        <span class="Selected-spec-label">Engine liters </span>
                        <p class="pt-1 Selected-spec-details">1.0 </p>
                    </div>

                    <div class="d-flex flex-column align-items-left">
                        <div><span class="Selected-spec-label">Engine power </span></div>
                        <p class="pt-1 Selected-spec-details">46 h.p. </p>
                    </div>
                    <div class="d-flex flex-column align-items-left  ms-1">
                        <span class="Selected-spec-label">Motor power </span>
                        <p class="pt-1 Selected-spec-details">34 kW </p>
                    </div>
                    <div class="d-flex flex-column align-items-left ms-1">
                        <span class="Selected-spec-label">The volume of CCM </span>
                        <p class="pt-1 Selected-spec-details">970 </p>
                    </div>
                    <div class="d-flex flex-column align-items-left  ms-1">
                        <span class="Selected-spec-label">Technical CCM </span>
                        <p class="pt-1 Selected-spec-details">970 </p>
                    </div>
                    <div class="d-flex flex-column align-items-left ms-1">
                        <span class="Selected-spec-label">Transmission type </span>
                        <p class="pt-1 Selected-spec-details">Manual Transmission, 5-speed </p>
                    </div>

                </div>

            </div>



        </div>

    </div>
</section>

<section>
    <div class="container">

        <div>
            <div class="row">
                <div class="col-md-8">
                    <h1 class="main-title-details mt-5">MARUTI 1000 1.0L Spare Parts</h1>
                </div>
            </div>
        </div>

        <div class="gird-card-minus-marging">

            <div class="gird-cards">
                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/ebba234.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Maintenance Service Parts </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/10f1952.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Air Conditioning </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/51eb913.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Belts Chains and Rollers </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="{{route('details_three')}}">
                        <img src="{{asset('frontend/images/d5dd6ce.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Bearings </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/50008e4.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Body </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/64b9f40.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Control Cables </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/5c30d1d.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Brake System </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/4372565.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Car Accessories </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/bc1a73f.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Clutch System </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/e1aba2b.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Electric Components </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/f6afc8e.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Engine </span>
                    </a>
                </div>
                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/e39dc1a.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Engine Cooling System </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/83cd783.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Exhaust System </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/fab8332.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Filters </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/457f4a4.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Fuel Supply System </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/38d5de9.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Gaskets and Sealing Rings </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/bfcf2c1.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Ignition and Glowplug System </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/7e1a432.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Interior and comfort </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/c009512.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Lighting </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/de978f4.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Oils and Fluids </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/eeab7a3.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Pipes and Hoses </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/38427d6.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Repair Kits </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/878a84e.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Sensors Relays and Control units </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/15cfbae.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Steering </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/9bcc0da.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Suspension and Arms </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/95660dc.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Towbar Parts </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/5924137.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Transmission </span>
                    </a>
                </div>
                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/ecd08bd.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Trims </span>
                    </a>
                </div>
                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/b1b2c08.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Tyres and Alloys </span>
                    </a>
                </div>
                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/8c5ddeb.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Universal </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/1bb7d48.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Wheels </span>
                    </a>
                </div>
                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/d36974e.svg')}}" alt="parts">
                        <span class="catalog-list__title"> Windscreen Cleaning System </span>
                    </a>
                </div>


            </div>
        </div>

    </div>
</section>




<section class="seal-week-wrapper">
    <div class="container">

        <div class="common-section-title mt-5">
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
                            <div class="price fs_15 fw_medium">₹268.99 <span>₹168.99</span></div>
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
                            <div class="price fs_15 fw_medium">₹268.99 <span>₹168.99</span></div>
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
                            <div class="price fs_15 fw_medium">₹268.99 <span>₹168.99</span></div>
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
                            <div class="price fs_15 fw_medium">₹268.99 <span>₹168.99</span></div>
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