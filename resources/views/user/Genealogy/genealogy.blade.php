@extends('user.layout.app')
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Genealogy Tree </li>
                </ol><!-- End breadcrumb -->


            </div>
            <!--page-header closed-->



            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        @if (\Session::has('error'))
                            <div class="alert alert-danger">
                            <p>{{ \Session::get('error') }}</p> 
                            </div>
                        @endif
                        <div class="card-header">
                            <h4> Genealogy Tree </h4>
                        </div>
                        <form method="post" action="{{route('genealogy-search')}}">
                            @csrf
                        <div class="row card-body">
                            <div class="col-md-3">
                                <label>Member ID Search:<input type="search" class="form-control form-control-sm" value="{{Request()->member_id}}" name="member_id" id="member-id" placeholder="Enter Member ID"
                                    aria-controls="example"></label>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-secondary" value="Search">Search</button>

                            </div>
                        </div>
                        </form>


                        <!--row open-->
                        <div class="row">
                            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <table class="table" align="center" border="0" style="text-align:center"
                                            id="myTable">
                                            <tbody>


                                                <tr height="10">
                                                    <td
                                                        @if($user->rank_id > 3) colspan="25" @else colspan="20" @endif>
                                                        <img class="profile-user-img img-fluid img-circle"
                                                            style="margin-top:10%;"
                                                            @if($user->photo)src="{{ asset('storage/user/'.$user->photo) }}" @elseif($user->gender=="Male")
                                                            src="{{ asset('user/assets/img/avatar2.png') }}" @else  src="{{ asset('user/assets/img/avatar3.png') }}" @endif
                                                            alt="User profile picture">
                                                        <p>{{ ucfirst($user->name) }}<br>
                                                            {{ $user->member_id }}<br>
                                                            <br>
                                                            {{($user->rank)?$user->rank->name:'-'}}
                                                        </p>
                                                    </td>
                                                </tr>


                                                @if ($tree)

                                                    @if ($user->rank_id > 3)
                                                        @include('user.Genealogy.includes.greater-directs-genelogy')
                                                    @else
                                                        @include('user.Genealogy.includes.directs-genelogy')
                                                    @endif
                                                @else
                                                    <tr>
                                                        @if ($user->rank_id > 3)
                                                            <td colspan="5" class="table-primary"><a href="#">

                                                                    <p> Vacent Place </p>
                                                                </a></td>
                                                            <td colspan="5" class="table-success"><a href="#">

                                                                    <p> Vacent Place </p>
                                                                </a></td>
                                                            <td colspan="5" class="table-warning"><a href="#">

                                                                    <p> Vacent Place </p>
                                                                </a></td>
                                                            <td colspan="5" class="table-info"><a href="#">

                                                                    <p> Vacent Place </p>
                                                                </a></td>
                                                        @else
                                                            <td colspan="6" class="table-primary">
                                                                <a href="#">

                                                                    <p> Vacent Place </p>
                                                                </a>
                                                            </td>
                                                            <td colspan="6" class="table-success">
                                                                <a href="#">

                                                                    <p> Vacent Place </p>
                                                                </a>
                                                            </td>
                                                            <td colspan="6" class="table-warning">
                                                                <a href="#">

                                                                    <p> Vacent Place </p>
                                                                </a>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endif
                                                @if ($tree)
                                                    @if($user->rank_id > 3)
                                                        @include('user.Genealogy.includes.greater-childs')
                                                    @else
                                                        @include('user.Genealogy.includes.childs')

                                                    @endif
                                                @else
                                                    <tr>
                                                        @if ($user->rank_id > 3)
                                                                <td colspan="5" class="table-primary"><a href="#">

                                                                        <p> Vacent Place </p>
                                                                    </a></td>
                                                                <td colspan="5" class="table-success"><a href="#">

                                                                        <p> Vacent Place </p>
                                                                    </a></td>
                                                                <td colspan="5" class="table-warning"><a href="#">

                                                                        <p> Vacent Place </p>
                                                                    </a></td>
                                                                <td colspan="5" class="table-info"><a href="#">

                                                                        <p> Vacent Place </p>
                                                                    </a></td>
                                                            @else
                                                                <td colspan="6" class="table-primary">
                                                                    <a href="#">

                                                                        <p> Vacent Place </p>
                                                                    </a>
                                                                </td>
                                                                <td colspan="6" class="table-success">
                                                                    <a href="#">

                                                                        <p> Vacent Place </p>
                                                                    </a>
                                                                </td>
                                                                <td colspan="6" class="table-warning">
                                                                    <a href="#">

                                                                        <p> Vacent Place </p>
                                                                    </a>
                                                                </td>
                                                            @endif
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--row closed-->




                    </div>
                </div>
            </div>
            <!--row closed-->

        </section>
    </div>
    <!--app-content closed-->
@endsection
