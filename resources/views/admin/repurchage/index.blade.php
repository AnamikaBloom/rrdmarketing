@extends('admin.layouts.app')

@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Packages </li>
                </ol><!-- End breadcrumb -->
            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> Add Repurchage Reward Details </h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('repurchage.store') }}" method="POST">
                                @csrf

                                <!-- Personal Details Code Start -->
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="lname">Select Rank :</label>
                                                <select class="form-select form-control" name="rank_id">
                                                    <option value="">Select Rank</option>
                                                    @foreach ($ranks as $rank)
                                                    <option value="{{ $rank->id }}">{{ $rank->name }}</option>
                                                @endforeach


                                                </select>
                                            </div>
                                            <div class="form-group">

                                                <label for="exampleInputEmail1"> Reward Percentage </label>
                                                    <input type="text" class="form-control" name="reward_percentage"
                                                    placeholder="Enter Reward Percentage">
                                                @error('reward_percentage')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">

                                                <label for="exampleInputEmail1">Self Purchage Amount </label>
                                                <input type="text" class="form-control" name="self_purchage_amount"
                                                    placeholder="Enter Self Purchage From Amount">
                                                @error('self_purchage_amount')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Team Purchage Amount </label>
                                                <input type="text" class="form-control" name="team_purchage_amount"
                                                    placeholder="Enter Team Purchage From Amount">
                                                @error('team_purchage_amount')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <label for="chkYes">
                                                <input type="radio" class="status" value="Active" name="status"
                                                    checked />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                                Active
                                            </label>
                                            <label for="chkNo">
                                                <input type="radio" class="status" value="Inactive" name="status" />
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


                            <!--row open-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card export-database">
                                        <div class="card-header">
                                            <h4> Repurchage Details </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example"
                                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl No</th>
                                                            <th> Rank Name </th>
                                                            <th> Reward Percentage </th>
                                                            <th> Self Purchage Amount </th>
                                                            <th> Team Purchage Amount </th>
                                                            <th>Status</th>
                                                            <th> Action </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($repurchages)


                                                        @foreach ($repurchages as $repurchage)
                                                        <tr>
                                                            <td> {{$loop->iteration}} </td>
                                                            <td> {{$repurchage->rank->name ??'-'}} </td>
                                                            <td> {{$repurchage->reward_percentage}}</td>
                                                            <td> {{$repurchage->self_purchage_amount}}</td>
                                                            <td> {{$repurchage->team_purchage_amount}}</td>
                                                            <td> {{$repurchage->status}}</td>
                                                            <td>
                                                                <a href="{{route('repurchage.edit',$repurchage->id)}}"> <button type="button"
                                                                        class="btn btn-primary"> Update </button> </a>

                                                                <a href="{{route('repurchage.destroy',$repurchage->id)}}" onclick="return confirm(' You want to delete?');"> <button type="button"
                                                                    class="btn btn-primary"> Delete </button> </a>

                                                            </td>


                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                        <tr>
                                                            <td colspan="9">No Data Found</td>
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
@endsection
