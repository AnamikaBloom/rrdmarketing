@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->

    <div class="app-content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
        
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Testimonial</h3>
                <a href="{{route('testimonials-create')}}" class="btn btn-primary float-right">Add</a>
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
                      <th style="width:10%">Name</th>
                      <th style="width:10%">Designation</th>
                      <th style="width:10%">Content</th>
                      <th style="width:15%">Image</th>
                      <th style="width:5%">Status</th>
                      <th style="width:15%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $key=>$row)
                    <tr>
                    <td>{{$key+1}}</td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->designation}}</td>
                      <td>{!! $row->content !!}</td>

                      <td><img src="{{asset('storage/testimonial/thumbnail/'.$row->image)}}" alt="" class="img-responsive" width="50%" /></td>

                      <td>{{$row->status}}</td>
                      <td>
                        <a href="{{route('testimonials-edit', ['id'=>$row->id]) }}" class="btn btn-info"> Edit</a>

                        <form id="resource-delete-{{$row->id}}" action="{{ route('testimonials-delete', ['id'=>$row->id]) }}"  style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                          @method('POST')
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
                {{ $data->links('pagination::bootstrap-4') }}
              </div>
              <!-- /.card-body -->
              
        </div>
        <!-- /.card -->
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </div>
@endsection