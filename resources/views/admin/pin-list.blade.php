@extends('admin.layouts.app')
@section('title', ' Pin Generation ')
@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Pin List </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">
                    <div class="input-group">
                    @if(Request()->add=='pin')
                    <a href="{{url('admin/pin-list')}}" class="btn btn-primary pull-right">Show Pin List</a>
                    @else
                    <a href="{{url('admin/pin-list?add=pin')}}" class="btn btn-primary pull-right">Add Pin</a>
                    @endif
                    </div>
                </div>
            </div>
            <!--page-header closed-->
            @include('pages.notification')

        @if(Request()->add=='pin')
            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> Add Pin </h4>
                        </div>
                        <div class="card-body">
                        <form action="" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <label style="display: block;width:100%">Select Package</label>
                                        <select name="package_id" class="form-control" required>
                                            <option value="">Select</option>
                                            @foreach($packages as $package)
                                            <option value="{{$package->id}}">{{$package->amount}}-{{$package->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label style="display: block;width:100%">Enter Count</label>
                                        <input type="number" name="count" class="form-control" required>
                                    </div>
                                    <div class="col-md-2">
                                        <label style="display: block;width:100%">&nbsp;</label>
                                        <input type="submit" class="btn btn-info" value="Generate">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else

            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> All Pins </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>SN#</th>
                                            <th>User Name</th>
                                            <th>Package Name</th>
                                            <th>Package Amount</th>
                                            <th>Pin Number</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pins as $index=>$pin)
                                        <tr>
                                            <td> {{++$index}} </td>
                                            <td> {{($pin->user)?$pin->user->member_id:''}} </td>
                                            <td> {{$pin->package->name}} Package</td>
                                            <td> {{$pin->package_amount}} </td>
                                            <td> {{$pin->pin_number}} </td>
                                            <td> {{$pin->used_status}} </td>
                                            <td> {{date('d-m-Y',strtotime($pin->created_at))}} </td>
                                            <td>
                                                @php
                                                $url = url('register').'?pin='.$pin->pin_number;
                                                @endphp
                                                <button class="btn btn-primary" onclick="navigator.clipboard.writeText('{{$url}}')">Copy the link</button>
                                                <a href="whatsapp://send?text={{$url}}" data-action="share/whatsapp/share">Share via Whatsapp</a>
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

            @endif


            <!--row open-->
          {{--  <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-8">
                    {{$pins->appends(Request()->all())->links('admin.layouts.pagination')}}

                </div>

            </div>--}}
            <!--row closed-->

        </section>
    </div>
@endsection
