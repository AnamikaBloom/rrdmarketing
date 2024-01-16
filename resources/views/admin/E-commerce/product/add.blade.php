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
 

            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        @include('admin.notifications')
                        <div class="card-header">
                            <h4> Add Products </h4>
                        </div>
                        <div class="card-body">

                            <form enctype="multipart/form-data" role="form" id="myform" method="post"
                                        action="{{ route('add-product') }}">
                                        @csrf

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Select Category <span class="required text-danger">*</span></label><br>
                                                        @if (count($categories))
                                                            <select name="category_id" id="category" class="form-control" required>
                                                                <option value="">--Select Category--</option>
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
                                                        @if ($errors->has('category_id'))
                                                        <span class="required text-danger">
                                                               <strong>{{ $errors->first('category_id') }}</strong>
                                                           </span>
                                                   @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Select Subcategory <span class="required text-danger">*</span></label><br>
                                                                <h4 id="subcategory_info"  >
                                                                    Please Select Category First</h4>
                                                                <select id="subcategory" name="subcategory_id" class="form-control" required style="display:none">
                                                                    <option value="">--Select Sub Category--</option>
                                                                </select>
                                                                <p id="empty_subcategory" style="display:none">
                                                                No subCategory Found. Please Create a SubCategory For Above Category <a target="_blank"
                                                                    href="{{route('add-subcategory')}}">Here</a></p>
                                                                @if ($errors->has('subcategory_id'))
                                                                     <span class="required text-danger">
                                                                            <strong>{{ $errors->first('subcategory_id') }}</strong>
                                                                        </span>
                                                                @endif
                                                    </div>

                                                    {{-- <div class="form-group">
                                                        <label>Select ChildCategory <span class="required text-danger">*</span></label><br>
                                                                <h4 id="childcategory_info"  >
                                                                    Please Select Sub Category First</h4>
                                                                <select id="childcategory" name="childcategory_id" class="form-control" required style="display:none">
                                                                    <option value="">--Select child Category--</option>
                                                                </select>
                                                                <p id="empty_childcategory" style="display:none">
                                                                No childCategory Found. Please Create a childCategory For Above Category <a target="_blank"
                                                                    href="{{route('add-child-category')}}">Here</a></p>
                                                                @if ($errors->has('childcategory_id'))
                                                                     <span class="required text-danger">
                                                                            <strong>{{ $errors->first('childcategory_id') }}</strong>
                                                                        </span>
                                                                @endif
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <label for="price">Product Name <span class="required text-danger">*</span></label>
                                                        <input type="text" name="name" id="name"
                                                            class="form-control" value="{{ old('name') }}"
                                                            placeholder="Enter Product Name" />
                                                        @if ($errors->has('name'))
                                                            <span class="required text-danger">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="price">Brand <span class="required text-danger">*</span></label>
                                                        <input type="text" name="brand" id="brand" class="form-control"
                                                            value="{{ old('brand') }}" placeholder="Enter Brand Name" />
                                                        @if ($errors->has('brand'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('brand') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Color <span class="text-danger">*</span></label>
                                                                <select name="colors[]" id="color" class="form-control select2" multiple >
                                                                    <option value="">--Select Color--</option>
                                                                    @foreach ($colors as $color)
                                                                        <option value="{{ $color->id }}">
                                                                            {{ $color->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>

                                                        @if ($errors->has('color'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('color') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Size <span class=" text-danger">*</span></label>
                                                                <select name="sizes[]" id="size" class="form-control select2" multiple>
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
                                                        <label for="price">RSP  <span class="required text-danger">*</span></label>
                                                        <input type="number" min="0" name="rsp" id="rsp"
                                                            class="form-control" value="{{ old('rsp') }}"
                                                            placeholder="Enter RSP" />
                                                        @if ($errors->has('rsp'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('rsp') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">SH  <span class="required text-danger">*</span></label>
                                                        <input type="number" min="0" name="sh" id="sh"
                                                            class="form-control" value="{{ old('sh') }}"
                                                            placeholder="Enter SH" />
                                                        @if ($errors->has('sh'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('sh') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">HSN Code  <span class="required text-danger">*</span></label>
                                                        <input type="number" min="0" name="hsn_code" id="hsn_code"
                                                            class="form-control" value="{{ old('hsn_code') }}"
                                                            placeholder="Enter HSN Code" />
                                                        @if ($errors->has('hsn_code'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('hsn_code') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Mrp Price <span class="required text-danger">*</span></label>
                                                        <input type="number" min="0" name="mrp_price" id="mrp_price"
                                                            class="form-control" value="{{ old('mrp_price') }}"
                                                            placeholder="Enter MRP Price" />
                                                        @if ($errors->has('mrp_price'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('mrp_price') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Selling Price <span class="required text-danger">*</span></label>
                                                        <input type="number" min="0" name="selling_price" id="selling_price"
                                                            class="form-control" value="{{ old('selling_price') }}"
                                                            placeholder="Enter Selling Price" />
                                                        @if ($errors->has('selling_price'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('selling_price') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="price">Product SKU <span class="required text-danger">*</span></label>
                                                        <input type="text" name="sku" id="sku" class="form-control"
                                                            value="{{ old('sku') }}" placeholder="Enter Product SKU" />
                                                        @if ($errors->has('sku'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('sku') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea name="description" rows="4" placeholder="Enter Description"
                                                            class="form-control">{{ old('description') }}</textarea>
                                                        @if ($errors->has('description'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('description') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
{{-- 
                                                    <div class="form-group">
                                                        <label>Details</label>
                                                        <textarea name="details" rows="4" placeholder="Enter Details" class="form-control">{{ old('details') }}</textarea>
                                                        @if ($errors->has('details'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('details') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div> --}}

                                                    <div class="form-group">
                                                        <label for="price">Quantity <span class="required text-danger">*</span></label>
                                                        <input type="text" name="quantity" id="quantity"
                                                            class="form-control" placeholder="Enter Quantity"
                                                            value="{{ old('qua') }}" />
                                                        @if ($errors->has('quantity'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('quantity') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">GST <span class="required text-danger">*</span></label>
                                                        <input type="text" name="gst" id="gst"
                                                            class="form-control" placeholder="Enter Gst"
                                                            value="{{ old('gst') }}" />
                                                        @if ($errors->has('gst'))
                                                             <span class="required text-danger">
                                                                <strong>{{ $errors->first('gst') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="images">Choose Multiple Image <span class="required text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="images[]" class="custom-file-input"
                                                                    id="images" multiple>
                                                                @if ($errors->has('images'))
                                                                     <span class="required text-danger">
                                                                        <strong>{{ $errors->first('images') }}</strong>
                                                                    </span>
                                                                @endif
                                                                <label class="custom-file-label" for="images">Choose image
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Product Type  <span class="required text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="one">
                                                            <input type="radio"  name="type" value="BestSeller" />
                                                            BestSeller
                                                        </label>
                                                        <label for="two">
                                                            <input type="radio" " name="type" value="Latest" />
                                                            Latest
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Is Featured  <span class="required text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="one">
                                                            <input type="radio"  name="featured" value="Yes" />
                                                            Yes
                                                        </label>
                                                        <label for="two">
                                                            <input type="radio" " name="featured" value="No" />
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Is Top Rated <span class="required text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="one">
                                                            <input type="radio"  name="top_rated" value="Yes" />
                                                            Yes
                                                        </label>
                                                        <label for="two">
                                                            <input type="radio" " name="top_rated" value="No" />
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Status <span class="required text-danger">*</span></label><br>
                                                        <label for="chkYes">
                                                            <input type="radio" class="productstatus" value="Active"
                                                                name="status" checked="" />
                                                            @if ($errors->has('status'))
                                                                 <span class="required text-danger">
                                                                    <strong>{{ $errors->first('status') }}</strong>
                                                                </span>
                                                            @endif
                                                            Active
                                                        </label>
                                                        <label for="chkNo">
                                                            <input type="radio" class="productstatus" value="InActive"
                                                                name="status" />
                                                            @if ($errors->has('status'))
                                                                 <span class="required text-danger">
                                                                    <strong>{{ $errors->first('status') }}</strong>
                                                                </span>
                                                            @endif
                                                            Inactive
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <button id="submit" type="submit" class="btn btn-primary">Create
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
