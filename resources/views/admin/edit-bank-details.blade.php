@extends('admin.layouts.app')

@section('content')  

	

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
						
							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Edit Bank Details List </li>
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
							<div class="col-lg-6">
								<div class="e-panel card">
									<div class="card-header">
										<h4> Update Bank Details </h4>
									</div>
									<div class="card-body">
										
										<form>
                <div class="card-body">
				  
				<div class="form-group">
                    <label for="exampleInputEmail1"> Name </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                </div>  
				  
			    <div class="form-group">
                    <label for="exampleInputEmail1"> Bank Name </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bank Name">
                </div>
				
				<div class="form-group">
                    <label for="exampleInputEmail1"> Account Number </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Account Number">
                </div>
				
				<div class="form-group">
                    <label for="exampleInputEmail1"> IFSC Code </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="IFSC Code">
                </div>
				
				<div class="form-group">
                    <label for="exampleInputEmail1">  Branch </label>
                   <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Branch">
                </div>
				
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
				
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->


@endsection