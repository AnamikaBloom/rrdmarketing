@extends('admin.layouts.app')
@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Id card </li>
                </ol><!-- End breadcrumb -->


            </div>

            <div class="section-body terms">

                <!--row open-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4> ID Card </h4>
                            </div>
                            <div class="card-body">

                                <div class="col-lg-12 col-xl-4" style="margin: 0 auto;">
                                    <div class="card">
                                        <div class="card-body box">
                                            <div id="name">

                                                <img src="{{ asset('header_front_end/assets/images/logo/logo.png') }}"
                                                    style="width: 100%;">
                                            </div><br>

                                            <div class="img">
                                                <img src="{{ asset('/storage/user/'.$user->photo) }}" alt="">
                                            </div>
                                            <h2> {{$user->name}} <br><span> REFERRAL PARTNER </span></h2>
                                            <h2>{{$user->sponser_id}}
                                            <h2> Mobile No <br><span> {{$user->mobile}} </span></h2>
                                        </div>

                                        <p class="mb-3 text-white bg-black" style="text-align:center">RRD 369 Marketing</p>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <!--row closed-->

            </div>


            <!--row closed-->
        </section>
    </div>
@endsection
