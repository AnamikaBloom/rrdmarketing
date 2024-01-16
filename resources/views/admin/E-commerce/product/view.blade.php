@extends('admin.layouts.app')
@section('content')
    <div class="app-content">
        <section class="section">
  <!-- form start -->

@include('admin.notifications')
            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Products </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">
                    <div class="input-group">
                        <a href="{{route('add-product')}}" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip"
                        title="" data-placement="top" data-original-title="Add New Account">
                        <span>
                            <i class="fe fe-plus"></i>
                        </span>
                    </a>


                    </div>
                </div>
            </div>
            <!--page-header closed-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h4> All Products </h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example"
                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th> Image </th>
                                            <th> Product Name </th>
                                            <th> Product Colors </th>
                                            <th> Product Sizes </th>
                                            <th> Price </th>
                                            <th> Category </th>
                                            <th> Sub Category </th>
                                            {{-- <th> Child Category </th> --}}
                                            <th> Status</th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        {{-- dd($products); --}}
                                        <tr>
                                            <td>{{$loop->iteration}} </td>

                                            <td> <img src="{{asset('storage/product/'.@$product->single_image->image)}}" width="50%"> </td>

                                            <td> {{$product->name}} </td>
                                            @php
                                                $colorId=explode('#',$product->colors);
                                                $sizeId=explode('#',$product->sizes);
                                                $colors=\App\Models\Color::whereIn('id',$colorId)->get();
                                                $sizes=\App\Models\Size::whereIn('id',$sizeId)->get();
                                            @endphp
                                            <td style=" word-break: break-word; white-space: normal;"> @foreach ($colors as $color)
                                                {{$color->name}}
                                            @endforeach </td>
                                            <td style=" word-break: break-word; white-space: normal;"> @foreach ($sizes as $size)
                                                {{$size->name}}({{$size->short_name}})
                                            @endforeach </td>
                                            <td> {{$product->price}} </td>
                                            <td> {{$product->category->name}} </td>
                                            <td> {{$product->subcategory->name}} </td>
                                            {{-- <td> {{$product->childcategory->name}} </td> --}}
                                            <td> {{$product->status}} </td>


                                            <td>
                                                <a href="{{route('edit-product',$product->slug)}}" class="btn btn-primary"> Edit
                                                </a>
                                                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('delete-product',$product->id)}}" class="btn btn-primary"> Delete
                                                </a>
                                            </td>


                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                {{ $products->links('pagination::bootstrap-4') }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--row open-->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-8">


                </div>

            </div>
            <!--row closed-->

        </section>
    </div>
@endsection
