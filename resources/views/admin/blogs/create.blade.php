@extends('admin.layouts.app')
@section('content')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Blog </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4 class="card-title">Add Blog </h4>
                        </div>
                        <div class="card-body">

                            <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('add-blog') }}">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="price"> Title <span class="required">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter TItle" />
                                                @if ($errors->has('name'))
                                                    <span class="required">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="price"> Content <span class="required">*</span></label>
                                                <textarea type="text" name="content" id="content" class="form-control" placeholder="Enter Content" ></textarea>
                                                @if ($errors->has('content'))
                                                    <span class="required">
                                                            <strong>{{ $errors->first('content') }}</strong>
                                                        </span>
                                                @endif
                                            </div>

                                            <div class="form-group mt-2">
                                                 <label for="image"> Image</label>
                                                <input type="file" name="image" class="form-control" id="image" required>
                                                    @if ($errors->has('image'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('image') }}</strong>
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
                                                    InActive
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button id="submit" type="submit" class="btn btn-primary">Add Blog</button>
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
@section('script')
<script>
    CKEDITOR.replace('content');
</script>
@endsection
