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
</div>
@parent
@stop
