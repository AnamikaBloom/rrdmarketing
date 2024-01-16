@extends('admin.layouts.app')

@section('content')



                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Invoice listing </li>
							</ol><!-- End breadcrumb -->

							
						</div>
						<!--page-header closed-->

                  <!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card export-database">
									<div class="card-header">
										<h4>Invoice Listing</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
														<th>Sl No</th>
														<th> Customer Name </th>
														<th> Invoice No </th>
														<th> Invoice Date </th>
														<th> Email </th>
														<th> Phone </th>
														<th> City </th>
														<th> State </th>
														<th> Pin Code </th>
														<th> Name of Product </th>
														<th> No of Product </th>
														<th> Sub Total </th>
														<th> Tax </th>
														<th> Total Amount </th>
														{{-- <th> Paid Amount </th>
														<th> Pending Amount </th> --}}
														{{-- <th> Remainder </th> --}}
														<th> Action </th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach ($invoices as $invoice)
                                                    <?php
														$total_price=0;
														$total_tax=0;
														foreach ($invoice->orderlists as $key=>$orderlist)
														{
														$product_price = $orderlist->product->selling_price * $orderlist->quantity;
														$product_tax = $orderlist->product->gst;
														$total_price= $total_price + $product_price;
														$total_tax= ($total_tax + ($product_price*$product_tax)/100);
														// dd($total_price);
														}
                                                        $encrypted = Illuminate\Support\Facades\Crypt::encryptString($invoice->order_id);
                                                        // dd($encrypted);
													?>
                                                    <tr>
														<td> {{$loop->iteration}} </td>
                                                        <td> {{($invoice->user)?$invoice->user->name:''}}</td>
														{{-- <td> {{$invoice->user->name}} </td> --}}
														<td> {{$invoice->order_id}}</td>
														<td> {{$invoice->updated_at}} </td>
                                                        <td> {{($invoice->user)?$invoice->user->email:''}}</td>
														{{-- <td> {{$invoice->user->email}} </td> --}}
                                                        <td> {{($invoice->user)?$invoice->user->mobile:''}}</td>

                                                        {{-- <td> {{$invoice->user->mobile}}</td> --}}
														<td> {{($invoice->user->city_id)?$invoice->user->city->district:'-'}}  </td>
														<td> {{($invoice->user->state_id)? $invoice->user->states->name:'-'}} </td>
														<td> {{($invoice->user->city_id)?$invoice->user->city->postal_code:'-'}} </td>
														<td> @foreach ($invoice->orderlists as $orderlist)
                                                            {{$orderlist->product->name}}<br>
                                                             @endforeach
                                                        </td>
														<td> @foreach ($invoice->orderlists as $orderlist)
                                                            {{$orderlist->quantity}}<br>
                                                            @endforeach
                                                        </td>
														<td> {{$total_price-$total_tax}} </td>
														<td>{{$total_tax}}</td>
														<td> {{$invoice->payable_price}} </td>
														{{-- <td> 10000 </td>
														<td> 5000 </td> --}}
														{{-- <td>
															<button type="button" class="btn btn-primary">Remainder</button>
														</td> --}}
														<td>
															<a href="{{ route('generate-invoice', $encrypted) }}" target="blank_" class="btn btn-primary">view</a>
															<a href="{{ route('download-invoice', $encrypted) }}" target="blank_" class="btn btn-primary">Download</a>
															{{-- <button type="button" class="btn btn-primary">Delete</button> --}}
														</td>
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
