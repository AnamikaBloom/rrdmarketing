@extends('user.layout.app')
@section('content')



                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Genealogy Tree </li>
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
											<h4> Genealogy Tree </h4>
										</div>

									<div class="row card-body">
										<div class="col-md-3">
											<h5 style="color: white;">
												User ID</h5>
											<label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label>
										</div>
									</div>



							<!--row open-->
						<div class="row">
							<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-body">
										<table class="table" align="center" border="0" style="text-align:center" id="myTable">
						<tbody>


						<tr height="10">
						<td colspan="13">
							<img class="profile-user-img img-fluid img-circle" style="margin-top:10%;" src="{{asset('user/assets/img/avatar2.png') }}" alt="User profile picture">
							<p>Manjula<br>
							89XXXXXX33<br>
							Plan 1299/-10 Months<br></p>
						</td>
						</tr>



							<tr height="50">

						<td colspan="8">
						<img src="{{asset('user/assets/img/screen1.png') }}"><br><br>
						<a href="">
						<img class="profile-user-img img-fluid img-circle" src="{{asset('user/assets/img/avatar4.png') }}" alt="User profile picture"><p> Manjula <br>
							89XXXXXX33</p></a></td>

						<td colspan="8">
						<img src="{{asset('user/assets/img/screen2.png') }}"><br><br>
						<a href="">
						<img class="profile-user-img img-fluid img-circle" src="{{asset('user/assets/img/avatar3.png') }}" alt="User profile picture"><p> Manjula <br>
							89XXXXXX33 </p></a></td>
						</tr>


							<tr height="50">


						<td colspan="4"><a href="">
						<img class="profile-user-img img-fluid img-circle" src="{{asset('user/assets/img/avatar3.png') }}" alt="User profile picture"><p>Manjula <br>
							89XXXXXX33</p></a></td>


						<td colspan="4">

						<a href="">
						<img class="profile-user-img img-fluid img-circle" src="{{asset('user/assets/img/avatar5.png') }}" alt="User profile picture"><p> Manjula <br>
							89XXXXXX33</p></a></td>

						<td colspan="4"><a href="treeview.php?search-id=TL000182">
						<img class="profile-user-img img-fluid img-circle" src="{{asset('user/assets/img/avatar2.png') }}" alt="User profile picture"><p>Manjula <br>
							89XXXXXX33</p></a></td>
						<td colspan="4"><a href=""><img class="profile-user-img img-fluid img-circle" src="{{asset('user/assets/img/avatar4.png') }}" alt="User profile picture"><p>Manjula <br>
							89XXXXXX33</p></a></td>
							</tr>
						</tbody>
						</table>
									</div>

								</div>
							</div>

						</div>
						<!--row closed-->




								</div>
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->


		<!-- Update Report Modal Start -->
					<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Update Report</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="card-body">
										<form class="form-horizontal" >
												<div class="form-group row mb-0">
												<label class="col-md-3 col-form-label"> Select</label>
												<div class="col-md-9">
													<select class="form-control">
														<option> Active </option>
														<option> Unactive </option>

													</select>
												</div>
											</div>

										</form>
									</div>
							</div>
							<div class="modal-footer">
							    <button type="button" class="btn btn-primary">Save changes</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

							</div>
						</div>
					</div>
				</div>
				<!-- Modal closed -->


		<!-- Update Report Modal End -->

	@endsection
