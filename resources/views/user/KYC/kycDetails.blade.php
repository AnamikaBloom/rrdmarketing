@extends('user.layout.app')
@section('content')
    <!--app-content open-->
    <!--app-content closed-->
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>


                    <li class="breadcrumb-item active" aria-current="page"> KYC Details </li>


                </ol><!-- End breadcrumb -->

            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="e-panel card">
                        <div class="card-header">
                            <h6><em><b>Current  KYC Details</b></em> </h6>
                        </div>
                        <div class="card-body">
                            <div class="e-table">
                                <div class="table-responsive table-lg text-nowrap">
                                    <table class="table table-bordered" id="current_bank">
                                        <thead>
                                            <tr>
                                                <th> Sl.No </th>
                                                <th>Pan Card </th>
                                                <th> Aadhaar Card Front Image </th>
                                                <th>Aadhaar Card Back Image </th>
                                                <th> Cancel Cheque Or Bank PassBook Front Page Image </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($kyc)


                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="{{asset('storage/pan/'.$kyc->pan)}}" target="_blank">View</a>
                                                </td>
                                                <td>
                                                    <a href="{{asset('storage/aadhar/'.$kyc->aadhar_front)}}" target="_blank">View</a>
                                                </td>
                                                <td>
                                                    <a href="{{asset('storage/aadhar/'.$kyc->aadhar_back)}}" target="_blank">View</a>
                                                </td>
                                                <td>
                                                    <a href="{{asset('storage/bank/'.$kyc->cheq_passbook)}}" target="_blank">View</a>
                                                </td>

                                            </tr>
                                            @else
                                            <tr><td colspan="5" style="text-align: center">No Data Found</td></tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="e-panel card">
                        <div class="card-header">
                            <h6><em><b> Update  KYC Details Requests</b></em> </h6>
                        </div>
                        <div class="card-body">
                            <div class="e-table">
                                <div class="table-responsive table-lg text-nowrap">
                                    <table class="table table-bordered" id="bank_req">
                                        <thead>
                                            <tr>
                                                <th> Sl.No </th>
                                                <th>Pan Card </th>
                                                <th> Aadhaar Card Front Image </th>
                                                <th>Aadhaar Card Back Image </th>
                                                <th> Cancel Cheque Or Bank PassBook Front Page Image </th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kycs as $ky)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <a href="{{asset('storage/pan/'.$ky->pan)}}" target="_blank">View</a>
                                                </td>
                                                <td>
                                                    <a href="{{asset('storage/aadhar/'.$ky->aadhar_front)}}" target="_blank">View</a>
                                                </td>
                                                <td>
                                                    <a href="{{asset('storage/aadhar/'.$ky->aadhar_back)}}" target="_blank">View</a>
                                                </td>
                                              <td>  {{-- <td><img src="{{asset('storage/bank/'.$ky->cheq_passbook)}}"> --}}
                                                    <a href="{{asset('storage/bank/'.$ky->cheq_passbook)}}" target="_blank">View</a>
                                                </td>
                                                <td>{{$ky->status}}</td>


                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--row closed-->

        </section>
    </div>
@endsection
