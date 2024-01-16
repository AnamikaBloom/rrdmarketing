<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title> RRD 369 Marketing </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('header_front_end/assets/images/logo/logo.png') }}">
    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/glightbox.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,800;0,700;0,800;0,1200;1,300;1,400;1,500;1,800;1,700;1,800;1,1200&amp;display=swap"
        rel="stylesheet">
    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <link rel="icon" type="image/png" href="{{ asset('header_front_end/assets/images/logo/logo.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Style CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('header_front_end/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('header_front_end/assets/css/lastudioicon.css')}}" />
    <link rel="stylesheet" href="{{asset('header_front_end/assets/css/dlicon.css')}}" />

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('header_front_end/assets/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('header_front_end/assets/css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('header_front_end/assets/css/nice-select2.css')}}" />
    <link rel="stylesheet" href="{{asset('header_front_end/assets/css/style.min.css')}}" />

    <style>


        .card {
            position: relative;
            max-width: 300px;
            height: auto;
            background-color: #095ACF;
            border-radius: 15px;
            margin: 0 auto;
            padding: 40px 20px;
            -+webkit-box-shadow: 0 10px 15px rgba(0, 0, 0, .1);
            box-shadow: 0 10px 15px rgba(0, 0, 0, .1);
            -webkit-transition: .5s;
            transition: .5s;
        }

        .card:hover {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .col-sm-4:nth-child(1) .card,
        .col-sm-4:nth-child(1) .card .title .fa {
            background-color: #095ACF;
        }

        .col-sm-4:nth-child(2) .card,
        .col-sm-4:nth-child(2) .card .title .fa {
            background-color: #095ACF;

        }

        .col-sm-4:nth-child(3) .card,
        .col-sm-4:nth-child(3) .card .title .fa {
            background-color: #095ACF;

        }

        .card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background: rgba(255, 255, 255, .1);
            z-index: 1;
            -webkit-transform: skewY(-5deg) scale(1.5);
            transform: skewY(-5deg) scale(1.5);
        }

        .title .fa {
            color: #fff;
            font-size: 60px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            text-align: center;
            line-height: 100px;
            -webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
            box-shadow: 0 10px 10px rgba(0, 0, 0, .1);

        }

        .title h2 {
            position: relative;
            margin: 20px 0 0;
            padding: 0;
            color: #fff;
            font-size: 28px;
            z-index: 2;
        }

        .price,
        .option {
            position: relative;
            z-index: 2;
        }

        .price h4 {
            margin: 0;
            padding: 20px 0;
            color: #fff;
            font-size: 60px;
        }

        .option ul {
            margin: 0;
            padding: 0;

        }

        .option ul li {
            margin: 0 0 10px;
            padding: 0;
            list-style: none;
            color: #fff;
            font-size: 16px;
        }

        .card a {
            position: relative;
            z-index: 2;
            background: #fff;
            color: black;
            width: 150px;
            height: 40px;
            line-height: 40px;
            border-radius: 40px;
            display: block;
            text-align: center;
            margin: 20px auto 0;
            font-size: 16px;
            cursor: pointer;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);

        }

        .card a:hover {
            text-decoration: none;
        }
        .modal-backdrop{
            display: none !important;
        }
        /* .d-none {
            display: none!important;
        }
        @media (min-width: 1200px)
        {
            .d-xl-none {
                display: none!important;
            }
            .d-xl-block {
                display: block!important;
            }
        }
        @media only screen and (max-width: 1199px){
            .d-xl-none {
                display: none;
            }
        } */
    </style>

</head>

