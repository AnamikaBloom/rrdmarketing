@extends('layouts.app')

@section('content')

 <!-- End header area -->
 <main class="main__content_wrapper">
        
 <h1 class="text-center"><br/>Change Password</h1>

   <!-- =========================== Account Settings =================================== -->
        <section class="gray" style="padding-bottom: 37px;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-3">
                        <nav class="dashboard-nav mb-10 mb-md-0" style="margin-top: 20px;">
                            <div class="list-group list-group-sm list-group-strong list-group-flush-x">
                                <a class="list-group-item list-group-item-action dropright-toggle active" href="{{url('account')}}">
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
                        <div class="card style-2"style="width:80%;margin: 0 auto;margin-top: 20px;">
                            <!--<div class="card-header">
                                <h2 class="breadcrumbs_title">Account Detail</h2>
                            </div>-->
                            <div class="card-body">
                                <form class="submit-page">
                                    <div class="row">

                                        

                                       
                                       <div class="col-12 col-md-12">
                                            <!-- Password -->
                                            <div class="form-group">
                                                <input class="form-control" type="password" placeholder="Current Password *" required="">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-12">
                                            <!-- Password -->
                                            <div class="form-group">
                                                <input class="form-control" type="password" placeholder="New Password *" required="">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-12">
                                            <!-- Password -->
                                            <div class="form-group">
                                                <input class="form-control" type="password" placeholder="Confirm Password *" required="">
                                            </div>
                                        </div>
                                                                            
                                        <div class="col-12">
                                            <button class="btn btn-dark" type="submit">Update</button>
                                            
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