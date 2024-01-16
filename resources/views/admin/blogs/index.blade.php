@extends('admin.layouts.app')
@section('content')
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
                    <div class="input-group">
                        <a href="{{route('add-blog')}}" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip"
                            title="" data-placement="top" data-original-title="Add New Testimonial">
                            <span>
                                <i class="fe fe-plus"></i>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
            <!--page-header closed-->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blogs</h3>
                <a href="{{route('add-blog')}}" class="btn btn-primary float-right">Add</a>
              </div>

              @if(Session::has('flash_success'))
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif
             <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered " style="text-align:center">
                  <thead>
                    <tr>
                    <th style="width:2%">Sl No:</th>
                      <th style="width:10%">Title</th>
                      <th style="width:15%">Content</th>
                      <th style="width:15%">Image</th>
                      <th style="width:5%">Status</th>
                      <th style="width:10%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                      <td> {{$loop->iteration}} </td>

                      <td> {{$blog->title}} </td>
                      <td>{{\Illuminate\Support\Str::limit(strip_tags($blog->content),180)}}</td>
                      <td> <img src="{{asset('storage/blogs/thumbnail/'.$blog->image)}}"/> </td>
                      <td> {{$blog->status}} </td>
                      <td>
                            <a href="{{route('edit-blog',$blog->id)}}" class="btn btn-primary btn-sm"> Edit </a>
                            <a href="{{route('delete-blog',$blog->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm"> Delete</a>
                     </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
              </div>
              <!-- /.card-body -->

        </div>



        </section>
    </div>
@endsection
