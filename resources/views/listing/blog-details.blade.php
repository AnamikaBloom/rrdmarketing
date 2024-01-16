@extends('layouts.app')

@section('content')


 <main class="main__content_wrapper">





        <!-- Start blog details section -->
           <section class="blog__details--section section--padding">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-xxl-9 col-xl-8 col-lg-8">
                           <div class="blog__details--wrapper">
                               <div class="entry__blog">
                                   <div class="blog__post--header mb-30">
                                       <h2 class="post__header--title mb-15">RRD 369 Marketing!</h2>
                                       <p class="blog__post--meta">Posted by : {{$blog->title}} / On :{{date('d M Y',strtotime($blog->created_at))}} / In : <!--<a class="blog__post--meta__link" href="{{url('blog-details')}}">Company, Image, Travel</a>--></p>
                                   </div>
                                   <div class="blog__thumbnail mb-30">
                                       <img class="blog__thumbnail--img border-radius-10" src="{{asset('storage/blogs/upload/'.$blog->image)}}" alt="blog-img">
                                   </div>
                                   <div class="blog__details--content">
                                       <h3 class="blog__details--content__subtitle mb-25">RRD 369 Marketing!</h3>
                                       <p class="blog__details--content__desc mb-20">{!!$blog->content!!} </p>
                                       {{-- <p class="blog__details--content__desc mb-30"> Vel ipsa officiis nobis eveniet omnis consequuntur neque quasi, in, optio rerum suscipit totam odio. Alias necessitatibus nulla accusantium voluptatem ipsum voluptatum, vero in impedit nobis cupiditate ea, dicta eos facilis eaque optio laudantium non neque itaque? Possimus officia aut accusamus illum, adipisci, nihil numquam minus eum fugit, beatae minima facilis magni.</p> --}}
                                       <!--<blockquote class="blockquote__content bg__gray--color mb-30">
                                           <p class="blockquote__content--desc">Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                       </blockquote>-->
                                       {{-- <p class="blog__details--content__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus sapiente omnis sunt labore mollitia, quaerat incidunt sequi, ut alias accusamus nostrum magni fugit facilis dignissimos illum repellendus et numquam adipisci quos. Eos omnis maiores beatae cum a consequatur magnam sequi neque, at numquam qui ipsam unde veritatis voluptates quam dicta! Ipsam, mollitia illo fuga vel culpa reprehenderit quisquam maxime nesciunt. Sunt quaerat inventore aspernatur quibusdam corrupti numquam mollitia exercitationem rem alias consectetur hic iusto dignissimos nostrum odio, cumque impedit.</p> --}}
                                   </div>
                               </div>
                               <div class="blog__tags--social__media d-flex align-items-center justify-content-between">

                               </div>

                               {{-- <div class="comment__box">
                                   <div class="reviews__comment--area2 mb-50">
                                       <h2 class="reviews__comment--reply__title mb-25">Recent Comment</h2>
                                       <div class="reviews__comment--inner">
                                           <div class="reviews__comment--list d-flex">
                                               <div class="reviews__comment--thumb">
                                                   <img class="display-block" src="{{asset('frontend/assets/img/other/comment-thumb1.png')}}" alt="comment-thumb">
                                               </div>
                                               <div class="reviews__comment--content ">
                                                   <div class="comment__content--topbar d-flex justify-content-between">
                                                       <div class="comment__content--topbar__left">
                                                           <h4 class="reviews__comment--content__title2">Jakes on</h4>
                                                           <span class="reviews__comment--content__date2">February 18, 2022</span>
                                                       </div>
                                                       <button class="comment__reply--btn primary__btn" type="submit">Reply</button>
                                                   </div>
                                                   <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                               </div>
                                           </div>
                                           <div class="reviews__comment--list margin__left d-flex">
                                               <div class="reviews__comment--thumb">
                                                   <img class="display-block" src="{{asset('frontend/assets/img/other/comment-thumb2.png')}}" alt="comment-thumb">
                                               </div>
                                               <div class="reviews__comment--content">
                                                   <div class="comment__content--topbar d-flex justify-content-between">
                                                       <div class="comment__content--topbar__left">
                                                           <h4 class="reviews__comment--content__title2">John Deo</h4>
                                                           <span class="reviews__comment--content__date2">February 18, 2022</span>
                                                       </div>
                                                       <button class="comment__reply--btn primary__btn" type="submit">Reply</button>
                                                   </div>
                                                   <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                               </div>
                                           </div>
                                           <div class="reviews__comment--list d-flex">
                                               <div class="reviews__comment--thumb">
                                                   <img class="display-block" src="{{asset('frontend/assets/img/other/comment-thumb3.png')}}" alt="comment-thumb">
                                               </div>
                                               <div class="reviews__comment--content">
                                                   <div class="comment__content--topbar d-flex justify-content-between">
                                                       <div class="comment__content--topbar__left">
                                                           <h4 class="reviews__comment--content__title2">Laura Johnson</h4>
                                                           <span class="reviews__comment--content__date2">February 18, 2022</span>
                                                       </div>
                                                       <button class="comment__reply--btn primary__btn" type="submit">Reply</button>
                                                   </div>
                                                   <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>

                               </div>  --}}
                           </div>
                       </div>
                       <div class="col-xxl-3 col-xl-4 col-lg-4">
                           <div class="blog__sidebar--widget left widget__area">
                               <div class="single__widget widget__search widget__bg">
                                   <h2 class="widget__title h3">Search</h2>
                                   <form class="widget__search--form" action="#">
                                       <label>
                                           <input class="widget__search--form__input" placeholder="Search..." type="text">
                                       </label>
                                       <button class="widget__search--form__btn" aria-label="search button" type="button">
                                           <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                       </button>
                                   </form>
                               </div>
                               {{-- <div class="single__widget widget__bg">
                                   <h2 class="widget__title h3">Categories</h2>
                                   <ul class="widget__categories--menu">
                                       <li class="widget__categories--menu__list">
                                           <label class="widget__categories--menu__label d-flex align-items-center">
                                               <img class="widget__categories--menu__img" src="{{asset('frontend/assets/img/product/small-product1.png')}}" alt="categories-img">
                                               <span class="widget__categories--menu__text">Men Dress</span>
                                               <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                                   <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                               </svg>
                                           </label>
                                           <ul class="widget__categories--sub__menu">
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product2.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">shirts</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product3.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">Men Blazers</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product4.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">Men All type Shoes</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product5.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">All style Jeans</span>
                                                   </a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li class="widget__categories--menu__list">
                                           <label class="widget__categories--menu__label d-flex align-items-center">
                                               <img class="widget__categories--menu__img" src="{{asset('frontend/assets/img/product/small-product2.png')}}" alt="categories-img">
                                               <span class="widget__categories--menu__text">Women Dress</span>
                                               <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" >
                                                   <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                               </svg>
                                           </label>
                                           <ul class="widget__categories--sub__menu">
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product2.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">Part Wear Dress</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product3.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">all type Sarees</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product4.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">All style sandals</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product5.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">Women Casual shirts</span>
                                                   </a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li class="widget__categories--menu__list">
                                           <label class="widget__categories--menu__label d-flex align-items-center">
                                               <img class="widget__categories--menu__img" src="{{asset('frontend/assets/img/product/small-product3.png')}}" alt="categories-img">
                                               <span class="widget__categories--menu__text">Accessories</span>
                                               <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                                   <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                               </svg>
                                           </label>
                                           <ul class="widget__categories--sub__menu">
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product2.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">All of Bangle designs, Women</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product3.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">Jacket, Men</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product4.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">Caps,Belt, Men</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product5.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">Watches,Women</span>
                                                   </a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li class="widget__categories--menu__list">
                                           <label class="widget__categories--menu__label d-flex align-items-center">
                                               <img class="widget__categories--menu__img" src="{{asset('frontend/assets/img/product/small-product4.png')}}" alt="categories-img">
                                               <span class="widget__categories--menu__text">All type Bag</span>
                                               <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                                   <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                               </svg>
                                           </label>
                                           <ul class="widget__categories--sub__menu">
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product2.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">shoulder bag</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product3.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">Travelling Bag</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product4.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">Laptop Bag</span>
                                                   </a>
                                               </li>
                                               <li class="widget__categories--sub__menu--list">
                                                   <a class="widget__categories--sub__menu--link d-flex align-items-center" href="{{url('blog-details')}}">
                                                       <img class="widget__categories--sub__menu--img" src="{{asset('frontend/assets/img/product/small-product5.png')}}" alt="categories-img">
                                                       <span class="widget__categories--sub__menu--text">College &amp; School Bags</span>
                                                   </a>
                                               </li>
                                           </ul>
                                       </li>

                                   </ul>
                               </div> --}}

                               {{-- <div class="single__widget widget__bg">
                                   <h2 class="widget__title h3">Brands</h2>
                                   <ul class="widget__tagcloud">
                                       <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="{{url('blog-details')}}">Men</a></li>
                                       <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="{{url('blog-details')}}">Women</a></li>
                                       <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="{{url('blog-details')}}">Accessories</a></li>
                                       <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="{{url('blog-details')}}">All type Bags </a></li>
                                    </ul>
                               </div> --}}
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- End blog details section -->

           <!-- Start shipping section -->

           <!-- End shipping section -->
       </main>


@endsection
