@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->

    <div class="app-content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">AboutUs</h3>
                @if($data->isEmpty())
                <a href="{{route('aboutus-create')}}" class="btn btn-primary float-right">Add</a>
                @endif
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
                      <th style="width:10%">Heading</th>
                      <th style="width:10%">Content</th>
                      <th style="width:10%">Short Content</th>
                      <th style="width:15%">Image</th>
                      <th style="width:5%">Status</th>
                      <th style="width:8%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $key=>$aboutus)
                    <tr>
                    <td>{{$key+1}}</td>
                      <td>{{$aboutus->heading}}</td>
                      <td>{!! $aboutus->content !!}</td>
                      <td>{!! $aboutus->short_content !!}</td>
                      <td><img src="{{asset('/storage/aboutus/'.$aboutus->image) }}" alt="" class="img-responsive" width="50%" /></td>

                      <td>{{$aboutus->status}}</td>
                      <td>
                        <a href="{{route('aboutus-edit', ['id'=>$aboutus->id])}}" class="btn btn-info"> Edit</a>

                        <form id="resource-delete-{{$aboutus->id}}" action="{{route('aboutus-delete',['id'=>$aboutus->id])}}"  style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                          @method('POST')
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $data->links('pagination::bootstrap-4') }}
                <br>
              </div>
              <!-- /.card-body -->

        </div>
        <!-- /.card -->
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </div>
@endsection
