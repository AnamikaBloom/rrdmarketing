@extends('admin.layouts.app')

@section('content')


                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Fund Transaction </li>
							</ol><!-- End breadcrumb -->

							
						</div>
						<!--page-header closed-->

                  <!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card export-database">

									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
														<th> Sl no </th>
														<th> Member ID </th>
														<th> Name </th>
														<th> Transaction ID</th>
														<th> Amount Transfer </th>
														<th> Date </th>
														<th> Status  </th>
														{{-- <th> Action  </th> --}}
													</tr>
												</thead>
												<tbody>
                                                    @foreach ($wallet_requests as $wallet_request)
                                                    <tr>
														<td> {{$loop->iteration}} </td>
														<td> {{$wallet_request->user->member_id}} </td>
														<td> {{$wallet_request->user->name}} </td>
														<td>{{$wallet_request->transaction_id}} </td>
														<td> Rs {{$wallet_request->total_amount}} </td>
														<td> {{$wallet_request->created_at->format('d-m-Y')}} </td>
														<td>@if($wallet_request->Active=='0')
                                                            Proccessing
                                                            @elseif($wallet_request->Active=='1')
                                                            Approved
                                                            @elseif($wallet_request->Active=='2')
                                                            Hold
                                                            @elseif($wallet_request->Active=='3')
                                                            Rejected
                                                            @endif
                                                        </td>
														{{-- <td>
														    <button type="button" class="btn btn-primary btn-sm update" id={{$wallet_request->id}} data-toggle="modal" data-target="#exampleModal3">Update</button>
															<a href="{{route('fund-request-delete',$wallet_request->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-primary"> Delete
                                                            </a>
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
