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
                    <li class="breadcrumb-item active" aria-current="page"> Color </li>
                </ol><!-- End breadcrumb -->
                @include('admin.notifications')
                <div class="ml-auto">
                    <div class="input-group">
                        <a href="{{route('add-color')}}" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip"
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
                            <h4> All Color </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th> Color Name </th>
                                            <th> Status </th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($colors as $color)
                                        <tr>
                                            <td> {{$loop->iteration}} </td>
                                            <td> {{$color->name}} </td>
                                            <td> {{$color->status}} </td>
                                            <td>
                                                <a href="{{route('edit-color',$color->slug)}}" class="btn btn-primary"> Edit
                                                </a>
                                                <a href="{{route('delete-color',$color->slug)}}" onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-primary"> Delete
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
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-8">


                </div>

            </div>

        </section>
    </div>
@endsection
