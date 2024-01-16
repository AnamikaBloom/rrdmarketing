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
                    <li class="breadcrumb-item active" aria-current="page"> Sub Admin </li>
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

                            <form enctype="multipart/form-data" role="form" id="myform" method="post"
                                        action="{{ route('admin-add-control-users') }}">
                                        @csrf

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="fname"> Name:</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder=" Name">
                                                        @if ($errors->has('name'))
                                                        <span class="required text-danger">
                                                               <strong>{{ $errors->first('name') }}</strong>
                                                           </span>
                                                   @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            placeholder="Email ">
                                                                @if ($errors->has('email'))
                                                                     <span class="required text-danger">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                @endif
                                                    </div>

                                                    <div class="form-group">
                                                         <label for="phone">Phone Number:</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Phone Number">
                                                                @if ($errors->has('phone'))
                                                                     <span class="required text-danger">
                                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                                        </span>
                                                                @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password :</label>
                                        <input type="text" class="form-control" id="password" name="password"
                                            placeholder="Password">
                                                        @if ($errors->has('password'))
                                                            <span class="required text-danger">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="price">Status <span class="required text-danger">*</span></label><br>
                                                        <label for="chkYes">
                                                            <input type="radio" class="productstatus" value="Active"
                                                                name="status" checked="" />
                                                            @if ($errors->has('status'))
                                                                 <span class="required text-danger">
                                                                    <strong>{{ $errors->first('status') }}</strong>
                                                                </span>
                                                            @endif
                                                            Active
                                                        </label>
                                                        <label for="chkNo">
                                                            <input type="radio" class="productstatus" value="InActive"
                                                                name="status" />
                                                            @if ($errors->has('status'))
                                                                 <span class="required text-danger">
                                                                    <strong>{{ $errors->first('status') }}</strong>
                                                                </span>
                                                            @endif
                                                            Inactive
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <button id="submit" type="submit" class="btn btn-primary">Create
                                                            New Sub Admin</button>
                                                    </div>
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
