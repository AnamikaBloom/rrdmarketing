@extends('admin.layouts.app')

@section('content')  

<!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
						
						<h1 class="text-center"><br/>Privacy Policy</h1>
							
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
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4>Privacy Policy</h4>
									</div>
									<div class="card-body">
										<form method="post">
											<textarea id="elm1" name="area">Privacy Policy</textarea>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->
					</section>
				</div>
				<!--app-conetnt closed-->

@endsection