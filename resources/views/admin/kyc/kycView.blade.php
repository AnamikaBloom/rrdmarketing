@extends('admin.layouts.app')

@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> KYC View</li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->


            <!-- Check Start -->
            <div class="e-panel card">
                <div class="card-header">
                    <h4> Distributor KYC Documents</h4>
                </div>
            </div>


            <!-- Check End -->
            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>
                                                Aadhaar Card Front Image
                                            </th>
                                            <th>Aadhaar Card Back Image</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/aadhar/' . $kyc->aadhar_front) }}"
                                                    style="width: 300px;" />
                                                <a href="{{ URL::to('/') }}/storage/aadhar/{{ @$kyc->aadhar_front }}"
                                                    target="_blank">View</a>

                                            </td>
                                            <td>

                                                <img src="{{ asset('storage/aadhar/' . $kyc->aadhar_back) }}"
                                                    style="width: 300px;" />
                                                <a href="{{ URL::to('/') }}/storage/aadhar/{{ @$kyc->aadhar_back }}"
                                                    target="_blank">View</a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Pan Card
                                            </th>
                                            <th>Cancel Cheque Or Bank PassBook Front Page Image</th>
                                        </tr>

                                        <tr>
                                            <td> <img src="{{ asset('storage/pan/' . $kyc->pan) }}"
                                                    style="width: 300px;" />
                                                <a href="{{ URL::to('/') }}/storage/pan/ {{ @$kyc->pan }}"
                                                    target="_blank">View</a>

                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/bank/' . $kyc->cheq_passbook) }}"
                                                    style="width: 300px;" />
                                                <a href="{{ URL::to('/') }}/storage/bank/{{ @$kyc->cheq_passbook }}"
                                                    target="_blank">View</a>

                                            </td>


                                        </tr>
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
