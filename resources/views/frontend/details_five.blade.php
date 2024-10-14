@extends('frontend.layouts.app')
@section('title', 'Details Page')

@section('content')


<section>
    <div class="container mt-5">
        <div class="row">
            <div class="preview col-md-5">
                <div class="preview-pic tab-content">
                    <div class="tab-pane active" id="pic-1"><img src="{{asset('frontend/images/01.jpg')}}" /></div>
                    <div class="tab-pane" id="pic-2"><img src="{{asset('frontend/images/02.jpg')}}" /></div>
                    <div class="tab-pane" id="pic-3"><img src="{{asset('frontend/images/03.jpg')}}" /></div>
                    <div class="tab-pane" id="pic-4"><img src="{{asset('frontend/images/04.jpg')}}" /></div>
                    <div class="tab-pane" id="pic-5"><img src="{{asset('frontend/images/05.jpg')}}" /></div>
                </div>
                <ul class="preview-thumbnail nav nav-tabs">
                    <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('frontend/images/01.jpg')}}" /></a></li>
                    <li><a data-target="#pic-2" data-toggle="tab"><img src="{{asset('frontend/images/02.jpg')}}" /></a></li>
                    <li><a data-target="#pic-3" data-toggle="tab"><img src="{{asset('frontend/images/03.jpg')}}" /></a></li>
                    <li><a data-target="#pic-4" data-toggle="tab"><img src="{{asset('frontend/images/04.jpg')}}" /></a></li>
                    <li><a data-target="#pic-5" data-toggle="tab"><img src="{{asset('frontend/images/05.jpg')}}" /></a></li>
                </ul>
            </div>

            <div class="preview col-md-7">
                <h6 class="details-brand-name2">Brand Name</h6>
                <h1 class="main-title-details2">SEAL, FRONT WHEEL BEARING OIL OUTER </h1>
                <div class="divider mt-3 mb-3"></div>

                <div class="d-flex justify-content-lg-start">
                    <div class="d-flex flex-column align-items-left price-big">₹330.00</div>
                    <div class="d-flex flex-column align-items-left price-big">
                        <div class="price-offer fs_15 fw_medium">₹268.99</div>
                        <div class="part-info-price__tax-label">inclusive all taxes</div>
                    </div>
                </div>

                <p class="instock"> 1 in stock</p>
                <p class="delivery-pin"> <img src="{{asset('frontend/images/map-point.jpg')}}"> Deliver to <span> KERALA - Ernakulam 683577 </span></p>
                </p>
                <div class="divider mt-3 mb-3"></div>

                <div>
                    <div class="qty mt-2 mb-2">
                        <span class="minus bg-light">-</span>
                        <input type="number" class="count" name="qty" value="1">
                        <span class="plus bg-light">+</span>
                    </div>
                </div>
                <div class="divider mt-3 mb-3"></div>

                <div>
                    <a href="{{route('shipping_address')}}" class="btn btn-primary"> Add to cart </a>
                    <a href="Shipping-Address.html" class="btn verify-account-btn"> Buy now </a>
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


