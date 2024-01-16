@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="app-content">
		<div class="container-fluid">
		 <div class="row">
		  <div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
				  <h3 class="card-title">Edit Packages</h3>
				</div>

				@if(Session::has('flash_success'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('flash_success') }}
					</div>
				@endif

				<form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('admin-edit-package',$data->slug) }}">
				  @csrf

				  <div class="container">
				   <div class="row">
					  <div class="col-sm-12">
							<div class="form-group mt-2">

							  <label for=""> Package Name </label>
							  <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">

							  <input type="text" name="name" value="{{$data->name}}" class="form-control" id="text">
								@if ($errors->has('name'))
									<span class="required">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
								<label for=""> Amount</label>
								<input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">

								<input type="text" name="amount" value="{{$data->amount}}" class="form-control" id="text">
								  @if ($errors->has('amount'))
									  <span class="required">
										  <strong>{{ $errors->first('amount') }}</strong>
									  </span>
								  @endif
								  <label for=""> GST </label>
								  <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">

								  <input type="text" name="gst" value="{{$data->gst}}" class="form-control" id="text">
									@if ($errors->has('gst'))
										<span class="required">
											<strong>{{ $errors->first('gst') }}</strong>
										</span>
									@endif


							<label for="status">Status</label><br>
							<label for="chkYes">
								<input type="radio" class="status" value="1" name="status" @if($data->status==1) checked @endif/>
								@if ($errors->has('status'))
								  <span class="required">
									  <strong>{{ $errors->first('status') }}</strong>
								  </span>
							  @endif
								Active
							</label>
							<label for="chkNo">
								<input type="radio" class="status" value="0" name="status" @if($data->status==0) checked @endif />
								@if ($errors->has('status'))
								  <span class="required">
									  <strong>{{ $errors->first('status') }}</strong>
								  </span>
							  @endif
								Inactive
							</label>
							 <div class="form-group">
							  <button id="submit" type="submit" class="btn btn-primary">Update Package</button>
							</div>
					  </div>
				   </div>
				  </div>
				</form>
			</div>
		  </div>
		 </div>
		</div><!-- /.container-fluid -->
	  </div>
	  <!-- /.content -->
@endsection
