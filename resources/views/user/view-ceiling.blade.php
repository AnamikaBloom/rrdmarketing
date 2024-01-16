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
											<h4> View Ceiling </h4>
										</div>


									<div class="row">
								<div class="col-12 col-lg-6 col-xl-6 col-sm-6">
									<div class="card">
										<div class="card-header">
											<h4> ID Type </h4>
										</div>
										<div class="card-body text-center">
											<button class="btn btn-danger" onclick="toastr.info('This awesome plugin is made by toastr', 'Hello, world!');"> Plan 1299/-10 Months </button>
										</div>
									</div>
								</div>

								<div class="col-12 col-lg-6 col-xl-6 col-sm-6">
									<div class="card">
										<div class="card-header">
											<h4> Ceiling </h4>
										</div>
										<div class="card-body text-center">
											<button class="btn btn-danger" onclick="toastr.success('This awesome plugin is made by toastr', 'Hello, world!');"> 10 Subscription </button>
										</div>
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
