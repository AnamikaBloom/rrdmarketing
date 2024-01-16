@extends('admin.layouts.app')

@section('content')  

<!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
						
							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Bank Details List </li>
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
							<div class="col-lg-12">
								<div class="e-panel card">
									<div class="card-header">
										<h4> Update Bank details </h4>
									</div>
									<div class="card-body">
										<div class="e-table">
											<div class="table-responsive table-lg text-nowrap">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th> Sl.No </th>
															<th> Name  </th>
															<th> Bank Name </th>
															<th> Account Number </th>
															<th> IFSC Code </th>
															<th> Branch </th>
															<th> Action </th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="text-dark"> 01 </td>
															<td> Shiva </td>
															<td> ICICI Bank </td>
															<td> 1234567890 </td>
															<td> KKBK00001000 </td>
															<td> Malleshwaram </td>
														    <td>
															<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal5">Update</button>
															<button type="button" class="btn btn-sm  btn-primary" onclick="location.href='{{url("admin/edit-bank-details")}}'">Edit</button>
															<button type="button" class="btn btn-sm  btn-primary">Delete</button>
															
															</td>
														</tr>
														
													
													
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