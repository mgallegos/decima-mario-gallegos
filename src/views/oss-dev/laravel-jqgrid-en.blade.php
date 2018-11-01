@extends('decima-mario-gallegos::base')

@section('twitter')
<meta name="twitter:title" content="Laravel jqGrid package">
<meta name="twitter:description" content="Laravel jqGrid package allows you to easily integrate the popular jQuery Grid Plugin (jqGrid) into your Laravel application.">
<!-- <meta name="twitter:image:src" content="{{ URL::asset('assets/kwaai/images/laravel-jqgrid/twitter-card.png') }}"> -->
@stop

@section('container')
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css" />
@include('decima-mario-gallegos::laravel-jqgrid-css')
@include('decima-mario-gallegos::laravel-jqgrid-js')
<div class="container">
  <div id="lqp-container" class="row">
    <div class="col-lg-8" role="main">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link {{ $doc }}" href="#lqp-documentation" role="tab" data-id-well="lqp-documentation-well" data-toggle="tab" data-url="/cms/open-source-development/laravel-jqgrid/getting-started">Getting Started</a></li>
        <!-- <li class="nav-item"><a class="nav-link {{ $demo1 }}" href="#lqp-demo-1" role="tab" data-id-well="lqp-demo1-well" data-toggle="tab" data-url="/cms/open-source-development/laravel-jqgrid/demo1">Demo 1</a></li> -->
        <!-- <li class="nav-item"><a class="nav-link {{ $demo2 }}" href="#lqp-demo-2" role="tab" data-id-well="lqp-demo2-well" data-toggle="tab" data-url="/cms/open-source-development/laravel-jqgrid/demo2">Demo 2</a></li> -->
        <li class="nav-item"><a class="nav-link {{ $demo3 }}" href="#lqp-demo-3" role="tab" data-id-well="lqp-demo3-well" data-toggle="tab" data-url="/cms/open-source-development/laravel-jqgrid/demo3">Demo 3</a></li>
        <!-- <li class="nav-item"><a class="nav-link {{ $doc }}" href="#lqp-documentation" role="tab" data-id-well="lqp-documentation-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/laravel-jqgrid/getting-started') }}">Getting Started</a></li>
        <li class="nav-item"><a class="nav-link {{ $demo1 }}" href="#lqp-demo-1" role="tab" data-id-well="lqp-demo1-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/laravel-jqgrid/demo1') }}">Demo 1</a></li>
        <li class="nav-item"><a class="nav-link {{ $demo2 }}" href="#lqp-demo-2" role="tab" data-id-well="lqp-demo2-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/laravel-jqgrid/demo2') }}">Demo 2</a></li>
        <li class="nav-item"><a class="nav-link {{ $demo3 }}" href="#lqp-demo-3" role="tab" data-id-well="lqp-demo3-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/laravel-jqgrid/demo3') }}">Demo 3</a></li> -->
      </ul>
      <div class="tab-content clearfix">
        <div class="tab-pane lqp-bottom fade {{ $doc }} clearfix" role="tabpanel" id="lqp-documentation">
          @include('decima-mario-gallegos::oss-dev/laravel-jqgrid/documentation-en')
        </div>
        <div class="tab-pane lqp-bottom fade {{ $demo1 }}" role="tabpanel" id="lqp-demo-1">

        </div>
        <div class="tab-pane lqp-bottom fade {{ $demo2 }}" role="tabpanel" id="lqp-demo-2">

        </div>
        <div class="tab-pane lqp-bottom fade {{ $demo3 }}" role="tabpanel" id="lqp-demo-3">
          @include('decima-mario-gallegos::oss-dev/laravel-jqgrid/demo3-en')
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="lqp-sidebar" data-spy="affix" role="complementary">
        <div class="lqp-sidebar card bg-light">
          <!-- <div class="card-header">Header</div> -->
          <div class="card-body profile-well clearfix">
            <!-- <h4 class="card-title">Light card title</h4> -->
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            @include('decima-mario-gallegos::layouts.profile')
          </div>
        </div>
        <!-- <div class="well profile-well clearfix">
          @include('decima-mario-gallegos::layouts.profile')
        </div> -->
        <!-- Mario Gallegos Personal Page -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-9426377696368258"
             data-ad-slot="5212160082"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
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
</div>
@parent
@stop
