@extends('admin.layouts.app')

@section('content')    


                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
						
							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Products </li>
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
						
						
						<div class="row">
							<div class="col-lg-12">
								<div class="e-panel card">
									<div class="card-header">
										<h4> Add Products </h4>
									</div>
									<div class="card-body">
										
										<form>
			  
			  
			  <!-- Personal Details Code Start -->
			  <div class="row">
			   <div class="col-md-6">
			  
                <div class="card-body">
				
				
				
					<div class="form-group">
						<label for="exampleInputEmail1"> Sl.no </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sl.no">
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1"> Images : </label>
						<input type="file" id="myFile" name="filename">
					</div>
					
				    <div class="form-group">
						<label for="exampleInputEmail1"> Product Name  </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
					</div>
					
					<div class="form-group">
                    <label for="exampleInputEmail1">  Specification </label>
                   <textarea class="form-control" id="Reason" name="Specification" rows="4" cols="50">				 </textarea>
                </div>	
					
					
					
                </div>
                <!-- /.card-body -->

           
				
				</div> 
				
				
		   <div class="col-md-6">
			  
                <div class="card-body">
				  
		            <div class="form-group">
						<label for="exampleInputEmail1"> Price </label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Price">
					</div>
				
		
					<div class="form-group">
                                       <label class="col-form-label"> Category </label>
                           
                                            <select class="form-control">
                                             <option> Dress </option>
											 <option> Belts </option>
                                            </select>
                                       
					</div>
					
					
					<div class="form-group">
                                       <label class="col-form-label"> Sub Category </label>
                                       
                                            <select class="form-control">
                                             <option> Men Dress </option>
											 <option> Women Belts </option>
                                            </select>

					</div>
					
					
				<div class="form-group">
                    <label for="exampleInputEmail1">  Description </label>
                   <textarea class="form-control" id="Reason" name="Description" rows="4" cols="50">				 </textarea>
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
										<h4> Details </h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
												<thead>
													<tr>
														<th>Sl No</th>
														<th> Image </th>
														<th> Product Name </th>
														<th> Price </th>
														<th> Category </th>
														<th> Sub Category </th>
														<th> Description </th>
														<th> Specification </th>
														<th> Action </th>
												
													</tr>
												</thead>
												<tbody>
													<tr>
														<td> 1 </td>
														<td>  </td>
														<td>  Dress </td>
														<td> 1500 </td>
														<td> Dress </td>
														<td> Men Dress </td>
														<td> Dress Material </td>
														<td> 5 </td>

				
														<td>
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
						
						
						
                        <!--row open-->
						<div class="row">
							<div class="col-md-12 col-lg-12 col-xl-8">
								
								<div class="">
									<ul class="pagination">
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
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->

@endsection