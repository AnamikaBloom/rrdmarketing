@extends('layouts.app')
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
                                        <h2 class="breadcrumbs_title"> Thank You. Your Order has been Received </h2>
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
                                    <th class="heading" scope="col">Total : Rs {{$order->payable_price}}  </th>
                                    <th class="heading" scope="col">Payment Method : {{$order->payment_type}}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <!-- =========================== Add To Cart =================================== -->
                    <section>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="cart_detail_box">
                                        <table class="table">
                                            <thead>
                                                <tr><th>Products</th>
                                            </tr></thead>
                                            <tbody>
                                                @foreach ($lists as $list)
                                                <tr>
                                                    <td class="data-style"><span>{{ucfirst($list->product->name)}}</span> </td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td class="data-style"><span>Sub Total</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="data-style"><span>Shipping</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="data-style"><span>Payment Method</span></td>
                                                </tr>
                                                <tr><td class="data-style"><span>Total</span></td></tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="cart_detail_box">
                                        <table class="table">
                                            <thead>
                                                <tr><th>Total</th>
                                            </tr></thead>
                                            <tbody>
                                                @foreach ($lists as $list)
                                                @php
                                                $subtotal_list[] = $list->selling_price * $list->quantity;
                                                @endphp
                                                <tr>

                                                    <td class="data-style"><span class="font-size-sm"> ₹ {{$list->selling_price}} * {{$list->quantity}}</span> </td>
                                                </tr>
                                                @endforeach

                                                <tr>
                                                    <td class="data-style"><span class="font-size-sm"> ₹ {{(array_sum($subtotal_list))?array_sum($subtotal_list):'00.00'}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="data-style"><span class="font-size-sm"> ₹ {{($order->delivery_charge)?$order->delivery_charge:'00.00'}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="data-style"><span class="font-size-sm"> {{$order->payment_type}}</span></td>
                                                </tr>
                                                <tr><td class="data-style"><span class="font-size-sm"> ₹ {{(array_sum($subtotal_list))?array_sum($subtotal_list):'00.00'}}</span></td></tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                            <h2 class="breadcrumbs_title"><a href="{{route('home')}}">Continue Shopping</a></h2>

                    </div>
                    </section>
                    <!-- =========================== Add To Cart =================================== -->





                </div>

            </div>
        </section>
        <!-- End Thank you section -->





      </main>
      @endsection
