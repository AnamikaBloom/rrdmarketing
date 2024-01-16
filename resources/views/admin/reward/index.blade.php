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
                <h3 class="card-title"> Rewards</h3>
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
                    @if(count($reward))
                    <table class="table table-bordered  mb-0 text-nowrap">
                        <thead>
                            <tr>
                                <th> Sl.No </th>
                                <th> User Name </th>
                                <th> Member Id </th>
                                <th> Discription</th>
                                <th> Amount </th>
                                <th> Payment Date </th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($reward as $key=> $rewards)
                            <tr @if($key+1==1)class="" @elseif(($key+1/2)==0) class="TR-bgcolor" @elseif(($key+1/3)==0) class="TR-bgcolor1" @endif>
                                <td> {{$loop->iteration}} </td>
                                <td> {{$rewards->user->name}} </td>
                                <td> {{$rewards->user->member_id}} </td>
                                <td> {{$rewards->description}} </td>
                                <td> {{$rewards->amount}} </td>
                                <td> {{date('d-m-Y',strtotime($rewards->created_at))}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div> No Records Found
                    </div>
                        @endif
                </div>

                    {{-- <button type="submit" class="btn btn-primary btn-sm pull-right">  View All Rewards </button> --}}

                </div>
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
