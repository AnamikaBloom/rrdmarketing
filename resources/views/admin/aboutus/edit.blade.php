@extends('admin.layouts.app')
@section('content')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <!-- Main content -->
    <div class="app-content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Aboutus</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if(Session::has('flash_success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{route('aboutus-update')}}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group mt-2">
                             <label for="">  Heading</label>
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">

                            <input type="text" name="heading" value="{{$data->heading}}" class="form-control" id="text">
                              @if ($errors->has('heading'))
                                  <span class="required">
                                      <strong>{{ $errors->first('heading') }}</strong>
                                  </span>
                              @endif

                             <label for=""> Content</label>
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
                            <textarea rows="5" class="form-control" id="content" name="content" required>{!!$data->content!!}</textarea>
                             @if ($errors->has('content'))
                                  <span class="required">
                                      <strong>{{ $errors->first('content') }}</strong>
                                  </span>
                              @endif

                              <label for="">Short Content</label>
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
                            <textarea rows="5" class="form-control" id="short_content" name="short_content" required>{!!$data->short_content!!}</textarea>
                             @if ($errors->has('short_content'))
                                  <span class="required">
                                      <strong>{{ $errors->first('short_content') }}</strong>
                                  </span>
                              @endif


                              <label for="">Current Image</label>
                                  <div class="table table-bordered">
                                    <img src="{{asset('storage/aboutus/'.$data->image)  }}" alt="" class="img-responsive" width="50%" />
                                  </div>
                            <label for="image">  Image</label>

                                <input type="file" name="image" class="form-control" id="image" value="{{$data->image}}">
                                  @if ($errors->has('image'))
                                      <span class="required">
                                          <strong>{{ $errors->first('image') }}</strong>
                                      </span>
                                  @endif

                                </div>

                              <label for="image"> Status</label><br>

                          <label for="chkYes">
                              <input type="radio" class="status" value="active" name="status" @if($data->status == 'active') checked @endif/>
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="inactive" name="status" @if($data->status == 'inactive') checked @endif />
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Inactive
                          </label>

                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Update AboutUs</button>
                          </div>
                    </div>
                 </div>
                </div>
              </form>
          </div>
        </div>
       </div>
      </div><!-- /.container-fluid -->

    <script>
        CKEDITOR.replace( 'content' );
        </script>
    <!-- /.content -->
    </div>
@endsection
