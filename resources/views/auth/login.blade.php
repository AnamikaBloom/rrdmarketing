<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content=" " name="description">
		<meta content=" " name="author">
		<meta name="keywords" content="  "/>

		<!-- Title -->
		<title> RRD 369 Marketing</title>

		<!--Favicon -->
		<link rel="icon" href="{{asset('backend/assets/img/brand/favicon.ico')}}" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

		<!--Style css-->
		<link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">

		<!--Icons css-->
		<link rel="stylesheet" href="{{asset('backend/assets/css/icons.css')}}">

		<!-- P-Scrollbar css-->
		<link rel="stylesheet" href="{{asset('backend/assets/plugins/p-scroll/p-scroll.css')}}">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="{{asset('backend/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.css')}}">

		<!-- Sidemenu-responsive-tabs  css -->
		<link href="{{asset('backend/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">

		<!-- Siderbar css-->
		<link href="{{asset('backend/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- Color-skins css -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color-skins/color.css" />

	</head>

	<body>

	    <!--app open-->
		<div id="app" class="page">
			<div class="page-content">
				<div class="container">
					<!--single-page open-->
					<div class="single-page">
						<div class="wrapper wrapper2">
							<form id="login" class="card-body" tabindex="500" action="{{route('admin-logins')}}" method="POST">
                                @csrf
								<h3 class="text-dark">Admin Login</h3>
                                @include('pages.notification')
								<div class="mail">
									<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
								</div>

								<div class="passwd">
									<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
								</div>
								<p class="mb-3 text-right"><a href="{{route('admin-forgot')}}">Forgot Password</a></p>
								<div class="submit">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
								</div>

							</form>
							<div class="mb-4">

							</div>
						</div>
					</div>
					<!--single-page closed-->
				</div>
			</div>
		</div>
		<!--app closed-->

		<!--Jquery.min js-->
		<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>

		<!--popper js-->
		<script src="{{asset('backend/assets/js/popper.js')}}"></script>

		<!--Bootstrap.min js-->
		<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!--Tooltip js-->
		<script src="{{asset('backend/assets/js/tooltip.js')}}"></script>

		<!-- Jquery star rating-->
		<script src="{{asset('backend/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!--Moment js-->
		<script src="{{asset('backend/assets/js/moment.min.js')}}"></script>

		<!--Sidemenu js-->
		<script src="{{asset('backend/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.js')}}"></script>

		<!-- Sidemenu-responsive-tabs  js -->
		<script src="{{asset('backend/assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js')}}"></script>

		<!-- Sidebar js-->
		<script src="{{asset('backend/assets/plugins/sidebar/sidebar.js')}}"></script>

		<!--P-Scrollbar js-->
		<script src="{{asset('backend/assets/plugins/p-scroll/p-scroll.js')}}"></script>
		<script src="{{asset('backend/assets/js/p-scroll.js')}}"></script>

		<!--Othercharts js-->
		<script src="{{asset('backend/assets/plugins/othercharts/jquery.knob.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

		<!--OtherCharts js-->
		<script src="{{asset('backend/assets/js/othercharts.js')}}"></script>

		<!--Showmore js-->
		<script src="{{asset('backend/assets/js/jquery.showmore.js')}}"></script>

		<!--Scripts js-->
		<script src="{{asset('backend/assets/js/scripts1.js')}}"></script>
	</body>
</html>
