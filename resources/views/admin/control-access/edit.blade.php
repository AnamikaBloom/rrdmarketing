@extends('admin.layouts.app')
@section('title', ' RRD 369 Marketing ')
@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Control Access Admin </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->
            <!-- form start -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        @include('admin.notifications')
                        <div class="card-header">
                            <h4> Edit Control Access </h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin-edit-control-access', $admin->id) }}" method="POST">
                                @csrf

                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="lname">Select User :</label>
                                                <select class="form-select form-control" name="adminId">
                                                    <option value="">Select Sub Admin</option>
                                                    <option value="{{ $admin->id }}" selected>{{ $admin->name }}</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="1"
                                                id="home" @if (in_array(1, $menus)) checked @endif>
                                            <label>
                                                Home
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="2"
                                                id="KYC" @if (in_array(2, $menus)) checked @endif>
                                            <label>
                                                KYC
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="3"
                                                id="Wallets" @if (in_array(3, $menus)) checked @endif>
                                            <label>
                                                Wallets
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="4"
                                                id="TOtal-Members" @if (in_array(4, $menus)) checked @endif>
                                            <label>
                                                Total Members
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="5"
                                                id="Account-Department" @if (in_array(5, $menus)) checked @endif>
                                            <label>
                                                Account Department
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="6"
                                                id="Ecommerce" @if (in_array(6, $menus)) checked @endif>
                                            <label>
                                                E-commerce
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="7"
                                                id="Packages" @if (in_array(7, $menus)) checked @endif>
                                            <label>
                                                Packages
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="8"
                                                id="Rank" @if (in_array(8, $menus)) checked @endif>
                                            <label>
                                                Rank
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="9"
                                                id="Id-Card" @if (in_array(9, $menus)) checked @endif>
                                            <label>
                                                ID Cards
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="10"
                                                id="Blogs" @if (in_array(10, $menus)) checked @endif>
                                            <label>
                                                Blogs
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="11"
                                                id="FAQ" @if (in_array(11, $menus)) checked @endif>
                                            <label>
                                                Faq
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="12"
                                                id="Banner" @if (in_array(12, $menus)) checked @endif>
                                            <label>
                                                Banner
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="13"
                                                id="Testimonials" @if (in_array(13, $menus)) checked @endif>
                                            <label>
                                                Testimonials
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="14"
                                                id="Reports" @if (in_array(14, $menus)) checked @endif>
                                            <label>
                                                Reports
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="15"
                                                id="Bank-Account-Details" @if (in_array(15, $menus)) checked @endif>
                                            <label>
                                                Bank Account Details
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="16"
                                                id="Invoices" @if (in_array(16, $menus)) checked @endif>
                                            <label>
                                                Invoices
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="17"
                                                id="Complaint-Report" @if (in_array(17, $menus)) checked @endif>
                                            <label>
                                                Complaint Report
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="18"
                                                id="Control-Access" @if (in_array(18, $menus)) checked @endif>
                                            <label>
                                                Control Access
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="18"
                                                id="Admin-Profile" @if (in_array(19, $menus)) checked @endif>
                                            <label>
                                                Admin Profile
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <button id="submit" type="submit" class="btn btn-primary">Create
                                                New Control Access Admin</button>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
