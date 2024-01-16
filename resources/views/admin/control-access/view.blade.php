@extends('admin.layouts.app')
@section('content')
    <div class="app-content">
        <section class="section">
  <!-- form start -->

@include('admin.notifications')
            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Products </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">
                    <div class="input-group">
                        <a href="{{route('add-product')}}" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip"
                        title="" data-placement="top" data-original-title="Add New Account">
                        <span>
                            <i class="fe fe-plus"></i>
                        </span>
                    </a>


                    </div>
                </div>
            </div>
            <!--page-header closed-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> View Control Access</h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col"> Sl No</th>
                                            <th scope="col"> Name </th>
                                            <th scope="col">View Provided Access Controls </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $admin)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <th scope="row">{{ $admin->name }}</th>

                                            <td>
                                                <a href="{{ route('admin-view-all-control-access', $admin->id) }}" class="btn btn-primary"> Edit
                                                </a>
                                                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('admin-delete-all-control-access', $admin->id) }}" class="btn btn-primary"> Delete
                                                </a>
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



            <!--row open-->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-8">


                </div>

            </div>
            <!--row closed-->

        </section>
    </div>
@endsection
