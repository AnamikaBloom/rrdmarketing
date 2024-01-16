@extends('admin.layouts.app')

@section('content')


                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> View Complaint </li>
							</ol><!-- End breadcrumb -->

							
						</div>
						<!--page-header closed-->

						<!--row open-->
						<div class="row">
							<div class="col-lg-12">
								<div class="e-panel card">
									<div class="card-header">
										<h4> View Complaints </h4>
									</div>
									<div class="card-body">
										<div class="e-table">
											<div class="table-responsive table-lg text-nowrap">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th> Sl.No </th>
															<th> Member Id </th>
															<th> Name  </th>
															<th> Phone</th>
															<th> Email </th>
															<th> Reason </th>
															<th> Status </th>
														</tr>
													</thead>

													<tbody>
														@foreach($data as $key=>$item)
														<tr>
															<td class="text-dark"> {{$key+1}} </td>
                                                            @php
                                                            // dd($item->users->member_id);
                                                            @endphp
															<td> {{($item->users)?$item->users->member_id:''}} </td>
                                                            {{-- {{($data->category)?$data->category->name:'No Category Selected'}} --}}
															<td> {{($item->users)?$item->users->name:''}}</td>
															<td> {{$item->phone}} </td>
															<td> {{$item->email}} </td>
															<td> {{$item->reasons}}</td>
															<td> {{$item->status}} </td>
														</tr>
														@endforeach
													</tbody>

												</table>
											</div>

											<div class="d-flex justify-content-center">
												<ul class="pagination mt-3 mb-0">
													<li class="disabled page-item">
														<a class="page-link" href="#">‹</a>
													</li>
													<li class="active page-item">
														<a class="page-link" href="#">1</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">2</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">3</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">4</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">5</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">›</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">»</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->

@endsection
