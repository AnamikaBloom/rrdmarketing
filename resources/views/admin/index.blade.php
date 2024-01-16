@extends('admin.layouts.app')

@section('content')

		   <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Dashboard </li>
							</ol><!-- End breadcrumb -->

							
						</div>
						<!--page-header closed-->

						<!--row open-->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-center mb-3">
											<h6 class="mb-1"> New Registration </h6>
											<h3 class="mb-0"><i class="fe fe-eye text-primary  mr-2"></i>{{count($newRegistrations)}}</h3>
										</div>
									</div>

									<div>
										<canvas id="widege1" class="chart-dropshadow"></canvas>
									</div>
								</div>
							</div>

							{{-- <div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-center mb-3">
											<h6 class="mb-1"> Total Income </h6>
											<h3 class="mb-0"><i class="fe fe-thumbs-down text-secondary mr-2"></i></h3>
										</div>
									</div>

									<div>
										<canvas id="widege2" class="chart-dropshadow"></canvas>
									</div>
								</div>
							</div> --}}

							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card overflow-hidden bg-pink">
									<div class="card-body pb-0">
										<div class="text-center mb-3">
											<h6 class="mb-1"> InActive Users </h6>
											<h3 class="mb-0"><i class="fe fe-thumbs-up  mr-2"></i>{{count($inactiveusers)}}</h3>
										</div>
									</div>

									<div>
										<canvas id="widege3" class="chart-dropshadow"></canvas>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card overflow-hidden bg-info">

									<div class="card-body pb-0">
										<div class="text-center mb-3">
											<h6 class="mb-1"> Total Orders </h6>
											<h3 class="mb-0"><i class="fe fe-message-square  mr-2"></i>{{count($totalOrders)}}</h3>
										</div>
									</div>

									<div>
										<canvas id="widege4" class="chart-dropshadow"></canvas>
									</div>
								</div>
							</div>

						</div>
						<!--row closed-->
						{{--

						<div class="row">

							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Current Support Stats</h4>
										<h6 class="card-subtitle">Today</h6>
									</div>

									<div class="card-body">
										<div class="clearfix">
											<div class="float-right list-icons">
												<span>
													<i class="fa fa-ticket op2"></i>
												</span>
											</div>
											<div class="float-left text-left">
												<span>Tickets Created</span>
												<h2 class="mb-0">567</h2>
												<p class="mb-0 text-muted"><span class="text-success fs-10"><i class="fa fa-arrow-up mr-1 fs-10"> 47%</i></span>this yesterday</p>
											</div>
										</div>

										<div class="mt-4 mb-3">
											<p class="mb-2">Solved<span class="float-right text-muted">50%</span></p>
											<div class="progress h-6">
												<div class="progress-bar bg-primary w-50 " role="progressbar"></div>
											</div>
										</div>

										<div class="mt-3">
											<p class="mb-2">Pending<span class="float-right text-muted">30%</span></p>
											<div class="progress h-6">
												<div class="progress-bar bg-secondary w-30 " role="progressbar"></div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Tickets by Status</h4>
										<h6 class="card-subtitle">Today</h6>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<p class="mb-2">New<span class="float-right text-muted">60%</span></p>
											<div class="progress h-6">
												<div class="progress-bar bg-info w-60 " role="progressbar"></div>
											</div>
										</div>

										<div class="mb-3">
											<p class="mb-2">Open<span class="float-right text-muted">70%</span></p>
											<div class="progress h-6">
												<div class="progress-bar bg-success w-70" role="progressbar"></div>
											</div>
										</div>


										<div class="mb-0">
											<p class="mb-2">Hold<span class="float-right text-muted">50%</span></p>
											<div class="progress h-6">
												<div class="progress-bar bg-pink w-50" role="progressbar"></div>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
						--}}



						<div class="row">
							<div class="col-xl-5 col-md-12 col-lg-5">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"> Rewards List </h4>
									</div>
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
                                    <a href="{{route('reward-index')}}" class="btn btn-primary btn-sm pull-right"> View All Rewards
                                    </a>
										{{-- <a type="submit" href="{{route('reward-index')}}" class="btn btn-primary btn-sm pull-right">  View All Rewards </a> --}}

									</div>
								</div>
							</div>

							<div class="col-xl-7 col-md-12 col-lg-7">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Orders Details</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											@if(count($orders))
											<table class="table table-bordered  mb-0 text-nowrap">

												<thead>

													<tr>
													{{-- 	<th>Customer</th>--}}
														<th>Order ID</th>
														<th>Order Date</th>
														<th>Order Status</th>
													</tr>
												</thead>

												<tbody>
													@foreach ($orders as $key=> $order)
													<tr @if($key+1==1)class="" @elseif(($key+1/2)==0) class="TR-bgcolor" @elseif(($key+1/3)==0) class="TR-bgcolor1" @endif>

														{{-- <td>{{$order->user->name}}</td>  --}}
														<td>{{$order->order_id}}</td>
														<td>{{date('d M Y',strtotime($order->created_at))}}</td>
														{{-- <td>Online Payment</td> --}}
														<td><span class="badge badge-success">{{$order->status}}</span></td>
													</tr>
													@endforeach




												</tbody>
											</table>
											@else
											<div> No Records Found
											</div>
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>





						<div class="row">
							<div class="col-md-12 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h4>Product Details</h4>
									</div>
									<div class="card-body">
									<div class="table-responsive">
										@if(count($products))
										<table class="table table-bordered text-nowrap mb-0">
											<thead>
												<tr>
													<th>Product ID</th>
													<th>Product</th>
													<th>Product Cost</th>
													<th>Quantity</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($products as $product)
												<tr>
													<td>{{$loop->iteration}}</td>
													<td>{{$product->name}}</td>
													<td> INR {{$product->price}}</td>
													<td> {{$product->quantity}} </td>
													@if($product->quantity>=10)
													<td>
														<span class="badge badge-primary">In Stock</span>
															@elseif ($product->quantity<10 && $product->quantity>0)
															<span class="badge badge-warning">Limited</span>
															@elseif($product->quantity==0)
															<span class="badge badge-danger">No Stock</span>
														@endif
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
										@else
											<div> No Records Found
												</div>
										@endif
									</div>
									</div>
								</div>
							</div>
						</div>



					</section>
				</div>
				<!--app-content closed-->
@endsection
