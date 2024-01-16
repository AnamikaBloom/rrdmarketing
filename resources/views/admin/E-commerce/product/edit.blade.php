@extends('admin.layouts.app')
@section('title', ' Vow Richuals MLM ')
@section('content')
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Products </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">

                </div>
            </div>
            <!--page-header closed-->
  <!-- form start -->
 
@include('admin.notifications')

            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> Add Products </h4>
                        </div>
                        <div class="card-body">

                            <form enctype="multipart/form-data" role="form" id="myform" method="post"
                                        action="{{ route('edit-product',$data->slug) }}">
                                        @csrf

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Select Category <span
                                                                class="r">*</span></label><br>
                                                        @if (count($categories))
                                                            <select name="category_id" id="category" class="form-control" >
                                                                <option value="{{$data->category_id}}">{{$data->category->name}}</option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        @else
                                                            No Category Found. Please Create a Category <a target="_blank"
                                                                href="{{route('add-category')}}">Here</a>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Select Subcategory <span
                                                                class="">*</span></label><br>
                                                                <select id="subcategory" name="subcategory_id" class="form-control" required >
                                                                    <option value="{{$data->subcategory_id}}">{{$data->subcategory->name}}</option>
                                                                </select>
                                                                <p id="empty_subcategory" style="display:none">
                                                                No subCategory Found. Please Create a SubCategory For Above Category <a target="_blank"
                                                                    href="{{route('add-subcategory')}}">Here</a></p>
                                                                @if ($errors->has('subcategory_id'))
                                                                    <span class="required">
                                                                            <strong>{{ $errors->first('subcategory_id') }}</strong>
                                                                        </span>
                                                                @endif
                                                    </div>

                                                    {{-- <div class="form-group">
                                                        <label>Select ChildCategory <span
                                                                class="required">*</span></label><br>
                                                                <select id="childcategory" name="childcategory_id" class="form-control">
                                                                    <option value="{{$data->childcategory_id}}">{{$data->childcategory->name}}</option>
                                                                </select>
                                                                <p id="empty_childcategory" style="display:none">
                                                                No childCategory Found. Please Create a childCategory For Above Category <a target="_blank"
                                                                    href="{{route('add-child-category')}}">Here</a></p>
                                                                @if ($errors->has('childcategory_id'))
                                                                    <span class="required">
                                                                            <strong>{{ $errors->first('childcategory_id') }}</strong>
                                                                        </span>
                                                                @endif
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <label for="price">Product Name <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="name" id="name"
                                                            class="form-control" value="{{ $data->name }}"
                                                            placeholder="Enter Product Name" />
                                                        @if ($errors->has('name'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="price">Brand <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="brand" id="brand" class="form-control"
                                                            value="{{ $data->brand }}" placeholder="Enter Brand Name" />
                                                        @if ($errors->has('brand'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('brand') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Color <span class=" text-danger">*</span></label>
                                                                <select name="colors[]" id="color" class="form-control select2" multiple >
                                                                    <option value="">--Select Color--</option>
                                                                    @php
                                                                        $existingcolors=explode('#',$data->colors);
                                                                    @endphp
                                                                    @foreach ($colors as $color)
                                                                        <option value="{{ $color->id }}" @if(in_array($color->id,$existingcolors)) Selcted @endif>
                                                                            {{ $color->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>

                                                        @if ($errors->has('colors'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('colors') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <label for="price">Size <span class="required text-danger">*</span></label>
                                                                <select name="size[]" id="size" class="form-control select2" multiple required>
                                                                    <option value="">--Select Size--</option>

                                                                </select>
                                                        @if ($errors->has('size'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('size') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <label for="price">Size <span class=" text-danger">*</span></label>
                                                                <select name="sizes[]" id="size" class="form-control select2" multiple >
                                                                    <option value="">--Select Size--</option>
                                                                    @foreach ($sizes as $size)
                                                                        <option value="{{ $size->id }}">
                                                                            {{ $size->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                        @if ($errors->has('size'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('size') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="price">RSP <span class="required">*</span></label>
                                                        <input type="number" min="0" name="rsp" id="rsp"
                                                            class="form-control" value="{{ $data->rsp }}"
                                                            placeholder="Enter RSP" />
                                                        @if ($errors->has('rsp'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('rsp') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">SH <span class="required">*</span></label>
                                                        <input type="number" min="0" name="sh" id="sh"
                                                            class="form-control" value="{{ $data->sh }}"
                                                            placeholder="Enter SH" />
                                                        @if ($errors->has('sh'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('sh') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">HSN Code <span class="required">*</span></label>
                                                        <input type="number" min="0" name="hsn_code" id="hsn_code"
                                                            class="form-control" value="{{ $data->hsn_code }}"
                                                            placeholder="Enter HSN Code" />
                                                        @if ($errors->has('hsn_code'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('hsn_code') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Mrp Price <span
                                                                class="required">*</span></label>
                                                        <input type="number" min="0" name="mrp_price" id="mrp_price"
                                                            class="form-control" value="{{ $data->price }}"
                                                            placeholder="Enter MRP Price" />
                                                        @if ($errors->has('mrp_price'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('mrp_price') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Selling Price <span
                                                                class="required">*</span></label>
                                                        <input type="number" min="0" name="selling_price" id="selling_price"
                                                            class="form-control" value="{{ $data->selling_price }}"
                                                            placeholder="Enter Selling Price" />
                                                        @if ($errors->has('selling_price'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('selling_price') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="price">Product SKU <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="sku" id="sku" class="form-control"
                                                            value="{{ $data->sku }}" placeholder="Enter Product SKU" />
                                                        @if ($errors->has('sku'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('sku') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea name="description" rows="4" placeholder="Enter Description"
                                                            class="form-control">{{ $data->description }}</textarea>
                                                        @if ($errors->has('description'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('description') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    {{-- <div class="form-group">
                                                        <label>Details</label>
                                                        <textarea name="details" rows="4" placeholder="Enter Details" class="form-control">{{ $data->details }}</textarea>
                                                        @if ($errors->has('details'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('details') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div> --}}

                                                    <div class="form-group">
                                                        <label for="price">Quantity <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="quantity" id="quantity"
                                                            class="form-control" placeholder="Enter Quantity"
                                                            value="{{ $data->quantity }}" />
                                                        @if ($errors->has('quantity'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('quantity') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">GST <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="gst" id="gst"
                                                            class="form-control" placeholder="Enter Gst"
                                                            value="{{ $data->gst }}" />
                                                        @if ($errors->has('gst'))
                                                            <span class="required">
                                                                <strong>{{ $errors->first('gst') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="images">Current  Image <span class="required">*</span></label>
                                                <br>
                                                {{-- {{dd($data->product_image)}} --}}
                                                @foreach($data->product_image as $image)
                                                <img src="{{asset('storage/product/'.@$image->image)}}" width="100px">
                                                @endforeach
                                                    <br>
                                                        <label for="images">Choose Multiple Image <span
                                                                class="required">*</span></label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="images[]" value="" class="custom-file-input"
                                                                    id="images" multiple>
                                                                @if ($errors->has('images'))
                                                                    <span class="required">
                                                                        <strong>{{ $errors->first('images') }}</strong>
                                                                    </span>
                                                                @endif
                                                                <label class="custom-file-label" for="images">Choose image
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Product Type <span class="required">*</span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="one">
                                                            <input type="radio"  name="type" value="BestSeller"  @if($data->type=='BestSeller') checked="" @endif/>
                                                            BestSeller
                                                        </label>
                                                        <label for="two">
                                                            <input type="radio" " name="type" value="Latest"  @if($data->type=='Latest') checked="" @endif/>
                                                            Latest
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Is Featured <span class="required">*</span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="one">
                                                            <input type="radio"  name="featured" value="Yes"  @if($data->featured=='Yes') checked="" @endif/>
                                                            Yes
                                                        </label>
                                                        <label for="two">
                                                            <input type="radio" " name="featured" value="No" @if($data->featured=='No') checked="" @endif/>
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Is Top rated <span class="required">*</span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="one">
                                                            <input type="radio"  name="top_rated" value="Yes"  @if($data->top_rated=='Yes') checked="" @endif/>
                                                            Yes
                                                        </label>
                                                        <label for="two">
                                                            <input type="radio" " name="top_rated" value="No" @if($data->top_rated=='No') checked="" @endif/>
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Status <span class="required">*</span></label><br>
                                                        <label for="chkYes">
                                                            <input type="radio" class="status" value="Active" name="status" @if($data->status=='Active') checked="" @endif />
                                                            @if ($errors->has('status'))
                                                                <span class="required">
                                                                      <strong>{{ $errors->first('status') }}</strong>
                                                                  </span>
                                                            @endif
                                                            Active
                                                        </label>
                                                        <label for="chkNo">
                                                            <input type="radio" class="status" value="Inactive" name="status"  @if($data->status=='Inactive') checked="" @endif/>
                                                            @if ($errors->has('status'))
                                                                <span class="required">
                                                                      <strong>{{ $errors->first('status') }}</strong>
                                                                  </span>
                                                            @endif
                                                            Inactive
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <button id="submit" type="submit" class="btn btn-primary">Update
                                                            Product</button>
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
