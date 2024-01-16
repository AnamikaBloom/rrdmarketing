@extends('admin.layouts.app')

@section('content')    
  <!--app-content open-->
  <div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
						
							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Add Invoice </li>
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
										<h4> Add Invoice </h4>
									</div>
									<div class="card-body">
										
										<form>
			  
			  
			  <!-- Personal Details Code Start -->
			  <div class="row">
			   <div class="col-md-6">
			  
                <div class="card-body">
				
				
				
					<div class="form-group">
						<label for="exampleInputEmail1">Customer Name</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Customer Name">
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Email </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email ">
					</div>
					
				    <div class="form-group">
						<label for="exampleInputEmail1">Phone  </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone ">
					</div>
					
						
					
					
					
                </div>
                <!-- /.card-body -->

           
				
				</div> 
				
				
		   <div class="col-md-6">
			  
                <div class="card-body">
				  
		            <div class="form-group">
						<label for="exampleInputEmail1"> City </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="City">
					</div>
				
		
						<div class="form-group">
						<label for="exampleInputEmail1"> State   </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="State">
					</div>
					
					
					<div class="form-group">
						<label for="exampleInputEmail1"> Pin Code </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pin Code">
					</div>
				
					
				  </div>
                <!-- /.card-body -->

				
				</div> 
				
			</div>
			
			
			<div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title"> Details of Products </h4>
                     </div>
                  </div>
				  
			<div class="row">
			   <div class="col-md-6">
			  
               <div class="card-body">
				
				
				
					<div class="form-group">
						<label for="exampleInputEmail1"> Product Name </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1"> No of Products </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="No of Products">
					</div>
                </div>
                <!-- /.card-body -->

           
				
				</div> 
				
				
		   <div class="col-md-6">
			  
                <div class="card-body">
				  
		            <div class="form-group">
						<label for="exampleInputEmail1"> Add GST </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Name">
					</div>
				
		
					<div class="form-group">
						<label for="exampleInputEmail1"> Total  </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Branch Code">
					</div>
					
					
					<div class="form-group">
						<label for="exampleInputEmail1"> Total in Words   </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Branch Address">
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
			  

				
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->
@endsection