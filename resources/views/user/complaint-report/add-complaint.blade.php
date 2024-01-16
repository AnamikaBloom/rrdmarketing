@extends('user.layout.app')
@section('content')

 <!--app-content open-->
 <div class="app-content">
    <section class="section">

        <!--page-header open-->
        <div class="page-header">

            <ol class="breadcrumb"><!-- breadcrumb -->
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                <li class="breadcrumb-item active" aria-current="page"> Add Complaint </li>
            </ol><!-- End breadcrumb -->

            
        </div>
        <!--page-header closed-->

        <!--row open-->
        <div class="row">
            <div class="col-lg-6">
                <div class="e-panel card">
                    <div class="card-header">
                        <h4> Add Complaints </h4>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{route('complaint-save')}}">
                            @csrf
<div class="card-body">

{{-- <div class="form-group">
    <label for="exampleInputEmail1">Complaints From</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex Driver, Users">
</div> --}}

{{-- <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name"d="exampleInputEmail1" placeholder="Enter Name">
</div> --}}

<div class="form-group">
    <label for="exampleInputEmail1">Phone No</label>
    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter Last Name" value="{{$user->mobile}}" readonly>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" value="{{$user->email}}" readonly>
</div>

<div class="form-group">
    <label for="exampleInputEmail1"> Reason</label>
   <textarea class="form-control" id="Reason" name="reasons" rows="4" cols="50">
 </textarea>
</div>

</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

                    </div>
                </div>
            </div>
        </div>
        <!--row closed-->

    </section>
</div>
<!--app-content closed-->

     @endsection
