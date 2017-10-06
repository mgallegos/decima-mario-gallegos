@extends('layouts.base')

@section('container')
{!! Html::style('assets/kwaai/css/jquery-mg-validation.css') !!}
{!! Html::script('assets/kwaai/js/jquery-mg-validation.js') !!}
<div id="jmv-container" class="row">
  <div class="col-lg-8" role="main">
    <ul class="nav nav-tabs" role="tablist">
      <li class="{{ $doc }}"><a href="#jmv-documentation" role="tab" data-id-well="jmv-documentation-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/jquery-mg-validation/getting-started') }}">Getting Started</a></li>
      {{--
      <li class="{{ $demo1 }}"><a href="#jmv-demo-1" role="tab" data-id-well="jmv-demo1-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/jquery-mg-validation/demo1') }}">Demo 1</a></li>
      --}}
    </ul>
    <div class="tab-content clearfix">
      <div class="tab-pane fade {{ $doc }} clearfix" id="jmv-documentation">
        @include('oss-dev/jquery-mg-validation/documentation')
      </div>
      {{--
      <div class="tab-pane fade {{ $demo1 }}" id="jmv-demo-1">
        @include('oss-dev/jquery-mg-validation/demo1')
      Coming soon!
      </div>
      --}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="jmv-sidebar" data-spy="affix" role="complementary">
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
      <div id='jmv-documentation-well' class="well profile-well clearfix collapse {{ $doc }}">
        <div class="alert alert-info alert-well clearfix" role="alert">
          <p><i class="fa fa-thumbs-o-up fa-lg"></i> Was this plugin useful to you? Don't forget to <a href="https://github.com/mgallegos/jquery-mg-validation" target="_blank"><i class="fa fa-star"></i> Star it on GitHub</a> and share it:</p>
          <div style="margin-top:5px;" class="clearfix">{!! Form::social('A simple and easy to use #jquery #plugin to validate forms, it works out of the box with #twbootstrap', 'http://goo.gl/S2oTdh', 'social-well social-well2', 'social-well', 'google-well social-well2') !!}</div>
        </div>
      </div>
    </div>
  </div>
</div>
@parent
@stop
