@extends('user.layout.app')
@section('content')



	            <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Direct Team </li>
							</ol><!-- End breadcrumb -->

							
						</div>
						<!--page-header closed-->



                  <!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card export-database">

									<div class="card-header">
											<h4> My Directs </h4>
										</div>


									<div class="card-body">
										<h4> Screen 1 </h4>
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >

												<thead>
													<tr>
															<th> Sl.No </th>
															<th> User ID </th>
															<th> Name </th>
															<th> Status </th>
															<th> Reg Date </th>
														</tr>
												</thead>

												<tbody>
                                                    @foreach ($users as $user)
                                                    <tr>
														<td class="text-dark">{{$loop->iteration}} </td>
															<td> {{$user->member_id}}</td>
															<td> {{$user->name}} </td>

															<td>{{$user->status}}  </td>
															<td>{{$user->created_at->format('d-m-Y')}}</td>
													</tr>
                                                    @endforeach
												</tbody>
											</table>
                                            {{$users->links('pagination::bootstrap-4')}}
										</div>
									</div>


									{{-- <div class="card-body">
										<h4> Screen 2 </h4>
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >

												<thead>
													<tr>
															<th> Sl.No </th>
															<th> User ID </th>
															<th> Name </th>
															<th> ID Type </th>
															<th> Status </th>
															<th> Reg Date </th>
														</tr>
												</thead>

												<tbody>
													<tr>
														<td class="text-dark"> 01 </td>
															<td> 63xxxxxx83 </td>
															<td> MANJULA </td>
															<td> Plan 1299/-10 Months </td>
															<td> Subscriber </td>
															<td> 26-May-2022 </td>
													</tr>

													<tr>
														<td class="text-dark"> 02 </td>
															<td> 63xxxxxx83 </td>
															<td> MANJULA </td>
															<td> Plan 1299/-10 Months </td>
															<td> Subscriber </td>
															<td> 26-May-2022 </td>
													</tr>

												</tbody>
											</table>
										</div>
									</div> --}}

								</div>
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->


		<!-- Update Report Modal Start -->
					<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Update Report</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="card-body">
										<form class="form-horizontal" >
												<div class="form-group row mb-0">
												<label class="col-md-3 col-form-label"> Select</label>
												<div class="col-md-9">
													<select class="form-control">
														<option> Active </option>
														<option> Unactive </option>

													</select>
												</div>
											</div>

										</form>
									</div>
							</div>
							<div class="modal-footer">
							    <button type="button" class="btn btn-primary">Save changes</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

							</div>
						</div>
					</div>
				</div>
				<!-- Modal closed -->


		<!-- Update Report Modal End -->
		<!--DataTables js-->
<script src="{{asset('user/assets/plugins/Datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{asset('user/assets/plugins/Datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{asset('user/assets/plugins/Datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{asset('user/assets/plugins/Datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{asset('user/assets/plugins/Datatable/js/jszip.min.js') }}"></script>
<script src="{{asset('user/assets/plugins/Datatable/js/pdfmake.min.js') }}"></script>
<script src="{{asset('user/assets/plugins/Datatable/js/vfs_fonts.js') }}"></script>
<script src="{{asset('user/assets/plugins/Datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{asset('user/assets/plugins/Datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('user/assets/plugins/Datatable/js/buttons.colVis.min.js')}}"></script>



@endsection
