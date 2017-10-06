@extends('blog')

@section('twitter')
<meta name="twitter:title" content="Is Free Software the same as OSS, FOSS and FLOSS?">
<meta name="twitter:description" content="If you've ever searched the Internet for information about Free Software or Open Source you might have seen some of the terms of this post title. Well, if you got confused with all those terms, let me tell you that your haven't been first one, ironically all these terms...">
<meta name="twitter:image:src" content="{{ URL::asset('assets/kwaai/images/blog/free-software-terms/750x250.jpg') }}">
@stop

@section('title')
  Is Free Software the same as OSS, FOSS and FLOSS?
@stop

@section('date')
   Posted on September 11, 2014
@stop

@section('social')
  {!! Form::social('Is #FreeSoftware the same as #OpenSource, #FOSS and #FLOSS?', 'http://goo.gl/AQEUm2') !!}
@stop

@section('post')
  <p>If you've ever searched the Internet for information about <a href="http://www.gnu.org/philosophy/free-sw.html/" target="_blank">Free Software</a> or <a href="http://opensource.org/" target="_blank">Open Source</a> you might have seen some of the terms of this post title. Well, if you got confused with all those terms, let me tell you that your haven't been the first one, ironically all these terms have been created to eliminate the ambiguity of the term <a href="http://www.gnu.org/philosophy/free-sw.html/" target="_blank">Free Software</a> (“free” as “free speech” not as “free beer”) and to facilitate the comprehension of what <a href="http://www.gnu.org/philosophy/free-sw.html/" target="_blank">Free Software</a> stands for but as you might be thinking right now the effect has been completely the opposite.</p>
  <img src="{{ URL::asset('assets/kwaai/images/blog/free-software-terms/750x250.jpg') }}" class="img-responsive">
  <p>The good news is that for practical reasons all those terms are referring to the <strong>SAME</strong> thing so If you're looking for information or talking about <a href="http://www.gnu.org/philosophy/free-sw.html/" target="_blank">Free Software</a> you can use any of those terms, however let me warn you that depending of the context you should use one term instead of the others, for example, if you ask <a href="https://stallman.org/" target="_blank">Richard Stallman</a> about <a href="http://opensource.org/" target="_blank">Open Source</a> he'll get mad at you and probably leave the room, on the best case scenario he’ll give you a lecture about the ideological difference between both terms while he gives you a really bad look. </p>
  <div class="pull-left visible-lg visible-md" style="margin-right: 20px;">
      <!-- Blog Post lg-md -->
      <ins class="adsbygoogle"
           style="display:inline-block;width:300px;height:250px"
           data-ad-client="ca-pub-9426377696368258"
           data-ad-slot="7522953270"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  <p>If you are interested in knowing more about the world of <a href="http://www.gnu.org/philosophy/free-sw.html/" target="_blank">Free Software</a>, a good start is to understand the difference between the two main terms (<a href="http://www.gnu.org/philosophy/free-sw.html/" target="_blank">Free Software</a> and <a href="http://opensource.org/osd" target="_blank">Open Source Software</a>), to achieve this you must understand the thinking of those who are behind them. One one hand, we have the <a href="http://www.fsf.org/" target="_blank">Free Software Foundation</a>, without going into specifics they believe that programs are a form of knowledge and that knowledge in general must be free (“free” as “free speech”) meaning that society must be able to access all forms of knowledge created by humanity, and the source code and programs as a form knowledge must be accessible too, as simple as that, without going into considerations whether this would be appropriate or not. On the other hand we have <a href="http://opensource.org/" target="_blank">The Open Source Initiative</a> with a pragmatic approach, those who gave birth to this movement believe that software freedom is a practical matter rather than an ideological, it’s important to notice that the <a href="http://opensource.org/" target="_blank">Open Source</a> term was born at a time where <a href="http://www.gnu.org/philosophy/free-sw.html/" target="_blank">Free Software</a> was being roll out in the business world and the ambiguity of the word “Free” in <a href="http://www.gnu.org/philosophy/free-sw.html/" target="_blank">Free Software</a> wasn’t good for business and without going into details, this inconvenient was what gave rise to the <a href="http://opensource.org/" target="_blank">open source</a> term. As you can see there are two very differents approach and a lot of history behind both terms, remember that for practical reason you can use any term however is very important to understand what’s behind them.</p>
  <div id="blog1-ads-1" class="visible-sm visible-xs" style="margin-bottom: 5px;"></div>
  <p>Finally the terms FOSS and FLOSS are simply terms that tries to combines all words related to <a href="http://www.gnu.org/philosophy/free-sw.html/" target="_blank">Free Software</a> in a single acronym, FOSS stands for “Free Open Source Software” and FLOSS stands for “Free Libre Open Source Software”.</p>
  {!! Form::comments(4) !!}
  <script>
    $(document).ready(function()
    {
      $('#blog1-ads-1').append('<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9426377696368258" data-ad-slot="1616020474" data-ad-format="auto"></ins>');
      setTimeout(function()
      {
        (adsbygoogle = window.adsbygoogle || []).push({});
      }, 1000 );
    });
  </script>
@stop
