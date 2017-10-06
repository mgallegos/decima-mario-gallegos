<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	@include('layouts.header-css')
	@include('layouts.header-javascript')
	@yield('javascript')
	<title>MG</title>
</head>
<body id='body'>
	<a href="#page-container" class="sr-only">Skip to content</a>
	@include('layouts.top-bar')
	<div id='page-container' class="container" role="main" data-current-page-width="">
		<div class="row">
			<div class="col-lg-8">
				<h1>
					@yield('title')
				</h1>
				<hr>
				<p>
					<i class="fa fa-clock-o"></i>
					@yield('date')
				</p>
				<hr>
				@yield('container')
			</div>
			<div class="col-lg-4">
				<div class="well clearfix">
					@include('layouts.profile')
				</div>
				<div class="well">
					<h4>Side Widget Well</h4>
					<p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
				</div>
				<div class="well twitter-well">
					@include('layouts.twitter')
				</div>
			</div>
		</div>
		<a id="back-to-top" href="#" class="btn btn-info" role="button"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
	</div>
</body>
</html>
