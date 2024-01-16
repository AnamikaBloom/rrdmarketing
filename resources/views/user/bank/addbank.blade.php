@extends('user.layout.app')
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Bank Details </li>
                </ol><!-- End breadcrumb -->

                
            </div>
            <!--page-header closed-->


            <!-- Check Start -->
            <div class="e-panel card">
                <div class="card-header">
                    <h4> Bank Details </h4>
                </div>
            </div>


            <!-- Check End -->

            <!--row open-->
            <div class="row">


                <div class="col-md-12">
                    <div class="card export-database">

                        <div class="card-body">

                            <form @if(!$bankreq) action="{{route('add-bank')}}" @else action="" @endif method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4> Bank Information </h4>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Account Holder Name </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="account_holder_name" placeholder="Enter Account Holder Name" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Account Number </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="account_number" placeholder="Enter Account Number" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Account Type </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="account_type"  placeholder="Enter Account Type">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> IFSC Code </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="ifsc_code" placeholder="Enter IFSC Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Bank Name </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="bank_name"  placeholder="Enter Bank Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Bank Branch </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="branch"  placeholder="Enter Branch Name">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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



