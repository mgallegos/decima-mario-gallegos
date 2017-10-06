@extends('layouts.base')

@section('twitter')
<meta name="twitter:title" content="Laravel jqGrid package">
<meta name="twitter:description" content="Laravel jqGrid package allows you to easily integrate the popular jQuery Grid Plugin (jqGrid) into your Laravel application.">
<meta name="twitter:image:src" content="{{ URL::asset('assets/kwaai/images/laravel-jqgrid/twitter-card.png') }}">
@stop

@section('container')
{!! Html::style('assets/kwaai/css/decima-erp.css') !!}
{!! Html::script('assets/kwaai/js/decima-erp.js') !!}
<div id="dec-container" class="row">
  <div class="col-lg-12" role="main">
    <ul class="nav nav-tabs" role="tablist">
      <li class="{{ $intro }}"><a href="#dec-intro" role="tab" data-id-well="dec-intro-well" data-toggle="tab" data-url="{{ URL::to('/open-source-development/decima-erp/getting-started') }}">DecimaERP</a></li>
      <li class="{{ $documentation }}"><a id="dec-documentation-tab" href="#dec-documentation" role="tab" data-toggle="tab" data-url="{{ URL::to('/open-source-development/decima-erp/documentation') }}">Documentación</a></li>
      <li class="{{ $community }}"><a href="#dec-community" role="tab" data-toggle="tab" data-url="{{ URL::to('/open-source-development/decima-erp/community') }}">Comunidad</a></li>
    </ul>
    <div class="tab-content clearfix">
      <div class="tab-pane dec-bottom fade {{ $intro }} clearfix" id="dec-intro">
        @include('oss-dev/decima-erp/intro')
      </div>
      <div class="tab-pane dec-bottom fade {{ $documentation }}" id="dec-documentation">
        @include('oss-dev/decima-erp/documentation')
      </div>
      <div class="tab-pane dec-bottom fade {{ $community }}" id="dec-community">
        @include('oss-dev/decima-erp/community')
      </div>
    </div>
  </div>
</div>
<div class="bs-docs-footer" role="contentinfo">
</div>
@parent
@stop
