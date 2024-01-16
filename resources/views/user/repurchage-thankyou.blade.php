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
                                        @if ($order->status == 'Placed')
                                            <h2>
                                                <li class="breadcrumb-item active pl-0 d-flex align-items-center text-green"
                                                    aria-current="page">Thank You. Your Order has been Received
                                            </h2>
                                        @elseif($order->status == 'Failed')
                                            <h2>
                                                <li class="breadcrumb-item active pl-0 d-flex align-items-center text-red"
                                                    aria-current="page">Sorry. Your Order has been {{ $order->status }}
                                            </h2>
                                        @endif
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
                        @if ($message = Session::get('message'))
                            <p>{!! $message !!}</p>
                            <?php Session::forget('success'); ?>
                        @endif
                        @if ($error_message = Session::get('error_message'))
                            <p>{!! $error_message !!}</p>
                        @endif
                        <table class="table">

                            <thead>

                                <tr>
                                    <th class="heading" scope="col">Order No: {{ $order->order_id }}</th>
                                    <th class="heading" scope="col">Date :{{ date('d F Y', strtotime($order->created_at)) }}</th>
                                    <th class="heading" scope="col">Total : Rs {{ $order->Investment_amount }} </th>
                                    <th class="heading" scope="col">Payment Method : {{ $order->payment_type }}</th>
                                    <th class="heading" scope="col">Order Status : {{ $order->status }}</th>
                                </tr>

                            </thead>
                        </table>
                        <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="cart_detail_box">
                                <table class="table">
                                    <thead>
                                        <tr><th>Products</th>
                                    </tr></thead>
                                    <tbody>
                                        @foreach ($orderLists as $list)
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
                                        @foreach ($orderLists as $list)
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
                </div>
            </div>
        </section>
        <!-- End Thank you section -->
    </main>
@endsection
