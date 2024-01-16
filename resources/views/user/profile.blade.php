@extends('user.layout.app')
@section('content')


                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> User Profile </li>
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
							<div class="col-lg-12 col-xl-5 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="text-center">
											<div class="userprofile social">
												<div class="userpic"> <img src="{{asset('user/assets/img/avatar/2.jpg') }}" alt="" class="userpicimg"> </div>
												<h3 class="username">{{$user->name}}</h3>
												<p>Admin</p>
												<div class="text-center mb-2">
												<h3 class="username">Bangalore</h3>
												</div>

												<div class="mt-3">

													<a href="mailto:admin@gmail.com" class="btn btn-secondary btn-sm mt-1">
													<i class="fe fe-envelope followbtn ml-1"></i> {{$user->email}}</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-lg-12 col-xl-7 col-md-12 col-sm-12">
							<div class="card">
									<div class="card-header">
										<h4>Admin Details</h4>
									</div>
									<div class="card-body">
										<p><b>User ID :</b> {{$user->id}}</p>
										<p><b>Name :</b> {{$user->name}}</p>
										<p><b>Email :</b> {{$user->email}}</p>
										<p><b>Phone :</b> {{$user->phone}} </p>
										<p><b>Address : </b> {{$user->street}}</p>

									</div>

								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
						<div class="row profile-card">
							<div class="col-lg-7 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>  Profile </h4>
									</div>
									<div class="card-body">

				<form>
                <div class="card-body">

			    <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>

				<div class="form-group">
                    <label for="exampleInputEmail1">Mobile no</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>

			    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

				<div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

			    <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address"> </textarea>
                </div>


				  <div class="form-group">
                    <label for="exampleInputFile">Profile Pic </label>
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


				  <div class="form-group">
                                    <label>Gender</label>
                                    <div class="demo-inline-spacing">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="male" name="gender" value="1" class="custom-control-input" checked="">
                                            <label class="custom-control-label" for="male">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="female" name="gender" value="2" class="custom-control-input">
                                            <label class="custom-control-label" for="female">Female</label>
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

							<div class="col-lg-5 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Change Password</h4>
									</div>
									<div class="card-body">
			<form action="{{route('update-password')}}" method="post">
				@csrf
				@if(session()->has('status'))
            <div class="alert alert-success">
              {{ session()->get('status') }}
            </div>
          @endif
                <div class="card-body">

	                <div class="form-group">
						<label for="exampleInputPassword1">Old Password</label>
						<input type="password" class="form-control" name="current_password" id="exampleInputPassword1" placeholder="Old Password">
                    </div>


	              <div class="form-group">
						<label for="exampleInputPassword1">New Password</label>
						<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="New Password">
                  </div>


				  <div class="form-group">
						<label for="exampleInputPassword1">Confirm Password</label>
						<input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1" placeholder="Confirm Password">
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
