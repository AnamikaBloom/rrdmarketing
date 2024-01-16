@extends('admin.layouts.app')

@section('content')


                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Wallet  </li>
							</ol><!-- End breadcrumb -->

							{{-- <div class="ml-auto">
								<div class="input-group">
									<a href="#" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Add New Account">
										<span>
											<i class="fe fe-plus"></i>
										</span>
									</a>
									<a href="#" class="btn btn-icon btn-info text-white mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Help">
										<span>
											<i class="fe fe-help-circle"></i>
										</span>
									</a>
									<a href="#" class="btn btn-icon btn-danger text-white" data-toggle="tooltip" title="" data-placement="top" data-original-title="Settings">
										<span>
											<i class="fe fe-settings"></i>
										</span>
									</a>
								</div>
							</div> --}}
						</div>
						<!--page-header closed-->


						<!--row open-->
						<div class="row">
							<div class="col-lg-12">
								<div class="e-panel card">
									<div class="card-header">
										<h4> Wallet</h4>
									</div>
			<div class="card-body">
			                       {{-- <div class="">
										 <button type="submit" class="btn btn-primary">Download Excel</button>
									</div> --}}

				<form>
                <div class="card-body">



					<table class="table table-bordered">
						  <thead>
							<tr>
							  <th scope="col"> Sl No </th>
							  <th scope="col"> Member ID </th>
							   <th scope="col">Wallet Amount</th>
							   {{-- <th scope="col">Pair</th> --}}
							   {{-- <th scope="col">Action</th> --}}
							</tr>
						  </thead>
						  <tbody>
                            @foreach ($wallets as $wallet)
                            <?php
                            // $wallet= App\Models\Wallet::where('user_id',$user->id)->sum('amount');
                            $team= App\Models\User::where('sponser_id',$wallet->user_id)->count('sponser_id');
                            ?>
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td><a href=""> {{$wallet->user->member_id}} </a> </td>
                                <td>{{$wallet->amount}} </td>
                                {{-- <td>{{$team}}</td> --}}
                                {{-- <td>
                                <button onclick="location.href = '{{route('user-genealogy',$wallet->user->id)}}';" type="button" class="btn btn-primary">View</button>
                                </td> --}}
                              </tr>
                            @endforeach
						  </tbody>
						</table>
			</div>
                <!-- /.card-body -->
              </form>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->

@endsection
