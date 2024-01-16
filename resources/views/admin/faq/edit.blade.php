@extends('admin.layouts.app')
@section('content')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Faq </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> Edit Faq </h4>
                        </div>
                        @include('admin.notifications')
                        <div class="card-body">

                            <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('edit-faq',$data->id) }}">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="price"> Question <span class="required">*</span></label>
                                                <input type="text" name="question" id="name" class="form-control" placeholder="" value="{{$data->question}}" />
                                                @if ($errors->has('question'))
                                                    <span class="required">
                                                            <strong>{{ $errors->first('question') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                           
                                            
                                            <div class="form-group">
                                                <label for="price"> Answer <span class="required">*</span></label>
                                                <textarea type="text" name="answer" id="content" class="form-control" placeholder="Enter Content" >{{$data->answer}}</textarea>
                                                @if ($errors->has('answer'))
                                                    <span class="required">
                                                            <strong>{{ $errors->first('answer') }}</strong>
                                                        </span>
                                                @endif
                                            </div>

                                    

                                           
                                        <div class="form-group">
                                                <button id="submit" type="submit" class="btn btn-primary">Update Faq</button>
                                            </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
<script>
    CKEDITOR.replace('content');
</script>
@endsection
