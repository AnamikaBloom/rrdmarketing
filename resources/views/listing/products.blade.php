@extends('layouts.app')

@section('content')
	   <!-- End header area -->
       <main class="main__content_wrapper">




       <h1 class="text-center"><br/>Out Products</h1>






       <!-- Start shop section -->
       <section class="shop__section section--padding">
           <div class="container-fluid">
           <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
                   <button class="widget__filter--btn d-flex d-lg-none align-items-center" data-offcanvas>
                       <svg  class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80"/><circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/></svg>
                       <span class="widget__filter--btn__text">Filter</span>
                   </button>
                   <div class="product__view--mode d-flex align-items-center">

                       <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                           <label class="product__view--label">Sort By :</label>
                           <div class="select shop__header--select">
                            <form>
                               <select class="product__view--select" name="filter" onchange="this.form.submit();">
                                   <option selected value="latest" >Sort by latest</option>
                                   <option value="popular"  >Sort by popularity</option>
                                   <option value="recent">Sort by newness</option>
                                   <option value="rating">Sort by  rating </option>
                               </select>
                               {{-- <select class="product__view--select" name="filter" onchange="this.form.submit();">
                                <option selected value="latest" @if(Request()->filter=='latest' selected @endif)>Sort by latest</option>
                                <option value="popular"  @if(Request()->filter=='popular' selected @endif)>Sort by popularity</option>
                                <option value="recent"  @if(Request()->filter=='latest' selected @endif)>Sort by newness</option>
                                <option value="rating">Sort by  rating </option>
                            </select> --}}
                            </form>
                           </div>
                       </div>
                       <div class="product__view--mode__list">
                           <div class="product__grid--column__buttons d-flex justify-content-center">
                               <button class="product__grid--column__buttons--icons active" aria-label="product grid button" data-toggle="tab" data-target="#product_grid">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                       <g  transform="translate(-1360 -479)">
                                         <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4" transform="translate(1360 479)" fill="currentColor"/>
                                         <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4" transform="translate(1360 484)" fill="currentColor"/>
                                         <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4" transform="translate(1365 479)" fill="currentColor"/>
                                         <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4" transform="translate(1365 484)" fill="currentColor"/>
                                       </g>
                                     </svg>
                               </button>

                               <button class="product__grid--column__buttons--icons" aria-label="product list button" data-toggle="tab" data-target="#product_list">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                       <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                         <g  transform="translate(12 -2)">
                                           <g id="Group_1326" data-name="Group 1326">
                                             <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                             <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                           </g>
                                           <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                             <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                             <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                           </g>
                                           <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                             <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3" height="2" transform="translate(1364 487)" fill="currentColor"/>
                                             <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9" height="2" transform="translate(1368 487)" fill="currentColor"/>
                                           </g>
                                         </g>
                                       </g>
                                     </svg>
                               </button>
                           </div>
                       </div>
                       <div class="product__view--mode__list product__view--search d-none d-lg-block">
                           <form class="product__view--search__form" action="#">
                               <label>
                                   <input class="product__view--search__input border-0" placeholder="Search by" type="text">
                               </label>
                               <button class="product__view--search__btn" aria-label="shop button"  type="submit">
                                   <svg class="product__view--search__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                               </button>
                           </form>
                       </div>
                   </div>
                   <p class="product__showing--count">Showing 1–9 of 21 results</p>
               </div>

               <div class="row">
                   <div class="col-xl-3 col-lg-4">
                       <div class="shop__sidebar--widget widget__area d-none d-lg-block">
                           <div class="single__widget widget__bg">
                               <h2 class="widget__title h3">Categories</h2>
                               @php
$categories = App\Models\Category::Where('status','Active')->limit(6)->get();
    @endphp

   @foreach($categories as $category)
                               <ul class="widget__categories--menu">
                                   <li class="widget__categories--menu__list">
                                       <label class="widget__categories--menu__label d-flex align-items-center">
                                           <img class="widget__categories--menu__img" src="{{asset('storage/category/'.@$category->image)}}" alt="categories-img">
                                           <span class="widget__categories--menu__text">{{$category->name}}</span>
                                           <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                               <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                           </svg>
                                       </label>
                                       <ul class="widget__categories--sub__menu">
                                        @php
$subcategories = App\Models\SubCategory::where('category_id',$category->id)->Where('status','Active')->get();
    @endphp
