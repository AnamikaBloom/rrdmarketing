@extends('user.layout.app')
@section('content')

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					<h1 class="text-center"><br/>Out Products</h1>

                        <!--row open-->
						<div class="row">
							<div class="col-md-12 col-lg-12 col-xl-8">
								<div class="row product-list">
                                    @foreach ($products as $product)
                                    <div class="col-lg-12 col-xl-4 col-md-12">
										<div class="card">
											<div class="pro-img-box">
												<img src="{{asset('storage/product/'.@$product->single_image->image)}}" alt="">
												<div class="shop-details">

													<a href="{{route('repurchage-productDetails',$product->slug) }}" class="adtocart bg-secondary">
														<i class="fa fa-eye"></i>
													</a>
												</div>
											</div>

											<div class="card-body text-center">
												<h4>
													<a href="{{route('repurchage-productDetails',$product->slug) }}" class="pro-title">
														{{$product->name}} ({{$product->colors}})
													</a><br>
                                                    <span class="pro-title"> MRP {{$product->price}}</span><br>
                                                    <a id="product_id" onclick="addToCart({{$product->id}})" href="javascript:void(0)"><i class="fa fa-shopping-cart"></i></a>

												</h4>

											</div>
										</div>
									</div>
                                    @endforeach
								</div>
                                {{ $products->links('pagination::bootstrap-4') }}

							</div>

							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<input type="text" class="form-control btl-2 bbl-2" placeholder="">
											<div class="input-group-append">
												<a href="" class="btn btn-primary btr-2 bbr-2 text-center mb-0">
													Search
												</a>
											</div>
										</div>
									</div>
								</div>

								{{-- <div class="card">
									<div class="card-header">
										<h4 class="card-title">Category</h4>
									</div>
									<div class="card-body">
										<div  id="container">
											<ul class="nav prod-cat">
												<li><a href="#" class="active"><i class=" fa fa-angle-right"></i> Dress</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Bags &amp; Purses</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Beauty</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Coat &amp; Jacket</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Jeans</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Jewellery</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Electronics</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Sports</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Technology</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Watches</a></li>
												<li><a href="#"><i class=" fa fa-angle-right"></i> Accessories</a></li>
											</ul>
										</div>
									</div>
								</div> --}}



							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->
@endsection
