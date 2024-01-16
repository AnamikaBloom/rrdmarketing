@extends('admin.layouts.app')

@section('content')  

 <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
						
							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> View Control Access </li>
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
										<h4> View Control Access Details </h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
														<th> Name </th>
														<th> Dashboard </th>
														<th> News Publish </th>
														<th> Comments </th>
														<th> Vendor List </th>
														<th> User List  </th>
														<th> Action </th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td> Ajit </td>
														<td> Yes </td>
														<td> No </td>
														<td> No </td>
														<td> No </td>
														<td> No </td>
													    <td> No </td>
														<td> 
														<button type="button" class="btn btn-sm  btn-primary" onclick="location.href='{{url("admin/edit-control-access")}}'">Edit</button>
														    <button type="button" class="btn btn-sm  btn-primary">Delete</button>	
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
				<!--app-content closed-->

@endsection