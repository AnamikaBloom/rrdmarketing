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

							<div class="ml-auto">
								<div class="input-group">
									<a href="#" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Add New Account">
										<span>
											<i class="fe fe-plus"></i>
										</span>
									</a>
									<a href="#" class="btn btn-icon btn-info text-white mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Help">
										<span>
											<i class="fe fe-help-circle"></i>
										</span>
									</a>
									<a href="#" class="btn btn-icon btn-danger text-white" data-toggle="tooltip" title="" data-placement="top" data-original-title="Settings">
										<span>
											<i class="fe fe-settings"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
						<!--page-header closed-->



                  <!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card export-database">

									<div class="card-header">
											<h4> My Business </h4>
										</div>


									<div class="card">

										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered mb-0 text-nowrap">
													<tbody><tr class="bg-primary">
														<th> Subscriptions </th>
														<th> Screen 1 </th>
														<th> Screen 2 </th>
													</tr>

													<tr>
														<td> Total Subscriptions </td>
														<td> 1 </td>
														<td> 1 </td>
													</tr>

													<tr>
														<td> Current Subscriptions </td>
														<td> 1 </td>
														<td> 1 </td>
													</tr>

													<tr>
														<td> Non-Subscriber </td>
														<td> 0 </td>
														<td> 0 </td>
													</tr>

													<tr>
														<td> Subscription Level </td>
														<td> 2 </td>
														<td> 2 </td>
													</tr>

													<tr>
														<td> Brought Forward </td>
														<td> 0 </td>
														<td> 0 </td>
													</tr>

													<tr>
														<td> Flushes </td>
														<td> 2 </td>
														<td> 2 </td>
													</tr>

													<tr>
														<td> Inactive </td>
														<td> 0 </td>
														<td> 0 </td>
													</tr>

												</tbody></table>
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
