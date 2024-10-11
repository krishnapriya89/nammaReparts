
@extends('frontend.layouts.app')
@section('title', 'Listing Page')

@section('content')
<section>
    <div class="container">
        <div class="banner-inner-wrapper">
    <div class="row">
        <div class="col-sm-9">
            <h1 class="main-title" >MARUTI </h1>
        </div>

    </div>
</div>

</div>
</section>


<section class="inner-subhead ">
    <div class="container">
        <h4 class="inner-sun-title">Choose Your  <span> Model</span></h4>
    </div>
</section>

<section class="seal-week-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/72b0977.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI 1000</a></h4>
                        <h5 class="listing-date">10.1990 - 05.2000 </h5>
                        {{-- <select class="form-control sele-opt" >
                            <option value="1">Select your Car</option>
                            <option value="2"><h5 class="listing-date">10.1990 - 05.2000 </h5></option>
                          </select> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/237031b.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI 800 </a></h4>
                        <h5 class="listing-date">10.1990 - 05.2000 </h5>
                        {{-- <select formcontrolname="modification" class="form-control form-control-sm sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="800 1ST GEN SS80 12.1983 - 06.1986" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 0.8L DX/Petrol </option><option value="2: Object" class="ng-star-inserted"> 0.8L STD/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="800 2ND GEN TYPE 1 06.1986 - 09.1997" class="ng-star-inserted">
                                <option value="3: Object" class="ng-star-inserted"> 0.8L A/C/Petrol </option><option value="4: Object" class="ng-star-inserted"> 0.8L AT/Petrol </option><option value="5: Object" class="ng-star-inserted"> 0.8L STD/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="800 2ND GEN TYPE 2 10.1997 - 03.2005" class="ng-star-inserted">
                                <option value="6: Object" class="ng-star-inserted"> 0.8L A/C (CARB)/Petrol </option><option value="7: Object" class="ng-star-inserted"> 0.8L A/C (MPFI)/Petrol </option>
                                <option value="8: Object" class="ng-star-inserted"> 0.8L EX &amp; DX 5-SPEED/Petrol </option><option value="9: Object" class="ng-star-inserted"> 0.8L STD (CARB)/Petrol </option>
                                <option value="10: Object" class="ng-star-inserted"> 0.8L STD (MPFI)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="800 2ND GEN TYPE 3 04.2005 - 01.2014" class="ng-star-inserted">
                                <option value="11: Object" class="ng-star-inserted"> 0.8L A/C/Petrol </option><option value="12: Object" class="ng-star-inserted"> 0.8L STD/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/5bd52b8.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI A-STAR</a></h4>
                        <h5 class="listing-date">10.1990 - 05.2000 </h5>
                        {{-- <select formcontrolname="modification" class="form-control form-control-sm sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="A-STAR 11.2008 - 11.2013" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.0L AT (TYPE 2)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 1)/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 2)/Petrol/66h.p. </option><option value="4: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 2)/Petrol/66h.p. </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.0L VXI (TYPE 1)/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.0L VXI (TYPE 2)/Petrol/66h.p. </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.0L VXI (TYPE 2)/Petrol/66h.p. </option><option value="8: Object" class="ng-star-inserted"> 1.0L VXI ABS (TYPE 1)/Petrol </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.0L VXI ABS (TYPE 2)/Petrol/66h.p. </option><option value="10: Object" class="ng-star-inserted"> 1.0L VXI ABS (TYPE 2)/Petrol/66h.p. </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.0L ZXI (TYPE 1)/Petrol </option><option value="12: Object" class="ng-star-inserted"> 1.0L ZXI (TYPE 2)/Petrol/66h.p. </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.0L ZXI (TYPE 2)/Petrol/66h.p. </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/0ef27f7.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI ALTO </a></h4>
                        <h5 class="listing-date">10.1990 - 05.2000 </h5>
                        {{-- <select formcontrolname="modification" class="form-control form-control-sm sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="ALTO 09.2000 - 10.2012" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 0.8L LX (TYPE 1)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 0.8L LX (TYPE 2)/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 0.8L LX (TYPE 3)/Petrol </option><option value="4: Object" class="ng-star-inserted"> 0.8L LX (TYPE 3)/CNG </option>
                                <option value="5: Object" class="ng-star-inserted"> 0.8L LXI (TYPE 1)/Petrol </option><option value="6: Object" class="ng-star-inserted"> 0.8L LXI (TYPE 2)/Petrol </option>
                                <option value="7: Object" class="ng-star-inserted"> 0.8L LXI (TYPE 3)/Petrol </option><option value="8: Object" class="ng-star-inserted"> 0.8L LXI (TYPE 3)/CNG </option>
                                <option value="9: Object" class="ng-star-inserted"> 0.8L STD (TYPE 1)/Petrol </option><option value="10: Object" class="ng-star-inserted"> 0.8L STD (TYPE 2)/Petrol </option>
                                <option value="11: Object" class="ng-star-inserted"> 0.8L STD (TYPE 3)/Petrol </option><option value="12: Object" class="ng-star-inserted"> 0.8L STD (TYPE 3)/CNG </option>
                                <option value="13: Object" class="ng-star-inserted"> 0.8L X-FUN (TYPE 2)/Petrol </option><option value="14: Object" class="ng-star-inserted"> 1.1L AX (TYPE 1)/Petrol </option>
                                <option value="15: Object" class="ng-star-inserted"> 1.1L VX (TYPE 1)/Petrol </option><option value="16: Object" class="ng-star-inserted"> 1.1L VXI (TYPE 1)/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/20e12fb.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI ALTO 800 </a></h4>
                        <h5 class="listing-date">11.2012 - now </h5>
                        {{-- <select class="form-control sele-opt" >
                            <option value="1">Select your Car</option>
                            <option value="2"><h5 class="listing-date">10.1990 - 05.2000 </h5></option>
                          </select> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/96eebc4.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI ALTO K10</a></h4>
                        <h5 class="listing-date">08.2010 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="ALTO K10 1ST GEN 08.2010 - 09.2014" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 1)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.0L VXI (TYPE 1)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ALTO K10 2ND GEN 10.2014 - 04.2020" class="ng-star-inserted">
                                <option value="3: Object" class="ng-star-inserted"> 1.0L LX (TYPE 2)/Petrol/67h.p. </option><option value="4: Object" class="ng-star-inserted"> 1.0L LX (TYPE 2)/Petrol/67h.p. </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 2)/CNG/67h.p. </option><option value="6: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 2)/Petrol/67h.p. </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 2)/CNG/67h.p. </option><option value="8: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 2)/Petrol/67h.p. </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.0L LXI AGS (TYPE 2)/Petrol/67h.p. </option><option value="10: Object" class="ng-star-inserted"> 1.0L LXI AGS (TYPE 2)/Petrol/67h.p. </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.0L VXI (TYPE 2)/Petrol/67h.p. </option><option value="12: Object" class="ng-star-inserted"> 1.0L VXI (TYPE 2)/Petrol/67h.p. </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.0L VXI AGS (TYPE 2)/Petrol/67h.p. </option><option value="14: Object" class="ng-star-inserted"> 1.0L VXI AGS (TYPE 2)/Petrol/67h.p. </option>
                                <option value="15: Object" class="ng-star-inserted"> 1.0L VXI AIRBAG (TYPE 2)/Petrol/67h.p. </option><option value="16: Object" class="ng-star-inserted"> 1.0L VXI AIRBAG (TYPE 2)/Petrol/67h.p. </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ALTO K10 3RD GEN 08.2022 - now" class="ng-star-inserted">
                                <option value="17: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 3)/CNG </option><option value="18: Object" class="ng-star-inserted"> 1.0L LXI (TYPE 3)/Petrol </option>
                                <option value="19: Object" class="ng-star-inserted"> 1.0L STD(O) (TYPE 3)/Petrol </option><option value="20: Object" class="ng-star-inserted"> 1.0L VXI (TYPE 3)/Petrol </option>
                                <option value="21: Object" class="ng-star-inserted"> 1.0L VXI (TYPE 3)/CNG </option><option value="22: Object" class="ng-star-inserted"> 1.0L VXI AGS (TYPE 3)/Petrol </option>
                                <option value="23: Object" class="ng-star-inserted"> 1.0L VXI+ (TYPE 3)/Petrol </option><option value="24: Object" class="ng-star-inserted"> 1.0L VXI+ AGS (TYPE 3)/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/f165d4d.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI BALENO </a></h4>
                        <h5 class="listing-date">01.1999 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="BALENO 1ST GEN 01.1999 - 03.2007" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.6L (TYPE 1)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.6L LXI (TYPE 2)/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.6L LXI (TYPE 3)/Petrol </option><option value="4: Object" class="ng-star-inserted"> 1.6L VXI (TYPE 2)/Petrol </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.6L VXI (TYPE 3)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="BALENO ALTURA 01.1999 - 03.2007" class="ng-star-inserted">
                                <option value="6: Object" class="ng-star-inserted"> 1.6L (TYPE 1)/Petrol </option><option value="7: Object" class="ng-star-inserted"> 1.6L (TYPE 2)/Petrol </option>
                                <option value="8: Object" class="ng-star-inserted"> 1.6L (TYPE 3)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="BALENO 2ND GEN 09.2015 - 04.2019" class="ng-star-inserted">
                                <option value="9: Object" class="ng-star-inserted"> 1.2L ALPHA (TYPE 1)/Petrol </option><option value="10: Object" class="ng-star-inserted"> 1.2L ALPHA (TYPE 2)/Petrol </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.2L DELTA (TYPE 1)/Petrol </option><option value="12: Object" class="ng-star-inserted"> 1.2L DELTA (TYPE 2)/Petrol </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.2L DELTA CVT (TYPE 1)/Petrol </option><option value="14: Object" class="ng-star-inserted"> 1.2L DELTA CVT (TYPE 2)/Petrol </option>
                                <option value="15: Object" class="ng-star-inserted"> 1.2L SIGMA (TYPE 1)/Petrol </option><option value="16: Object" class="ng-star-inserted"> 1.2L SIGMA (TYPE 2)/Petrol </option>
                                <option value="17: Object" class="ng-star-inserted"> 1.2L ZETA (TYPE 1)/Petrol </option><option value="18: Object" class="ng-star-inserted"> 1.2L ZETA (TYPE 2)/Petrol </option>
                                <option value="19: Object" class="ng-star-inserted"> 1.2L ZETA CVT (TYPE 1)/Petrol </option><option value="20: Object" class="ng-star-inserted"> 1.2L ZETA CVT (TYPE 2)/Petrol </option>
                                <option value="21: Object" class="ng-star-inserted"> 1.3L ALPHA (TYPE 1)/Diesel </option><option value="22: Object" class="ng-star-inserted"> 1.3L ALPHA (TYPE 2)/Diesel </option>
                                <option value="23: Object" class="ng-star-inserted"> 1.3L DELTA (TYPE 1)/Diesel </option><option value="24: Object" class="ng-star-inserted"> 1.3L DELTA (TYPE 2)/Diesel </option>
                                <option value="25: Object" class="ng-star-inserted"> 1.3L SIGMA (TYPE 1)/Diesel </option><option value="26: Object" class="ng-star-inserted"> 1.3L SIGMA (TYPE 2)/Diesel </option>
                                <option value="27: Object" class="ng-star-inserted"> 1.3L ZETA (TYPE 1)/Diesel </option><option value="28: Object" class="ng-star-inserted"> 1.3L ZETA (TYPE 2)/Diesel </option>
                                <!---->
                            </optgroup>
                            <optgroup label="BALENO RS 12.2016 - 12.2018" class="ng-star-inserted">
                                <option value="29: Object" class="ng-star-inserted"> 1.0L/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="BALENO RS F/L 01.2019 - 03.2020" class="ng-star-inserted">
                                <option value="30: Object" class="ng-star-inserted"> 1.0L/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="BALENO 2ND GEN F/L 04.2019 - 03.2022" class="ng-star-inserted">
                                <option value="31: Object" class="ng-star-inserted"> 1.2L ALPHA/Petrol </option><option value="32: Object" class="ng-star-inserted"> 1.2L ALPHA CVT/Petrol </option>
                                <option value="33: Object" class="ng-star-inserted"> 1.2L DELTA/Petrol/89h.p. </option><option value="34: Object" class="ng-star-inserted"> 1.2L DELTA/Petrol/82h.p. </option>
                                <option value="35: Object" class="ng-star-inserted"> 1.2L DELTA CVT/Petrol </option><option value="36: Object" class="ng-star-inserted"> 1.2L SIGMA/Petrol </option>
                                <option value="37: Object" class="ng-star-inserted"> 1.2L ZETA/Petrol/82h.p. </option><option value="38: Object" class="ng-star-inserted"> 1.2L ZETA/Petrol/89h.p. </option>
                                <option value="39: Object" class="ng-star-inserted"> 1.2L ZETA CVT/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="BALENO 3RD GEN 02.2022 - now" class="ng-star-inserted">
                                <option value="40: Object" class="ng-star-inserted"> 1.2L ALPHA/Petrol </option><option value="41: Object" class="ng-star-inserted"> 1.2L ALPHA AGS/Petrol </option>
                                <option value="42: Object" class="ng-star-inserted"> 1.2L DELTA/Petrol </option><option value="43: Object" class="ng-star-inserted"> 1.2L DELTA/CNG </option>
                                <option value="44: Object" class="ng-star-inserted"> 1.2L DELTA AGS/Petrol </option><option value="45: Object" class="ng-star-inserted"> 1.2L SIGMA/Petrol </option>
                                <option value="46: Object" class="ng-star-inserted"> 1.2L ZETA/Petrol </option><option value="47: Object" class="ng-star-inserted"> 1.2L ZETA/CNG </option>
                                <option value="48: Object" class="ng-star-inserted"> 1.2L ZETA AGS/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/6ace99c.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI BREZZA </a></h4>
                        <h5 class="listing-date">02.2016 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="VITARA BREZZA 1ST GEN 02.2016 - 12.2019" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.3L LDI/Diesel </option><option value="2: Object" class="ng-star-inserted"> 1.3L LDI(O)/Diesel </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.3L VDI/Diesel </option><option value="4: Object" class="ng-star-inserted"> 1.3L VDI(O)/Diesel </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.3L ZDI/Diesel </option><option value="6: Object" class="ng-star-inserted"> 1.3L ZDI+/Diesel </option>
                                <!---->
                            </optgroup>
                            <optgroup label="VITARA BREZZA 1ST GEN F/L 01.2020 - 06.2022" class="ng-star-inserted">
                                <option value="7: Object" class="ng-star-inserted"> 1.5L LXI/Petrol </option><option value="8: Object" class="ng-star-inserted"> 1.5L VXI/Petrol </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.5L VXI AT/Petrol </option><option value="10: Object" class="ng-star-inserted"> 1.5L ZXI/Petrol </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.5L ZXI AT/Petrol </option><option value="12: Object" class="ng-star-inserted"> 1.5L ZXI+/Petrol </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.5L ZXI+ AT/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="BREZZA 2ND GEN 07.2022 - now" class="ng-star-inserted">
                                <option value="14: Object" class="ng-star-inserted"> 1.5L LXI/Petrol </option><option value="15: Object" class="ng-star-inserted"> 1.5L LXI/CNG </option><option value="16: Object" class="ng-star-inserted"> 1.5L VXI/Petrol </option>
                                <option value="17: Object" class="ng-star-inserted"> 1.5L VXI/CNG </option><option value="18: Object" class="ng-star-inserted"> 1.5L VXI AT/Petrol </option>
                                <option value="19: Object" class="ng-star-inserted"> 1.5L ZXI/Petrol </option><option value="20: Object" class="ng-star-inserted"> 1.5L ZXI/CNG </option>
                                <option value="21: Object" class="ng-star-inserted"> 1.5L ZXI AT/Petrol </option><option value="22: Object" class="ng-star-inserted"> 1.5L ZXI+/Petrol </option>
                                <option value="23: Object" class="ng-star-inserted"> 1.5L ZXI+ AT/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/6b7ba56.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI CELERIO </a></h4>
                        <h5 class="listing-date">12.2013 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="CELERIO 1ST GEN 12.2013 - 09.2017" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 0.8L LDI/Diesel </option><option value="2: Object" class="ng-star-inserted"> 0.8L VDI/Diesel </option><option value="3: Object" class="ng-star-inserted"> 0.8L ZDI/Diesel </option>
                                <option value="4: Object" class="ng-star-inserted"> 0.8L ZDI DUAL AIRBAG/Diesel </option><option value="5: Object" class="ng-star-inserted"> 1.0L LXI/Petrol </option>
                                <option value="6: Object" class="ng-star-inserted"> 1.0L LXI AGS/Petrol </option><option value="7: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option><option value="8: Object" class="ng-star-inserted"> 1.0L VXI/CNG </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.0L VXI AGS/Petrol </option><option value="10: Object" class="ng-star-inserted"> 1.0L ZXI/Petrol </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.0L ZXI AGS/Petrol </option><option value="12: Object" class="ng-star-inserted"> 1.0L ZXI DUAL AIRBAG/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="CELERIO 1ST GEN F/L 10.2017 - 11.2021" class="ng-star-inserted">
                                <option value="13: Object" class="ng-star-inserted"> 1.0L LXI/Petrol </option><option value="14: Object" class="ng-star-inserted"> 1.0L LXI (BS-VI)/Petrol </option>
                                <option value="15: Object" class="ng-star-inserted"> 1.0L LXI AGS/Petrol </option><option value="16: Object" class="ng-star-inserted"> 1.0L LXI AGS (BS-VI)/Petrol </option>
                                <option value="17: Object" class="ng-star-inserted"> 1.0L VXI/CNG </option><option value="18: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option>
                                <option value="19: Object" class="ng-star-inserted"> 1.0L VXI (BS-VI)/CNG </option><option value="20: Object" class="ng-star-inserted"> 1.0L VXI (BS-VI)/Petrol </option>
                                <option value="21: Object" class="ng-star-inserted"> 1.0L VXI AGS/Petrol </option><option value="22: Object" class="ng-star-inserted"> 1.0L VXI AGS (BS-VI)/Petrol </option>
                                <option value="23: Object" class="ng-star-inserted"> 1.0L ZXI/Petrol </option><option value="24: Object" class="ng-star-inserted"> 1.0L ZXI (BS-VI)/Petrol </option>
                                <option value="25: Object" class="ng-star-inserted"> 1.0L ZXI AGS/Petrol </option><option value="26: Object" class="ng-star-inserted"> 1.0L ZXI AGS (BS-VI)/Petrol </option>
                                <option value="27: Object" class="ng-star-inserted"> 1.0L ZXI DUAL AIRBAG/Petrol </option><option value="28: Object" class="ng-star-inserted"> 1.0L ZXI DUAL AIRBAG (BS-VI)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="CELERIO X 11.2017 - 06.2020" class="ng-star-inserted">
                                <option value="29: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option><option value="30: Object" class="ng-star-inserted"> 1.0L VXI AGS/Petrol </option>
                                <option value="31: Object" class="ng-star-inserted"> 1.0L VXI(O)/Petrol </option><option value="32: Object" class="ng-star-inserted"> 1.0L VXI(O) AGS/Petrol </option>
                                <option value="33: Object" class="ng-star-inserted"> 1.0L ZXI/Petrol </option><option value="34: Object" class="ng-star-inserted"> 1.0L ZXI AGS/Petrol </option>
                                <option value="35: Object" class="ng-star-inserted"> 1.0L ZXI(O)/Petrol </option><option value="36: Object" class="ng-star-inserted"> 1.0L ZXI(O) AGS/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="CELERIO 2ND GEN 11.2021 - now" class="ng-star-inserted">
                                <option value="37: Object" class="ng-star-inserted"> 1.0L LXI/Petrol </option><option value="38: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option><option value="39: Object" class="ng-star-inserted"> 1.0L VXI/CNG </option>
                                <option value="40: Object" class="ng-star-inserted"> 1.0L VXI AGS/Petrol </option><option value="41: Object" class="ng-star-inserted"> 1.0L ZXI/Petrol </option>
                                <option value="42: Object" class="ng-star-inserted"> 1.0L ZXI AGS/Petrol </option><option value="43: Object" class="ng-star-inserted"> 1.0L ZXI+/Petrol </option>
                                <option value="44: Object" class="ng-star-inserted"> 1.0L ZXI+ AGS/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/6d7ba40.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI CIAZ </a></h4>
                        <h5 class="listing-date">07.2014 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="CIAZ 1ST GEN 07.2014 - 07.2018" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.3L RS/Diesel </option><option value="2: Object" class="ng-star-inserted"> 1.3L VDI/Diesel/88h.p. </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.3L VDI/Diesel/88h.p. </option><option value="4: Object" class="ng-star-inserted"> 1.3L ZDI/Diesel/88h.p. </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.3L ZDI/Diesel/88h.p. </option><option value="6: Object" class="ng-star-inserted"> 1.4L RS/Petrol </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.4L S/Petrol </option><option value="8: Object" class="ng-star-inserted"> 1.4L VXI/Petrol </option><option value="9: Object" class="ng-star-inserted"> 1.4L VXI AT/Petrol </option>
                                <option value="10: Object" class="ng-star-inserted"> 1.4L ZXI/Petrol </option><option value="11: Object" class="ng-star-inserted"> 1.4L ZXI AT/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="CIAZ 1ST GEN F/L 08.2018 - now" class="ng-star-inserted">
                                <option value="12: Object" class="ng-star-inserted"> 1.3L VDI/Diesel </option><option value="13: Object" class="ng-star-inserted"> 1.3L ZDI/Diesel </option>
                                <option value="14: Object" class="ng-star-inserted"> 1.5L RS/Petrol </option><option value="15: Object" class="ng-star-inserted"> 1.5L VDI+/Diesel </option>
                                <option value="16: Object" class="ng-star-inserted"> 1.5L VXI/Petrol </option><option value="17: Object" class="ng-star-inserted"> 1.5L VXI (BS-VI)/Petrol </option>
                                <option value="18: Object" class="ng-star-inserted"> 1.5L VXI AT/Petrol </option><option value="19: Object" class="ng-star-inserted"> 1.5L VXI AT (BS-VI)/Petrol </option>
                                <option value="20: Object" class="ng-star-inserted"> 1.5L ZDI/Diesel </option><option value="21: Object" class="ng-star-inserted"> 1.5L ZDI+/Diesel </option>
                                <option value="22: Object" class="ng-star-inserted"> 1.5L ZXI/Petrol </option><option value="23: Object" class="ng-star-inserted"> 1.5L ZXI (BS-VI)/Petrol </option>
                                <option value="24: Object" class="ng-star-inserted"> 1.5L ZXI AT/Petrol </option><option value="25: Object" class="ng-star-inserted"> 1.5L ZXI AT (BS-VI)/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/7950b50.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI EECO </a></h4>
                        <h5 class="listing-date">01.2010 - now</h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="EECO 01.2010 - 10.2022" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.2L 5S AC/Petrol/73h.p. </option><option value="2: Object" class="ng-star-inserted"> 1.2L 5S AC/CNG/62h.p. </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.2L 5S AC/CNG/62h.p. </option><option value="4: Object" class="ng-star-inserted"> 1.2L 5S AC/Petrol/73h.p. </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.2L 5S STD/Petrol/73h.p. </option><option value="6: Object" class="ng-star-inserted"> 1.2L 5S STD/CNG </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.2L 5S STD/Petrol/73h.p. </option><option value="8: Object" class="ng-star-inserted"> 1.2L 7S STD/Petrol/73h.p. </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.2L 7S STD/Petrol/73h.p. </option>
                                <!---->
                            </optgroup>
                            <optgroup label="EECO F/L 11.2022 - now" class="ng-star-inserted">
                                <option value="10: Object" class="ng-star-inserted"> 1.2L 5S AC/Petrol </option><option value="11: Object" class="ng-star-inserted"> 1.2L 5S AC/CNG </option>
                                <option value="12: Object" class="ng-star-inserted"> 1.2L 5S STD/Petrol </option><option value="13: Object" class="ng-star-inserted"> 1.2L 7S STD/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/0dfb2b1.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI ERTIGA </a></h4>
                        <h5 class="listing-date">04.2012 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="ERTIGA 1ST GEN 04.2012 - 10.2018" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 1)/Diesel </option><option value="2: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 2)/Diesel </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 3)/Diesel </option><option value="4: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 1)/Diesel </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 2)/Diesel </option><option value="6: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 3)/Diesel </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 1)/Diesel </option><option value="8: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 2)/Diesel </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 3)/Diesel </option><option value="10: Object" class="ng-star-inserted"> 1.4L LXI (TYPE 1)/Petrol </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.4L LXI (TYPE 1)/CNG </option><option value="12: Object" class="ng-star-inserted"> 1.4L LXI (TYPE 2)/Petrol </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.4L LXI (TYPE 2)/CNG </option><option value="14: Object" class="ng-star-inserted"> 1.4L LXI (TYPE 3)/CNG </option>
                                <option value="15: Object" class="ng-star-inserted"> 1.4L LXI (TYPE 3)/Petrol </option><option value="16: Object" class="ng-star-inserted"> 1.4L VXI (TYPE 1)/Petrol </option>
                                <option value="17: Object" class="ng-star-inserted"> 1.4L VXI (TYPE 1)/CNG </option><option value="18: Object" class="ng-star-inserted"> 1.4L VXI (TYPE 2)/Petrol </option>
                                <option value="19: Object" class="ng-star-inserted"> 1.4L VXI (TYPE 2)/CNG </option><option value="20: Object" class="ng-star-inserted"> 1.4L VXI (TYPE 3)/Petrol </option>
                                <option value="21: Object" class="ng-star-inserted"> 1.4L VXI (TYPE 3)/CNG </option><option value="22: Object" class="ng-star-inserted"> 1.4L ZXI (TYPE 1)/Petrol </option>
                                <option value="23: Object" class="ng-star-inserted"> 1.4L ZXI (TYPE 2)/Petrol </option><option value="24: Object" class="ng-star-inserted"> 1.4L ZXI (TYPE 3)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ERTIGA 2ND GEN 11.2018 - 03.2022" class="ng-star-inserted">
                                <option value="25: Object" class="ng-star-inserted"> 1.3L LDI/Diesel </option><option value="26: Object" class="ng-star-inserted"> 1.3L VDI/Diesel </option>
                                <option value="27: Object" class="ng-star-inserted"> 1.3L ZDI/Diesel </option><option value="28: Object" class="ng-star-inserted"> 1.3L ZDI+/Diesel </option>
                                <option value="29: Object" class="ng-star-inserted"> 1.5L LXI/Petrol </option><option value="30: Object" class="ng-star-inserted"> 1.5L LXI (BS-VI)/Petrol </option>
                                <option value="31: Object" class="ng-star-inserted"> 1.5L VDI/Diesel/94h.p. </option><option value="32: Object" class="ng-star-inserted"> 1.5L VDI/Diesel/94h.p. </option>
                                <option value="33: Object" class="ng-star-inserted"> 1.5L VXI/Petrol </option><option value="34: Object" class="ng-star-inserted"> 1.5L VXI/CNG </option>
                                <option value="35: Object" class="ng-star-inserted"> 1.5L VXI (BS-VI)/Petrol </option><option value="36: Object" class="ng-star-inserted"> 1.5L VXI (BS-VI)/CNG </option>
                                <option value="37: Object" class="ng-star-inserted"> 1.5L VXI AT/Petrol </option><option value="38: Object" class="ng-star-inserted"> 1.5L VXI AT (BS-VI)/Petrol </option>
                                <option value="39: Object" class="ng-star-inserted"> 1.5L ZDI/Diesel/94h.p. </option><option value="40: Object" class="ng-star-inserted"> 1.5L ZDI/Diesel/94h.p. </option>
                                <option value="41: Object" class="ng-star-inserted"> 1.5L ZDI+/Diesel/94h.p. </option><option value="42: Object" class="ng-star-inserted"> 1.5L ZDI+/Diesel/94h.p. </option>
                                <option value="43: Object" class="ng-star-inserted"> 1.5L ZXI/Petrol </option><option value="44: Object" class="ng-star-inserted"> 1.5L ZXI (BS-VI)/Petrol </option>
                                <option value="45: Object" class="ng-star-inserted"> 1.5L ZXI AT/Petrol </option><option value="46: Object" class="ng-star-inserted"> 1.5L ZXI AT (BS-VI)/Petrol </option>
                                <option value="47: Object" class="ng-star-inserted"> 1.5L ZXI+/Petrol </option><option value="48: Object" class="ng-star-inserted"> 1.5L ZXI+ (BS-VI)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ERTIGA 2ND GEN F/L 04.2022 - now" class="ng-star-inserted">
                                <option value="49: Object" class="ng-star-inserted"> 1.5L LXI/Petrol </option><option value="50: Object" class="ng-star-inserted"> 1.5L VXI/Petrol </option><option value="51: Object" class="ng-star-inserted"> 1.5L VXI/CNG </option>
                                <option value="52: Object" class="ng-star-inserted"> 1.5L VXI AT/Petrol </option><option value="53: Object" class="ng-star-inserted"> 1.5L ZXI/Petrol </option>
                                <option value="54: Object" class="ng-star-inserted"> 1.5L ZXI/CNG </option><option value="55: Object" class="ng-star-inserted"> 1.5L ZXI AT/Petrol </option>
                                <option value="56: Object" class="ng-star-inserted"> 1.5L ZXI+/Petrol </option><option value="57: Object" class="ng-star-inserted"> 1.5L ZXI+ AT/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ERTIGA BLACK EDITION 03.2023 - now" class="ng-star-inserted">
                                <option value="58: Object" class="ng-star-inserted"> 1.5L ZXI/Petrol </option><option value="59: Object" class="ng-star-inserted"> 1.5L ZXI+/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/f3b9153.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI ESTEEM </a></h4>
                        <h5 class="listing-date">11.1994 - 03.2008 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="ESTEEM TYPE-1 11.1994 - 12.1997" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.3L AX (CARB)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.3L LX (CARB)/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.3L VX (CARB)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ESTEEM TYPE-2 12.1997 - 07.2004" class="ng-star-inserted">
                                <option value="4: Object" class="ng-star-inserted"> 1.3L AX (CARB)/Petrol </option><option value="5: Object" class="ng-star-inserted"> 1.3L AX (MPFI)/Petrol </option>
                                <option value="6: Object" class="ng-star-inserted"> 1.3L LX (CARB)/Petrol </option><option value="7: Object" class="ng-star-inserted"> 1.3L LX (MPFI)/Petrol </option>
                                <option value="8: Object" class="ng-star-inserted"> 1.3L LXI (MPFI)/Petrol </option><option value="9: Object" class="ng-star-inserted"> 1.3L VXI (MPFI)/Petrol </option>
                                <option value="10: Object" class="ng-star-inserted"> 1.5L D/Diesel </option><option value="11: Object" class="ng-star-inserted"> 1.5L DI/Diesel </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ESTEEM TYPE-3 07.2004 - 03.2008" class="ng-star-inserted">
                                <option value="12: Object" class="ng-star-inserted"> 1.3L LX (MPFI)/Petrol </option><option value="13: Object" class="ng-star-inserted"> 1.3L LXI (MPFI)/Petrol </option>
                                <option value="14: Object" class="ng-star-inserted"> 1.3L VXI (MPFI)/Petrol </option><option value="15: Object" class="ng-star-inserted"> 1.5L D/Diesel </option>
                                <option value="16: Object" class="ng-star-inserted"> 1.5L DI/Diesel </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/f2572ae.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI FRONX </a></h4>
                        <h5 class="listing-date">04.2023 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="FRONX 04.2023 - now" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.0L ALPHA/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.0L ALPHA AT/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.0L DELTA+/Petrol </option><option value="4: Object" class="ng-star-inserted"> 1.0L ZETA/Petrol </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.0L ZETA AT/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.2L DELTA/Petrol </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.2L DELTA/CNG </option><option value="8: Object" class="ng-star-inserted"> 1.2L DELTA AGS/Petrol </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.2L DELTA+/Petrol </option><option value="10: Object" class="ng-star-inserted"> 1.2L DELTA+ AGS/Petrol </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.2L SIGMA/Petrol </option><option value="12: Object" class="ng-star-inserted"> 1.2L SIGMA/CNG </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/ee1bcee.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI GRAND VITARA </a></h4>
                        <h5 class="listing-date">06.2007 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="GRAND VITARA 2ND GEN 06.2007 - 10.2015" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 2.0L AT (TYPE 1)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 2.0L MT (TYPE 1)/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 2.4L AT/MT (TYPE 2)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="GRAND VITARA 3RD GEN 10.2022 - now" class="ng-star-inserted">
                                <option value="4: Object" class="ng-star-inserted"> 1.5L ALPHA/Petrol </option><option value="5: Object" class="ng-star-inserted"> 1.5L ALPHA ALL GRIP/Petrol </option>
                                <option value="6: Object" class="ng-star-inserted"> 1.5L ALPHA AT/Petrol </option><option value="7: Object" class="ng-star-inserted"> 1.5L ALPHA+ CVT/Hybrid </option>
                                <option value="8: Object" class="ng-star-inserted"> 1.5L DELTA/Petrol </option><option value="9: Object" class="ng-star-inserted"> 1.5L DELTA/CNG </option>
                                <option value="10: Object" class="ng-star-inserted"> 1.5L DELTA AT/Petrol </option><option value="11: Object" class="ng-star-inserted"> 1.5L SIGMA/Petrol </option>
                                <option value="12: Object" class="ng-star-inserted"> 1.5L ZETA/Petrol </option><option value="13: Object" class="ng-star-inserted"> 1.5L ZETA/CNG </option>
                                <option value="14: Object" class="ng-star-inserted"> 1.5L ZETA AT/Petrol </option><option value="15: Object" class="ng-star-inserted"> 1.5L ZETA+ CVT/Hybrid </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/260978a.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI GRAND VITARA XL7 </a></h4>
                        <h5 class="listing-date">06.2003 - 05.2005 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="XL7 1ST GEN 06.2003 - 05.2005" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 2.7L AT/Petrol </option><option value="2: Object" class="ng-star-inserted"> 2.7L MT/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/12c6b28.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI GYPSY </a></h4>
                        <h5 class="listing-date">12.1985 - 01.2019 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="GYPSY 12.1985 - 12.1999" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.0L (MG410)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.0L (MG410W)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="GYPSY KING 06.1996 - 01.2019" class="ng-star-inserted">
                                <option value="3: Object" class="ng-star-inserted"> 1.3L 4WD/Petrol/82h.p. </option><option value="4: Object" class="ng-star-inserted"> 1.3L 4WD/Petrol/82h.p. </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.3L 4WD (BS-III)/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.3L 4WD (BS-IV)/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/da1d67c.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI IGNIS </a></h4>
                        <h5 class="listing-date">11.2016 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="IGNIS 1ST GEN 11.2016 - 02.2020" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.2L ALPHA/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.2L ALPHA SLDA/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.2L DELTA/Petrol </option><option value="4: Object" class="ng-star-inserted"> 1.2L DELTA AGS/Petrol </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.2L SIGMA/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.2L ZETA/Petrol </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.2L ZETA AGS/Petrol </option><option value="8: Object" class="ng-star-inserted"> 1.3L ALPHA/Diesel </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.3L ALPHA SLDA/Diesel </option><option value="10: Object" class="ng-star-inserted"> 1.3L DELTA/Diesel </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.3L DELTA AGS/Diesel </option><option value="12: Object" class="ng-star-inserted"> 1.3L ZETA/Diesel </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.3L ZETA AGS/Diesel </option>
                                <!---->
                            </optgroup>
                            <optgroup label="IGNIS 1ST GEN F/L 02.2020 - now" class="ng-star-inserted">
                                <option value="14: Object" class="ng-star-inserted"> 1.2L ALPHA/Petrol </option><option value="15: Object" class="ng-star-inserted"> 1.2L ALPHA AGS/Petrol </option>
                                <option value="16: Object" class="ng-star-inserted"> 1.2L DELTA/Petrol </option><option value="17: Object" class="ng-star-inserted"> 1.2L DELTA AGS/Petrol </option>
                                <option value="18: Object" class="ng-star-inserted"> 1.2L SIGMA/Petrol </option><option value="19: Object" class="ng-star-inserted"> 1.2L ZETA/Petrol </option>
                                <option value="20: Object" class="ng-star-inserted"> 1.2L ZETA AGS/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/6c18e0f.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI INVICTO </a></h4>
                        <h5 class="listing-date">07.2023 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="INVICTO 07.2023 - now" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 2.0L ALPHA+ 7S/Hybrid </option><option value="2: Object" class="ng-star-inserted"> 2.0L ZETA+ 7S/Hybrid </option>
                                <option value="3: Object" class="ng-star-inserted"> 2.0L ZETA+ 8S/Hybrid </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/5cc16a2.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI JIMNY </a></h4>
                        <h5 class="listing-date">06.2023 - now  </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="JIMNY 06.2023 - now" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.5L ALPHA /Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.5L ALPHA AT/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.5L ZETA /Petrol </option><option value="4: Object" class="ng-star-inserted"> 1.5L ZETA AT/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/80fa883.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI KIZASHI </a></h4>
                        <h5 class="listing-date">01.2011 - 12.2014 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="KIZASHI 01.2011 - 12.2014" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 2.4L/Petrol </option><option value="2: Object" class="ng-star-inserted"> 2.4L CVT/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/af17591.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI OMNI </a></h4>
                        <h5 class="listing-date"> 12.1984 - 05.2019 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="OMNI 1ST GEN 12.1984 - 01.1998" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 0.8L/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="OMNI 2ND GEN 01.1998 - 02.2005" class="ng-star-inserted">
                                <option value="2: Object" class="ng-star-inserted"> 0.8L/Petrol/35h.p. </option><option value="3: Object" class="ng-star-inserted"> 0.8L/Petrol/35h.p. </option>
                                <!---->
                            </optgroup>
                            <optgroup label="OMNI 3RD GEN 03.2005 - 05.2019" class="ng-star-inserted">
                                <option value="4: Object" class="ng-star-inserted"> 0.8L/Petrol </option><option value="5: Object" class="ng-star-inserted"> 0.8L LPG/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/5dc9e3e.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI RITZ </a></h4>
                        <h5 class="listing-date">04.2009 - 02.2017 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="RITZ 1ST GEN 04.2009 - 07.2012" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.2L LXI (TYPE 1)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.2L VXI (TYPE 1)/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.2L VXI ABS (TYPE 1)/Petrol </option><option value="4: Object" class="ng-star-inserted"> 1.2L ZXI (TYPE 1)/Petrol </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 1)/Diesel </option><option value="6: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 1)/Diesel </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.3L VDI ABS (TYPE 1)/Diesel </option>
                                <!---->
                            </optgroup>
                            <optgroup label="RITZ 1ST GEN F/L 08.2012 - 02.2017" class="ng-star-inserted">
                                <option value="8: Object" class="ng-star-inserted"> 1.2L AT (TYPE 2)/Petrol </option><option value="9: Object" class="ng-star-inserted"> 1.2L LXI (TYPE 2)/Petrol </option>
                                <option value="10: Object" class="ng-star-inserted"> 1.2L VXI (TYPE 2)/Petrol </option><option value="11: Object" class="ng-star-inserted"> 1.2L VXI ABS (TYPE 2)/Petrol </option>
                                <option value="12: Object" class="ng-star-inserted"> 1.2L ZXI (TYPE 2)/Petrol </option><option value="13: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 2)/Diesel </option>
                                <option value="14: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 2)/Diesel </option><option value="15: Object" class="ng-star-inserted"> 1.3L VDI ABS (TYPE 2)/Diesel </option>
                                <option value="16: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 2)/Diesel </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/750063f.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI S-CROSS </a></h4>
                        <h5 class="listing-date">08.2015 - 10.2022 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="S-CROSS 1ST GEN 08.2015 - 08.2017" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.3L ALPHA/Diesel </option><option value="2: Object" class="ng-star-inserted"> 1.3L DELTA/Diesel </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.3L SIGMA/Diesel </option><option value="4: Object" class="ng-star-inserted"> 1.3L ZETA/Diesel </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.6L ALPHA/Diesel </option><option value="6: Object" class="ng-star-inserted"> 1.6L DELTA/Diesel </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.6L ZETA/Diesel </option>
                                <!---->
                            </optgroup>
                            <optgroup label="S-CROSS 1ST GEN F/L 08.2017 - 10.2022" class="ng-star-inserted">
                                <option value="8: Object" class="ng-star-inserted"> 1.3L ALPHA/Diesel </option><option value="9: Object" class="ng-star-inserted"> 1.3L DELTA/Diesel </option>
                                <option value="10: Object" class="ng-star-inserted"> 1.3L SIGMA/Diesel </option><option value="11: Object" class="ng-star-inserted"> 1.3L ZETA/Diesel </option>
                                <option value="12: Object" class="ng-star-inserted"> 1.5L ALPHA/Petrol </option><option value="13: Object" class="ng-star-inserted"> 1.5L ALPHA AT/Petrol </option>
                                <option value="14: Object" class="ng-star-inserted"> 1.5L DELTA/Petrol </option><option value="15: Object" class="ng-star-inserted"> 1.5L DELTA AT/Petrol </option>
                                <option value="16: Object" class="ng-star-inserted"> 1.5L SIGMA/Petrol </option><option value="17: Object" class="ng-star-inserted"> 1.5L ZETA/Petrol </option>
                                <option value="18: Object" class="ng-star-inserted"> 1.5L ZETA AT/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/e0acffd.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI S-PRESSO </a></h4>
                        <h5 class="listing-date">09.2019 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="S-PRESSO 09.2019 - now" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.0L LXI/Petrol/67h.p. </option><option value="2: Object" class="ng-star-inserted"> 1.0L LXI/CNG/67h.p. </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.0L LXI/CNG/67h.p. </option><option value="4: Object" class="ng-star-inserted"> 1.0L LXI/Petrol/67h.p. </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.0L LXI(O)/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.0L LXI(O)/CNG </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.0L STD/Petrol/67h.p. </option><option value="8: Object" class="ng-star-inserted"> 1.0L STD/Petrol/67h.p. </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.0L STD(O)/Petrol </option><option value="10: Object" class="ng-star-inserted"> 1.0L VXI/Petrol/67h.p. </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.0L VXI/CNG/67h.p. </option><option value="12: Object" class="ng-star-inserted"> 1.0L VXI/CNG/67h.p. </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.0L VXI/Petrol/67h.p. </option><option value="14: Object" class="ng-star-inserted"> 1.0L VXI AGS/Petrol </option>
                                <option value="15: Object" class="ng-star-inserted"> 1.0L VXI(O)/Petrol </option><option value="16: Object" class="ng-star-inserted"> 1.0L VXI(O)/CNG </option>
                                <option value="17: Object" class="ng-star-inserted"> 1.0L VXI(O) AGS/Petrol/67h.p. </option><option value="18: Object" class="ng-star-inserted"> 1.0L VXI(O) AGS/Petrol/67h.p. </option>
                                <option value="19: Object" class="ng-star-inserted"> 1.0L VXI+/Petrol/67h.p. </option><option value="20: Object" class="ng-star-inserted"> 1.0L VXI+/Petrol/67h.p. </option>
                                <option value="21: Object" class="ng-star-inserted"> 1.0L VXI+ AGS/Petrol </option><option value="22: Object" class="ng-star-inserted"> 1.0L VXI+(O) AGS/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/bd298cf.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI STINGRAY </a></h4>
                        <h5 class="listing-date">08.2013 - 02.2017 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="STINGRAY 08.2013 - 02.2017" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.0L LXI/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.0L VXI ABS/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/4839b99.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI SUPER CARRY</a></h4>
                        <h5 class="listing-date">09.2016 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="SUPER CARRY 09.2016 - now" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 0.8L/Diesel </option><option value="2: Object" class="ng-star-inserted"> 1.2L/Petrol/64h.p. </option><option value="3: Object" class="ng-star-inserted"> 1.2L/CNG/64h.p. </option>
                                <option value="4: Object" class="ng-star-inserted"> 1.2L/Petrol/72h.p. </option><option value="5: Object" class="ng-star-inserted"> 1.2L/CNG/72h.p. </option>
                                <option value="6: Object" class="ng-star-inserted"> 1.2L/Petrol/72h.p. </option><option value="7: Object" class="ng-star-inserted"> 1.2L/CNG/68h.p. </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/95b53a5.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI SWIFT </a></h4>
                        <h5 class="listing-date">04.2005 - now  </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="SWIFT 1ST GEN 04.2005 - 07.2011" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.2L LXI (TYPE 4)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.2L VXI (TYPE 4)/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.2L VXI ABS (TYPE 4)/Petrol </option><option value="4: Object" class="ng-star-inserted"> 1.2L ZXI (TYPE 4)/Petrol </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 2)/Diesel </option><option value="6: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 3)/Diesel </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 4)/Diesel </option><option value="8: Object" class="ng-star-inserted"> 1.3L LXI (TYPE 1)/Petrol </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.3L LXI (TYPE 2)/Petrol </option><option value="10: Object" class="ng-star-inserted"> 1.3L LXI (TYPE 3)/Petrol </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 2)/Diesel </option><option value="12: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 3)/Diesel </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 4)/Diesel </option><option value="14: Object" class="ng-star-inserted"> 1.3L VDI ABS (TYPE 2)/Diesel </option>
                                <option value="15: Object" class="ng-star-inserted"> 1.3L VDI ABS (TYPE 3)/Diesel </option><option value="16: Object" class="ng-star-inserted"> 1.3L VDI ABS (TYPE 4)/Diesel </option>
                                <option value="17: Object" class="ng-star-inserted"> 1.3L VXI (TYPE 1)/Petrol </option><option value="18: Object" class="ng-star-inserted"> 1.3L VXI (TYPE 2)/Petrol </option>
                                <option value="19: Object" class="ng-star-inserted"> 1.3L VXI (TYPE 3)/Petrol </option><option value="20: Object" class="ng-star-inserted"> 1.3L VXI ABS (TYPE 1)/Petrol </option>
                                <option value="21: Object" class="ng-star-inserted"> 1.3L VXI ABS (TYPE 2)/Petrol </option><option value="22: Object" class="ng-star-inserted"> 1.3L VXI ABS (TYPE 3)/Petrol </option>
                                <option value="23: Object" class="ng-star-inserted"> 1.3L ZXI (TYPE 1)/Petrol </option><option value="24: Object" class="ng-star-inserted"> 1.3L ZXI (TYPE 2)/Petrol </option>
                                <option value="25: Object" class="ng-star-inserted"> 1.3L ZXI (TYPE 3)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="SWIFT 2ND GEN 08.2011 - 11.2017" class="ng-star-inserted">
                                <option value="26: Object" class="ng-star-inserted"> 1.2L LXI (TYPE 1)/Petrol </option><option value="27: Object" class="ng-star-inserted"> 1.2L LXI (TYPE 2)/Petrol </option>
                                <option value="28: Object" class="ng-star-inserted"> 1.2L LXI (TYPE 3)/Petrol </option><option value="29: Object" class="ng-star-inserted"> 1.2L VXI (TYPE 1)/Petrol </option>
                                <option value="30: Object" class="ng-star-inserted"> 1.2L VXI (TYPE 2)/Petrol </option><option value="31: Object" class="ng-star-inserted"> 1.2L VXI (TYPE 3)/Petrol </option>
                                <option value="32: Object" class="ng-star-inserted"> 1.2L VXI RS/Petrol </option><option value="33: Object" class="ng-star-inserted"> 1.2L ZXI (TYPE 1)/Petrol </option>
                                <option value="34: Object" class="ng-star-inserted"> 1.2L ZXI (TYPE 2)/Petrol </option><option value="35: Object" class="ng-star-inserted"> 1.2L ZXI (TYPE 3)/Petrol </option>
                                <option value="36: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 1)/Diesel </option><option value="37: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 2)/Diesel </option>
                                <option value="38: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 3)/Diesel </option><option value="39: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 1)/Diesel </option>
                                <option value="40: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 2)/Diesel </option><option value="41: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 3)/Diesel </option>
                                <option value="42: Object" class="ng-star-inserted"> 1.3L VDI RS/Diesel </option><option value="43: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 1)/Diesel </option>
                                <option value="44: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 2)/Diesel </option><option value="45: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 3)/Diesel </option>
                                <!---->
                            </optgroup>
                            <optgroup label="SWIFT 3RD GEN 02.2018 - 02.2021" class="ng-star-inserted">
                                <option value="46: Object" class="ng-star-inserted"> 1.2L LX/Petrol </option><option value="47: Object" class="ng-star-inserted"> 1.2L LXI (BS-VI)/Petrol </option>
                                <option value="48: Object" class="ng-star-inserted"> 1.2L VXI/Petrol </option><option value="49: Object" class="ng-star-inserted"> 1.2L VXI (BS-VI)/Petrol </option>
                                <option value="50: Object" class="ng-star-inserted"> 1.2L VXI AGS/Petrol </option><option value="51: Object" class="ng-star-inserted"> 1.2L VXI AGS (BS-VI)/Petrol </option>
                                <option value="52: Object" class="ng-star-inserted"> 1.2L ZXI/Petrol </option><option value="53: Object" class="ng-star-inserted"> 1.2L ZXI (BS-VI)/Petrol </option>
                                <option value="54: Object" class="ng-star-inserted"> 1.2L ZXI AGS/Petrol </option><option value="55: Object" class="ng-star-inserted"> 1.2L ZXI AGS (BS-VI)/Petrol </option>
                                <option value="56: Object" class="ng-star-inserted"> 1.2L ZXI+/Petrol </option><option value="57: Object" class="ng-star-inserted"> 1.2L ZXI+ (BS-VI)/Petrol </option>
                                <option value="58: Object" class="ng-star-inserted"> 1.3L LDI/Diesel </option><option value="59: Object" class="ng-star-inserted"> 1.3L VDI/Diesel </option>
                                <option value="60: Object" class="ng-star-inserted"> 1.3L VDI AGS/Diesel </option><option value="61: Object" class="ng-star-inserted"> 1.3L ZDI/Diesel </option>
                                <option value="62: Object" class="ng-star-inserted"> 1.3L ZDI AGS/Diesel </option><option value="63: Object" class="ng-star-inserted"> 1.3L ZDI+/Diesel </option>
                                <!---->
                            </optgroup>
                            <optgroup label="SWIFT 3RD GEN F/L 02.2021 - 04.2024" class="ng-star-inserted">
                                <option value="64: Object" class="ng-star-inserted"> 1.2L LXI/Petrol </option><option value="65: Object" class="ng-star-inserted"> 1.2L VXI/Petrol </option><option value="66: Object" class="ng-star-inserted"> 1.2L VXI/CNG </option>
                                <option value="67: Object" class="ng-star-inserted"> 1.2L VXI AGS/Petrol </option><option value="68: Object" class="ng-star-inserted"> 1.2L ZXI/Petrol </option>
                                <option value="69: Object" class="ng-star-inserted"> 1.2L ZXI/CNG </option><option value="70: Object" class="ng-star-inserted"> 1.2L ZXI AGS/Petrol </option>
                                <option value="71: Object" class="ng-star-inserted"> 1.2L ZXI+/Petrol </option><option value="72: Object" class="ng-star-inserted"> 1.2L ZXI+ AGS/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="SWIFT 4TH GEN 05.2024 - now" class="ng-star-inserted">
                                <option value="73: Object" class="ng-star-inserted"> 1.2L LXI/Petrol </option><option value="74: Object" class="ng-star-inserted"> 1.2L VXI/Petrol </option><option value="75: Object" class="ng-star-inserted"> 1.2L VXI/CNG </option>
                                <option value="76: Object" class="ng-star-inserted"> 1.2L VXI AGS/Petrol </option><option value="77: Object" class="ng-star-inserted"> 1.2L VXI(O)/Petrol </option>
                                <option value="78: Object" class="ng-star-inserted"> 1.2L VXI(O)/CNG </option><option value="79: Object" class="ng-star-inserted"> 1.2L VXI(O) AGS/Petrol </option>
                                <option value="80: Object" class="ng-star-inserted"> 1.2L ZXI/Petrol </option><option value="81: Object" class="ng-star-inserted"> 1.2L ZXI/CNG </option>
                                <option value="82: Object" class="ng-star-inserted"> 1.2L ZXI AGS/Petrol </option><option value="83: Object" class="ng-star-inserted"> 1.2L ZXI+/Petrol </option>
                                <option value="84: Object" class="ng-star-inserted"> 1.2L ZXI+ AGS/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/a446e5f.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI SWIFT DZIRE </a></h4>
                        <h5 class="listing-date">03.2008 - now </h5>
                        {{-- <select class="form-control sele-opt">
                                <option value="0: null"> SELECT YOUR CAR </option>
                                <optgroup label="SWIFT DZIRE 1ST GEN 03.2008 - 01.2012" class="ng-star-inserted">
                                    <option value="1: Object" class="ng-star-inserted"> 1.2L ZXI/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.3L LDI/Diesel </option><option value="3: Object" class="ng-star-inserted"> 1.3L LXI/Petrol </option>
                                    <option value="4: Object" class="ng-star-inserted"> 1.3L VDI/Diesel </option><option value="5: Object" class="ng-star-inserted"> 1.3L VXI/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.3L ZDI/Diesel </option>
                                    <option value="7: Object" class="ng-star-inserted"> 1.3L ZXI/Petrol </option>
                                    <!---->
                                </optgroup>
                                <optgroup label="SWIFT DZIRE 2ND GEN 02.2012 - 02.2017" class="ng-star-inserted">
                                    <option value="8: Object" class="ng-star-inserted"> 1.2L LXI (TYPE 1)/Petrol </option><option value="9: Object" class="ng-star-inserted"> 1.2L LXI (TYPE 2)/Petrol </option>
                                    <option value="10: Object" class="ng-star-inserted"> 1.2L LXI (TYPE 3)/Petrol </option><option value="11: Object" class="ng-star-inserted"> 1.2L VXI (TYPE 1)/Petrol </option>
                                    <option value="12: Object" class="ng-star-inserted"> 1.2L VXI (TYPE 2)/Petrol </option><option value="13: Object" class="ng-star-inserted"> 1.2L VXI (TYPE 3)/Petrol </option>
                                    <option value="14: Object" class="ng-star-inserted"> 1.2L ZXI (TYPE 1)/Petrol </option><option value="15: Object" class="ng-star-inserted"> 1.2L ZXI (TYPE 2)/Petrol </option>
                                    <option value="16: Object" class="ng-star-inserted"> 1.2L ZXI (TYPE 3)/Petrol </option><option value="17: Object" class="ng-star-inserted"> 1.2L ZXI AGS (TYPE 2)/Petrol </option>
                                    <option value="18: Object" class="ng-star-inserted"> 1.2L ZXI AGS (TYPE 3)/Petrol </option><option value="19: Object" class="ng-star-inserted"> 1.2L ZXI AT (TYPE 1)/Petrol </option>
                                    <option value="20: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 1)/Diesel </option><option value="21: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 2)/Diesel </option>
                                    <option value="22: Object" class="ng-star-inserted"> 1.3L LDI (TYPE 3)/Diesel </option><option value="23: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 1)/Diesel </option>
                                    <option value="24: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 2)/Diesel </option><option value="25: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 3)/Diesel </option>
                                    <option value="26: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 1)/Diesel </option><option value="27: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 2)/Diesel </option>
                                    <option value="28: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 3)/Diesel </option>
                                    <!---->
                                </optgroup>
                                <optgroup label="DZIRE 3RD GEN 03.2017 - 03.2020" class="ng-star-inserted">
                                    <option value="29: Object" class="ng-star-inserted"> 1.2L LXI/Petrol </option><option value="30: Object" class="ng-star-inserted"> 1.2L VXI/Petrol </option>
                                    <option value="31: Object" class="ng-star-inserted"> 1.2L VXI AGS/Petrol </option><option value="32: Object" class="ng-star-inserted"> 1.2L ZXI/Petrol </option>
                                    <option value="33: Object" class="ng-star-inserted"> 1.2L ZXI AGS/Petrol </option><option value="34: Object" class="ng-star-inserted"> 1.2L ZXI+/Petrol </option>
                                    <option value="35: Object" class="ng-star-inserted"> 1.2L ZXI+ AGS/Petrol </option><option value="36: Object" class="ng-star-inserted"> 1.3L LDI/Diesel </option>
                                    <option value="37: Object" class="ng-star-inserted"> 1.3L VDI/Diesel </option><option value="38: Object" class="ng-star-inserted"> 1.3L VDI AGS/Diesel </option>
                                    <option value="39: Object" class="ng-star-inserted"> 1.3L ZDI/Diesel </option><option value="40: Object" class="ng-star-inserted"> 1.3L ZDI AGS/Diesel </option>
                                    <option value="41: Object" class="ng-star-inserted"> 1.3L ZDI+/Diesel </option><option value="42: Object" class="ng-star-inserted"> 1.3L ZDI+ AGS/Diesel </option>
                                    <!---->
                                </optgroup>
                                <optgroup label="DZIRE 3RD GEN F/L 03.2020 - now" class="ng-star-inserted">
                                    <option value="43: Object" class="ng-star-inserted"> 1.2L LXI/Petrol </option><option value="44: Object" class="ng-star-inserted"> 1.2L TOUR/CNG </option><option value="45: Object" class="ng-star-inserted"> 1.2L VXI/Petrol </option>
                                    <option value="46: Object" class="ng-star-inserted"> 1.2L VXI/CNG </option><option value="47: Object" class="ng-star-inserted"> 1.2L VXI AGS/Petrol </option>
                                    <option value="48: Object" class="ng-star-inserted"> 1.2L ZXI/Petrol </option><option value="49: Object" class="ng-star-inserted"> 1.2L ZXI/CNG </option>
                                    <option value="50: Object" class="ng-star-inserted"> 1.2L ZXI AGS/Petrol </option><option value="51: Object" class="ng-star-inserted"> 1.2L ZXI+/Petrol </option>
                                    <option value="52: Object" class="ng-star-inserted"> 1.2L ZXI+ AGS/Petrol </option>
                                    <!---->
                                </optgroup>
                                <!---->
                            </select>

                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/a112869.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI SX4 </a></h4>
                        <h5 class="listing-date">04.2007 - 04.2015 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="SX4 1ST GEN 04.2007 - 10.2009" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.6L VXI (TYPE 1,2)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.6L ZXI (TYPE 1,2)/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.6L ZXI LEATHER (TYPE 1,2)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="SX4 1ST GEN F/L 11.2009 - 02.2013" class="ng-star-inserted">
                                <option value="4: Object" class="ng-star-inserted"> 1.3L VDI (TYPE 3)/Diesel </option><option value="5: Object" class="ng-star-inserted"> 1.3L ZDI (TYPE 3)/Diesel </option>
                                <option value="6: Object" class="ng-star-inserted"> 1.3L ZDI LEATHER (TYPE 3)/Diesel </option><option value="7: Object" class="ng-star-inserted"> 1.6L VXI (TYPE 3)/Petrol </option>
                                <option value="8: Object" class="ng-star-inserted"> 1.6L VXI (TYPE 3)/CNG </option><option value="9: Object" class="ng-star-inserted"> 1.6L ZXI (TYPE 3)/Petrol </option>
                                <option value="10: Object" class="ng-star-inserted"> 1.6L ZXI (TYPE 3)/CNG </option><option value="11: Object" class="ng-star-inserted"> 1.6L ZXI LEATHER (TYPE 3)/Petrol </option>
                                <option value="12: Object" class="ng-star-inserted"> 1.6L ZXI LEATHER (TYPE 3)/CNG </option>
                                <!---->
                            </optgroup>
                            <optgroup label="SX4 2ND GEN 03.2013 - 04.2015" class="ng-star-inserted">
                                <option value="13: Object" class="ng-star-inserted"> 1.3L VDI/Diesel </option><option value="14: Object" class="ng-star-inserted"> 1.3L ZDI/Diesel </option>
                                <option value="15: Object" class="ng-star-inserted"> 1.6L VXI/Petrol </option><option value="16: Object" class="ng-star-inserted"> 1.6L VXI CNG/Petrol </option>
                                <option value="17: Object" class="ng-star-inserted"> 1.6L ZXI/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/4630464.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI VERSA </a></h4>
                        <h5 class="listing-date">01.2000 - 08.2010  </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="VERSA 01.2000 - 08.2010" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.3L DX1/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.3L DX2/Petrol </option><option value="3: Object" class="ng-star-inserted"> 1.3L SDX/Petrol </option>
                                <option value="4: Object" class="ng-star-inserted"> 1.3L STD/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/f9d563d.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI WAGON R </a></h4>
                        <h5 class="listing-date">12.1999 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="WAGON R 1ST GEN 12.1999 - 05.2006" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.1L AX (TYPE 1)/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.1L AX (TYPE 2)/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.1L LX (TYPE 1)/Petrol </option><option value="4: Object" class="ng-star-inserted"> 1.1L LX (TYPE 2)/Petrol </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.1L LXI (TYPE 1)/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.1L LXI (TYPE 2)/Petrol </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.1L VXI (TYPE 1)/Petrol </option><option value="8: Object" class="ng-star-inserted"> 1.1L VXI (TYPE 2)/Petrol </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.1L VXI ABS (TYPE 2)/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="WAGON R 1ST GEN F/L 06.2006 - 03.2010" class="ng-star-inserted">
                                <option value="10: Object" class="ng-star-inserted"> 1.1L AX/Petrol </option><option value="11: Object" class="ng-star-inserted"> 1.1L LX/Petrol </option><option value="12: Object" class="ng-star-inserted"> 1.1L LXI/Petrol </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.1L VXI/Petrol </option><option value="14: Object" class="ng-star-inserted"> 1.1L VXI ABS/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="WAGON R 2ND GEN 02.2010 - 11.2012" class="ng-star-inserted">
                                <option value="15: Object" class="ng-star-inserted"> 1.0L LX/Petrol </option><option value="16: Object" class="ng-star-inserted"> 1.0L LXI/CNG </option><option value="17: Object" class="ng-star-inserted"> 1.0L LXI/Petrol </option>
                                <option value="18: Object" class="ng-star-inserted"> 1.0L LXI LPG/Petrol </option><option value="19: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option>
                                <option value="20: Object" class="ng-star-inserted"> 1.0L VXI ABS/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="WAGON R 2ND GEN F/L 12.2012 - 11.2018" class="ng-star-inserted">
                                <option value="21: Object" class="ng-star-inserted"> 1.0L LX/Petrol </option><option value="22: Object" class="ng-star-inserted"> 1.0L LXI/Petrol </option><option value="23: Object" class="ng-star-inserted"> 1.0L LXI/CNG </option>
                                <option value="24: Object" class="ng-star-inserted"> 1.0L LXI LPG/Petrol </option><option value="25: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option>
                                <option value="26: Object" class="ng-star-inserted"> 1.0L VXI ABS/Petrol </option><option value="27: Object" class="ng-star-inserted"> 1.0L VXI AGS/Petrol </option>
                                <option value="28: Object" class="ng-star-inserted"> 1.0L VXI AGS ABS/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="WAGON R 3RD GEN 12.2018 - now" class="ng-star-inserted">
                                <option value="29: Object" class="ng-star-inserted"> 1.0L LXI/CNG </option><option value="30: Object" class="ng-star-inserted"> 1.0L LXI+ (BS-IV)/Petrol </option>
                                <option value="31: Object" class="ng-star-inserted"> 1.0L LXI+ (BS-IV)/CNG </option><option value="32: Object" class="ng-star-inserted"> 1.0L LXI+ (BS-VI)/Petrol </option>
                                <option value="33: Object" class="ng-star-inserted"> 1.0L LXI+ (BS-VI)/CNG </option><option value="34: Object" class="ng-star-inserted"> 1.0L LXI+(O)/Petrol </option>
                                <option value="35: Object" class="ng-star-inserted"> 1.0L LXI+(O) (BS-IV)/Petrol </option><option value="36: Object" class="ng-star-inserted"> 1.0L LXI+(O) (BS-IV)/CNG </option>
                                <option value="37: Object" class="ng-star-inserted"> 1.0L LXI+(O) (BS-VI)/CNG </option><option value="38: Object" class="ng-star-inserted"> 1.0L LXI+(O) (BS-VI)/Petrol </option>
                                <option value="39: Object" class="ng-star-inserted"> 1.0L TOUR/CNG </option><option value="40: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option><option value="41: Object" class="ng-star-inserted"> 1.0L VXI/CNG </option>
                                <option value="42: Object" class="ng-star-inserted"> 1.0L VXI (BS-IV)/Petrol </option><option value="43: Object" class="ng-star-inserted"> 1.0L VXI (BS-VI)/Petrol </option>
                                <option value="44: Object" class="ng-star-inserted"> 1.0L VXI AGS/Petrol </option><option value="45: Object" class="ng-star-inserted"> 1.0L VXI AGS (BS-IV)/Petrol </option>
                                <option value="46: Object" class="ng-star-inserted"> 1.0L VXI AGS (BS-VI)/Petrol </option><option value="47: Object" class="ng-star-inserted"> 1.0L VXI(O) (BS-IV)/Petrol </option>
                                <option value="48: Object" class="ng-star-inserted"> 1.0L VXI(O) (BS-VI)/Petrol </option><option value="49: Object" class="ng-star-inserted"> 1.0L VXI(O) AGS (BS-IV)/Petrol </option>
                                <option value="50: Object" class="ng-star-inserted"> 1.0L VXI(O) AGS (BS-VI)/Petrol </option><option value="51: Object" class="ng-star-inserted"> 1.2L VXI (BS-IV)/Petrol </option>
                                <option value="52: Object" class="ng-star-inserted"> 1.2L VXI (BS-VI)/Petrol </option><option value="53: Object" class="ng-star-inserted"> 1.2L VXI AGS (BS-IV)/Petrol </option>
                                <option value="54: Object" class="ng-star-inserted"> 1.2L VXI AGS (BS-VI)/Petrol </option><option value="55: Object" class="ng-star-inserted"> 1.2L VXI(O) (BS-IV)/Petrol </option>
                                <option value="56: Object" class="ng-star-inserted"> 1.2L VXI(O) (BS-VI)/Petrol </option><option value="57: Object" class="ng-star-inserted"> 1.2L VXI(O) AGS (BS-IV)/Petrol </option>
                                <option value="58: Object" class="ng-star-inserted"> 1.2L VXI(O) AGS (BS-VI)/Petrol </option><option value="59: Object" class="ng-star-inserted"> 1.2L ZXI/Petrol </option>
                                <option value="60: Object" class="ng-star-inserted"> 1.2L ZXI (BS-IV)/Petrol </option><option value="61: Object" class="ng-star-inserted"> 1.2L ZXI (BS-VI)/Petrol </option>
                                <option value="62: Object" class="ng-star-inserted"> 1.2L ZXI AGS/Petrol </option><option value="63: Object" class="ng-star-inserted"> 1.2L ZXI AGS (BS-IV)/Petrol </option>
                                <option value="64: Object" class="ng-star-inserted"> 1.2L ZXI AGS (BS-VI)/Petrol </option><option value="65: Object" class="ng-star-inserted"> 1.2L ZXI+/Petrol </option>
                                <option value="66: Object" class="ng-star-inserted"> 1.2L ZXI+ AGS/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/19f8feb.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI XL6</a></h4>
                        <h5 class="listing-date">08.2019 - now </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="XL6 1ST GEN 08.2019 - 03.2022" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.5L ALPHA/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.5L ALPHA AT/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.5L ZETA/Petrol </option><option value="4: Object" class="ng-star-inserted"> 1.5L ZETA AT/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="XL6 1ST GEN F/L 04.2022 - now" class="ng-star-inserted">
                                <option value="5: Object" class="ng-star-inserted"> 1.5L ALPHA/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.5L ALPHA AT/Petrol </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.5L ALPHA+/Petrol </option><option value="8: Object" class="ng-star-inserted"> 1.5L ALPHA+ AT/Petrol </option>
                                <option value="9: Object" class="ng-star-inserted"> 1.5L ZETA/Petrol </option><option value="10: Object" class="ng-star-inserted"> 1.5L ZETA/CNG </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.5L ZETA AT/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}


                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/07057a2.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI ZEN </a></h4>
                        <h5 class="listing-date">08.1996 - 03.2006 </h5>
                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="ZEN 1ST GEN 08.1996 - 12.2003" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.0L AT/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.0L CARBON 3DR/Petrol </option>
                                <option value="3: Object" class="ng-star-inserted"> 1.0L LX/Petrol </option><option value="4: Object" class="ng-star-inserted"> 1.0L LXI/Petrol </option>
                                <option value="5: Object" class="ng-star-inserted"> 1.0L STEEL 3DR/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.0L VX/Petrol </option>
                                <option value="7: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option><option value="8: Object" class="ng-star-inserted"> 1.5L DIESEL/Diesel </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ZEN CLASSIC 08.1999 - 01.2003" class="ng-star-inserted">
                                <option value="9: Object" class="ng-star-inserted"> 1.0L/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ZEN 2ND GEN 04.2003 - 03.2006" class="ng-star-inserted">
                                <option value="10: Object" class="ng-star-inserted"> 1.0L AT/Petrol </option><option value="11: Object" class="ng-star-inserted"> 1.0L LX/Petrol </option><option value="12: Object" class="ng-star-inserted"> 1.0L LXI/Petrol </option>
                                <option value="13: Object" class="ng-star-inserted"> 1.0L VX/Petrol </option><option value="14: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option>
                                <option value="15: Object" class="ng-star-inserted"> 1.5L DIESEL/Diesel </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-list-one week-deal-one">
                    <div class="product-block-one-image">
                        <div class="image"><img src="{{asset('frontend/images/f4d839a.webp')}}" alt="parts"></div>
                    </div>
                    <div class="product-list-one-cintent">
                        <h4 class=""><a href="#" class="listing-label">MARUTI ZEN ESTILO </a></h4>
                        <h5 class="listing-date">07.2006 - 08.2013 </h5>

                        {{-- <select class="form-control sele-opt">
                            <option value="0: null"> SELECT YOUR CAR </option>
                            <optgroup label="ZEN ESTILO 1ST GEN 07.2006 - 08.2009" class="ng-star-inserted">
                                <option value="1: Object" class="ng-star-inserted"> 1.1L LX/Petrol </option><option value="2: Object" class="ng-star-inserted"> 1.1L LXI/Petrol </option><option value="3: Object" class="ng-star-inserted"> 1.1L VXI/Petrol </option>
                                <option value="4: Object" class="ng-star-inserted"> 1.1L VXI ABS/Petrol </option>
                                <!---->
                            </optgroup>
                            <optgroup label="ZEN ESTILO 1ST GEN F/L 09.2009 - 08.2013" class="ng-star-inserted">
                                <option value="5: Object" class="ng-star-inserted"> 1.0L LX/Petrol </option><option value="6: Object" class="ng-star-inserted"> 1.0L LX/CNG </option><option value="7: Object" class="ng-star-inserted"> 1.0L LXI/Petrol </option>
                                <option value="8: Object" class="ng-star-inserted"> 1.0L LXI/CNG </option><option value="9: Object" class="ng-star-inserted"> 1.0L VXI/Petrol </option><option value="10: Object" class="ng-star-inserted"> 1.0L VXI/CNG </option>
                                <option value="11: Object" class="ng-star-inserted"> 1.0L VXI ABS/Petrol </option>
                                <!---->
                            </optgroup>
                            <!---->
                        </select> --}}

                    </div>
                </div>
            </div>


        </div>


    </div>
</section>


<section class="">
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
