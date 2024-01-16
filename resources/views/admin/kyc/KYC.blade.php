@extends('admin.layouts.app')

@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> KYC </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->


            <!-- Check Start -->
            <div class="e-panel card">
                <div class="card-header">
                    <h4> Distributor KYC </h4>
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
                                            <th> Sl no </th>
                                            <th> User Id </th>
                                            <th> Name </th>
                                            <th> Photo </th>

                                            <th> Submited Date </th>
                                            <th> Status </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($all_kyc_request)
                                            @foreach ($all_kyc_request as $kyc_request)
                                                <tr>
                                                    <td> {{ $loop->iteration }}</td>
                                                    <td> {{ $kyc_request->user->member_id }} </td>
                                                    <td> {{ $kyc_request->user->name }}</td>
                                                    <td>
                                                        <a href="{{ route('admin-kyc-view', $kyc_request->id) }}">view</a>
                                                        {{-- <img src="assets/img/.jpg"> --}}
                                                    </td>
                                                    <td> {{ $kyc_request->created_at->format('d-m-y') }} </td>
                                                    <td> {{ $kyc_request->status }} </td>
                                                    <td>
                                                        @if ($kyc_request->status == 'Pending')
                                                        <button type="button" class="btn btn-primary btn-sm update"
                                                        id={{ $kyc_request->id }} mem_id={{ $kyc_request->user_id }}>Update</button>
                                                        @else
                                                            Close
                                                    @endif

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->

        </section>

        <!-- Modal open -->
        <div class="modal fade"  id="myModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" action="{{route('kyc')}}" method="Post">
                        @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update KYC Report</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                                <div class="form-group row mb-0">
                                    <input type="hidden" name="id" id="up_id">
                                    <input type="hidden" name="user_id" id="mm_id">


                                    <label class="col-md-3 col-form-label"> Select</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="status">
                                            <option value=""> Select Permission </option>
                                            <option value="Approved"> Approved </option>
                                            <option value="Rejected"> Rejected </option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="form-group row mb-0">
                                    <label class="col-md-3 col-form-label"> Reason</label>
                                    <div class="col-md-9">
                                       <textarea name="reasons" id="" cols="30" rows="5"   class="form-control" placeholder="Enter Reason"></textarea>
                                    </div>
                                </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- Modal closed -->
    </div>
@endsection
@section('script')
<script>
    $('.update').click(function() {
        var id = $(this).attr('id');
        var member_id = $(this).attr('mem_id');
        $("#up_id").val(id);
        $("#mm_id").val(member_id);
        $('#myModal').modal('show');
    });
</script>
@if (Session::has('flash_success'))
<script>
    swal('Great Job !!',"{!!Session::get('flash_success')!!}","success",{
        button:"Ok",
    });
</script>

@endif
@endsection
