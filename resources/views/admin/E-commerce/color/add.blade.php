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

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                      
                        <div class="card-header">
                            <h4> Add Color </h4>
                        </div>
                        <div class="card-body">
                            @include('admin.notifications')

                            <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('add-color') }}">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="price">Color Name <span class="required">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Color Name" />
                                                @if ($errors->has('name'))
                                                    <span class="required text-danger">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="price">Status <span class="required">*</span></label><br>
                                                <label for="chkYes">
                                                    <input type="radio" class="status" value="Active" name="status" checked="" />
                                                    @if ($errors->has('status'))
                                                        <span class="required">
                                                              <strong>{{ $errors->first('status') }}</strong>
                                                          </span>
                                                    @endif
                                                    Active
                                                </label>
                                                <label for="chkNo">
                                                    <input type="radio" class="status" value="InActive" name="status"/>
                                                    @if ($errors->has('status'))
                                                        <span class="required">
                                                              <strong>{{ $errors->first('status') }}</strong>
                                                          </span>
                                                    @endif
                                                    Inactive
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button id="submit" type="submit" class="btn btn-primary">Create Category</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
