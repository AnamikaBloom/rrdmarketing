@extends('admin.layouts.app')
@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Sub Category </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">
                    <div class="input-group">
                        <a href="{{route('add-subcategory')}}" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip"
                            title="" data-placement="top" data-original-title="Add New Account">
                            <span>
                                <i class="fe fe-plus"></i>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
            <!--page-header closed-->

            @include('admin.notifications')
            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> All Sub Category </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th style="width:50%"> Image </th>
                                            <th> Name </th>
                                            <th> Category </th>
                                            <th> Status </th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody> @foreach ($subcategories as $subcategory)
                                        <tr>
                                            <td> {{$loop->iteration}} </td>
                                            <td> <img src="{{asset('storage/subcategory/'.@$subcategory->image)}}"/> </td>
                                            <td> {{$subcategory->name}} </td>
                                            <td> {{$subcategory->category->name}} </td>
                                            <td> {{$subcategory->status}} </td>
                                            <td>
                                                <a href="{{route('edit-subcategory',$subcategory->id)}}" class="btn btn-primary"> Edit
                                                </a>
                                                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('delete-subcategory',$subcategory->id)}}" class="btn btn-primary"> Delete
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
