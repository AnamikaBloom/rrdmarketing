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
                            <h4> Add Sub Admin </h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin-add-control-access') }}" method="POST">
                                @csrf

                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="lname">Select User :</label>
                                                <select class="form-select form-control" name="adminId">
                                                    <option value="">Select Sub Admin</option>
                                                    @foreach ($admins as $admin)
                                                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                                @endforeach


                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="1"
                                                id="home">
                                            <label>
                                                Home
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="2"
                                                id="KYC">
                                            <label>
                                                KYC
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="3"
                                                id="Wallets">
                                            <label>
                                                Wallets
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="4"
                                                id="TOtal-Members">
                                            <label>
                                                Total Members
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="5"
                                                id="Account-Department">
                                            <label>
                                                Account Department
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="6"
                                                id="Ecommerce">
                                            <label>
                                                E-commerce
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="7"
                                                id="Packages">
                                            <label>
                                                Packages
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="8"
                                                id="Rank">
                                            <label>
                                                Rank
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="9"
                                                id="Id-Card">
                                            <label>
                                                ID Cards
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="10"
                                                id="Blogs">
                                            <label>
                                                Blogs
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="11"
                                                id="FAQ">
                                            <label>
                                                Faq
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="12"
                                                id="Banner">
                                            <label>
                                                Banner
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="13"
                                                id="Testimonials">
                                            <label>
                                                Testimonials
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="14"
                                                id="Reports">
                                            <label>
                                                Reports
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="15"
                                                id="Bank-Account-Details">
                                            <label>
                                                Bank Account Details
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="16"
                                                id="Invoices">
                                            <label>
                                                Invoices
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="17"
                                                id="Complaint-Report">
                                            <label>
                                                Complaint Report
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="18"
                                                id="Control-Access">
                                            <label>
                                                Control Access
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="menu[]" value="19"
                                                id="Admin-Profile">
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
