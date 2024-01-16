@extends('user.layout.app')
@section('content')

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Orders </li>
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

						<div class="section-body ">

						    <!--row open-->
							<div class="row">
								<div class="col-lg-12">
									<div class="card m-b-20">
										<div class="card-header ">
											<h4> Orders </h4>
										</div>
										<div class="card-body">
											<div class="table-responsive text-nowrap">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th> Product </th>
															<th> Product Name </th>
															<th> Order No. </th>
															<th> Shipping Date </th>
															<th> Price </th>
															<th> Status </th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td> <img src="{{asset('user/assets/img/products/1.jpg') }}"> </td>
															<td> Powder </td>
															<td> 8910563 </td>
															<td> 10 Jul 2022 </td>
															<td> ₹ 89.00 </td>
															<td> In Processing </td>
														</tr>

														<tr>
															<td> <img src="{{asset('user/assets/img/products/1.jpg') }}"> </td>
															<td> Powder </td>
															<td> 8910563 </td>
															<td> 10 Jul 2022 </td>
															<td> ₹ 89.00 </td>
															<td> In Processing </td>
														</tr>

														<tr>
															<td> <img src="{{asset('user/assets/img/products/1.jpg') }}"> </td>
															<td> Powder </td>
															<td> 8910563 </td>
															<td> 10 Jul 2022 </td>
															<td> ₹ 89.00 </td>
															<td> In Processing </td>
														</tr>

													</tbody>
												</table>
											</div>


										</div>
									</div>
								</div>


							</div>
							<!--row closed-->

						</div>
					</section>
				</div>
				<!--app-content closed-->
@endsection
