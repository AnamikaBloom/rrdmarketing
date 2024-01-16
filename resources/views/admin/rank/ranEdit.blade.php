@extends('admin.layouts.app')
@section('title', ' Vow Richuals MLM ')
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
                            <h4> Update Rank </h4>
                        </div>
                        <div class="card-body">
                           @include('admin.notifications')
                            <form action="{{route('admin-update-rank')}}" method="POST">
                                @csrf
                                <!-- Personal Details Code Start -->
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="card-body">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="id" value="{{$ranks->id}}">
                                                <label for="exampleInputEmail1"> Rank Name * </label>
                                                <input type="text" class="form-control" name="name"
                                                   value="{{$ranks->name}}">
                                                   @error('name')
                                                   <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Team * </label>
                                                <input type="number" class="form-control" name="team"
                                                value="{{$ranks->team}}">
                                                @error('team')
                                                <div style="color:red">* {{ $message }}</div>
                                             @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Rank Income *</label>
                                                <input type="number" class="form-control" name="rank_income"
                                                value="{{$ranks->rank_income}}">
                                                @error('rank_income')
                                                <div style="color:red">* {{ $message }}</div>
                                             @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">  Royalty Income (%) *</label>
                                                <input type="number" class="form-control" name="royalty"
                                                value="{{$ranks->royalty_percentage}}">
                                                @error('royalty')
                                                <div style="color:red">* {{ $message }}</div>
                                             @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Minimun Leg On Same Rank  * </label>
                                                <input type="number" class="form-control" name="minLegOnSameRank"
                                                    placeholder="Enter Minimun Leg On Same Rank"
                                                    value="{{$ranks->minLegOnSameRank}}">

                                                @error('royalty')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Minimum Total Number * </label>
                                                <input type="number" class="form-control" name="minTotalMembers"
                                                    placeholder="Enter Minimum Total Number"
                                                    value="{{$ranks->minTotalMembers}}"
                                                    >
                                                @error('royalty')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <label for="chkYes">
                                                <input type="radio" class="status" value="1" name="status"
                                                {{ ($ranks->status=="1")? "checked" : "" }} />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                                Active
                                            </label>
                                            <label for="chkNo">
                                                <input type="radio" class="status" value="0"
                                                    name="status"  {{ ($ranks->status=="0")? "checked" : "" }}/>
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
                                            <button type="button" class="btn btn-success">Cancel</button>
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
@endsection
