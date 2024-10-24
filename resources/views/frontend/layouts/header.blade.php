<div class="header bg-light">
    <div class="header-top">
        <div class="container">
            <div class="wrapper-box">
                <div class="left-column">
                    <ul class="contact-info">
                        <li><a href="#0">About Us </a></li>
                        <li><a href="#0">My account</a></li>
                        <li><a href="#0">Order Tracking</a></li>
                        <li><a href="#0">Wishlist</a></li>
                        <li><a href="" data-toggle="modal" data-target="#login">Login</a></li>
                    </ul>
                </div>
                <div class="right-column">
                    <div class="help-info">
                        Need help? <span> Call us: </span> <a href="tel:+8001234567890" class="help-info-number">
                            (+800) 1234 5678 90</a> <span> or </span> <a href="mailto:info@company.com">
                            info@company.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark"> -->

<nav class="navbar navbar-expand-lg navbar-light  sticky-top  justify-content-center">
    <div class="container">
        <a class="navbar-brand" href=""><img src="{{asset('frontend/images/logo.png')}}" class="img-fluid"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BLOG</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>

            <div>
                <ul class="header-action-icon">
                    <li>
                        <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                            <i class="far fa-heart"></i>
                            <span class="header-action-icon-item-count">3</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('my-cart') }}" class="offcanvas-toggle">
                            <i class="fas fa-cart-arrow-down"></i>
                            <span class="header-action-icon-item-count">3</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>