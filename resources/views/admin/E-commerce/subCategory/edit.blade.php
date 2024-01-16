@extends('admin.layouts.app')

@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Sub Category </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->

            @include('admin.notifications')
            <div class="row">
                <div class="col-lg-12">

                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> Update Sub Category </h4>
                        </div>
                        <div class="card-body">

                            <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('edit-subcategory',$data->id) }}">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="price">Category Name <span class="required">*</span></label>
                                                @if (count($categories))
                                                <select name="category_id" class="form-control" required>
                                                    <option value="">--Select Category--</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @if($data->category_id==$category->id) selected @endif>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @else
                                                No Category Found. Please Create a Category <a target="_blank"
                                                    href="{{route('add-category')}}">Here</a>
                                            @endif
                                                @if ($errors->has('category_id'))
                                                    <span class="required">
                                                            <strong>{{ $errors->first('category_id') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Sub Category Name <span class="required">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Sub Category Name" value="{{$data->name}}" />
                                                @if ($errors->has('name'))
                                                    <span class="required">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="images">Sub Category Image <span class="required">*</span></label>
                                                <br>
                                                <img src="{{asset('storage/subcategory/'.@$data->image)}}" width="100px">
                                                <br>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="image">
                                                        @if ($errors->has('image'))
                                                            <span class="required">
                                                                  <strong>{{ $errors->first('image') }}</strong>
                                                              </span>
                                                        @endif
                                                        <label class="custom-file-label" for="images">Choose Image</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Status <span class="required">*</span></label><br>
                                                <label for="chkYes">
                                                    <input type="radio" class="status" value="Active" name="status" @if($data->status=='Active') checked @endif />
                                                    @if ($errors->has('status'))
                                                        <span class="required">
                                                              <strong>{{ $errors->first('status') }}</strong>
                                                          </span>
                                                    @endif
                                                    Active
                                                </label>
                                                <label for="chkNo">
                                                    <input type="radio" class="status" value="Inactive" name="status"  @if($data->status=='Inactive') checked @endif/>
                                                    @if ($errors->has('status'))
                                                        <span class="required">
                                                              <strong>{{ $errors->first('status') }}</strong>
                                                          </span>
                                                    @endif
                                                    Inactive
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button id="submit" type="submit" class="btn btn-primary">Update Sub Category</button>
                                            </div>
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
