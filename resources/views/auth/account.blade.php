@extends('layouts.app')

@section('content')

  <!-- End header area -->
  <main class="main__content_wrapper">

  <h1 class="text-center"><br/>My Profile</h1>

   <!-- =========================== Account Settings =================================== -->
        <section class="gray" style="padding-bottom: 37px;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-3">
                        <nav class="dashboard-nav mb-10 mb-md-0">
                            <div class="list-group list-group-sm list-group-strong list-group-flush-x">
                                <a class="list-group-item list-group-item-action dropright-toggle active" href="{{route('index')}}">
                          Account Settings
                        </a>
                                <!--<a class="list-group-item list-group-item-action dropright-toggle" href="my-order.html">
                          My Order
                        </a>-->

                                <!--<a class="list-group-item list-group-item-action dropright-toggle" href="edit-profile.html">
                         Edit Profile
                        </a>-->

                                <a class="list-group-item list-group-item-action dropright-toggle" href="{{url('change-password')}}">
                         Change Password
                        </a>


                                <a class="list-group-item list-group-item-action dropright-toggle" href="#">
                          Logout
                        </a>
                            </div>
                        </nav>
                    </div>

                    <div class="col-lg-8 col-md-9">
                        <!-- Total Items -->
                        <div class="card style-2">
                            <div class="card-header">
                                <h2 class="breadcrumbs_title">Account Detail</h2>
                            </div>
                            <div class="card-body">
                                <form class="submit-page">
                                    <div class="row">

                                        <div class="col-12 col-md-12">
                                            <!-- User Image -->
                                            <img src="{{asset('frontend/assets/img/123.jpg')}}" width="100px" alt="fruit boxes">
                                        </div>

                                        <hr style="width:100%;text-align:left;margin-left:0">

                                        <div class="col-12 col-md-6">
                                            <!-- User First Name -->
                                            <div class="form-group">
                                                <span>First Name : <b class="theme-cl">Smitha</b></span>

                                            </div>

                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- User Last Name -->
                                            <div class="form-group">
                                                <span>Last Name : <b class="theme-cl"> Patil </b></span>

                                            </div>

                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- User Email -->
                                            <div class="form-group">
                                                <span>Email : <b class="theme-cl"> smitha@gmail.com </b></span>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- User Phone -->
                                            <div class="form-group">
                                                <span>Phone : <b class="theme-cl">00123445211 </b></span>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- User City -->
                                            <div class="form-group">
                                                <span>City : <b class="theme-cl"> Bangalore </b></span>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- User State -->
                                            <div class="form-group">
                                                <span>State : <b class="theme-cl"> Karnataka </b></span>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- User Pincode -->
                                            <div class="form-group">
                                                <span>Pincode : <b class="theme-cl"> 560078 </b></span>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- User Address -->
                                            <div class="form-group">
                                                <span>Address : <b class="theme-cl"> #123 Bangalore </b></span>

                                            </div>
                                        </div>




                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- =========================== Account Settings =================================== -->
@endsection