@foreach($subcategories as $subcategory)
                                           <li class="widget__categories--sub__menu--list">
                                               <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{route('sub-products',$subcategory->slug)}}">
                                                   <img class="widget__categories--sub__menu--img" src="{{asset('storage/subcategory/'.@$subcategory->image)}}" alt="categories-img">
                                                   <span class="widget__categories--sub__menu--text">{{$subcategory->name}}</span>
                                               </a>
                                           </li>
                                           @endforeach
                                       </ul>


                               </ul>
                               @endforeach
                           </div>


                           <div class="single__widget widget__bg">
                               <h2 class="widget__title h3">Top Rated Product</h2>
                               <div class="product__grid--inner">
                             @foreach   ($toprated as $product)
                                   <div class="product__items product__items--grid d-flex align-items-center">
                                       <div class="product__items--grid__thumbnail position__relative">
                                           <a class="product__items--link" href="{{route('product-details',[$product->slug]) }}">
                                               <img class="product__items--img product__primary--img" src="{{asset('storage/product/'.@$product->single_image->image)}}" alt="product-img">
                                               <img class="product__items--img product__secondary--img" src="{{asset('storage/product/'.@$product->single_image->image)}}" alt="product-img">
                                           </a>
                                       </div>
                                       <div class="product__items--grid__content">
                                           <h3 class="product__items--content__title h4"><a href="{{route('product-details',[$product->slug]) }}">{{$product->name}}</a></h3>


                                       </div>
                                   </div>
                                   @endforeach
                               </div>
                           </div>

                       </div>
                   </div>


                   <div class="col-xl-9 col-lg-8">
                       <div class="shop__product--wrapper">
                           <div class="tab_content">
                               <div id="product_grid" class="tab_pane active show">
                                   <div class="product__section--inner product__grid--inner">
                                       <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-2 mb--n30">
                                        @foreach ($products as $product)
                                           <div class="col mb-30">
                                               <div class="product__items ">
                                                   <div class="product__items--thumbnail">
                                                       <a class="product__items--link" href="{{route('product-details',[$product->slug]) }}">

                                                           <img class="product__items--img product__primary--img" src="{{asset('storage/product/'.@$product->single_image->image)}}" alt="product-img">

                                                       </a>

                                                   </div>
                                                   <div class="product__items--content">
                                                       <h3 class="product__items--content__title h4"><a href="{{route('product-details',[$product->slug]) }}">{{$product->name}}</a></h3>


                                         <ul class="rating product__rating d-flex">


                                                       </ul>
                                                       <ul class="product__items--action d-flex">

                                                           <li class="product__items--action__list">
                                                            <span class="current__price"> MRP {{$product->price}}</span><br>
                                                               <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                   <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                   <span class="visually-hidden">Quick View</span>
                                                                  <a id="product_id" onclick="addToCart({{$product->id}})" href="javascript:void(0)"><button class="quickview__cart--btn primary__btn" type="submit">Add To Cart</button></a>
                                                               </a>
                                                           </li>

                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>


           @endforeach

                                       </div>
                                   </div>
                               </div>


                               <div id="product_list" class="tab_pane">
                                   <div class="product__section--inner">
                                       <div class="row row-cols-1 mb--n30">
                                        @foreach ($products as $product)
                                           <div class="col mb-30">
                                               <div class="product__items product__list--items d-flex">
                                                   <div class="product__items--thumbnail product__list--items__thumbnail">
                                                       <a class="product__items--link" href="{{route('product-details',[$product->slug]) }}">
                                                           <img class="product__items--img product__primary--img" src="{{asset('storage/product/'.@$product->single_image->image)}}" alt="product-img">
                                                           <img class="product__items--img product__secondary--img" src="{{asset('storage/product/'.@$product->single_image->image)}}" alt="product-img">
                                                       </a>
                                                       <div class="product__badge">

                                                       </div>
                                                   </div>
                                                   <div class="product__list--items__content">
                                                       <h3 class="product__list--items__content--title h4 mb-10"><a href="{{route('product-details',[$product->slug]) }}">{{$product->name}}</a></h3>

                                                       <p class="product__list--items__content--desc d-none d-xl-block mb-15">{{$product->description}} </p>
                                                       <ul class="product__items--action d-flex">


                                                           <li class="product__items--action__list">
                                                               <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                                   <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                   <span class="visually-hidden">Quick View</span>
                                                                   <span class="current__price">{{$product->selling_price}}</span>
                                                                   <!-- <a id="product_id"onclick="addToCart({{$product->id}})" href="javascript:void(0)"><button class="quickview__cart--btn primary__btn" type="submit">Add To Cart</a></button> -->
                                                               </a>
                                                           </li>

                                                       </ul>

                                                   </div>
                                               </div>
                                           </div>

                                           @endforeach
                                       </div>
                                   </div>
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- End shop section -->

@endsection
