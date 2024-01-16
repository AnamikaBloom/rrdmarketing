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
                    <li class="breadcrumb-item active" aria-current="page"> Coupons </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">
                    <div class="input-group">
                        <a href="{{route('add-coupons')}}" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip"
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
                            <h4> All Coupons </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th> Image </th>
                                            <th> Product Name </th>
                                            <th> Price </th>
                                            <th> Category </th>
                                            <th> Sub Category </th>
                                            <th> Description </th>
                                            <th> Specification </th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> </td>
                                            <td> Dress </td>
                                            <td> 1500 </td>
                                            <td> Dress </td>
                                            <td> Men Dress </td>
                                            <td> Dress Material </td>
                                            <td> 5 </td>


                                            <td>
                                                <button type="button" class="btn btn-primary"> Delete
                                                </button>
                                            </td>


                                        </tr>

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
