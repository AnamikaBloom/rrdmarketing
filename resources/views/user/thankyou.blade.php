@extends('user.layout.app')
@section('content')
<main class="main__content_wrapper">


<h1 class="text-center"><br/>Thank You</h1>

             <!-- Start Thank you section -->
        <section class="contact__section section--padding">
            <div class="page-contain about-us" style="margin: 20px;">

                <!-- Main content -->
                <div id="main-content" class="main-content">


             <!-- =========================== Breadcrumbs =================================== -->
                    <div class="breadcrumbs_wrap gray">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-center">
                                        <h2 class="breadcrumbs_title"> Thank You. Your Package has Activated Now Select Products </h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- =========================== Breadcrumbs =================================== -->

                    <div class="breadcrumbs_wrap gray">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <h2 class="breadcrumbs_title"> Order Details </h2>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th class="heading" scope="col">Order No: {{$order->order_id}}</th>
                                    <th class="heading" scope="col">Date : {{date('d F Y',strtotime($order->created_at))}}</th>
                                    <th class="heading" scope="col">Total : Rs {{$order->amount}}  </th>
                                    <th class="heading" scope="col">Payment Method : {{$order->payment_type}}</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                            <h4 class="breadcrumbs_title"><a href="{{route('home')}}">Continue Shopping</a></h4>

                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Thank you section -->
      </main>
      @endsection
