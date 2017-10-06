<nav class="navbar navbar-default navbar-fixed-top bs-docs-nav" role="navigation">
	<div class="container">
		<div class="navbar-header pull-left">
      <a class="navbar-brand hidden-xs" href="{{ URL::to('/') }}">Mario Gallegos</a>
			<a class="navbar-brand visible-xs" href="{{ URL::to('/') }}">MG</a>
    </div>
 		<div class="navbar-header pull-right">
			<div class="pull-left navbar-social">
				<a href="https://www.facebook.com/mgall3gos" target="_blank" class="navbar-link">
					<i class="fa fa-facebook-official fa-2x"></i>
				</a>
				<a href="https://twitter.com/mgall3gos" target="_blank" class="navbar-link">
					<i class="fa fa-twitter-square fa-2x"></i>
				</a>
				<a href="https://www.instagram.com/megall3gos" target="_blank" class="navbar-link">
					<i class="fa fa-instagram fa-2x"></i>
				</a>
				<a href="http://www.youtube.com/c/MarioGallegosDev" target="_blank" class="navbar-link">
					<i class="fa fa-youtube-square fa-2x"></i>
				</a>
				<a href="http://goo.gl/Hfrldt" target="_blank" class="navbar-link">
					<i class="fa fa-linkedin-square fa-2x"></i>
				</a>
				<a href="https://github.com/mgallegos" target="_blank" class="navbar-link">
					<i class="fa fa-github fa-2x"></i>
				</a>
				<a href="https://www.google.com/+MarioGallegosDev" target="_blank" class="navbar-link">
					<i class="fa fa-google-plus-square fa-2x"></i>
				</a>
			</div>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		</div>
		<div class="navbar-collapse collapse navbar-left" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li id="blog-top-bar-menu"><a href="{{ URL::to('/blog') }}" onclick="return changeWindowsUrl('{{ URL::to('/blog') }}');" class="fake-link"><i class="fa fa-book"></i> Blog</a></li>
				<li id="tutorials-top-bar-menu"><a href="{{ URL::to('/tutorials') }}" onclick="return changeWindowsUrl('{{ URL::to('/tutorials') }}');"><i class="fa fa-file-code-o"></i> Tutorials</a></li>
				<li id="oss-dev-top-bar-menu" class="dropdown">
					<a class="dropdown-toggle fake-link" data-toggle="dropdown"><i class="fa fa-linux"></i> Open Source Development <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
            <li id="oss-dev-top-bar-decima"><a href="http://www.decimaerp.com/" target="_blank"><i class="fa fa-list-alt"></i> DecimaERP</a></li>
            <li id="oss-dev-top-bar-lqp"><a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" onclick="return changeWindowsUrl('{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}');"><i class="fa fa-table"></i> Laravel 4 JqGrid Package</a></li>
						<li id="oss-dev-top-bar-jmv"><a href="{{ URL::to('/open-source-development/jquery-mg-validation/getting-started') }}" onclick="return changeWindowsUrl('{{ URL::to('/open-source-development/jquery-mg-validation/getting-started') }}');"><i class="fa fa-check-circle"></i> jQuery MG Validation Plugin</a></li>
          </ul>
				</li>
				{{--
				<li id="freelance-top-bar-menu"><a href="{{ URL::to('/freelancer-work') }}"><i class="fa fa-suitcase"></i> Freelance work</a></li>
				--}}
				<li><a id="top-navbar-menu" href="#body" style="display: none;" class="sr-only">Scroll to navbar</a></li>
			</ul>
		</div>
	</div>
</nav>
