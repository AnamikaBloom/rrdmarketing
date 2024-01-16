@extends('admin.layouts.app')
@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Rank </li>
                </ol><!-- End breadcrumb -->


            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> Add Rank </h4>
                        </div>
                        <div class="card-body">
                            @include('admin.notifications')
                            <form action="{{ route('admin-rank') }}" method="POST">
                                @csrf

                                <!-- Personal Details Code Start -->
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Rank Name *</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter Rank Name">
                                                @error('name')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Team *</label>
                                                <input type="number" class="form-control" name="team"
                                                    placeholder="Enter Team Count">
                                                @error('team')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Rank Income * </label>
                                                <input type="number" class="form-control" name="rank_income"
                                                    placeholder="Enter  Reward Percentage">
                                                @error('rank_income')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Royalty Income (%) * </label>
                                                <input type="number" class="form-control" name="royalty"
                                                    placeholder="Enter  Reward Percentage">
                                                @error('royalty')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Minimun Leg On Same Rank  * </label>
                                                <input type="number" class="form-control" name="minLegOnSameRank"
                                                placeholder="Enter Minimun Leg On Same Rank"
                                                >
                                                @error('royalty')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Minimum Total Number * </label>
                                                <input type="number" class="form-control" name="minTotalMembers"
                                                placeholder="Enter Minimum Total Number"
                                                >
                                                @error('royalty')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>

                                            <label for="chkYes">
                                                <input type="radio" class="status" value="1" name="status"
                                                    checked />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                                Active
                                            </label>
                                            <label for="chkNo">
                                                <input type="radio" class="status" value="0" name="status" />
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
                                            <button type="reset" class="btn btn-success">Cancel</button>
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
                                            <h4> Rank Details </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example"
                                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl No</th>
                                                            <th> Rank Name </th>
                                                            <th> Team </th>
                                                            <th> Rank Income </th>
                                                            <th> Royalty Income </th>
                                                            <th> Status </th>
                                                            <th> Action </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($ranks)


                                                            @foreach ($ranks as $key=>$rank)
                                                                @if($key>0)
                                                                <tr>
                                                                    <td>{{ $key}}</td>
                                                                    <td> {{ $rank->name }} </td>
                                                                    <td>  {{ $rank->team }} </td>
                                                                    <td> {{ $rank->rank_income }}</td>
                                                                    <td> {{ $rank->royalty_percentage }}</td>
                                                                    <td> @if($rank->status==1)Active @else InActive @endif</td>

                                                                    <td>
                                                                        <a
                                                                            href="{{ route('admin-edit-rank', $rank->slug) }}">
                                                                            <button type="button" class="btn btn-primary">
                                                                                Update </button> </a>


                                                                        <a
                                                                            href="{{ route('admin-delete-rank', $rank->id) }}" onclick="return confirm(' You want to delete?');">
                                                                            <button type="button" class="btn btn-primary"
                                                                                id="delete_rank"> Delete </button> </a>
                                                                    </td>


                                                                </tr>
                                                                @endif
                                                            @endforeach
                                                        @endif
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

