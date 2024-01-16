@extends('admin.layouts.app')

@section('content')  


                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
						
							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Packages </li>
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
										<h4> Add Packages </h4>
									</div>
									<div class="card-body">
										
										<form>
			  
			  
			  <!-- Personal Details Code Start -->
			  <div class="row">
			   <div class="col-md-6">
			  
                <div class="card-body">
				
				
				
					<div class="form-group">
						<label for="exampleInputEmail1"> Level of Income </label>
										<select class="form-control">
											 <option> Select Level of Income </option>
                                             <option> Pearl Star </option>
                                             <option> Platinum Star </option>
                                             <option> Silver Star </option>
											 <option> Gold Star </option>
                                             <option> Ruby Star </option>
                                             <option> Diamond Star </option>
                                             <option> Global Diamond Star </option>
											  <option> Crown Diamond Star </option>
                                        </select>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1"> Amount </label>
										<select class="form-control">
											 <option> Select Amount </option>
                                             <option> 9000  </option>
                                             <option> 21000 </option>
                                             <option> 36000 </option>
                                        </select>
					</div>
					
				    <div class="form-group">
						<label for="exampleInputEmail1"> GST  </label>
										<select class="form-control">
											 <option> Select GST </option>
                                             <option> 18%  </option>
                                             <option> 27% </option>
                                             <option> 36% </option>
                                        </select>
					</div>
					
						
					
					
					
                </div>
                <!-- /.card-body -->
				
				</div> 
				
			</div>
			
			
			<!-- Personal Details Code End -->
	
            
				
		  <div class="row">
		 <div class="col-md-6">

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
				  <button type="submit" class="btn btn-success">Cancel</button>
                </div>
				
				
				</div> 
				</div>
				<!-- Final Details Code End -->
              </form>
			  
			  
			  <!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card export-database">
									<div class="card-header">
										<h4> Package Details </h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
														<th>Sl No</th>
														<th> Package Name </th>
														<th> Amount </th>
														<th> GST </th>
														<th>Total</th>
														<th> Action </th>
												
													</tr>
												</thead>
												<tbody>
													<tr>
														<td> 1 </td>
														<td> Joing Package </td>
														<td>  3500 </td>
														<td> 18% </td>
														<td> RS. 3600 </td>

				
														<td> 
															<a href="{{url('admin/update-package')}}"> <button type="button" class="btn btn-primary"> Update </button> </a>
															<button type="button" class="btn btn-primary"> Delete </button>
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
						
						
				
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->
               
				

@endsection