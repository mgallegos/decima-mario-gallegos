@extends('decima-mario-gallegos::layouts.base')

@section('container')
{!! Html::script('assets/kwaai/js/tutorials.js') !!}
{!! Html::style('assets/kwaai/css/tutorials.css') !!}
<div id="tutorial-container" class="row">
  <div class="col-lg-8 col-md-7" role="main">
    <div id="tutorials" style="display: {{ $tutorials }}">
      <div class="thumbnail">
        <img class="img-responsive" src="{{ URL::asset('assets/kwaai/images/tutorials/demo1/750x250.jpg') }}">
        <div class="caption">
          <h3 class="tutorial-thumbnail-title">Building a Pivot Grid and handling jqGrid events using Laravel jqGrid package</h3>
          <p>This is a step by step tutorial that shows how to build the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/demo1') }}" target="_blank">the first demo</a> of the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package docs.</a></p>
          <a class="btn btn-primary" href="{{ URL::to('/tutorials/pivot-grid') }}" onclick="return changeWindowsUrl('{{ URL::to('/tutorials/pivot-grid') }}')">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="thumbnail">
            <img class="img-responsive" src="{{ URL::asset('assets/kwaai/images/tutorials/demo2/750x250.jpg') }}">
            <div class="caption">
              <h3 class="tutorial-thumbnail-title">Building a CRUD Web App with jqGrid forms using Laravel jqGrid package</h3>
              <p>This is a step by step tutorial that shows how to build the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/demo2') }}" target="_blank">the second demo</a> of the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package documentation.</a></p>
              <a class="btn btn-primary" href="{{ URL::to('/tutorials/crud-jqgrid-form') }}" onclick="return changeWindowsUrl('{{ URL::to('/tutorials/crud-jqgrid-form') }}')">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="thumbnail">
            <img class="img-responsive" src="{{ URL::asset('assets/kwaai/images/tutorials/demo3/750x250.jpg') }}">
            <div class="caption">
              <h3 class="tutorial-thumbnail-title">Building a CRUD Web App with a custom form using Laravel jqGrid package</h3>
              <p>This is a step by step tutorial that shows how to build the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/demo3') }}" target="_blank">the third demo</a> of the <a href="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}" target="_blank">Laravel jqGrid package documentation.</a></p>
              <a class="btn btn-primary" href="{{ URL::to('/tutorials/crud-custom-form') }}" onclick="return changeWindowsUrl('{{ URL::to('/tutorials/crud-custom-form') }}')">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tutorial-posts">
      <div class="row">
        <div class="col-lg-12 tutorial-post" data-url="{{ URL::current() }}" style="display: {{ $tutorialPost }}">
          <a class="close tutorial-post-popover" data-toggle="tooltip" data-placement='left' title="Back to main page" style='color:red' onclick="changeWindowsUrl('{{ URL::to('/tutorials') }}');">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-times fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          <h1>
            @yield('title')
          </h1>
          <hr>
          <div class="clearfix">
            <p class="subtitile-post-date">
              <i class="fa fa-clock-o"></i>
              @yield('date')
            </p>
            <div class="subtitile-post-social clearfix">
              @yield('social')
            </div>
          </div>
          <hr>
          @yield('post')
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-5">
    <div class="tutorial-sidebar" data-spy="affix" role="complementary">
      <div class="well profile-well clearfix">
        @include('decima-mario-gallegos::layouts.profile')
      </div>
      <div class="well twitter-well">
        @include('decima-mario-gallegos::layouts.twitter')
      </div>
    </div>
  </div>
</div>
@parent
@stop
