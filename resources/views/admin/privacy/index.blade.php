@extends('admin.layouts.app')
@section('content')
<div class="app-content">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>



        <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Privacy Policy</h3>
                @if($datas->isEmpty())
                  <a href="{{route('privacy-create')}}" class="btn btn-primary float-right">Add</a>
                @endif
                  {{-- <a href="" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip" --}}
                </div>
                @if(session()->has('status'))
                <div class="alert alert-success">
                  {{ session()->get('status') }}
                </div>
              @endif
                  {{-- <a href="" class="btn btn-primary float-right">Create</a> --}}
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        {{-- <th>Name</th> --}}

                        <th>Content</th>


                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach($datas as $data)
                        <tr>
                            {{-- <td> {{$data->name}}</td> --}}


                            {{-- @php
                            $check=strip_tags($data->content) ;

                            @endphp --}}

                            {{-- <td> {{\Illuminate\Support\Str::limit($check,180)}}</td> --}}

                            <td>{!!$data->content!!}</td>
                            <td>@if($data->status==1)Active @else InActive @endif</td>

                            <td>
                              <a href="{{route('privacy-edit', ['id'=>$data->id]) }}" class="btn btn-info">Edit</a>
                              <form id="resource-delete-{{$data->id}}" action="{{route('privacy-destroy', ['id'=>$data->id]) }}" style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
                                @csrf
                                <button type="submit"class="btn btn-danger">Delete</button>

                              </form>

                            </td>
                        </tr>
                        @endforeach

{{--
                      <tr>

                        <td>Toyota</td>
                        <td>best quality product</td>
                        <td>₹24/KM</td>
                        <td>
                            <img src="header_front_end/assets/images/logo/logo.png" class="img-responsive" style="width: 200px;" />
                          </td>
                        <td>Active</td>
                        <td>
                            <a href="package-edit.html" class="btn"><i class="fas fa-edit" style="color: blue;"></i></a>
                            <button><i style="color: red;" class="fas fa-trash-alt"></i></button>
                          </td>
                      </tr>
                      </tr> --}}

                    </tbody>
                  </table>
                  <br>

                </div>
                <!-- /.card-body -->

          </div>
          <!-- /.card -->
          </div>
         </div>
        </div><!-- /.container-fluid -->



  </div>
</div>
  <!-- /.content-wrapper -->
  @endsection
