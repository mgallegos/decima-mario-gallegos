@extends('blog')

@section('twitter')
<meta name="twitter:title" content="My experience using open source software">
<meta name="twitter:description" content="When I stopped using Microsoft Windows It was like being unplugged from the Matrix, if you think about it since our first contact with computers the system has been designed to trap us in this privative world that big corporations have created...">
<meta name="twitter:image:src" content="{{ URL::asset('assets/kwaai/images/blog/oss-experience/750x250.jpg') }}">
@stop

@section('title')
  My experience using open source software
@stop

@section('date')
   Posted on September 8, 2014
@stop

@section('social')
  {!! Form::social('Living an #OpenSource life!', 'http://goo.gl/OGOS3k') !!}
@stop

@section('post')
  <p>
    I've using open source software for quite a while now and I've tried many GNU/Linux distributions such as Mandriva, Fedora, Slackware, Zenwalk, Debian and currently I'm using Ubuntu. In my case when I stopped using Microsoft Windows It was like being unplugged from the Matrix (if you saw the movie you know what I mean), if you think about it since our first contact with computers the system has been designed to trap us in this privative world that big corporations have created, schools and universities teach us how to use privative software arguing that those are the tools that you are going to use in your professional life (sadly in many cases it might be true) however I believe things are starting to change because the use of open source software (in general) is gaining ground in markets dominated by privative software (such as desktop OS) and getting stronger in markets already dominated by open source alternatives (such as server OS).
  </p>
  <img src="{{ URL::asset('assets/kwaai/images/blog/oss-experience/750x250.jpg') }}" class="img-responsive">
  <p>
    It's important to state that open source software (operating systems and all types of applications) are not perfect, people usually sell the idea that open source software is the best or the coolest option available out there just for been open or free, don’t let that fool you because from a practical point of view it’s not true, software itself (privative software or open source software) is not perfect so is important not to exaggerate products. GNU/Linux has come a long way and is not the same as five or ten years ago, we now have many good GNU/Linux distributions available that work out of the box in most computers and there are many options out there to choose from, for those who want to try something new, different and in many cases much better. Well there are many things I like about GNU/Linux distributions, here are some of them:
  </p>
  <ul>
    <li>No need to install an antivirus software, which significantly slow down the computer (specially when your computer does not have many resources).</li>
    <li>Most of the GNU/Linux distributions have a good community support, this is one of the reason I'm currently using Ubuntu because it has a big and active community where you almost always find an answer to your questions.</li>
    <li>A wide variety of application available, most of them can be downloaded free of charge and using tools like Ubuntu Software Center installing them is a walk in the park.</li>
    <li>In the open source software world is strange not to have the latest version of any software as you can easily (sometimes automatically) keep your software up-to-date (unlike the privative world where there is still people using Windows XP).</li>
  </ul>
  <p>
    Although much has changed for the better, there's still a long way to go and many features to be covered, here are some of them in my opinion:
  </p>
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
  <ul>
    <li>Lack of professional support for many open source software applications.</li>
    <li>There are still many privative application that don't have an open source software alternative.</li>
    <li>Very few hardware vendors deliver dedicated software program to GNU/Linux users.</li>
    <li>Interoperability with other platforms.</li>
    <li>Fragmentation (for example LibreOffice, the OpenOffice fork).</li>
    <li>Legal Issues (software patents are a potential threat).</li>
  </ul>
  <div id="blog1-ads-1" class="visible-sm visible-xs" style="margin-bottom: 5px;"></div>
  <p>
    If you are contemplating to “unplug yourself from the matrix” … I mean to start using an open source operating system the best place to start (in my humble opinion) is Ubuntu, I believe that Ubuntu is one of the most user-friendly linux distribution out there, it is easy to install and using the “Ubuntu Software Center” you can find tons of application and easily install them, in addition because of its big and active community if you need help (and you don’t have a friend to ask) you are you going to find a lot of information online that will help you solve your problem.
  </p>
  {!! Form::comments(5) !!}
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
