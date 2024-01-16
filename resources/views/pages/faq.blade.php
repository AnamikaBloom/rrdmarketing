@extends('layouts.app')

@section('content')
	 <!-- End header area -->
     <main class="main__content_wrapper">
        
     <h1 class="text-center"><br/>Frequently Asked Question</h1>

<!-- faq page section start -->
        <section class="faq__section section--padding">
            <div class="container">
                <div class="faq__section--inner">
                    <div class="face__step one border-bottom" id="accordionExample">
                        <h2 class="face__step--title h3 mb-30">Faq</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="accordion__container">
                                    @foreach ($faqs as $faq)
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">{{$faq->question}}
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">{!!$faq->answer!!}</p>
                                        </div>
                                    </div>
                                    {{-- <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How Long Will it Take To Get My Package??
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What payment types can I use?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Do you ship internationally??
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How will my parcel be delivered?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How do I know if something is organic?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
{{--               
                    <div class="face__step one" id="accordionExample3">
                        <h3 class="face__step--title mb-30">Orders and Returns</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How can I return an item?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class=" accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What Shipping Methods Are Available?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How can i make refund from your website?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">

                                <div class="accordion__items">
                                    <h2 class="accordion__items--title">
                                        <button class="faq__accordion--btn accordion__items--button">I am a new user. How should I start?
                                            <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                        </button>
                                    </h2>
                                    <div class="accordion__items--body">
                                        <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                    </div>
                                </div>
                                <div class="accordion__items">
                                    <h2 class="accordion__items--title">
                                        <button class="faq__accordion--btn accordion__items--button">What payment methods are accepted?
                                            <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                        </button>
                                    </h2>
                                    <div class="accordion__items--body">
                                        <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                    </div>
                                </div>
                                <div class="accordion__items">
                                    <h2 class="accordion__items--title">
                                        <button class="faq__accordion--btn accordion__items--button">Do you ship internationally?
                                            <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                        </button>
                                    </h2>
                                    <div class="accordion__items--body">
                                        <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim felis.</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @endforeach
                </div>   
            </div>     
        </section>
        <!-- faq page section end -->


@endsection