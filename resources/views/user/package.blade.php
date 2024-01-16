@extends('user.layout.app')
@section('content')
<div class="app-content">
    <section class="section">

        <!--page-header open-->
        <div class="page-header">

            <ol class="breadcrumb">
                <!-- breadcrumb -->
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                <li class="breadcrumb-item active" aria-current="page"> Buy Package </li>
            </ol><!-- End breadcrumb -->

            <div class="ml-auto">

            </div>
        </div>


        <div class="section-body terms">

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Package </h4>
                        </div>
<div class="col-md-12">
<br/>
<br/>
<br/>
@include('user.package-list')
</div>

                        <div class="row" style="display: none;">
                        @foreach ($packages as $package)
                        <form action="{{route('user-package')}}" method="POST">
                            @csrf
                        <div class="card-body">
                            <div class="e-table">
                                <div class="table-responsive table-lg text-nowrap">
                                    <table class="table table-bordered" >
                                        <thead class="text-center">
                                            <tr>
                                                <th colspan="2">{{$package->name}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Purchase Amount:
                                                </td>
                                                <td>{{$package->amount}}/-</td>
                                            </tr>
                                            <tr>
                                                <td>Stock Amount:
                                                </td>
                                                <td>{{$package->amount}}/-</td>
                                            </tr>
                                            <tr>
                                                {{-- <td>GST Amount ({{$package->gst}}%): --}}
                                                </td>
                                                {{-- <td>{{($package->amount*$package->gst)/100}}/-</td> --}}
                                            </tr>
                                            <tr>
                                                <td>Total Amount:
                                                </td>
                                                @php
                                                    $total=$package->amount
                                                    
                                                @endphp
                                                <input type="text" name="amount" value="{{$total}}" readonly hidden>
                                                <input type="text" name="package_id" value="{{$package->id}}" readonly hidden>
                                                <td>{{$total}}/-</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <p class="text-center">
                            <!-- <input type="submit" class="btn btn-primary " value="Buy Package"> -->
                            </p>
                        </div>
                    </form>
                        @endforeach
                    </div>



                    </div>
                </div>
            </div>
        </div>
        <!--row closed-->

</div>

@endsection
