<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="">
      <!-- <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> -->
      Mario Gallegos
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" style="width: 100%;">
        <li>
          <a id="top-navbar-menu" href="#body" style="display: none;" class="sr-only">Scroll to navbar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('cms/tutorials')}}"><i class="fa fa-file-code-o"></i> Tutoriales</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-linux"></i> Open Source Development</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{URL::to('cms/open-source-development/laravel-jqgrid/getting-started')}}"><i class="fa fa-table"></i> Laravel Jqgrid Package</a>
            <a class="dropdown-item" href="#"><i class="fa fa-check-circle"></i> jQuery MG Validation Plugin</a>
          </div>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
      </ul>
      <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item pull-xs-right">
          <a class="nav-link" href="#">Login / Registrarse</a>
        </li>
      </ul> -->
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<!-- <header class="navbar navbar-toggleable-sm navbar-light fixed-top bg-faded top-bar">
  <nav class="container nv-decima-web">
    <button class="navbar-toggler navbar-toggler-rigth" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{URL::to('cms/eventos-slsv/inicio')}}">
      <img src="http://www.slsv.org/sites/default/files/color/business-4a3de5b4/logo.png" style="width:auto;height:65px;">
      <span style="color: #6d9126;">SFD 2017</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li><a id="top-navbar-menu" href="#body" style="display: none;" class="sr-only">Scroll to navbar</a></li>
      </ul>
      <ul class="navbar-nav float-lg-right float-xs-left">
          <li class="nav-item"><a class="nav-link fake-link" data-toggle="modal" data-target="#obs-avisoconstruccion">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link fake-link" data-toggle="modal" data-target="#obs-avisoconstruccion">Marcas</a></li>
          <li class="nav-item"><a class="nav-link" href="https://decimaerp.appspot.com">Iniciar Sesión</a></li>
      </ul>
    </div>
  </nav>
</header> -->
