@extends('user.layout.app')
@section('content')
@if (Session::has('flash_success'))
    <div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! Session::get('flash_success') !!}
    </div>
@endif

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> User Profile </li>
							</ol><!-- End breadcrumb -->


						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-lg-12 col-xl-5 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="text-center">
											<div class="userprofile social">
												<div class="userpic"> <img src="{{asset('storage/user/'.$user->photo)}}" alt="" class="userpicimg"> </div>
												<h3 class="username">{{$user->name}}</h3>
												{{-- <p>User</p> --}}
												<div class="text-center mb-2">
												<h3 class="username">{{$user->district}}</h3>
												</div>

												<div class="mt-3">

													<a href="mailto:admin@gmail.com" class="btn btn-secondary btn-sm mt-1">
													<i class="fe fe-envelope followbtn ml-1"></i>{{$user->email}}</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-lg-12 col-xl-7 col-md-12 col-sm-12">
							<div class="card">
									<div class="card-header">
										<h4>User Details</h4>
									</div>
									<div class="card-body">
										<p><b>User ID :</b> {{$user->member_id}}</p>
										<p><b>Name :</b> {{$user->name}}</p>
										<p><b>Email :</b> {{$user->email}}</p>
										<p><b>Phone :</b> {{$user->mobile}} </p>
										<p><b>Address : </b> {{$user->district}}</p>

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
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{ route('user-profile-update') }}" method="post">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" class="form-control" id="exampleInputName" value="{{$user->name}}" readonly placeholder="Enter Name">
                                        @if($errors->first('buyer_name'))  <span class="text-danger">{{$errors->first('buyer_name')}}</span>@endif

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputMobile">Mobile no</label>
                                        <input type="text" class="form-control" id="exampleInputMobile" value="{{$user->mobile}}" maxlength="10" name="mobile" placeholder="Enter Mobile">
                                        @if($errors->first('phone'))  <span class="text-danger">{{$errors->first('phone')}}</span>@endif

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail" name="email" value="{{$user->email}}" placeholder="Enter email">
                                        @if($errors->first('email'))  <span class="text-danger">{{$errors->first('email')}}</span>@endif

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputDOB">Date of Birth</label>
                                        <input type="date" class="form-control" id="exampleInputDOB" name="dob" value="{{$user->date_of_birth}}" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pincode"> Pincode </label>
                                        <input type="text" name="pincode" class="form-control" id="pincode" value="{{$user->pincode}}" minlength="6" maxlength="6">
                                        <span class="text-danger text-capitalize" id="invalid_pincode" style="display: none"></span>
                                        <span class="text-success text-capitalize" id="valid_pincode" style="display: none"></span>
                                        @if($errors->first('pincode'))  <span class="text-danger">{{$errors->first('pincode')}}</span>@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="state_id"> State </label>
                                        <select class="form-control select2" name="state" id="state_id">
                                            <option value="">--Select State--</option>
                                            @foreach ($states as $state)
                                            <option value="{{$state->id}}" @if($user->state_id==$state->id)selected @endif>{{$state->name}}</option>
                                            @endforeach

                                            @if($errors->first('state'))  <span class="text-danger">{{$errors->first('state')}}</span>@endif

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="city_id"> City </label>
                                        <select class="form-control" name="city" id="city_id">
                                            <option value="{{$user->city_id}}" selected >{{($user->city)?$user->city->city:'-'}}</option>
                                            @if($errors->first('city'))  <span class="text-danger">{{$errors->first('city')}}</span>@endif

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="district"> Area </label>
                                        <input type="text" name="district" class="form-control" id="district" value="{{$user->district}}">
                                        @if($errors->first('district'))  <span class="text-danger">{{$errors->first('district')}}</span>@endif

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputHouse">House no</label>
                                        <input type="text" class="form-control" id="exampleInputHouse" name="house_no" value="{{$user->house_no}}" placeholder="Enter House no">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputStreet">Street</label>
                                        <input type="text" class="form-control" id="exampleInputStreet" name="street" value="{{$user->street}}" placeholder="Enter House no">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputLandmark">Landmark</label>
                                        <input type="text" class="form-control" id="exampleInputLandmark" name="landmark" value="{{$user->landmark}}" placeholder="Enter House no">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputAadhar"> Aadhar No </label>
                                        <input type="text" name="aadhar" class="form-control" id="exampleInputAadhar"
                                            value="{{$user->aadhar_no}}" maxlength="12">
                                            @if($errors->first('aadhar'))  <span class="text-danger">{{$errors->first('aadhar')}}</span>@endif
                                        </div>

                                    <div class="form-group">
                                        <label for="exampleInputNomimeeName"> Nominee Name </label>
                                        <input type="text" name="nominee_name" class="form-control" id="exampleInputNomimeeName" value="{{$user->nominee_name}}">
                                        @if($errors->first('nominee_name'))  <span class="text-danger">{{$errors->first('nominee_name')}}</span>@endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputNomimeeRelation"> Nominee Relationship </label>
                                        <input type="text" name="nominee_relation" class="form-control" id="exampleInputNomimeeRelation" value="{{$user->nominee_relation}}">
                                        @if($errors->first('nominee_relation'))  <span class="text-danger">{{$errors->first('nominee_relation')}}</span>@endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputNomimeeAge"> Nominee Age </label>
                                        <input type="text" name="nominee_age" class="form-control" id="exampleInputNomimeeAge" value="{{$user->nominee_age}}">
                                        @if($errors->first('nominee_age'))  <span class="text-danger">{{$errors->first('nominee_age')}}</span>@endif
                                    </div>

                                      <div class="form-group">
                                        <label for="exampleInputFile">Profile Pic </label>
                                        <img src="{{asset('storage/user/'.$user->photo)}}" class="rounded-circle w-32" alt="">
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" name="photo" value="{{$user->photo}}" class="custom-file-input" id="exampleInputFile" accept="image/*">
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
                                                                <input type="radio" id="male" name="gender" value="Male" class="custom-control-input" checked="">
                                                                <label class="custom-control-label" for="male">Male</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="female" name="gender" value="Female" class="custom-control-input">
                                                                <label class="custom-control-label" for="female">Female</label>
                                                            </div>
                                                        </div>
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
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Change Password</h4>
                        </div>
                        @if (Session::has('flash_success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('flash_success') }}
                            </div>
                        @endif
                        @if (Session::has('flash_danger'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('flash_danger') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <form action="{{route('user-change-password')}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Old Password</label>
                                        <input type="text" name="oldpass" class="form-control"
                                            id="exampleInputPassword1" placeholder="Old Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword1" placeholder="New Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Confirm Password">
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
@section('script')
<script>
	$(document).ready(function(){
		$('#state_id').select2();
		$('#pincode').change(function(){
			var pincode=$('#pincode').val();

			$.ajax({
        url : "{{route('pincode')}}",
        type: "POST",
        data : {pincode: pincode, "_token": "{{ csrf_token() }}"},
        success: function(data, textStatus, jqXHR)
            {
				if (data.status == true) {
                    $('#state_id').html(data.state);
                    $('#city_id').html(data.city);
                    $('#district').val(data.district);
                    $('#district').prop('readonly', true);
                    $('#state_id').prop('readonly', true);
                    $('#city_id').prop('readonly', true);
                    $('#invalid_pincode').hide();
                     $('#valid_pincode').html(data.message).show();
                }
                    else{
                        $('#state_id').find('option').remove().end();
                        $('#city_id').find('option').remove().end();
						$('#district').val('');

                        $('#valid_pincode').hide();
                        $('#invalid_pincode').html(data.message).show();
                    }

            },
        error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
		});
	})
</script>



@endsection
