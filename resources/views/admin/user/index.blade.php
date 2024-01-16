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
                    <li class="breadcrumb-item active" aria-current="page"> User List </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">
                    <div class="input-group">


                    </div>
                </div>
            </div>
            <!--page-header closed-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> All User </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th style="10px"> Image </th>
                                            <th> Name </th>
                                            <th> Member ID </th>
                                            <th> Sponser Id  ( Name ) </th>
                                            <th> Rank </th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td> {{$loop->iteration}} </td>
                                            <td style="width: 10%"><img src="{{asset('storage/user/'.$user->photo)}}"  style="width:2em; height:3em;"/> </td>
                                            <td> {{$user->name}} </td>
                                            <td> {{$user->member_id}} </td>
                                            <td> @if($user->sponser) {{$user->sponser_id}}  ( {{$user->sponser->name}} )  @else NA @endif </td>
                                            <td> {{($user->rank)?$user->rank->name:'-'}} </td>
                                            <td>
                                                <a href="{{route('user-genealogy',$user->id)}}" class="btn btn-primary"> View Genelogy</a>
                                                <!-- <a href="{{url('admin/package')}}?user_id={{$user->id}}" class="btn btn-info"> Package Details</a> -->
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
                    {{$users->appends(Request()->all())->links('admin.layouts.pagination')}}

                </div>

            </div>
            <!--row closed-->

        </section>
    </div>
@endsection
