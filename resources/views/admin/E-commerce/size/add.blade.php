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
                    <li class="breadcrumb-item active" aria-current="page"> Size </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                    
                        <div class="card-header">
                            <h4> Add Size </h4>
                        </div>
                        <div class="card-body">
                            @include('admin.notifications')
                            <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('add-size') }}">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            {{-- <div class="form-group">
                                                <label>Select Category <span class="required text-danger">*</span></label><br>
                                                @if (count($childCategories))
                                                    <select name="childcategory_id" id="childcategory" class="form-control" required>
                                                        <option value="">--Select Child Category--</option>
                                                        @foreach ($childCategories as $childCategory)
                                                            <option value="{{ $childCategory->id }}">
                                                                {{ $childCategory->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @else
                                                    No Child Category Found. Please Create a Child Category <a target="_blank"
                                                        href="{{route('add-child-category')}}">Here</a>
                                                @endif
                                                @if ($errors->has('childcategory_id'))
                                                <span class="required text-danger">
                                                       <strong>{{ $errors->first('childcategory_id') }}</strong>
                                                   </span>
                                           @endif
                                            </div> --}}
                                            <div class="form-group">
                                                <label for="price">Size Name <span class="required">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" />
                                                @if ($errors->has('name'))
                                                    <span class="required">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Size Short Name <span class="required">*</span></label>
                                                <input type="text" name="short_name" id="short-name" class="form-control" placeholder="Enter Short Name" />
                                                @if ($errors->has('short_name'))
                                                    <span class="required">
                                                            <strong>{{ $errors->first('short_name') }}</strong>
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
                                                <button id="submit" type="submit" class="btn btn-primary">Create Size</button>
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
