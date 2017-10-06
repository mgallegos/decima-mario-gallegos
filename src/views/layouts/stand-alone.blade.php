{{--
 * @file
 * Login page.
 *
 * All ImoxERP code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	@include('layouts.header-css')
	@include('layouts.header-javascript')	
	<title>{{ AppManager::getSystemName() }}</title>
</head>
<body id='body'>
	<div id='page-container' class="container" role="main">	  	
	  <div class="row">
	  	<fieldset id="main-panel-fieldset">
	  		@yield('container')	    	
	    </fieldset>
	  </div>	  
	</div>
	{{ Form::button('<i class="fa fa-spinner fa-spin fa-lg"></i> ' . Lang::get('form.loadButton'), array('id' => 'app-loader', 'class' => 'btn btn-warning btn-disable btn-lg app-loader hidden', 'disabled' => 'disabled')) }}
	<script type='text/javascript'>
		$(document).ready(function(){
			{{FormJavascript::getCode()}}					
		});
	</script>	
</body>
</html>
