<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@mgall3gos">
	<meta name="twitter:creator" content="@mgall3gos">
	@yield('twitter')
	@include('layouts.header-css')
	@include('layouts.header-javascript')
	@yield('javascript')
	<title>Mario Gallegos</title>
</head>
<body id='body'>
	<div id="fb-root"></div>
	<a href="#page-container" class="sr-only">Skip to content</a>
	@include('layouts.top-bar')
	<div id='page-container' class="container" role="main" data-current-page-width="">
		<fieldset id="main-panel-fieldset">
			@section('container')
			@show
			<a id="back-to-top" class="btn btn-info" role="button"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
			{!! Form::button('<i class="fa fa-spinner fa-spin fa-lg"></i> Loading', array('id' => 'app-loader', 'class' => 'btn btn-warning btn-disable btn-lg app-loader hidden', 'disabled' => 'disabled')) !!}
			{!! Form::hidden('app-url', URL::to('/'), array('id' => 'app-url')) !!}
			{!! Form::hidden('app-token', Session::token(), array('id' => 'app-token')) !!}
			{!! Form::hidden('app-kwaai', '', array('id' => 'app-kwaai')) !!}
		</fieldset>
	</div>
</body>
</html>
