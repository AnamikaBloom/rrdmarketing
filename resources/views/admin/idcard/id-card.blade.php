@extends('admin.layouts.app')
@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> ID Card </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">



                        <div class="card-header">
                            <h4> ID Card Details </h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th> Sl no </th>
                                            <th> Name </th>
                                            <th> Email Id </th>
                                            <th> Mobile No </th>
                                            <th> Referral Partner </th>
                                            {{-- <th> Address </th> --}}
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key=> $user)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td> {{$user->name}} </td>
                                                <td> {{$user->email}} </td>
                                                <td>  {{$user->mobile}}  </td>

                                                <td>{{$user->sponser_id}}</td>
                                                {{-- <td> {{$user-}} </th> --}}
                                                <td>
                                                    {{-- <button type="button" class="btn btn-sm  btn-primary">
                                                        view </button> --}}
                                                        <a href="{{route('admin-idcard-view',$user->id)}}"> <button type="button"
                                                            class="btn btn-sm btn-primary"> view </button> </a>
                                                </td>
                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <ul class="pagination mt-3 mb-0">

                                <li class="page-item">
                                    {{$users->links('pagination::bootstrap-4')}}
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--row closed-->

        </section>
    </div>
@endsection
