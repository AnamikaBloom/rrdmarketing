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

                </div>
            </div>
            <!--page-header closed-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> Update Banner </h4>
                        </div>
                        <div class="card-body">

                            <form enctype="multipart/form-data" role="form" id="myform" method="post"
                            action="{{ route('admin-edit-banner',$data->id) }}">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="image">Banner Image</label>
                                            <br>
                                            @include('admin.notifications')
                                            <img src="{{asset('storage/banner/'.$data->image)}}" width="50%">

                                            <div class="input-group">

                                                <div class="custom-file">
                                                    <input type="file" name="image" class="form-control"
                                                        id="image">
                                                    @if ($errors->has('image'))
                                                        <span class="required">
                                                            <strong>{{ $errors->first('image') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Title <span class="required">*</span></label>

                                            <input type="text" name="title" id="title"
                                                class="form-control" placeholder="Enter Title"  value="{{$data->title}}"/>
                                            @if ($errors->has('title'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Title Color </label>
                                            <select name="title_color" id="title_color" class="form-control">
                                                <option value="">Select Title Color</option>
                                                <option value="dark"
                                                    @if ($data->title_color == 'dark') selected @endif>
                                                    Dark</option>
                                                <option value="white"
                                                    @if ($data->title_color == 'white') selected @endif>
                                                    White</option>

                                            </select>
                                            @if ($errors->has('title_color'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('title_color') }}</strong>
                                                </span>
                                            @endif
                                        </div>



                                        <label for="chkYes">
                                            <input type="radio" class="status" value="Active" name="status"
                                            @if($data->status=='Active')  checked  @endif />
                                            @if ($errors->has('status'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </span>
                                            @endif
                                            Active
                                        </label>
                                        <label for="chkNo">
                                            <input type="radio" class="status" value="InActive"
                                                name="status"  @if($data->status=='InActive')  checked  @endif  />
                                            @if ($errors->has('status'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </span>
                                            @endif
                                            Inactive
                                        </label>
                                        <div class="form-group">
                                            <button id="submit" type="submit"
                                                class="btn btn-primary">Update Banner</button>
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
