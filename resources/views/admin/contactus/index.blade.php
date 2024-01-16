@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->

    <div class="app-content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          @if(session()->has('status'))
            <div class="alert alert-success">
              {{ session()->get('status') }}
            </div>
          @endif
          <div class="card">
              <div class="card-header" style="overflow:auto;">
                <h3 class="card-title"> Enquiry Details</h3>
                <!-- <a href="#" class="btn btn-primary float-right">Add</a> -->
              </div>

              @if(Session::has('flash_success'))
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif

             <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" class="table table-bordered border-t0 key-buttons text-nowrap w-100" style="text-align:center">
                  <thead>
                    <tr>
                      <th style="width:2%">sl no </th>
                      <th style="width:10%">Name</th>
                      <th style="width:10%">Email</th>
                      <th style="width:10%">Phone Number</th>
                      <th style="width:10%">Subject</th>
                      <th style="width:20%">Message</th>
                      <th style="width:10%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $key=> $row)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td >{{$row->name}} </td>
                    <td >{{$row->email}} </td>
                    <td >{{$row->phone}}</td>
                    <td >{{$row->subject}}</td>
                    <td>{{$row->message}}</td>
                      <td>
                          <!-- <a href="#" class="btn btn-info">Edit</a> <br> -->
                          <form id="resource-delete-{{$row->id}}" action="{{route('contact-destroy', ['id'=>$row->id]) }}" style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
                            @csrf
                            <button type="submit"class="btn btn-danger">Delete</button>

                          </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>


              </div>
              <!-- /.card-body -->
              </div>
        </div>
        <!-- /.card -->
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </div>
@endsection
