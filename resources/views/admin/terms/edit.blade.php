@extends('admin.layouts.app')
@section('content')
<div class="app-content">
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>

<!-- Main content -->

    <div class="container-fluid">
     <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Terms and Conditions</h3>
            </div>
          </div>
          @if(session()->has('status'))
          <div class="alert alert-success">
            {{ session()->get('status') }}
          </div>
        @endif
            <!-- /.card-header -->
            <!-- form start -->

                <!--<div class="alert alert-success m-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>

                </div>

                <div class="alert alert-danger m-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>

                </div>-->

            <div class="container">

              <form enctype="multipart/form-data" method="post" action="{{ route('terms-update', $data->id) }}">
                @csrf

                 <div class="row">
                    <div class="col-sm-12">

                      {{-- <div class="form-group mt-2">
                          <label for="price">Name <span class="required">*</span></label>
                          <input type="text" name="name" id="productname" value="{{$data->name}}" class="form-control"  placeholder="Enter name" required />

                        </div>
                         --}}



                        <div class="form-group">
                          <label>content</label>
                          <textarea name="content" rows="50" id="content1" value="{{$data->content}}" placeholder="Enter Description" class="form-control">{!!$data->content!!}</textarea>
                        </div>




                          <div class="form-group">
                            <label for="price">Status <span class="required">*</span></label><br>
                              <label for="chkYes">
                                <input type="radio" class="productstatus" value="1"  name="status" @if($data->status == '1') checked @endif/>

                                Active
                            </label>
                            <label for="chkNo">
                                <input type="radio" class="productstatus" value="0" name="status" @if($data->status == '0') checked @endif / />

                                Inactive
                            </label>
                          </div>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Update</button>
                          </div>
                    </div>
                 </div>
              </form>



            </div>
        </div>
      </div>
     </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->



  </div>
  <!-- /.content-wrapper -->
  <script>
    CKEDITOR.replace( 'content1' );
   </script>
    <script>
        CKEDITOR.replace( 'content2' );
       </script>
        <script>
            CKEDITOR.replace( 'content3' );
           </script>
  @endsection
