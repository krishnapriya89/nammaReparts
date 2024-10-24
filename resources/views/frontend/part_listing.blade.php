@extends('frontend.layouts.app')
@section('title', 'Listing Page')

@section('content')



<section>
    <div class="container mt-5">
        <div class="row">
            <div class="preview col-md-5">
                <div class="preview-pic tab-content">
                    <div class="tab-pane active" id="pic-1"><img src="{{ asset($part->part_image) }}" /></div>
                    <div class="tab-pane" id="pic-2"><img src="{{ asset($part->part_image) }}" /></div>
                    <div class="tab-pane" id="pic-3"><img src="{{ asset($part->part_image) }}" /></div>
                    <div class="tab-pane" id="pic-4"><img src="{{ asset($part->part_image) }}" /></div>
                    <div class="tab-pane" id="pic-5"><img src="{{ asset($part->part_image) }}" /></div>
                </div>
                <ul class="preview-thumbnail nav nav-tabs">
                    <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset($part->part_image) }}" /></a></li>
                    <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset($part->part_image) }}" /></a></li>
                    <li><a data-target="#pic-3" data-toggle="tab"><img src="{{ asset($part->part_image) }}" /></a></li>
                    <li><a data-target="#pic-4" data-toggle="tab"><img src="{{ asset($part->part_image) }}" /></a></li>
                    <li><a data-target="#pic-5" data-toggle="tab"><img src="{{ asset($part->part_image) }}" /></a></li>
                </ul>
            </div>
            <div class="preview col-md-7">
                <h6 class="details-brand-name2">Brand Name : {{ $part->vehicleModel->brand->brand_name }}</h6>
                <h1 class="main-title-details2">{{ $part->part_name }}</h1>
                <div class="divider mt-3 mb-3"></div>
                <div class="d-flex justify-content-lg-start">
                    <div class="d-flex flex-column align-items-left price-big">₹{{ $part->price }}</div>
                    <div class="d-flex flex-column align-items-left price-big">
                        <div class="price-offer fs_15 fw_medium">₹268.99</div>
                        <div class="part-info-price__tax-label">inclusive all taxes</div>
                    </div>
                </div>
                <p class="delivery-pin"> <img src="{{asset('frontend/images/map-point.jpg')}}"> Deliver to <span> KERALA - Ernakulam 683577 </span></p>
                </p>
                <div class="divider mt-3 mb-3"></div>
                <div>
                    <a href="javascript:;" class="btn detail-add-to-btn"> Add to cart </a>
                    <a href="{{ route('shipping-address') }}" class="btn buy-now-btn"> Buy now </a>
                </div>

                <div class="pay-total-btn">
                    <div>Total </div>
                    <div class="pay-total-amount flr f-right">₹316</div>
                </div>

                <div class="pay-total-btn">
                    <div>Pay Minimum
                        <div class="adv-pay">20% of item Total</div>

                    </div>
                    <div class="pay-total-amount flr f-right">₹64</div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mt-4 ">
    <div class="container">
        <div class="delivery-info ng-star-inserted">
            <div class="delivery-info__item">
                <span class="ng-star-inserted"><img src="{{asset('frontend/images/Delivery.png')}}" alt="" title=""> Delivery <span class="font-weight-normal">within</span> 10 days</span>
            </div>
            <div class="delivery-info__item">
                <div class="delivery-info__hint__wrap">
                    <img src="{{asset('frontend/images/return.png')}}" alt="" title=""> 10 Days Assured Return
                </div>
            </div>
            <div class="delivery-info__item" alt="" title="">
                <img src="{{asset('frontend/images/GST.png')}}"> GST invoice
            </div>
        </div>

    </div>
</section>

<section class="seal-week-wrapper">
    <div class="container">
        <div class=" mt-5 mb-4">
            <h2 class="Shop-by-Brands-title mb-4">Deals For This <span>Week</span></h2>

            <div class="owl-carousel owl-2">
                <div class="media-29101">
                    <div class="product-block-one week-deal-one">
                        <div class="ribon fs_13">8%</div>
                        <div class="product-block-one-image">
                            <div class="image"><img src="{{asset('frontend/images/f-1.png')}}" alt="parts"></div>
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
                            <div class="image"><img src="{{asset('frontend/images/f-2.png')}}" alt="parts"></div>
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
                            <div class="image"><img src="{{asset('frontend/images/f-3.png')}}" alt="parts"></div>
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
                            <div class="image"><img src="{{asset('frontend/images/f-4.png')}}" alt="parts"></div>
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
                            <div class="image"><img src="{{asset('frontend/images/f-2.png')}}" alt="parts"></div>
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