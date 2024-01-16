@extends('admin.layouts.app')

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
							<div class="col-lg-12">
								<div class="e-panel card">
									<div class="card-header">
										<h4> Update Complaints </h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
												<thead>
													<tr>
														<th> Sl no </th>
														<th> User Id </th>
														<th> Name </th>


														{{-- <th> Submited Date </th> --}}
														<th> Status </th>
														<th> Action </th>
													</tr>
												</thead>
												<tbody>

													@if ($complaints)
														@foreach ($complaints as $complaint)
															<tr>
																<td> {{ $loop->iteration }}</td>
                                                                <td> {{($complaint->users)?$complaint->users->member_id:''}} </td>
																{{-- <td> {{ $complaint->user->member_id  }} </td> --}}
																{{-- <td> {{ $complaint->user->name }}</td> --}}
                                                                <td> {{($complaint->users)?$complaint->users->name:''}}</td>

																{{-- <td> {{ $complaint->created_at->format('d-m-y') }} </td> --}}
																<td> {{ $complaint->status }} </td>
																<td>





																	@if ($complaint->status == 'Pending')
																	<button type="button" class="btn btn-primary btn-sm update"
																	id={{ $complaint->id }} mem_id={{ $complaint->user_id }}>Update</button>
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
								<form class="form-horizontal" action="{{route('complaints')}}" method="Post">
									@csrf

								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Update Complaint Report</h5>
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
