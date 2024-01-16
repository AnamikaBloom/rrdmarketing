@extends('admin.layouts.app')

@section('content')

 <!--app-content open-->
    <div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Sales Report </li>
							</ol><!-- End breadcrumb -->

							
						</div>
						<!--page-header closed-->

                  <!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card export-database">
									<div class="card-header">
										<h4> Sales Report </h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
														<th> Sl No </th>
														<th>  Client Name </th>
														<th> Product </th>
														<th> Ordered Date </th>
														<th>  Contact No </th>
														<th> Quantity </th>
														<th> Status </th>
														{{--<th> Action </th> --}}
													</tr>
												</thead>
												<tbody>
                                                    @foreach ($orders as $order)
                                                    <tr>
														<td> {{$loop->iteration}} </td>
                                                        <td> {{($order->user)?$order->user->name:''}}</td>

														{{-- <td> {{$order->user->name}} </td> --}}
														<td> @foreach ($order->orderlists as $orderlist)
                                                            {{$orderlist->product->name}}<br>
                                                        @endforeach
                                                        </td>
														<td> {{$order->updated_at->format('d-m-Y')}} </td>
                                                        <td> {{($order->user)?$order->user->mobile:''}}</td>
														{{-- <td>{{$order->user->mobile}}</td> --}}
														<td>@foreach ($order->orderlists as $orderlist)
                                                            {{$orderlist->quantity}}<br>
                                                        @endforeach</td>
														<td> {{$order->status}} </td>
														{{-- <td>
															<button type="button" class="btn btn-sm  btn-primary">Delete</button>
                                                        </td> --}}

													</tr>
                                                    @endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->

				@endsection
