@if (Session::has('flash_error'))
    <div class="alert alert-danger" style="color: black;">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! Session::get('flash_error') !!}
    </div>
@endif

@if (Session::has('flash_success'))
    <div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! Session::get('flash_success') !!}
    </div>
@endif


