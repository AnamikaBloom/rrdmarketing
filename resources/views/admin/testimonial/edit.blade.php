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
                <h3 class="card-title">Edit Testimonial</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if(Session::has('flash_success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{route('testimonials-update') }}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group mt-2">
                             <label for="">  Name</label>
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">

                            <input type="text" name="name" value="{{$data->name}}" class="form-control" id="text">
                              @if ($errors->has('name'))
                                  <span class="required">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                              <label for="">  Designation</label>
                              <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
  
                              <input type="text" name="designation" value="{{$data->designation}}" class="form-control" id="text">
                                @if ($errors->has('designation'))
                                    <span class="required">
                                        <strong>{{ $errors->first('designation') }}</strong>
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


                              <label for="">Current Image</label>
                                  <div class="table table-bordered">
                                    <img src="{{asset('storage/testimonial/upload/'.$data->image)}}" alt="" class="img-responsive" width="50%" />
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
                              <input type="radio" class="status" value="Active" name="status" @if($data->status == 'Active') checked @endif/>
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="Inactive" name="status" @if($data->status == 'Inactive') checked @endif />
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Inactive
                          </label>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Update Testimonial</button>
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
