@extends('admin.layouts.app')
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">
            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                </ol>
                <!-- End breadcrumb -->

            </div>
            <!--page-header closed-->
            <!--row open-->
            <div class="row">
                <div class="col-lg-12 col-xl-5 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="userprofile social">
                                    <div class="userpic"> <img src="{{ asset('/storage/admins/'.$admin->photo) }}"
                                            alt=""  class="userpicimg" > </div>
                                    <h3 class="username">{{ $admin->name }}</h3>
                                    {{-- <p>Admin</p> --}}
                                    <!-- <div class="text-center mb-2">
                                        <h3 class="username">{{ $admin->address }}</h3>
                                    </div> -->
                                    <div class="mt-3">
                                        <a href="mailto:admin@gmail.com" class="btn btn-secondary btn-sm mt-1">
                                            <i class="fe fe-envelope followbtn ml-1"></i>{{ $admin->email }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-7 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Admin Details</h4>
                        </div>
                        <div class="card-body">
                          {{-- <p><b>Admin ID :</b> {{$admin->id}}</p> --}}
                            <p><b>Name :</b> {{ $admin->name}}</p>
                            <p><b>Email :</b> {{ $admin->email}}</p>
                            <p><b>Mobile No :</b> {{ $admin->mobile}}</p>
                            <p><b>Address : </b> {{ $admin->address}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->
            <!--row open-->
            <div class="row profile-card">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{ route('admin-profile-update') }}" method="post">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Name" value="{{ $admin->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email" value="{{ $admin->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="text" name="mobile" class="form-control" id="mobile"
                                            placeholder="Enter Phone"  maxlength="10" value="{{ $admin->mobile }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <textarea type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">{{ $admin->address }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Profile Pic </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                            <input type="file" name="photo" class="form-control" id="photo" >

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Change Password</h4>
                        </div>
                        @if (Session::has('flash_success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('flash_success') }}
                            </div>
                        @endif
                        @if (Session::has('flash_danger'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('flash_danger') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ route('admin-change-password') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Old Password</label>
                                        <input type="text" name="oldpass" class="form-control"
                                            id="exampleInputPassword1" placeholder="Old Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword1" placeholder="New Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->
        </section>
    </div>
    <!--app-content closed-->
@endsection