<body>

   


    <!-- Header Start -->
    <header class="header bg-white header-height">
        <!-- Header Top Start -->
        <div class="header-2__top">
            <div class="container-fluid custom-container">
                <div class="header-2__top--wrapper">
                    <div class="header-2__top--left d-none d-md-block">
                        <ul class="header-2__top--items">
                            <li>
                                <a href="mailto:info.expmale@mail.com">
                                    <i class="lastudioicon-mail-2"></i>
                                    <span>info.expmale@mail.com</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+(867)195-6696">
                                    <i class="lastudioicon-phone-call"></i>
                                    <span>(867)195-6696</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-2__top--right">
                        @if(Auth::check()==false)
                        <ul class="header-2__top--items">
                            <li>
                                <a href="{{url('login')}}">
                                    <i class="lastudioicon-single-01-1"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('register')}}">
                                    <i class="lastudioicon-single-01-1"></i>
                                    <span>Register</span>
                                </a>
                            </li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Main Start -->
        <div class="header__main header-shadow d-flex align-items-center">
            <div class="container-fluid custom-container">
                <div class="row align-items-center position-relative">
                    <div class="col-md-4 col-3 d-xl-none">
                        <button class="header__main--toggle header__main--toggle-dark" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" type="button">
                            <i class="lastudioicon-menu-8-1"></i>
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <div class="header__main--logo text-center text-xl-start">
                            <a href="{{url('/')}}">
                                <img src="{{asset('header_front_end')}}/assets/images/logo/logo.png" alt="Logo" width="110" height="32" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="header__main--menu">
                            <nav class="navbar-menu">
                                <!-- Menu Item List Start -->
                                <ul class="menu-items-list menu-items-list--dark d-flex justify-content-center">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('package-list')}}">Packages</a></li>
                                    <li><a href="{{url('aboutus')}}">About us</a></li>
                                    <li><a href="{{url('our-service')}}">Services</a></li>
                                    <li><a href="{{url('products')}}">Products</a></li>
                                    <li><a href="{{url('cotactus')}}">Contact us</a></li>
                                </ul>
                                <!-- Menu Item List End -->
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <div class="header__main--meta header__main--dark d-flex justify-content-end align-items-center">
                            <!-- Meta Item List Start -->
                            <ul class="meta-items-list meta-items-list--dark d-flex justify-content-end align-items-center">
                                <li class="search d-none d-lg-block">
                                    <form action="#">
                                        <div class="meta-search meta-search--dark">
                                            <input type="text" placeholder="Search products…" />
                                            <button type="button" aria-label="Zoom">
                                                <i class="lastudioicon-zoom-1"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                                <li class="cart">
                                    <a href="{{url('cart')}}">
                                        <i class="lastudioicon-shopping-cart-1"></i>
                                        <span class="badge">03</span>
                                    </a>
                                    <!-- <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" type="button">
                                        <i class="lastudioicon-shopping-cart-1"></i>
                                        <span class="badge">03</span>
                                    </button> -->
                                </li>
                            </ul>
                            <button class="toggle-icon d-none d-xl-block" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" type="button" aria-label="menu">
                                <span class="bar-icon">
                                <i class="lastudioicon-menu-8-1"></i>
                            </span>
                            </button>
                            <!-- Meta Item List Start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Main End -->
    </header>

    <!-- Header End -->

    <!-- Cart Sidebar Start -->
    <!-- Cart Offcanvas Start -->
    <div class="offcanvas offcanvas-end cart-offcanvas" id="cartSidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">My Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="remove">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas-cart-list">
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="{{asset('header_front_end')}}/assets/images/products/product-13.jpg" alt="product" width="70" height="84" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Lace Body </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × $69.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="Remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="{{asset('header_front_end')}}/assets/images/products/product-14.jpg" alt="product" width="70" height="84" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Herringbone double-breasted </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × $89.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="{{asset('header_front_end')}}/assets/images/products/product-17.jpg" alt="product" width="70" height="84" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Floral jacquard mini dress </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × $35.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer">
            <!-- Free Shipping Goal Start-->
            <div class="free-shipping-goal">
                <div class="free-shipping-goal__label text-center">
                    Buy $3.03 more to enjoy
                    <strong>FREE Shipping</strong>
                </div>
                <div class="free-shipping-goal__loading-bar">
                    <div class="load-percent" style="width: 98.49%"></div>
                </div>
            </div>
            <!-- Free Shipping Goal End-->

            <!-- Cart Meta Start-->
            <ul class="cart-meta">
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="m9.5 2.5 3 3M1.5 10.5l3 3M11.5.5l3 3-10 10-4 1 1-4Z"></path>
                            </g>
                        </svg>
                        <span>Note</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.313" height="16" viewBox="0 0 15.313 16">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m.656 3.5 7 3 7-3M7.656 15.5v-9"></path>
                                <path d="m.656 12.5 7 3 7-3v-9l-7-3-7 3Z"></path>
                            </g>
                        </svg>
                        <span>Shipping</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="M5.5 4.5h5M5.5 9.5h5M13.5 7.5a2 2 0 0 1 2-2v-4a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1V5a2 2 0 0 1 0 4v3.5a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-3a2 2 0 0 1-2-2Z"></path>
                            </g>
                        </svg>
                        <span>Coupon</span>
                    </a>
                </li>
            </ul>
            <!-- Cart Meta End-->

            <!-- Cart Totals Table Start-->
            <div class="cart-totals-table">
                <table class="table">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td>
                                <span>$195.97</span>
                            </td>
                        </tr>

                        <tr class="cart-shipping-totals">
                            <th>Shipping</th>
                            <td>
                                <ul class="shipping-methods">
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="flat-rate" />
                                        <label for="flat-rate" class="single-form__label radio-label">
                                            <span></span>
                                            Flat rate:
                                            <strong class="price">$20.00</strong>
                                        </label>
                                    </li>
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="local-pickup" />
                                        <label for="local-pickup" class="single-form__label radio-label">
                                            <span></span>
                                            Local pickup</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total">
                                <strong><span>$215.97</span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Cart Totals Table End-->

            <!-- Cart Buttons End-->
            <div class="cart-buttons">
                <a href="#" class="cart-buttons__btn-1 btn">Checkout</a>
                <a href="#" class="cart-buttons__btn-2 btn">View Cart</a>
            </div>
            <!-- Cart Buttons End-->
        </div>
    </div>
    <!-- Cart Offcanvas End -->

    <!-- Cart Sidebar End -->

    <!-- Search Start -->
    <div class="search-modal modal fade" id="SearchModal">
        <!-- Search Close Start -->
        <button type="button" class="search-modal__close" data-bs-dismiss="modal" aria-label="close">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <!-- Search Close End  -->

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Search Form Start  -->
                <div class="search-modal__form">
                    <form action="#">
                        <input type="text" placeholder="Search product…" />
                        <button class="" type="button" aria-label="Zoom">
                            <i class="lastudioicon-zoom-1"></i>
                        </button>
                    </form>
                </div>
                <!-- Search Form End  -->
            </div>
        </div>
    </div>

    <!-- Search End -->

    <!-- Offcanvas Menu Start -->
    <div class="offcanvas offcanvas-end offcanvas-sidebar" tabindex="-1" id="offcanvasSidebar">
        <button type="button" class="offcanvas-sidebar__close" data-bs-dismiss="offcanvas" aria-label="remove">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <div class="offcanvas-body">
            <!-- Off Canvas Sidebar Menu Start -->
            <div class="offcanvas-sidebar__menu">
                <ul class="offcanvas-menu-list">
                    @if(Auth::check())
                    <li><a href="{{url('user/dashboard')}}">My Profile</a></li>
                    <li><a href="{{url('cart')}}">My Carts</a></li>
                    <li><a href="{{url('user/logout')}}">Logout</a></li>
                    @else
                    <li><a href="{{url('login')}}">Login</a></li>
                    <li><a href="{{url('register')}}">Register</a></li>
                    @endif
                </ul>
            </div>
           
       
        </div>
    </div>

    <!-- Offcanvas Menu End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
        <!-- offcanvas-header Start -->
        <div class="offcanvas-header">
            <button type="button" class="mobile-menu__close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <!-- offcanvas-header End -->

        <!-- offcanvas-body Start -->
        <div class="offcanvas-body">
            <nav class="navbar-mobile-menu">
                <ul class="mobile-menu-items">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('aboutus')}}">About us</a></li>
                    <li><a href="{{url('our-service')}}">Services</a></li>
                    <li><a href="{{url('products')}}">Products</a></li>
                    <li><a href="{{url('cotactus')}}">Contact us</a></li>
                    @if(Auth::check())
                    <li><a href="{{url('user/dashboard')}}">My Profile</a></li>
                    <li><a href="{{url('cart')}}">My Carts</a></li>
                    <li><a href="{{url('user/logout')}}">Logout</a></li>
                    @else
                    <li><a href="{{url('login')}}">Login</a></li>
                    <li><a href="{{url('register')}}">Register</a></li>
                    @endif
                </ul>
            </nav>
        </div>
        <!-- offcanvas-body end -->
    </div>

    <!-- Mobile Menu End -->

    <!-- Mobile Meta Start -->
    <div class="mobile-meta d-md-none">
        <ul class="mobile-meta-items">
            <li>
                <button type="button" data-bs-toggle="modal" data-bs-target="#SearchModal" aria-label="Zoom">
                    <i class="lastudioicon-zoom-1"></i>
                </button>
            </li>
            <li>
                <a href="wishlist.html">
                    <i class="lastudioicon-heart-1"></i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <a href="compare.html">
                    <i class="lastudioicon-ic_compare_arrows_24px"> </i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <a href="{{url('cart')}}">
                    <i class="lastudioicon-shopping-cart-1"></i>
                    <span class="badge">03</span>
                </a>
                <!-- <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" type="button">
                    <i class="lastudioicon-shopping-cart-1"></i>
                    <span class="badge">03</span>
                </button> -->
            </li>
        </ul>
    </div>

    <!-- Mobile Meta End -->





    <!-- Header Area Start  -->
    {{--<header class="header__section">
        <div class="header__topbar bg__secondary">
            <div class="container-fluid">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <div class="header__shipping">
                        <ul class="header__shipping--wrapper d-flex">
                            <li class="header__shipping--text text-white">
                                Welcome to RRD 369 Marketing
                            </li>
                            <li class="header__shipping--text text-white d-sm-2-none">
                                <img class="header__shipping--text__icon"
                                    src="{{ asset('frontend/assets/img/icon/email.png') }}" alt="email-icon">

                                info@RRD369Marketing.in

                            </li>
                        </ul>
                    </div>
                    <div class="language__currency d-none d-lg-block">
                        <ul class="d-flex align-items-center">

                            @if (!Auth::guard('web')->user())
                                <li class="language__currency--list">
                                    <a class="language__switcher text-white" href="{{ route('login') }}">
                                        <button type="button" class="btn btn-lg btn-warning"> Login </button>
                                    </a>
                                </li>
                                <li class="language__currency--list">
                                    <a class="language__switcher text-white" href="{{ route('register') }}">
                                        <button type="button" class="btn btn-lg btn-warning"> Register </button>
                                    </a>
                                </li>
                            @else
                                <li class="language__currency--list">
                                    <a class="account__currency--link text-white" href="{{ route('index') }}">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>My Account</span>
                                    </a>
                                    <div class="dropdown__currency">
                                        <ul>

                                            <li class="currency__items"><a class="currency__text"
                                                    href="{{ route('index') }}">My Profile</a></li>
                                            <li class="currency__items"><a class="currency__text"
                                                    href="{{ route('cart') }}">My Carts</a></li>
                                            <li class="currency__items"><a class="currency__text"
                                                    href="{{ route('user.logout') }}">Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sticky Header Start -->
        <div class="main__header header__sticky">
            <div class="container-fluid">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32" d="M80 180h352M80 258h352M80 352h352" />
                            </svg>
                            <span class="visually-hidden">Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title">
                            <a class="main__logo--link" href="{{ route('home') }}">
                                <img class="main__logo--img" src="{{ asset('header_front_end/assets/images/logo/logo.png') }}"
                                    alt="logo-img">
                            </a>
                        </h1>
                    </div>
                    <div class="header__search--widget header__sticky--none d-none d-lg-block">
                        <form action="{{ route('search-product') }}" method="post">
                            @csrf
                            @if (Session::has('status'))
                                <div class="alert alert-danger" style="color: black;">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    {!! Session::get('status') !!}
                                </div>
                            @endif
                            <div class="header__search--box">

                                <label>
                                    <input type="search" id="search_product" name="product_name"
                                        class="header__search--input" required placeholder="Search here...">
                                </label>
                                <button type="submit" class="header__search--button bg__secondary text-white"
                                    aria-label="search button">
                                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg"
                                        width="27.51" height="28.443" viewBox="0 0 512 512">
                                        <path
                                            d="M221.012 84a157.012 157.012 0 10157.012 157.012A157.1 157.1 0 00221.012 84z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32"></path>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="32" d="M338.212 338.212L448 448">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="header__account header__sticky--none">
                        <a class="primary__btn" href="{{ route('contactus') }}">ENQUIRE NOW
                            <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2"
                                height="12.2" viewBox="0 0 8.2 8.2">
                                <path
                                    d="M7.1,4l-.548.548L8.718,8.713H4v.775H8.718L8.554,12.854,7.1,10.2,12.233,8.087,10.2,7.1Z"
                                    transform="translate(-4 -4)" fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="header__menu d-none header__sticky--block d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('home') }}">Home </a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('aboutus') }}"> About us </a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('our-service') }}"> Our Services
                                    </a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="{{ route('web-products') }}">
                                        Our Products</a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('blog') }}"> Blog </a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('contactus') }}"> Contact us </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
        <!-- Sticky Header End -->
        <!--- Web Menu Start -->
        <div class="header__bottom">
            <div class="container-fluid">
                <div
                    class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
                    <div class="header__menu">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('home') }}">Home </a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('aboutus') }}"> About us </a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('our-service') }}"> Our Services
                                    </a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="{{ route('web-products') }}">
                                        Our Products</a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('blog') }}"> Blog </a>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link " href="{{ route('contactus') }}"> Contact us </a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                    <p class="header__discount--text">
                        <img class="header__discount--icon__img"
                            src="{{ asset('frontend/assets/img/icon/lamp.png') }}" alt="lamp-img">
                        <b>WELCOME TO RRD 369 Marketing</b>

                    </p>
                </div>
            </div>
        </div>
        <!--- Web Menu End -->
        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="{{ '/' }}">
                        <img src="{{ asset('frontend/assets/img/logo/85.jpg') }}" alt="Grocee Logo" width="158"
                            height="38">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ route('aboutus') }}">
                                About us
                            </a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ route('our-service') }}">
                                Our Services
                            </a>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ route('web-products') }}">Our Products</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ route('contactus') }}">
                                Contact us
                            </a>
                        </li>
                    </ul>
                    <div class="offcanvas__account--items">
                        <a class="offcanvas__account--items__btn d-flex align-items-center"
                            href="{{ route('login') }}">
                            <span class="offcanvas__account--items__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="112.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M344 144c-3.122 52.87-44 128-88 128s-84.15-43.12-88-128c-4-55 35-128 88-128s122 42 88 128z"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32" />
                                    <path
                                        d="M258 304c-87 0-175.3 48-1121.84 138.8C82.312 453.52 88.57 484 80 484h352c11.44 0 17.82-10.48 15.85-21.4C431.3 352 343 304 258 304z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                        stroke-width="32" />
                                </svg>
                            </span>
                            <span class="offcanvas__account--items__label">Login </span>
                        </a>
                    </div>
                    <div class="language__currency">
                        <ul class="d-flex align-items-center">
                            <li class="language__currency--list">
                                <a class="offcanvas__account--currency__menu" href="#">
                                    <img src="{{ asset('frontend/assets/img/icon/usd-icon.png') }}" alt="currency">
                                    <span>My Account</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.7127" height="12.05"
                                        viewBox="0 0 12.7127 8.05">
                                        <path d="M14.848,8.512,10.12,12.3212,7.151,8.512,8,12.741l4.12,4.12,4.12-4.12Z"
                                            transform="translate(-8 -8.512)" fill="currentColor" opacity="0.7" />
                                    </svg>
                                </a>
                                <div class="offcanvas__account--currency__submenu">
                                    <ul>
                                        <li class="currency__items">
                                            <a class="currency__text" href="{{ route('index') }}">
                                                My Profile
                                            </a>
                                        </li>
                                        <li class="currency__items">
                                            <a class="currency__text" href="{{ route('user.logout') }}">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->



        <!-- Start offCanvas minicart -->

        <!-- End offCanvas minicart -->

        <!-- Start serch box area -->
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" id="search_product" placeholder="" type="text">
                    </label>
                    <button class="predictive__search--button" aria-label="search button" type="submit"><svg
                            class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                            height="25.443" viewBox="0 0 512 512">
                            <path d="M221.012 84a157.012 157.012 0 10157.012 157.012A157.1 157.1 0 00221.012 84z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                stroke-width="32" d="M338.212 338.212L448 448" />
                        </svg> </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                    height="30.443" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M388 388L144 144M388 144L144 388" />
                </svg>
            </button>
        </div>
        <!-- End serch box area -->

    </header>--}}
    <!-- End header area -->


    @yield('content')


