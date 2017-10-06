@extends('layouts.base')

@section('twitter')
<meta name="twitter:title" content="Laravel jqGrid package">
<meta name="twitter:description" content="Laravel jqGrid package allows you to easily integrate the popular jQuery Grid Plugin (jqGrid) into your Laravel application.">
<meta name="twitter:image:src" content="{{ URL::asset('assets/kwaai/images/laravel-jqgrid/twitter-card.png') }}">
@stop

@section('container')
{!! Html::style('assets/kwaai/css/laravel-jqgrid.css') !!}
{!! Html::script('assets/kwaai/js/laravel-jqgrid.js') !!}
<div id="lqp-container" class="row">
  <div class="col-lg-8" role="main">
    <ul class="nav nav-tabs" role="tablist">
      <li class="{{ $doc }}"><a href="#lqp-documentation" role="tab" data-id-well="lqp-documentation-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}">Getting Started</a></li>
      <li class="{{ $demo1 }}"><a href="#lqp-demo-1" role="tab" data-id-well="lqp-demo1-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/laravel-jqgrid/demo1') }}">Demo 1</a></li>
      <li class="{{ $demo2 }}"><a href="#lqp-demo-2" role="tab" data-id-well="lqp-demo2-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/laravel-jqgrid/demo2') }}">Demo 2</a></li>
      <li class="{{ $demo3 }}"><a href="#lqp-demo-3" role="tab" data-id-well="lqp-demo3-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/laravel-jqgrid/demo3') }}">Demo 3</a></li>
    </ul>
    <div class="tab-content clearfix">
      <div class="tab-pane lqp-bottom fade {{ $doc }} clearfix" id="lqp-documentation">
        @include('oss-dev/laravel-jqgrid/documentation')
      </div>
      <div class="tab-pane lqp-bottom fade {{ $demo1 }}" id="lqp-demo-1">
        @include('oss-dev/laravel-jqgrid/demo1')
      </div>
      <div class="tab-pane lqp-bottom fade {{ $demo2 }}" id="lqp-demo-2">
        @include('oss-dev/laravel-jqgrid/demo2')
      </div>
      <div class="tab-pane lqp-bottom fade {{ $demo3 }}" id="lqp-demo-3">
        @include('oss-dev/laravel-jqgrid/demo3')
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="lqp-sidebar" data-spy="affix" role="complementary">
      <div class="well profile-well clearfix">
        @include('layouts.profile')
      </div>
      <div class="well adsense-well visible-lg">
          <!-- Blog Post lg-md -->
          <ins class="adsbygoogle"
               style="display:inline-block;width:300px;height:250px"
               data-ad-client="ca-pub-9426377696368258"
               data-ad-slot="7522953270"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
      <div id='lqp-documentation-well' class="well profile-well clearfix collapse {{ $doc }}">
        <div class="alert alert-info alert-well clearfix" role="alert">
          <p><i class="fa fa-thumbs-o-up fa-lg"></i> Was this package useful to you? Don't forget to <a href="https://github.com/mgallegos/laravel-jqgrid" target="_blank"><i class="fa fa-star"></i> Star it on GitHub</a> and share it:</p>
          <div style="margin-top:5px;" class="clearfix">{!! Form::social('#Laravel #jqGrid package, the easiest way to use the popular #jQuery #Grid #Plugin (jqGrid)', 'http://goo.gl/Krn7o7', 'social-well social-well2', 'social-well', 'google-well social-well2') !!}</div>
        </div>
      </div>
      <div id='lqp-demo1-well' class="well profile-well clearfix collapse {{ $demo1 }}">
        <div class="alert alert-info alert-well clearfix" role="alert">
          <p>Want to know how to build this demo <i class="fa fa-question-circle fa-lg"></i><br><a href="{{ URL::to('/tutorials/pivot-grid') }}" target="_blank">click here for a step by step tutorial.</a></p>
        </div>
      </div>
      <div id='lqp-demo2-well' class="well profile-well clearfix collapse {{ $demo2 }}">
        <div class="alert alert-info alert-well clearfix" role="alert">
          <p>Want to know how to build this demo <i class="fa fa-question-circle fa-lg"></i><br><a href="{{ URL::to('/tutorials/crud-jqgrid-form') }}" target="_blank">click here for a step by step tutorial.</a></p>
        </div>
      </div>
      <div id='lqp-demo3-well' class="well profile-well clearfix collapse {{ $demo3 }}">
        <div class="alert alert-info alert-well clearfix" role="alert">
          <p>Want to know how to build this demo <i class="fa fa-question-circle fa-lg"></i><br><a href="{{ URL::to('/tutorials/crud-custom-form') }}" target="_blank">click here for a step by step tutorial.</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
@parent
@stop
