@extends('decima-mario-gallegos::base')

@section('container')
<style>
  /*---------------*/
  /***** Honey *****/
  /*---------------*/
  /*.grid {
    background: #fff;
  }*/

  .grid figure figcaption {
  	color: #fff;
  }

  .grid figure, figure.effect-honey{
  	background: #cfe8f1;
  }

  figure.effect-honey figcaption::before {
  	background: #d13f32;
  }
</style>
<div class="container">
  @include('decima-cms::blog')
</div>
@parent
@stop