<!-- Footer Start -->
<footer class="footer-section-3" style="border-top: 1px solid #e5dede;background-color: #f7f7f7;">
        <div class="container-fluid custom-container">
            <!-- Footer Main Start -->
            <div class="footer-main align-items-center">
                <div class="footer-col-1">
                    <!-- Footer About Start -->
                    <div class="footer-about text-xxl-start text-center ms-xxl-0 mx-auto">
                        <a class="logo" href="#">
                            <img src="{{asset('header_front_end')}}/assets/images/logo/logo.png" alt="Logo" width="110" height="32" loading="lazy" />
                        </a>
                        <h2>RRD 369 Marketing</h2>
                    </div>
                    <!-- Footer About End -->
                </div>

                <div class="footer-col-1">
                    <!-- Footer Link Start -->
                    <div class="container-fluid">
            <div class="main__footer row d-flex justify-content-between">
                <div class="footer__widget footer__widget--width col-md-3 col-lg-3">
                    <h2 class="footer__widget--title text-ofwhite h3">
                        About Us
                        <button class="footer__widget--button" aria-label="footer widget button">
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.3124" viewBox="0 0 10.355 8.3124">
                                <path d="M15.138,8.512l-3.1281,3.1252L7.217,8.512,8,12.807l5.178,5.178,5.178-5.178Z" transform="translate(-8 -8.512)" fill="currentColor"></path>
                            </svg>
                        </button>
                    </h2>
                    <?php
                    $about = \App\Models\AboutUs::where('status', 'active')->first();
                    ?>
                    <div class="footer__widget--inner ">

                        <p class="footer__widget--desc text-ofwhite mb-20">
                            {{ $about->short_content??"-" }}
                        </p>


                    </div>
                </div>
                <div class="footer__widget--menu__wrapper d-flex footer__widget--width col-md-3 col-lg-3">

                    <div class="footer__widget">
                        <h2 class="footer__widget--title text-ofwhite h3">
                            Quick Links
                            <button class="footer__widget--button" aria-label="footer widget button">
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.3124" viewBox="0 0 10.355 8.3124">
                                    <path d="M15.138,8.512l-3.1281,3.1252L7.217,8.512,8,12.807l5.178,5.178,5.178-5.178Z" transform="translate(-8 -8.512)" fill="currentColor"></path>
                                </svg>
                            </button>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/')}}">
                                    Home
                                </a>
                            </li>

                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/')}}/aboutus">
                                    About us
                                </a>
                            </li>

                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/')}}/cotactus">
                                    Contact us
                                </a>
                            </li>

                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="{{url('/')}}/faq">
                                    FAQ
                                </a>
                            </li>



                        </ul>
                    </div>
                </div>


                <div class="footer__widget footer__widget--width col-md-3 col-lg-3">
                    <h2 class="footer__widget--title text-ofwhite h3">
                        Quick Links
                        <button class="footer__widget--button" aria-label="footer widget button">
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.3124" viewBox="0 0 10.355 8.3124">
                                <path d="M15.138,8.512l-3.1281,3.1252L7.217,8.512,8,12.807l5.178,5.178,5.178-5.178Z" transform="translate(-8 -8.512)" fill="currentColor"></path>
                            </svg>
                        </button>
                    </h2>

                    <ul class="footer__widget--menu footer__widget--inner">
                        <li class="footer__widget--menu__list">
                            <a class="footer__widget--menu__text" href="{{url('/')}}/products">
                                Our Products
                            </a>
                        </li>


                  <li class="footer__widget--menu__list">
                     <a class="footer__widget--menu__text" href="{{url('/')}}/grievance-redressals">
                        Grievance Redressals
                     </a>
                     </li>

                        <li class="footer__widget--menu__list">
                            <a class="footer__widget--menu__text" href="{{url('/')}}/privacy-policy">
                                Privacy Policy
                            </a>
                        </li>

                        <li class="footer__widget--menu__list">
                            <a class="footer__widget--menu__text" href="{{url('/')}}/terms-and-conditions">
                                Terms and Conditions
                            </a>
                        </li>

                        <li class="footer__widget--menu__list">
                            <a class="footer__widget--menu__text" href="{{url('/')}}/refund-policy">
                              Refund and Cancelled Policy
                            </a>
                            </li>

                    </ul>
                </div>


                <div class="footer__widget footer__widget--width col-md-3 col-lg-3">
                    <h2 class="footer__widget--title text-ofwhite h3">
                        Contact Details
                        <button class="footer__widget--button" aria-label="footer widget button">
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.3124" viewBox="0 0 10.355 8.3124">
                                <path d="M15.138,8.512l-3.1281,3.1252L7.217,8.512,8,12.807l5.178,5.178,5.178-5.178Z" transform="translate(-8 -8.512)" fill="currentColor"></path>
                            </svg>
                        </button>
                    </h2>
                    <div class="footer__widget--inner">

                        

                        <p class="footer__widget--desc text-ofwhite m-0">
                            <i class="fa fa-envelope fa-lg" aria-hidden="true"></i> :

                            info@RRD369Marketing.in
                        </p>

                        <p class="footer__widget--desc text-ofwhite m-0">
                            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> :

					   RRD 369 Marketing<br>
                       #Write Your Company Address Here 
					 </p>


                        <ul class="social-linkss  clearfix" style="padding-top:8px;">
                            <h3 class="social__title text-ofwhite h4 mb-15">Follow Us</h3>
                            <a href="" target="_blank">
                                <img src="https://convertkit.com/images/social-icons/facebook.png" alt="Facebook" style="text-decoration: none; width: 30px;"></a>

                            <a href="" target="_blank">
                                <img src="https://convertkit.com/images/social-icons/twitter.png" alt="Twitter" style="text-decoration: none; width: 30px;"></a>

                            <a href="" target="_blank">
                                <img src="https://convertkit.com/images/social-icons/instagram.png" alt="Instagram" style="text-decoration: none; width: 30px;"></a>

                            <a href="" target="_blank">
                                <img src="https://convertkit.com/images/social-icons/youtube_alt.png" alt="YouTube" style="text-decoration: none; width: 30px;"></a>



                            <a href="" target="_blank">
                                <img src="https://convertkit.com/images/social-icons/pinterest.png" alt="linkedin" style="text-decoration: none; width: 30px;">
                            </a>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="footer__bottom text-center">
                <p class="copyright__content text-ofwhite m-0">
                    Copyright © 2023 RRD 369 Marketing
                </p>


            </div>
        </div>
                    <!-- Footer Link End -->
                </div>


            </div>
            <!-- Footer Main End -->

        </div>
    </footer>

    <!-- Footer End -->

    <button id="scroll__top">
        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="48" d="M112 244l144-144 144 144M258 120v2122" />
        </svg>
    </button>
    <!-- All Script JS Plugins here  -->
    <script src="{{ asset('frontend/assets/js/vendor/popper.js') }}" defer="defer"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
    <script src="{{ asset('frontend/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/glightbox.min.js') }}"></script>
    <!-- Customscript js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

    <script src="{{asset('user/assets/js/jquery.min.js')}}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        var availableTags = [];
        $.ajax({

            method: "get",
            url: "{{ route('product-list') }}",
            success: function(response) {
                //console.log(response);
                AutoComplete(response);
            }
        });

        function AutoComplete(availableTags) {

            $("#search_product").autocomplete({
                source: availableTags
            });
        }
    </script>

    <script type="text/javascript">
        $(function() {
            var $clientslider = $('#clientlogo');
            var clients = $clientslider.children().length;
            var clientwidth = (clients * 220);
            $clientslider.css('width', clientwidth);
            var rotating = true;
            var clientspeed = 1800;
            var seeclients = setInterval(rotateClients, clientspeed);
            $(document).on({
                mouseenter: function() {
                    rotating = false;
                },
                mouseleave: function() {
                    rotating = true;
                }
            }, '#ourclients');

            function rotateClients() {
                if (rotating != false) {
                    var $first = $('#clientlogo li:first');
                    $first.animate({
                        'margin-left': '-220px'
                    }, 2000, function() {
                        $first.remove().css({
                            'margin-left': '0px'
                        });
                        $('#clientlogo li:last').after($first);
                    });
                }
            }
        });
    </script>
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script type="text/javascript">
        function addToCart(product_id, pno = 1) {
            var qty = $('#quantity').val();
            var color = $("input[name='color']:checked").val();
            var size = $("input[name='size']:checked").val();
            // alert([color,size])
            if (qty > 1) {
                pno = qty;
            }
            $.ajax({
                url: "{{ route('add-to-cart') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    "product_id": product_id,
                    "pno": pno,
                    "color": color,
                    "size": size,
                },
                // dataType: "json",
                success: function(response) {
                    $(".mini_cart_wrapper").html(response.data);
                    var resp = 'success';
                    if(response.status==false){
                        var resp = 'error';
                    }else{
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                    Swal.fire({
                        position: 'top-end',
                        icon: resp,
                        title: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            });
        }


        function productDecreaseCounter(cart_id) {
            base_url = "{{ url('/dec/') }}";
            session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + session_id;

        }

        function productIncreaseCounter(cart_id) {
            base_url = "{{ url('/inc/') }}";
            session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + session_id;

        }

        function productDecreaseCounterAuth(cart_id, User_id) {
            base_url = "{{ url('/dec/') }}";
            // session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + User_id;

        }

        function productIncreaseCounterAuth(cart_id, User_id) {
            base_url = "{{ url('/inc/') }}";
            // session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + User_id;

        }

        function clearCartAuth(User_id) {
            base_url = "{{ url('/cart-clear/') }}";
            location.href = base_url + '/session_id/' + User_id;

        }

        function clearCart() {
            base_url = "{{ url('/cart-clear/') }}";
            session_id = "{{ Session::getId() }}";
            location.href = base_url + '/session_id/' + session_id;

        }
    </script>
  



<!-- Start Front-end Header UI Scrict -->
    <!-- Bootstrap JS -->
    <script src="{{asset('header_front_end')}}/assets/js/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{asset('header_front_end')}}/assets/js/swiper-bundle.min.js"></script>
    <script src="{{asset('header_front_end')}}/assets/js/masonry.pkgd.min.js"></script>
    <script src="{{asset('header_front_end')}}/assets/js/glightbox.min.js"></script>
    <script src="{{asset('header_front_end')}}/assets/js/nice-select2.js"></script>

    <!-- Activation JS -->
    <script src="{{asset('header_front_end')}}/assets/js/main.js"></script>
<!-- End Front-end Header UI Scrict -->



    @yield('script')
</body>

</html>
