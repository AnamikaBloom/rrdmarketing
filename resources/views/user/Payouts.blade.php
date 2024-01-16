@extends('user.layout.app')
@section('content')

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Payouts</li>
							</ol><!-- End breadcrumb -->

							
						</div>
						<!--page-header closed-->



                  <!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card export-database">

									<div class="card-header">
											<h4> My Payouts </h4>
										</div>

						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h5> Total Amount :	<b>
                                            @if ($wallet)
                                            <span>Rs. {{$wallet->amount}} </span>
                                            @else
                                            <span>Rs. 0.00 </span>
                                            @endif </b></h5>
									</div>
								</div>
							</div>
						</div>

									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
															<th> Sl.No </th>
															<th> Username </th>
															<th> Date Req </th>
															<th> Paid Date </th>
															<th> Amount (Rs) </th>
															{{-- <th> AC + HC(15%) </th>
															<th> After Deduction </th>
															<th> TDS(5%) </th>
															<th> NetPay(Rs) </th> --}}
															<th> Transaction No </th>
															<th>Status </th>

														</tr>
												</thead>
												<tbody>
                                                    @if ($payouts)


                                                    @foreach ($payouts as $payout)
                                                    <tr>
														    <td class="text-dark"> {{$loop->iteration}} </td>
															<td> {{$payout->user->name}} </td>
															<td> {{$payout->created_at->format('d-m-Y')}}</td>
                                                            @if ($payout->status != '0')
															    <td> {{$payout->updated_at->format('d-m-Y')}} </td>
                                                            @endif
															<td> {{$payout->amount}} </td>
															{{-- <td> 45.00 </td>
															<td> 255.00 </td>
															<td> 12.75 </td>
															<td> 242 </td> --}}
															<td> {{$payout->transaction_id}} </td>
															<td> {{$payout->status}} </td>
													</tr>
                                                    @endforeach
                                                    @endif



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
