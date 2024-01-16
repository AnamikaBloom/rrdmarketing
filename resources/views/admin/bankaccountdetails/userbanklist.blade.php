@extends('admin.layouts.app')
@section('content')
<div class="app-content">
    <section class="section">

        <!--page-header open-->
        <div class="page-header">

            <ol class="breadcrumb"><!-- breadcrumb -->
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                <li class="breadcrumb-item active" aria-current="page"> Bank Details List </li>
            </ol><!-- End breadcrumb -->

            
        </div>
        <!--page-header closed-->

        <!--row open-->
         <div class="row">
            <div class="col-lg-12">
                <div class="e-panel card">
                    <div class="card-header">
                        <h4> User Bank details </h4>
                    </div>
                    @if(Session::has('flash_success'))
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
                    @endif
                    <div class="card-body">
                        <div class="e-table">
                            <div class="table-responsive table-lg text-nowrap">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> Sl.No </th>
                                            <th> User Id </th>
                                            <th> User Name  </th>
                                            <th> Account Holder name  </th>
                                            <th> Bank Name </th>
                                            <th> Account Number </th>
                                            <th> IFSC Code </th>
                                            <th> Branch </th>
                                            <th> Status </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($all_bank_request)
                                         @foreach($all_bank_request as $bank_request)
                                        <tr>
                                            <td class="text-dark">{{$loop->iteration}}</td>
                                            <td> {{$bank_request->user->member_id}} </td>
                                            <td> {{ $bank_request->user->name }}</td>
                                            <td> {{$bank_request->account_holder_name}}  </td>
                                            <td> {{$bank_request->bank_name}}  </td>
                                            <td> {{$bank_request->account_number}}  </td>
                                            <td>{{$bank_request->ifsc_code}}</td>
                                            <td> {{$bank_request->branch}}</td>
                                            <td> {{$bank_request->status}}</td>

                                            <td>
                                                @if ($bank_request->status == 'Pending')
                                                    <button type="button" class="btn btn-primary btn-sm update"
                                                                id={{ $bank_request->id }} mem_id={{ $bank_request->user_id }}>Update</button>
                                                    @else
                                                            Close
                                                                @endif
                                                <form id="resource-delete-{{$bank_request->id}}" action="{{route('admin-userbanklist-delete',['id'=>$bank_request->id])}}"  style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
                                                        @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                      @method('POST')
                                                </form>

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
        </div>
        <!--row closed-->

    </section>
</div>





        <!-- Modal open -->
        <div class="modal fade"  id="myModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" action="{{route('admin-userbanklist')}}" method="Post">
                        @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Bank Request</h5>
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



