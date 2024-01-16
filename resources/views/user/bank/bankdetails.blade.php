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


                    <li class="breadcrumb-item active" aria-current="page"> Bank </li>


                </ol><!-- End breadcrumb -->

            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="e-panel card">
                        <div class="card-header">
                            <h6><em><b>Current Bank Details</b></em> </h6>
                        </div>
                        @if (Session::has('flash_error'))
    <div class="alert alert-danger" style="color: black;">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! Session::get('flash_error') !!}
    </div>
@endif

@if (Session::has('flash_success'))
    <div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! Session::get('flash_success') !!}
    </div>
@endif

                        <div class="card-body">
                            <div class="e-table">
                                <div class="table-responsive table-lg text-nowrap">
                                    <table class="table table-bordered" id="current_bank">
                                        <thead>
                                            <tr>
                                                <th> Sl.No </th>

                                                <th> Name </th>
                                                <th> Bank Name </th>
                                                <th> Account Number </th>
                                                <th> Account Type </th>
                                                <th> IFSC Code </th>
                                                <th> Branch </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($bankreq)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$bankreq->account_holder_name}}</td>
                                                <td>{{$bankreq->bank_name}}</td>
                                                <td>{{$bankreq->account_number}}</td>
                                                <td>{{$bankreq->account_type}}</td>
                                                <td>{{$bankreq->ifsc_code}}</td>
                                                <td>{{$bankreq->branch}}</td>
                                            </tr>
                                            @else
                                            <tr><td colspan="7" style="text-align:center">
                                                No Data Found
                                                </td>
                                               </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="e-panel card">
                        <div class="card-header">
                            <h6><em><b> Update Bank details Requests</b></em> </h6>
                        </div>
                        <div class="card-body">
                            <div class="e-table">
                                <div class="table-responsive table-lg text-nowrap">
                                    <table class="table table-bordered" id="bank_req">
                                        <thead>
                                            <tr>
                                                <th> Sl.No </th>
                                                <!-- <th> Request Number </th> -->
                                                <th> Name </th>
                                                <th> Bank Name </th>
                                                <th> Account Number </th>
                                                <th> Account Type </th>
                                                <th> IFSC Code </th>
                                                <th> Branch </th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($bankRequests as $bankRequest)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <!-- <td>{{$bankRequest->request_no}}</td> -->
                                                <td>{{$bankRequest->account_holder_name}}</td>
                                                <td>{{$bankRequest->bank_name}}</td>
                                                <td>{{$bankRequest->account_number}}</td>
                                                <td>{{$bankRequest->account_type}}</td>
                                                <td>{{$bankRequest->ifsc_code}}</td>
                                                <td>{{$bankRequest->branch}}</td>
                                                <td>{{$bankRequest->status}}</td>
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
