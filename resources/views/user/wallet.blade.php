@extends('user.layout.app')
@section('content')

     <!--app-content open-->
     <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb"><!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Update Complaint </li>
                </ol><!-- End breadcrumb -->

                
            </div>
            <!--page-header closed-->


            <!--row open-->
        <div class="row">
            <div class="col-lg-6">
                <div class="e-panel card">
                    <div class="card-header">
                        <h4> E-Wallet </h4> </div>
                        <div class="card-body">
                            <div class="card-header">
                            <h3> E-Wallet Balance	Rs : <span> {{@$wallet->amount}} </span></h3>
                            </div>


                        <form>
                            <div class="card-body">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1"> From Date </label>
                                    <input type="date" class="form-control" id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1"> To Date </label>
                                    <input type="date" class="form-control" id="exampleInputEmail1">
                                    </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">View</button>
                        </div>
                      </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> E-Wallet Withdrawal</h4> </div>
                            <div class="card-body">
                            <form>
                                <!--<div class="card-body">
                                        {{-- <div class="form-group">
                                        <label for="exampleInputEmail1"> From Date </label>
                                        <input type="date" class="form-control" id="exampleInputEmail1">
                                        </div>

                                        <div class="form-group">
                                        <label for="exampleInputEmail1"> To Date </label>
                                        <input type="date" class="form-control" id="exampleInputEmail1">
                                        </div> --}}
                            </div>-->
                            <div class="card-footer">
                                {{-- <button type="button" class="btn btn-primary btn-sm update"	id={{ $complaint->id }} mem_id={{ $complaint->user_id }}>Update</button> --}}
                              <!-- <button type="button" class="btn btn-primary update" id={{ $user->id }} mem_id={{ $user->member_id }}>Request</button> -->
                            </div>
                          </form>

                            </div>
                        </div>
                    </div>
            </div>
            <!--row closed-->

            <div class="row">
            <div class="col-lg-12">
                <div class="e-panel card">
                    <div class="card-header">
                        <h4> E-Wallet </h4> </div>
                    <div class="card-body">
                        <div class="">
                            <button type="submit" class="btn btn-primary">Download Excel</button>
                        </div>
                        <form>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No </th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Transaction Particulars</th>
                                            <th scope="col">Credit</th>
                                            <th scope="col">Debit</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            <th scope="row">1</th>
                                            <td>01-Jun-2022</td>
                                            <td>Cash Back Income</td>
                                            <td>200.00</td>
                                            <td>0.00</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>30-May-2022</td>
                                            <td>Total Weekly Payout transferred to bank account</td>
                                            <td>0.00</td>
                                            <td>300.00</td>
                                        </tr>

                                        <tr>
                                            <th colspan="3">Total</th>

                                            <td colspan="">Credit	Rs <span> 200.0 </span>
                                            </td>

                                            <td colspan="2">Credit	Rs <span> 300.0 </span>
                                            </td>
                                        </tr> --}}

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                </div>
            </div>
        </div>


        </section>
        <!-- Modal open -->
					<div class="modal fade"  id="myModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form id="wallet-request-form" class="form-horizontal" action="{{route('wallet-request')}}" method="Post">
                                @csrf

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Request Wallet Amount</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="alert alert-danger" role="alert" style="display: none;">
                                        <span class="error_text"></span>
                                    </div>
                                        <div class="form-group row mb-0">
                                            <input type="hidden" name="id" id="user_id">
                                            <input type="hidden" name="member_id" id="mm_id">


                                            <label class="col-md-3 col-form-label"> Amount</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="request_amount">
                                            </div>
                                        </div><br>
                                        <div class="form-group row mb-0">
                                            <label class="col-md-3 col-form-label"> Comment</label>
                                            <div class="col-md-9">
                                               <textarea name="comment" id="" cols="30" rows="5"   class="form-control" placeholder="Enter Comment"></textarea>
                                            </div>
                                        </div>


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Request</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- Modal closed -->
    </div>
    <!--app-content closed-->

@endsection
@section('script')
			<script>
				$('.update').click(function() {
					var id = $(this).attr('id');
					var member_id = $(this).attr('mem_id');
                    // alert(member_id);
					$("#user_id").val(id);
					$("#mm_id").val(member_id);
					$('#myModal').modal('show');
				});

                $('#wallet-request-form').submit(function (e) {
                    e.preventDefault(); // Prevent the default form submission

                    $('.alert-danger').hide();

                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        success: function (response) {
                            if (response.success) {
                                // Display success message and reload the page after 2 seconds
                                $('.alert-success').show();
                                setTimeout(function () {
                                    location.reload();
                                }, 2000);
                            } else {
                                // Display error message
                                $('.alert-danger').show();
                                $('.error_text').text(response.message);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr.responseText);
                        },
                    });
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



