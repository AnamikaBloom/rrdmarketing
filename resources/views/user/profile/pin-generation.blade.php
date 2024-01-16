@extends('user.layout.app')
@section('content')
@if (Session::has('flash_success'))
    <div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! Session::get('flash_success') !!}
    </div>
@endif

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Pin Generation </li>
							</ol><!-- End breadcrumb -->


						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							
							<div class="col-lg-12 col-xl-7 col-md-12 col-sm-12">
							    <div class="card">
									<div class="card-header">
                                        <h4>Referral Link</h4>
									</div>
									<div class="card-body">
										<p><b>PIN :</b>
                                        <br/>
                                        <br/>
                                        @php $share_url = url('register?pin='.$user->member_id); @endphp
                                        {{$share_url}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" onclick="navigator.clipboard.writeText('{{$share_url}}')">Copy the link</button></p>
                                        <a href="whatsapp://send?text={{$share_url}}" data-action="share/whatsapp/share">Share via Whatsapp</a>
									</div>

								</div>
							</div>
						</div>
						<!--row closed-->
        </section>
    </div>
    <!--app-content closed-->


@endsection
@section('script')
<script>
	$(document).ready(function(){
		$('#state_id').select2();
		$('#pincode').change(function(){
			var pincode=$('#pincode').val();

			$.ajax({
        url : "{{route('pincode')}}",
        type: "POST",
        data : {pincode: pincode, "_token": "{{ csrf_token() }}"},
        success: function(data, textStatus, jqXHR)
            {
				if (data.status == true) {
                    $('#state_id').html(data.state);
                    $('#city_id').html(data.city);
                    $('#district').val(data.district);
                    $('#district').prop('readonly', true);
                    $('#state_id').prop('readonly', true);
                    $('#city_id').prop('readonly', true);
                    $('#invalid_pincode').hide();
                     $('#valid_pincode').html(data.message).show();
                }
                    else{
                        $('#state_id').find('option').remove().end();
                        $('#city_id').find('option').remove().end();
						$('#district').val('');

                        $('#valid_pincode').hide();
                        $('#invalid_pincode').html(data.message).show();
                    }

            },
        error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
		});
	})
</script>



@endsection
