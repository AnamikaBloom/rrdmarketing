@extends('admin.layouts.app')

@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Packages </li>
                </ol><!-- End breadcrumb -->
                
            </div>
            <!--page-header closed-->
            @if (\Session::has('error'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {!! \Session::get('error') !!}
</div>
@endif

@if (\Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {!! \Session::get('success') !!}
</div>
@endif
            <!--row open-->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Latest Purchased Packages </h4>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
							

                        <table class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                <th>Trips</th>
                                <th>Expedition</th>
                                <th>Packages</th>
                                <th>Duration</th>
                                <th>Amount</th>
                                <th>Payment Mode</th>
                                <th>Purchase Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($user_packages as $index=>$package)
                            @php $package_details = $package->Package; @endphp
                                <tr>
                                <td>{{$package_details->name}}</td>
                                <td>{{$package_details->expedition}}</td>
                                <td>{{$package_details->amount}}</td>
                                <td>{{$package_details->duration}} X 369</td>
                                <td>{{$package_details->packages}}</td>
                                <td>{{$package->payment_type}}</td>
                                <td>{{date('d-m-Y',strtotime($package->created_at))}} @if($index==0)<span class="text-danger">Active</span>@endif</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>



                       </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->
            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4> Buy Package Offline</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>User Name</th>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <td>{{$user->mobile}}</td>
                                    </tr>
                                    <tr>
                                        <th>Sponser ID</th>
                                        <td>{{$user->sponser_id}}</td>
                                    </tr>
                                </table>
                            <table class="table table-hover table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                    <th>Trips</th>
                                    <th>Expedition</th>
                                    <th>Packages</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($packages as $package)
                                    <tr>
                                    <td>{{$package->name}}</td>
                                    <td>{{$package->expedition}}</td>
                                    <td>{{$package->amount}}</td>
                                    <td>{{$package->duration}} X 369</td>
                                    <td>{{$package->packages}}</td>
                                    <td>
                                        <a href="{{url('admin/purchase-package-admin')}}?user_id={{$user->id}}&package_id={{$package->id}}"> <button type="button" class="btn btn-primary" onclick="return confirm('Are you sure?\nYou can to buy this package?');"> Buy Offline </button> </a>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->

        </section>
    </div>
@endsection
