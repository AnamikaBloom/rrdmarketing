@extends('layouts.app')

@section('content')

<style>
  .card{
    background-color : #ffffff;
    padding: 0px;
    max-width : 100% !important;
    height: 100% !important;
  }
  .card img{
    border-radius: 15px 15px 0px 0px;
  }
  .card:hover {
    -webkit-transform: scale(1.02);
    transform: scale(1.02);
}
</style>
  
<!--<Pricing sheet css start-->
<section style="padding-top:40px;">
  <div class="container-fluid">
    <div class="container">
      <div class="row">

      <!-- panel 1 -->
        <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom: 50px;">
          <div class="card text-left"style="margin-bottom: 15px;">
          <img src="{{asset('frontend/assets/img/services/Ticket-Booking.jpg')}}" alt="">
          <div class="com-md-12" style="padding: 20px;">
            <div class="title">
              <h2 style="color: #000000;">Tours & Travel:</h2>
            </div>
            <p style="color: #000000;">Explore the world with RRd369marketing's exceptional travel services. We
offer a wide range of travel packages and itineraries, catering to all
types of travelers. Whether you're planning a relaxing beach getaway, an
adventurous trek, or a cultural exploration, our expert travel agents
are here to assist you. From booking flights and accommodations to
arranging tours and transfers, we make your travel dreams a reality.
Experience the joy of hassle-free travel with RRd369marketing.</p>
           
          </div>
          </div>
        </div>
        <!-- END Col one -->
       

      <!-- panel 2 -->
        <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom: 50px;">
          <div class="card text-left"style="margin-bottom: 15px;">
          <img src="{{asset('frontend/assets/img/services/Recharage.jpg')}}" alt="">
          <div class="com-md-12" style="padding: 20px;">
            <div class="title">
              <h2 style="color: #000000;">Recharge:</h2>
            </div>
            <p style="color: #000000;">RRd369marketing offers convenient mobile recharge services, ensuring you
stay connected at all times. Whether you need to top up your prepaid
mobile plan or pay your postpaid bill, our platform makes it easy and
hassle-free. With secure payment options and quick processing, you can
recharge your phone, DTH, or data plan effortlessly. Stay in touch with
loved ones and enjoy uninterrupted connectivity with RRd369marketing's
reliable recharge services.</p>
           
          </div>
          </div>
        </div>
        <!-- END Col one -->
       
        

      <!-- panel 3 -->
        <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom: 50px;">
          <div class="card text-left"style="margin-bottom: 15px;">
          <img src="{{asset('frontend/assets/img/services/Ticket-Booking.jpg')}}" alt="">
          <div class="com-md-12" style="padding: 20px;">
            <div class="title">
              <h2 style="color: #000000;">Ticket Booking:</h2>
            </div>
            <p style="color: #000000;">RRd369marketing is your one-stop destination for all your ticket booking
needs. Whether you're planning a trip, attending an event, or catching a
movie, we've got you covered. With our user-friendly platform, you can
book flight tickets, train tickets, bus tickets, movie tickets, and
event tickets with ease. We offer a secure and convenient booking
experience, complete with instant confirmation and e-ticket options. Say
goodbye to long queues and book your tickets effortlessly with
RRd369marketing.
</p>
           
          </div>
          </div>
        </div>
        <!-- END Col one -->
       
        

      <!-- panel 4 -->
        <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom: 50px;">
          <div class="card text-left"style="margin-bottom: 15px;">
          <img src="{{asset('frontend/assets/img/services/grocery.jpg')}}" alt="">
          <div class="com-md-12" style="padding: 20px;">
            <div class="title">
              <h2 style="color: #000000;">Groceries:</h2>
            </div>
            <p style="color: #000000;">Shop for groceries from the comfort of your home with RRd369marketing's
online grocery store. We have a vast selection of fresh produce, pantry
staples, household essentials, and more. Our user-friendly website and
app make it easy to browse, add items to your cart, and schedule
delivery at your convenience. With competitive prices and reliable
delivery, we make grocery shopping a breeze. Save time and enjoy the
convenience of doorstep grocery delivery with RRd369marketing.
</p>
           
          </div>
          </div>
        </div>
        <!-- END Col one -->
       
        


      </div>
    </div>
  </div>
</section>
<!--<Pricing sheet css end-->

    @endsection