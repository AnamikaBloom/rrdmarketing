@extends('user.layout.app')
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
														<th> Award </th>
														<th> Referrals </th>
														<th> Date  </th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach ($data as $el)
                                                    <tr>
														<td> {{$loop->iteration}} </td>
														<td> {{$el->award}} </td>
														<td> {{$el->referral_count}} </td>
														<td> {{date('d-m-Y',strtotime($el->created_at))}} </td>
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
