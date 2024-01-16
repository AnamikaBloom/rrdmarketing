@extends('user.layout.app')
@section('content')

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Products Details </li>
							</ol><!-- End breadcrumb -->
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="product-details">
											<div class="text-center">
												<img src="{{asset('storage/product/'.@$product->single_image->image)}}" alt="">
											</div>
										</div>

										<div class="mt-4 mb-4">
											<h5 class="mb-3 mt-2">Description</h5>
											<p>{{$product->description}}</p>
										</div>
                                        <div class="mt-4 mb-4">
											<h5 class="mb-3 mt-2">MRP</h5>
											<p>{{$product->price}}</p>
										</div>
                                        <div class="card-body text-center">
                                            <h4>
                                            <a id="product_id" onclick="addToCart({{$product->id}})" href="javascript:void(0)"><i class="fa fa-shopping-cart"></i></a>
                                            </h4>
                                        </div>
										{{-- <div class="row">
											<div class="col-xl-6 col-lg-12 col-md-12">
												<div class="form-group mb-0 mt-2">
													<label class="form-label">Select Color</label>
													<div class="row gutters-xs">
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="danger" class="colorinput-input" checked="">
																<span class="colorinput-color bg-danger"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="primary" class="colorinput-input">
																<span class="colorinput-color bg-primary"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="pink" class="colorinput-input">
																<span class="colorinput-color bg-pink"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="warning" class="colorinput-input">
																<span class="colorinput-color bg-danger"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="orange" class="colorinput-input">
																<span class="colorinput-color bg-dark"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="info" class="colorinput-input">
																<span class="colorinput-color bg-gray"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
										</div> --}}
										{{-- <div class="mt-4 product-spec">
											<h5 class="mb-3 mt-2">Specification</h5>
											<div class="pro_detail p-4">
												<h6 class="ml-0 font-weight-bold mb-3">General</h6>
												<ul class="list-unstyled mb-0">
													<li class="row">
														<div class="col-sm-3 text-muted mb-2">Model Number</div>
														<div class="col-sm-3 mb-2">SMXXX895632</div>
													</li>
													<li class=" row">
														<div class="col-sm-3 text-muted mb-2">Mobile Name</div>
														<div class="col-sm-3 mb-2">Galaxy A5A</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted mb-2 mb-md-0">Color</div>
														<div class="col-sm-3 mb-0">Black</div>
													</li>
												</ul>
											</div>
											<div class="pro_detail border-t0 p-4">
												<h6 class="ml-0 font-weight-bold mb-3">General</h6>
												<ul class="list-unstyled mb-0">
													<li class="row">
														<div class="col-sm-3 text-muted mb-2">Display Size</div>
														<div class="col-sm-3 mb-2">16.26 cm (6.4 inch)</div>
													</li>
													<li class=" row">
														<div class="col-sm-3 text-muted mb-2">Resolution</div>
														<div class="col-sm-3 mb-2">1080 x 2340 pixels</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted mb-2">Internal Storage</div>
														<div class="col-sm-3 mb-2">64 GB</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted mb-2">RAM</div>
														<div class="col-sm-3 mb-2">4 GB</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted mb-2 mb-md-0">Expandable Storage</div>
														<div class="col-sm-3 mb-0">microSD</div>
													</li>
												</ul>
											</div>
										</div> --}}
									</div>
								</div>
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
										<ul class="nav prod-cat">
											<li>
												<a href="#" class="active"><i class=" fa fa-angle-right"></i> Dress</a>
												<ul class="nav">
													<li class="active"><a href="#">- Shirt</a></li>
													<li><a href="#">- Pant</a></li>
													<li><a href="#">- Shoes</a></li>
												</ul>
											</li>
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
								<div class="card Relatedpost">
									<div class="card-header">
										<h4 class="card-title">Related Posts</h4>
									</div>
									<div class="card-body">
										<ul class="list-unstyled mb-0">
											<li class="media mt-0">
												<img class="mr-3" src="{{asset('user/assets/img/products/1.jpg') }}" alt="Generic placeholder image">
												<div class="media-body">
													<div class="media-title text-dark"><a href="#">Sed do eiusmod tempor</a></div>
													<small>sed do eiusmod tempor incididunt ut labore</small>
												</div>
											</li>
											<li class="media my-4">
												<img class="mr-3" src="{{asset('user/assets/img/products/3.jpg') }}" alt="Generic placeholder image">
												<div class="media-body">
													<div class="media-title text-dark"><a href="#">Unde omnis iste natus</a></div>
													<small>sed do eiusmod tempor incididunt ut labore</small>
												</div>
											</li>
											<li class="media my-4">
												<img class="mr-3" src="{{asset('user/assets/img/products/4.jpg') }}" alt="Generic placeholder image">
												<div class="media-body">
													<div class="media-title text-dark"><a href="#">Vero eos et accusamus et</a></div>
													<small>sed do eiusmod tempor incididunt ut labore</small>
												</div>
											</li>
											<li class="media">
												<img class="mr-3" src="{{asset('user/assets/img/products/5.jpg') }}" alt="Generic placeholder image">
												<div class="media-body">
													<div class="media-title text-dark"><a href="#">Nemo enim ipsam voluptatem</a></div>
													<small>sed do eiusmod tempor incididunt ut labore</small>
												</div>
											</li>
										</ul>
									</div>
								</div> --}}
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->
@endsection
