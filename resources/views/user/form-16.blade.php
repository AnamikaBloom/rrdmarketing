
@extends('user.layout.app')
@section('content')

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Fund Transaction </li>
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
						<!--<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4> VC Card </h4>
									</div>
									<div class="card-body">
										<form method="post">
											<textarea id="elm1" name="area"> VC Card </textarea>
										</form>
									</div>
								</div>
							</div>
						</div>-->

						<div class="section-body terms">

							<!--row open-->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4> Form 16 </h4>
										</div>
										<div class="card-body">

							<div id="main">

                                        <div id="name" class="margin-bottom-20">

											<img src="{{asset('header_front_end/assets/images/logo/logo.png') }}">

                                         </div>

                                </div>



            </div>
									</div>
								</div>
							</div>
							<!--row closed-->

						</div>


						<!--row closed-->
					</section>
				</div>
				<!--app-conetnt closed-->

@endsection
