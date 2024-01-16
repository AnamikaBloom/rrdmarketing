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

				<form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('repurchage.update',$repurchage->id) }}">
				  @csrf
                  @method('PATCH')
				  <div class="container">
				    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="lname">Select Rank :</label>
                                    <select class="form-select form-control" name="rank_id">
                                        <option value="">Select Rank</option>
                                        @foreach ($ranks as $rank)
                                        <option value="{{ $rank->id }}" @if($repurchage->rank_id==$rank->id)selected @endif>{{ $rank->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Reward Percentage </label>
                                        <input type="text" class="form-control" name="reward_percentage"
                                        placeholder="Enter Reward Percentage" value="{{$repurchage->reward_percentage}}">
                                    @error('reward_percentage')
                                        <div style="color:red">* {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Self Purchage Amount </label>
                                    <input type="text" class="form-control" name="self_purchage_amount"
                                        placeholder="Enter Self Purchage From Amount" value="{{$repurchage->self_purchage_amount}}"
                                        >
                                    @error('self_purchage_amount')
                                        <div style="color:red">* {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Team Purchage Amount </label>
                                    <input type="text" class="form-control" name="team_purchage_amount"
                                        placeholder="Enter Team Purchage From Amount" value="{{$repurchage->team_purchage_amount}}">
                                    @error('team_purchage_amount')
                                        <div style="color:red">* {{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="chkYes">
                                    <input type="radio" class="status" value="Active" name="status"
                                       @if($repurchage->status=='Active') checked @endif/>
                                    @if ($errors->has('status'))
                                        <span class="required">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                    Active
                                </label>
                                <label for="chkNo">
                                    <input type="radio" class="status" value="Inactive" name="status" @if($repurchage->status=='Inactive') checked @endif />
                                    @if ($errors->has('status'))
                                        <span class="required">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                    Inactive
                                </label>
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
		</div><!-- /.container-fluid -->
	  </div>
	  <!-- /.content -->
@endsection
