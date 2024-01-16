@extends('admin.layouts.app')

@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Banner </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">
                    <div class="input-group">
                        <a href="{{route('add-banner')}}" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip"
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
                            <h4> All Category </h4>
                        </div>
                        @include('admin.notifications')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th> Image </th>
                                            <th> Banner Title </th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $banner)
                                        <tr>
                                            <td> {{$loop->iteration}} </td>
                                            <td><img src="{{asset('storage/banner/'.$banner->image)}}" width="40%"/> </td>
                                            <td> {{($banner->title)?$banner->title:'-'}} </td>
                                            <td>
                                                <a href="{{route('admin-edit-banner',$banner->id)}}" class="btn btn-primary"> Edit
                                                </a>
                                                <a href="{{route('admin-delete-banner',$banner->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-primary"> Delete
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
                    {{$banners->appends(Request()->all())->links('admin.layouts.pagination')}}

                </div>

            </div>
            <!--row closed-->

        </section>
    </div>
@endsection
