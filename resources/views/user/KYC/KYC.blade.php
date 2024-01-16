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
                    <li class="breadcrumb-item active" aria-current="page"> KYC </li>
                </ol><!-- End breadcrumb -->


            </div>
            <!--page-header closed-->


            <!-- Check Start -->
            <div class="e-panel card">
                <div class="card-header">
                    <h4> KYC </h4>
                </div>

              

            </div>

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">

                        <div class="card-body">

                            <form @if(!$kyc) action="{{route('add.kyc')}}" @else action="" @endif method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4> Upload Documents </h4>

                                    <div class="form-group">
                                        <label for="pan"> Pan Card Image </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="pan" class="custom-file-input" id="pan" accept="image/*">
                                                <label class="custom-file-label" for="pan">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="aadhar_front"> Aadhaar Card Front Image </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="aadhar_front" class="custom-file-input" id="aadhar_front"  accept="image/*">
                                                <label class="custom-file-label" for="aadhar_front">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="aadhar_back"> Aadhaar Card Back Image </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="aadhar_back" class="custom-file-input" id="aadhar_back"  accept="image/*">
                                                <label class="custom-file-label" for="aadhar_back">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="checkbook"> Cancel Cheque Or Bank PassBook Front Page Image
                                        </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="cheq_passbook" class="custom-file-input" id="checkbook"  accept="image/*">
                                                <label class="custom-file-label" for="checkbook">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
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
