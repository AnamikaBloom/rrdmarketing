@extends('user.layout.app')
@section('content')

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Total Team </li>
							</ol><!-- End breadcrumb -->

							
						</div>
						<!--page-header closed-->



                  <!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card export-database">

									<div class="card-header">
											<h4> My Team </h4>
										</div>

									<div class="row card-body">
                        <div class="col-md-3">
                            <h5 style="color: white;">
                                From Date</h5>
                            <input name="ctl00$ContentPlaceHolder1$txtfrm" type="date" id="ContentPlaceHolder1_txtfrm" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <h5 style="color: white;">
                                To Date</h5>
                            <input name="ctl00$ContentPlaceHolder1$txtto" type="date" id="ContentPlaceHolder1_txtto" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <h5 style="color: white;">
                                Screen</h5>
                            <select name="ctl00$ContentPlaceHolder1$Dropdown1" id="ContentPlaceHolder1_Dropdown1" class="form-control">
	<option value="">All</option>
	<option value="Left">Screen 1</option>
	<option value="Right">Screen 2</option>

</select>
                        </div>

						<h5> Total Members: 2 </h5>

                    </div>





									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
                                                    <tr>
                                                        <th> Sl.No </th>
                                                        <th> User Id </th>
                                                        <th> Name </th>
                                                        <th> Rank </th>
                                                        <th> Sponsor ID </th>
                                                        <th> Status </th>
                                                        <th> Reg Date </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($childs as $child)
                                                        <tr>
                                                            <td class="text-dark">{{ $loop->iteration }}</td>
                                                            <td> {{ $child->member_id }} </td>
                                                            <td> {{ $child->name }} </td>
                                                            <td> {{ ($child->rank)?$child->rank->name:'-' }} </td>
                                                            <td> {{ $child->sponser_id }} </td>
                                                            <td> </td>
                                                            <td>{{ $child->created_at->format('d-m-Y') }} </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
											</table>
                                            {{ $childs->links('pagination::bootstrap-4') }}
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
