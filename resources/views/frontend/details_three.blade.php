@extends('frontend.layouts.app')
@section('title', 'Details Page')

@section('content')


<section>
    <div class="container">

        <div>
            <div class="row">
                <div class="col-md-8">
                    <h1 class="main-title-details mt-5">Bearings Parts for MARUTI 1000 1.0L</h1>
                </div>
            </div>
        </div>

        <div class="gird-card-minus-marging">


            <div class="gird-cards">
                <div class="gird-card">
                    <a href="{{route('details_four')}}">
                        <img src="{{asset('frontend/images/1c06dba.jpg')}}" alt="parts">
                        <span class="catalog-list__title"> Rear Wheel Bearing </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/67a74ba.jpg')}}" alt="parts">
                        <span class="catalog-list__title"> Pilot Bearing </span>
                    </a>
                </div>

                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/e56e31f.jpg')}}" alt="parts">
                        <span class="catalog-list__title"> Shock Absorber Bearing </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="details3.html">
                        <img src="{{asset('frontend/images/f97ddeb.jpg')}}" alt="parts">
                        <span class="catalog-list__title"> Transmission Bearing </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/bce414f.jpg')}}" alt="parts">
                        <span class="catalog-list__title"> Alternator Bearing </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/40e95ca.jpg')}}" alt="parts">
                        <span class="catalog-list__title"> Big End Bearing </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/58e3bef.jpg')}}" alt="parts">
                        <span class="catalog-list__title"> Clutch Release Bearing </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/19bcb3d.jpg')}}" alt="parts">
                        <span class="catalog-list__title"> Crankshaft Bearing </span>
                    </a>
                </div>


                <div class="gird-card">
                    <a href="javascript:;">
                        <img src="{{asset('frontend/images/98c6577.jpg')}}" alt="parts">
                        <span class="catalog-list__title"> Front Wheel Bearing </span>
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
                        <div class="image"><img src="{{asset('frontend/images/f-1.png')}}" al="parts"></div>
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
                        <div class="image"><img src="{{asset('frontend/images/f-2.png')}}" al="parts"></div>
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
                        <div class="image"><img src="{{asset('frontend/images/f-3.png')}}" al="parts"></div>
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
                        <div class="image"><img src="{{asset('frontend/images/f-4.png')}}" al="parts"></div>
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
                                <i> <img src="{{asset('frontend/images/Free-Delive-icon.png')}}" class="img-responsive"> </i>
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
                                <i> <img src="{{asset('frontend/images/30-Day-Retu-icon.png')}}" class="img-responsive"> </i>
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