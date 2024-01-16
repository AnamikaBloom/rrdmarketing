@extends('layouts.app')

@section('content')
    <!-- HOME SLIDER -->

    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    @php
                        $num_list = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
                    @endphp
                    @foreach ($banners as $key => $banner)
                        <div class="swiper-slide ">
                            <div class="hero__slider--items" style="position: relative;">
                                <img src="{{asset('storage/banner/' . $banner->image) }}" alt="">
                                <div class="container">
                                    <table style="width: 100%;height: 100%;position: absolute;top:0px;">
                                        <tr><td style="width: 100%;height: 100%;">
                                        
                                        <div class="slider__content" style="min-height: 200px;">
                                                <br/>
                                                    <p class="slider__content--desc desc1 mb-15" style="color: #fff;">
                                                        <img class="slider__text--shape__icon"
                                                            src="{{ asset('frontend/assets/img/icon/text-shape-icon.png') }}"
                                                            alt="text-shape-icon"> New Services</p>
                                                    <h2 class="slider__content--maintitle h1">{{$banner->title}}</h2>
                                                    <br/>
                                                    <a class="primary__btn slider__btn"
                                                        href="{{ route('our-service') }}">New Services
                                                    </a>
                                                </div>

                                        </td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
        </section>
        <!-- End slider section -->
        <!-- Brief disctiption of company start-->


        <!-- Start about section -->
        <section class="about__section section--padding mb-95">
            <div class="container">
                @if ($about)
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about__thumb d-flex">
                                <!--<div class="about__thumb--items">-->
                                <img src="{{ asset('storage/aboutus/' . $about->image) }}" alt="about-thumb">
                                <!--</div>-->
                                <div class="about__thumb--items position__relative">
                                    <!--<img class="about__thumb--img border-radius-5 display-block" src="assets/img/other/about-thumb-list2.png" alt="about-thumb">-->
                                    <div class="banner__bideo--play about__thumb--play">

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about__content">
                                <!--<span class="about__content--subtitle text__secondary mb-20">About RRD 369 Marketing</span>-->
                                <h2 class="about__content--maintitle mb-20">{{ $about->heading }}</h2>
                                <p class="about__content--desc mb-20">{!! $about->content !!}</p>
                                {{-- <p class="about__content--desc mb-20">Itaque accusantium eveniet a laboriosam dolorem? Magni suscipit est corrupti explicabo non perspiciatis, excepturi ut asperiores assumenda rerum? Provident ab corrupti sequi, voluptates repudiandae eius odit aut.</p> --}}

                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- End about section -->

      
        <!-- End banner section -->
        <img src="{{ asset('frontend/assets/img/banner/m2-s-3.jpg') }}" alt="banner-img"> <br><br><br>
        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-35">
                    <h2 class="section__heading--maintitle">New Products</h2>
                    @if (Session::has('flash_success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                            {!! Session::get('flash_success') !!}
                        </div>
                    @endif


                </div>
                <ul class="product__tab--one product__tab--primary__btn d-flex justify-content-center mb-50">
                    <li class="product__tab--primary__btn__list active" data-toggle="tab" data-target="#featured">
                        Featured </li>
                    <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#trending">Trending </li>
                    <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#newarrival">New Arrival
                    </li>
                </ul>
                <div class="tab_content">
                    <div id="featured" class="tab_pane active show">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                @foreach ($featuredproducts as $featuredproduct)
                                    <div class="col mb-30">
                                        <div class="product__items ">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link"
                                                    href="{{ route('product-details', [$featuredproduct->slug]) }}">
                                                    <img class="product__items--img product__primary--img"
                                                        src="{{ asset('storage/product/' . @$featuredproduct->single_image->image) }}"
                                                        alt="product-img">
                                                    <img class="product__items--img product__secondary--img"
                                                        src="{{ asset('storage/product/' . @$featuredproduct->single_image->image) }}"
                                                        alt="product-img">
                                                </a>

                                            </div>
                                            <div class="product__items--content">
                                                <h3 class="product__items--content__title h4"><a
                                                        href="{{ route('product-details', [$featuredproduct->slug]) }}">{{ $featuredproduct->name }}</a>
                                                </h3>
                                                <div class="product__items--price">

                                                     <a id="product_id"onclick="addToCart({{ $featuredproduct->id }})" href="javascript:void(0)"><button class="quickview__cart--btn primary__btn" type="submit">Add To Cart</a></button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="trending" class="tab_pane">
                        <div class="product__section--inner">

                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                @foreach ($bestproducts as $bestproduct)
                                    <div class="col mb-30">
                                        <div class="product__items ">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link"
                                                    href="{{ route('product-details', [$bestproduct->slug]) }}">
                                                    <img class="product__items--img product__primary--img"
                                                        src="{{ asset('storage/product/' . @$bestproduct->single_image->image) }}"
                                                        alt="product-img">
                                                    <img class="product__items--img product__secondary--img"
                                                        src="{{ asset('storage/product/' . @$bestproduct->single_image->image) }}"
                                                        alt="product-img">
                                                </a>

                                            </div>
                                            <div class="product__items--content">
                                                {{-- <span class="product__items--content__subtitle">Advanced-nail-art, Women</span> --}}
                                                <h3 class="product__items--content__title h4"><a
                                                        href="{{ route('product-details', [$bestproduct->slug]) }}">{{ $bestproduct->name }}</a>
                                                </h3>
                                                <div class="product__items--price">
                                                    <span class="current__price"> Rs {{$bestproduct->selling_price}}</span><br>
                                                     <a id="product_id"onclick="addToCart({{ $bestproduct->id }})" href="javascript:void(0)"><button class="quickview__cart--btn primary__btn" type="submit">Add To Cart</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div id="newarrival" class="tab_pane">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                @foreach ($latestproducts as $latestproduct)
                                    <div class="col mb-30">
                                        <div class="product__items ">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link"
                                                    href="{{ route('product-details', [$latestproduct->slug]) }}">
                                                    <img class="product__items--img product__primary--img"
                                                        src="{{ asset('storage/product/' . @$latestproduct->single_image->image) }}"
                                                        alt="product-img">
                                                    <img class="product__items--img product__secondary--img"
                                                        src="{{ asset('storage/product/' . @$latestproduct->single_image->image) }}"
                                                        alt="product-img">
                                                </a>

                                            </div>
                                            <div class="product__items--content">
                                                {{-- <span class="product__items--content__subtitle">Advanced-nail-art, Women</span> --}}
                                                <h3 class="product__items--content__title h4"><a
                                                        href="{{ route('product-details', [$latestproduct->slug]) }}">{{ $latestproduct->name }}</a>
                                                </h3>
                                                <div class="product__items--price">
                                                    <span class="current__price">  Rs {{$latestproduct->selling_price}}</span><br>
                                                   <a id="product_id"onclick="addToCart({{ $latestproduct->id }})" href="javascript:void(0)"><button style="color: black" class="add__to--cart__text" type="submit">Add To Cart</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start testimonial section -->
        <section class="testimonial__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__headig--maintitle">Our Clients Say</h2>
                </div>
                <div class="testimonial__section--inner testimonial__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach ($testmonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial__items text-center">
                                    <div class="testimonial__items--thumbnail">
                                        <img class="testimonial__items--thumbnail__img border-radius-50"
                                            src="{{ asset('storage/testimonial/thumbnail/' . $testimonial->image) }}"
                                            alt="testimonial-img">
                                    </div>
                                    <div class="testimonial__items--content">
                                        <h3 class="testimonial__items--title">{{ $testimonial->name }}</h3>
                                        <span class="testimonial__items--subtitle">{{ $testimonial->designation }}</span>
                                        <p class="testimonial__items--desc">{!! $testimonial->content !!} </p>
                                        <ul class="rating testimonial__rating d-flex justify-content-center">
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732"
                                                        viewBox="0 0 10.105 12.732">
                                                        <path data-name="star - Copy"
                                                            d="M12.837,3.5,8.73,3.0312,5.338.1712a.335.335,0,0,0-.571,0L3.375,3.0312.288,3.5a.3.3,0,0,0-.178.514L2.347,8.242,1.813,12.4a.314.314,0,0,0,.484.318L5.052,8.232,7.827,12.712A.314.314,0,0,0,8.2122,12.4L7.758,8.242l2.257-2.231A.3.3,0,0,0,12.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732"
                                                        viewBox="0 0 10.105 12.732">
                                                        <path data-name="star - Copy"
                                                            d="M12.837,3.5,8.73,3.0312,5.338.1712a.335.335,0,0,0-.571,0L3.375,3.0312.288,3.5a.3.3,0,0,0-.178.514L2.347,8.242,1.813,12.4a.314.314,0,0,0,.484.318L5.052,8.232,7.827,12.712A.314.314,0,0,0,8.2122,12.4L7.758,8.242l2.257-2.231A.3.3,0,0,0,12.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732"
                                                        viewBox="0 0 10.105 12.732">
                                                        <path data-name="star - Copy"
                                                            d="M12.837,3.5,8.73,3.0312,5.338.1712a.335.335,0,0,0-.571,0L3.375,3.0312.288,3.5a.3.3,0,0,0-.178.514L2.347,8.242,1.813,12.4a.314.314,0,0,0,.484.318L5.052,8.232,7.827,12.712A.314.314,0,0,0,8.2122,12.4L7.758,8.242l2.257-2.231A.3.3,0,0,0,12.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732"
                                                        viewBox="0 0 10.105 12.732">
                                                        <path data-name="star - Copy"
                                                            d="M12.837,3.5,8.73,3.0312,5.338.1712a.335.335,0,0,0-.571,0L3.375,3.0312.288,3.5a.3.3,0,0,0-.178.514L2.347,8.242,1.813,12.4a.314.314,0,0,0,.484.318L5.052,8.232,7.827,12.712A.314.314,0,0,0,8.2122,12.4L7.758,8.242l2.257-2.231A.3.3,0,0,0,12.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732"
                                                        viewBox="0 0 10.105 12.732">
                                                        <path data-name="star - Copy"
                                                            d="M12.837,3.5,8.73,3.0312,5.338.1712a.335.335,0,0,0-.571,0L3.375,3.0312.288,3.5a.3.3,0,0,0-.178.514L2.347,8.242,1.813,12.4a.314.314,0,0,0,.484.318L5.052,8.232,7.827,12.712A.314.314,0,0,0,8.2122,12.4L7.758,8.242l2.257-2.231A.3.3,0,0,0,12.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="testimonial__pagination swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End testimonial section -->



  
<div class="newsletter-section-2">
            <div class="newsletter-left" style="
                        background-image: url({{asset('header_front_end')}}/assets/images/newsletter-bg-1.jpg);
                    ">
                <div class="newsletter-social js-scroll-old ShortFadeInUp">
                    <h2 class="newsletter-social__label">Follow us on</h2>
                    <ul class="newsletter-social__list">
                        <li>
                            <a href="#" aria-label="facebook">
                                <i class="lastudioicon-b-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="twitter">
                                <i class="lastudioicon-b-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="instagram">
                                <i class="lastudioicon-b-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="vimeo">
                                <i class="lastudioicon-b-vimeo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="envato">
                                <i class="lastudioicon-envato"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="newsletter-right" style="
                        background-image: url({{asset('header_front_end')}}/assets/images/newsletter-bg-2.jpg);
                    ">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper newsletter-wrapper--2 text-center js-scroll-old ShortFadeInUp">
                    <h2 class="newsletter-wrapper__title">
                        10% off when you sign up
                    </h2>
                    <form action="#">
                        <div class="newsletter-form-style-1 newsletter-form-style-1--2">
                            <input type="text" placeholder="Enter your email address...">
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Newsletter Wrapper End -->
            </div>
        </div>

        
    </main>
@endsection
