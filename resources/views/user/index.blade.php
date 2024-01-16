@extends('user.layout.app')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <!--app-content open-->
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
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
                                <h6 class="mb-1"> Wallet Income </h6>
                                <h3 class="mb-0"><i class="fe fe-eye text-primary  mr-2"></i>{{($wallet)?$wallet->amount:'0'}}</h3>
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
                                <h6 class="mb-1"> Fund Income </h6>
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
                                <h6 class="mb-1"> My Directs </h6>
                                <h3 class="mb-0"><i class="fe fe-thumbs-up  mr-2"></i>{{($directs_wallet)?$directs_wallet:'0'}}</h3>
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
                                <h6 class="mb-1"> My Downline </h6>
                                <h3 class="mb-0"><i class="fe fe-message-square  mr-2"></i>{{$downline}}</h3>
                            </div>
                        </div>

                        <div>
                            <canvas id="widege4" class="chart-dropshadow"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <!--row closed-->



            <!--row open-->
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body iconfont text-left">
                            <h6 class="mb-3"> Team Orders </h6>
                            <h4 class="mb-1 text-dark">{{$team_order}}<span class="text-success fs-15 ml-2">(+35%)</span></h4>
                            <p class="mb-2 text-muted">Analytics for Last month</p>
                            <div class="progress h-6">
                                <div class="progress-bar bg-primary w-40 " role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body iconfont text-left">
                            <h6 class="mb-3"> Total Orders </h6>
                            <h4 class="mb-1 text-dark">{{$user_order}}<span class="text-success fs-15 ml-2">(+27%)</span></h4>
                            <p class="mb-2 text-muted">Analytics for Last month</p>
                            <div class="progress h-6">
                                <div class="progress-bar bg-secondary w-30 " role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body iconfont text-left">
                            <h6 class="mb-3"> Total Withdrawl Request </h6>
                            <h4 class="mb-1 text-dark">{{count($withdrawl_request)}}<span class="text-danger fs-15 ml-2">(-09%)</span></h4>
                            <p class="mb-2 text-muted">Analytics for Last month</p>
                            <div class="progress h-6">
                                <div class="progress-bar bg-info w-20 " role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body iconfont text-left">
                            <h6 class="mb-3"> Total Rewards </h6>
                            <h4 class="mb-1 text-dark">{{count($reward)}} <span class="text-danger fs-15 ml-2">(-39%)</span></h4>
                            <p class="mb-2 text-muted ">Analytics for Last month</p>
                            <div class="progress h-6">
                                <div class="progress-bar bg-pink w-10 " role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->


            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Referral Code/Sponser ID</h4>
                        </div>
                        <div class="card-body">
                            <!-- <p><b>PIN :</b> -->
                            <!-- <br/> -->
                            <!-- <br/> -->
                            @php $share_url = $user->member_id; @endphp
                            {{$share_url}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" onclick="navigator.clipboard.writeText('{{$share_url}}')">Copy the link</button></p>
                            <a href="whatsapp://send?text={{$share_url}}" data-action="share/whatsapp/share">Share via Whatsapp</a>
                        </div>

                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Rewards </h4>
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

                            <button type="submit" class="btn btn-primary btn-sm pull-right"> View All Rewards
                            </button>

                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Daily Benefits </h4>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($dailyBenefits))
                                    <table class="table table-bordered  mb-0 text-nowrap" id="dailyBenefitsTable">
                                        <thead>
                                            <tr>
                                                <th> Sl.No </th>
                                                <th> User Name </th>
                                                <th> Package Name </th>
                                                <th> Amount </th>
                                                <th> Previous Amount </th>
                                                <th> Date </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($dailyBenefits as $key=> $db)
                                                <tr @if($key+1==1)class="" @elseif(($key+1/2)==0) class="TR-bgcolor" @elseif(($key+1/3)==0) class="TR-bgcolor1" @endif>
                                                    <td> {{$loop->iteration}} </td>
                                                    <td> {{$db->user->name}} </td>
                                                    <td> {{$db->package->name}} </td>
                                                    <td> {{$db->amount}} </td>
                                                    <td> {{$db->previous_amount}} </td>
                                                    <td> {{date('d-m-Y',strtotime($db->created_at))}} </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div> No Records Found </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12 col-lg-12">
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
                            <h4> Latest Purchased Packages </h4>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
							

                        <table class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                <th>Trips</th>
                                <th>Expedition</th>
                                <th>Packages</th>
                                <th>Duration</th>
                                <th>Amount</th>
                                <th>Payment Mode</th>
                                <th>Purchase Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($packages as $index=>$package)
                            @php $package_details = $package->Package; @endphp
                                <tr>
                                <td>{{$package_details->name}}</td>
                                <td>{{$package_details->expedition}}</td>
                                <td>{{$package_details->amount}}</td>
                                <td>{{$package_details->duration}} X 369</td>
                                <td>{{$package_details->packages}}</td>                                <td>{{$package->payment_type}}</td>
                                <td>{{date('d-m-Y',strtotime($package->created_at))}} @if($index==0)<span class="text-danger">Active</span>@endif</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>



                       </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Level Wise Benefits </h4>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
											<table class="table table-bordered text-nowrap mb-0">
												<thead>
													<tr>
														<th> Sl.no </th>
														<th> Level</th>
														<th> Income in percent </th>
													</tr>
												</thead>
												<tbody>
													@foreach ($rankmanagement as $key=> $rank)
													<tr>
														<td> {{++$key}} </td>
														<td> {{$rank->name}} </td>
														<td> {{$rank->royalty_percentage}}%</td>
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>
                        </div>
                    </div>
                </div>
            </div>


            {{--
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Challenge Awards and Rewards </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th> Sl.no </th>
                                            <th> RANK </th>
                                            <th> REWARD </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Ruby Distributor </td>
                                            <td> Bike Fund 1.2 Lakh, Goa Tour 2N/3Days , Grand Celebration, Badge+Trophy
                                            </td>
                                            <td><span class="badge badge-primary">In Stock</span></td>
                                        </tr>

                                        <tr class="TR-bgcolor">
                                            <td> 2 </td>
                                            <td> Ruby Distributor </td>
                                            <td> Bike Fund 1.2 Lakh, Goa Tour 2N/3Days , Grand Celebration, Badge+Trophy
                                            </td>
                                            <td><span class="badge badge-warning">Limited</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            --}}



        </section>
    </div>
    <!--app-content closed-->
@endsection

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#dailyBenefitsTable').DataTable({
            // Configure DataTables options here
        });
    });
</script>

<script>
function myFunction() {
    // Get the text field
    var copyText = document.getElementById("myInput");

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);

  }
</script>
