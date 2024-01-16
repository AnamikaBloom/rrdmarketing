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
              <h3 class="card-title">Create Grievance Redressals</h3>
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

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{route('grievance-redressals-store')}}">
                @csrf
                 <div class="row">
                    <div class="col-sm-12">

                      {{-- <div class="form-group mt-2">
                          <label for="price">Name <span class="required">*</span></label>
                          <input type="text" name="name" id="" class="form-control" value="" placeholder="" required />

                        </div>
                         --}}
                        <div class="form-group">
                          <label>content</label>
                          <textarea name="content" rows="50" id="content1" placeholder="Enter Content" class="form-control"></textarea>
                        </div>




                          <div class="form-group">
                            <label for="price">Status <span class="required">*</span></label><br>
                              <label for="chkYes">
                                <input type="radio" class="productstatus" value="1" name="status" checked/>

                                Active
                            </label>
                            <label for="chkNo">
                                <input type="radio" class="productstatus" value="0" name="status" />

                                Inactive
                            </label>
                          </div>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Create</button>
                          </div>
                    </div>
                 </div>
              </form>



            </div>
        </div>
      </div>
     </div>
    </div><!-- /.container-fluid -->

  <script>
    CKEDITOR.replace( 'content1' );
   </script>
    <script>
        CKEDITOR.replace( 'content2' );
       </script>
        <script>
            CKEDITOR.replace( 'content3' );
           </script>
  <!-- /.content -->



  </div>
</div>
  <!-- /.content-wrapper -->
  @endsection
