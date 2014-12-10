@section( 'head_wrapper' )
	<html>
@stop
@section('body_style')
	class="error-404"
@stop
@section('content')
	<div class="error-header"> </div>
	<section class="error-container text-center animated fadeInDown">
		<h1>404</h1>
		<div class="error-divider">
			<h2>page not found</h2>
			<p class="description">We Couldn’t Find This Page</p>
		</div>
		<a href="/" class="return-btn"><i class="fa fa-home"></i>Home</a>
	</section>
@stop
