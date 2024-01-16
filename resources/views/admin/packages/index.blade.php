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
                            <h4> Add Packages </h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('package') }}" method="POST">
                                @csrf

                                <!-- Personal Details Code Start -->
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="card-body">

                                            <div class="form-group">

                                                <label for="exampleInputEmail1"> Name </label>
                                                    <input type="text" class="form-control" name="name"
                                                    placeholder="Enter Name of Package">
                                                @error('name')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">

                                                <label for="exampleInputEmail1"> Amount </label>
                                                <input type="text" class="form-control" name="amount"
                                                    placeholder="Enter Amount of Package">
                                                @error('amount')
                                                    <div style="color:red">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">

                                                <label for="exampleInputEmail1"> GST </label>
                                                <input type="text" class="form-control" name="gst"
                                                    placeholder="Enter GST of Package">
                                                @error('gst')
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
                                            <h4> Package Details </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                            <table class="table table-hover table-bordered">
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th>Trips</th>
                                                    <th>Expedition</th>
                                                    <th>Packages</th>
                                                    <th>Duration</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($packages as $package)
                                                    <tr>
                                                    <td>{{$package->name}}</td>
                                                    <td>{{$package->expedition}}</td>
                                                    <td>{{$package->amount}}</td>
                                                    <td>{{$package->duration}} X 369</td>
                                                    <td>{{$package->packages}}</td>
                                                    <td>
                                                        <a href="{{route('admin-edit-package',$package->slug)}}"> <button type="button" class="btn btn-primary"> Update </button> </a>
                                                        <a href="{{route('admin-delete-package',$package->id)}}" onclick="return confirm(' You want to delete?');"> <button type="button" class="btn btn-primary"> Delete </button> </a>
                                                    </td>
                                                    </tr>
                                                @endforeach
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
