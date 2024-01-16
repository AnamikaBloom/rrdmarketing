
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
							<div class="col-md-7">
								<div class="card export-database">

									<div class="card-body">

										<form>
                <div class="card-body">

			    <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>

				<div class="form-group">
                    <label for="exampleInputEmail1">Select Payment Mode</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>

			    <div class="form-group">
                    <label for="exampleInputEmail1">Select Bank</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

				<div class="form-group">
                    <label for="exampleInputEmail1"> Deposit Date   </label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

				<div class="form-group">
                    <label for="exampleInputEmail1"> Deposit Time  </label>
                    <input type="time" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>



				  <div class="form-group">
                    <label for="exampleInputFile"> Upload Receipt </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
