@extends('layouts.app')

@section('content')


 <main class="main__content_wrapper">




        <!-- Start blog section -->
            <section class="blog__section section--padding">
                <div class="container">
                    <div class="section__heading text-center mb-50">
                        <h2 class="section__heading--maintitle"> Our Blog</h2>
                    </div>
                    <div class="blog__section--inner">
                        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-sm-u-2 row-cols-1 mb--n30">
                            @foreach ($blogs as $blog)
                            <div class="col mb-30">
                                <div class="blog__items">
                                    <div class="blog__thumbnail">
                                        <a class="blog__thumbnail--link" href="{{route('blog-details',$blog->slug)}}"><img class="blog__thumbnail--img" src="{{asset('storage/blogs/upload/'.$blog->image)}}" alt="blog-img"></a>
                                    </div>
                                    <div class="blog__content">
                                        <span class="blog__content--meta">{{date('d M Y',strtotime($blog->created_at))}}</span>
                                        <h3 class="blog__content--title"><a href="{{route('blog-details',$blog->slug)}}"> @php
                                                                                                                $m = $blog->title;
                                                                                                            @endphp
                                                                                                            {!!substr($m, 0, 30)!!}</a></h3>
                                        <!-- @php
                                            $m = $blog->content;
                                        @endphp
                                        {!!substr($m, 0, 30)!!} -->
                                        <a class="blog__content--btn primary__btn" href="{{route('blog-details',$blog->slug)}}">Read more </a>
                                    </div>
                                </div>
                            </div>
                         @endforeach

                        </div>
                        {{-- <div class="pagination__area bg__gray--color">
                            <nav class="pagination justify-content-center">
                                <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                    <li class="pagination__list">
                                        <a href="blog.html" class="pagination__item--arrow  link ">
                                            <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg>
                                            <span class="visually-hidden">pagination arrow</span>
                                        </a>
                                    <li>
                                    <li class="pagination__list"><span class="pagination__item pagination__item--current">1</span></li>
                                    <li class="pagination__list"><a href="blog.html" class="pagination__item link">2</a></li>
                                    <li class="pagination__list"><a href="blog.html" class="pagination__item link">3</a></li>
                                    <li class="pagination__list"><a href="blog.html" class="pagination__item link">4</a></li>
                                    <li class="pagination__list">
                                        <a href="blog.html" class="pagination__item--arrow  link ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                                            <span class="visually-hidden">pagination arrow</span>
                                        </a>
                                    <li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                </div>
            </section>
            <!-- End blog section -->

            <!-- Start shipping section -->

            <!-- End shipping section -->
        </main>


    @endsection