<section>
    <div class="container">

        <h1 class="main-title-details mt-5">Features and <span> Specification </span></h1>
        <div class="border-1px">
            <div class="responsive-three-column-grid">
                <div>

                    <table style="width:100%" class="Features-Specification-t">
                        <tr>
                            <td>Outer Diameter [mm] </td>
                            <th>69</th>
                        </tr>
                        <tr>
                            <td>Net Quantity </td>
                            <th>1</th>
                        </tr>
                        <tr>
                            <td>Thickness [mm] </td>
                            <th>7.5</th>
                        </tr>
                        <tr>
                            <td>Width [mm]</td>
                            <th>40</th>
                        </tr>
                    </table>

                </div>
                <div>

                    <table style="width:100%" class="Features-Specification-t">
                        <tr>
                            <td>Country of Origin </td>
                            <th>japan </th>
                        </tr>
                        <tr>
                            <td>Diameter [mm] </td>
                            <th>68 </th>
                        </tr>
                        <tr>
                            <td>Fitting Position </td>
                            <th>Front Axle </th>
                        </tr>
                        <tr>
                            <td>Height [mm] </td>
                            <th>40 </th>
                        </tr>
                    </table>

                </div>
                <div>

                    <table style="width:100%" class="Features-Specification-t">
                        <tr>
                            <td>Country of Origin </td>
                            <th>japan </th>
                        </tr>
                        <tr>
                            <td>Inner Diameter [mm] </td>
                            <th>54 </th>
                        </tr>
                        <tr>
                            <td>Material </td>
                            <th>NBR </th>
                        </tr>
                        <tr>
                            <td>Fitting place </td>
                            <th>Standard Parts </th>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">

        <h1 class="main-title-details mt-5 mb-4">Compatibility </h1>
        <table class="responsive-table">
            <thead>
                <tr>
                    <th scope="col">Modification </th>
                    <th scope="col"> Year </th>
                    <th scope="col"> Engine </th>
                    <th scope="col">Engine Type </th>
                    <th scope="col"> Power (hp) </th>
                    <th scope="col"> Power (kW) </th>
                    <th scope="col"> Engine code </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tfoot>

            </tfoot>
            <tbody>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Year">10.1990 - 05.2000 </td>
                    <td data-title="Engine"> 1.0 L </td>
                    <td data-title="Engine Type" data-type="currency"> Petrol </td>
                    <td data-title="Power (hp)" data-type="currency"> 46 h.p. </td>
                    <td data-title="Power (kW)" data-type="currency"> 34 kW </td>
                    <td data-title="Engine code" data-type="currency">F10A </td>
                    <td data-title="" data-type="currency"><a href="details2.html" class="btn choose-btn">Choose</a> </td>
                </tr>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Released">10.1990 - 05.2000 </td>
                    <td data-title="Studio"> 1.0 L </td>
                    <td data-title="Worldwide Gross" data-type="currency"> Petrol </td>
                    <td data-title="Domestic Gross" data-type="currency"> 46 h.p. </td>
                    <td data-title="International Gross" data-type="currency"> 34 kW </td>
                    <td data-title="Budget" data-type="currency">F10A </td>
                    <td data-title="Budget" data-type="currency"><a href="details2.html" class="btn choose-btn">Choose</a> </td>
                </tr>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Released">10.1990 - 05.2000 </td>
                    <td data-title="Studio"> 1.0 L </td>
                    <td data-title="Worldwide Gross" data-type="currency"> Petrol </td>
                    <td data-title="Domestic Gross" data-type="currency"> 46 h.p. </td>
                    <td data-title="International Gross" data-type="currency"> 34 kW </td>
                    <td data-title="Budget" data-type="currency">F10A </td>
                    <td data-title="Budget" data-type="currency"><a href="details2.html;" class="btn choose-btn">Choose</a> </td>
                </tr>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Released">10.1990 - 05.2000 </td>
                    <td data-title="Studio"> 1.0 L </td>
                    <td data-title="Worldwide Gross" data-type="currency"> Petrol </td>
                    <td data-title="Domestic Gross" data-type="currency"> 46 h.p. </td>
                    <td data-title="International Gross" data-type="currency"> 34 kW </td>
                    <td data-title="Budget" data-type="currency">F10A </td>
                    <td data-title="Budget" data-type="currency"><a href="details2.html" class="btn choose-btn">Choose</a> </td>
                </tr>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Released">10.1990 - 05.2000 </td>
                    <td data-title="Studio"> 1.0 L </td>
                    <td data-title="Worldwide Gross" data-type="currency"> Petrol </td>
                    <td data-title="Domestic Gross" data-type="currency"> 46 h.p. </td>
                    <td data-title="International Gross" data-type="currency"> 34 kW </td>
                    <td data-title="Budget" data-type="currency">F10A </td>
                    <td data-title="Budget" data-type="currency"><a href="details2.html" class="btn choose-btn">Choose</a> </td>
                </tr>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Released">10.1990 - 05.2000 </td>
                    <td data-title="Studio"> 1.0 L </td>
                    <td data-title="Worldwide Gross" data-type="currency"> Petrol </td>
                    <td data-title="Domestic Gross" data-type="currency"> 46 h.p. </td>
                    <td data-title="International Gross" data-type="currency"> 34 kW </td>
                    <td data-title="Budget" data-type="currency">F10A </td>
                    <td data-title="Budget" data-type="currency"><a href="details2.html" class="btn choose-btn">Choose</a> </td>
                </tr>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Released">10.1990 - 05.2000 </td>
                    <td data-title="Studio"> 1.0 L </td>
                    <td data-title="Worldwide Gross" data-type="currency"> Petrol </td>
                    <td data-title="Domestic Gross" data-type="currency"> 46 h.p. </td>
                    <td data-title="International Gross" data-type="currency"> 34 kW </td>
                    <td data-title="Budget" data-type="currency">F10A </td>
                    <td data-title="Budget" data-type="currency"><a href="details2.html" class="btn choose-btn">Choose</a> </td>
                </tr>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Released">10.1990 - 05.2000 </td>
                    <td data-title="Studio"> 1.0 L </td>
                    <td data-title="Worldwide Gross" data-type="currency"> Petrol </td>
                    <td data-title="Domestic Gross" data-type="currency"> 46 h.p. </td>
                    <td data-title="International Gross" data-type="currency"> 34 kW </td>
                    <td data-title="Budget" data-type="currency">F10A </td>
                    <td data-title="Budget" data-type="currency"><a href="details2.html" class="btn choose-btn">Choose</a> </td>
                </tr>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Released">10.1990 - 05.2000 </td>
                    <td data-title="Studio"> 1.0 L </td>
                    <td data-title="Worldwide Gross" data-type="currency"> Petrol </td>
                    <td data-title="Domestic Gross" data-type="currency"> 46 h.p. </td>
                    <td data-title="International Gross" data-type="currency"> 34 kW </td>
                    <td data-title="Budget" data-type="currency">F10A </td>
                    <td data-title="Budget" data-type="currency"><a href="details2.html" class="btn choose-btn">Choose</a> </td>
                </tr>
                <tr>
                    <th scope="row">1.0L </th>
                    <td data-title="Released">10.1990 - 05.2000 </td>
                    <td data-title="Studio"> 1.0 L </td>
                    <td data-title="Worldwide Gross" data-type="currency"> Petrol </td>
                    <td data-title="Domestic Gross" data-type="currency"> 46 h.p. </td>
                    <td data-title="International Gross" data-type="currency"> 34 kW </td>
                    <td data-title="Budget" data-type="currency">F10A </td>
                    <td data-title="Budget" data-type="currency"><a href="details2.html" class="btn choose-btn">Choose</a> </td>
                </tr>
            </tbody>
        </table>

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