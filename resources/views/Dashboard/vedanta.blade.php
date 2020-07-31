@extends('layouts.frontend')
@section('content')
<!-- banner section here -->
<section class="banner-sec vedanta-banner"> <img class="img-responsive" src="{{asset('storage/' . $page->banner_image)}}">
  <div class="banner-content">
    <h1>{{$page->main_title}}</h1>
    <h5>{!! $page->main_sub_description !!}</h5>
    <h5>{!! $page->main_description !!}</h5>
    <a class="custom-btn" href="#">Online application form</a> </div>
</section>
<!-- banner-slider section here -->

<!-- access-list here -->
<section class="secondary-bg access-list">
  <div class="container">
    <ul>
      <li><img src="./images/access-icon1.png">Access the 3 year <br>
        course on your devices</li>
      <li><img src="./images/access-icon2.png">100s of hours of <br>
        lectures and learnings</li>
      <li><img src="./images/access-icon3.png">Something else that's great <br>
        About eLearning</li>
    </ul>
  </div>
</section>
<!-- access-list here -->

<!-- reality-sec here -->
<section class="reality-sec color-dark-grey">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-6 col-12">
        <h2>{!! $page->secondary_title !!}</h2>
        <p>{!! $page->secondary_sub_description !!}</p>
        <p>{!! $page->secondary_description !!}</p>
        <a class="custom-btn" href="#">Sample video</a> <a class="custom-btn" href="#">See full syllabus</a> </div>
      <div class="col-lg-7 col-sm-6 col-12">
        <div class="youth-camp-box pull-right">
          <div class="custom-box">
            <h3>{!! $page->card_title !!}</h3>
            {!! $page->card_description !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- reality-sec here -->


<!-- james-story here -->
<section class="james-story color-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-sm-6 col-12">
        <h1>{!! $page->third_title !!}</h1>
        <h6>{!! $page->third_sub_description !!}</h6>
        <p class="color-primary">{!! $page->third_description !!}</p>
        <a class="custom-btn custom-btn-bg2" href="#">See James's story</a> <a class="custom-btn active" href="#">Sign up now</a> </div>
      <div class="col-lg-5 col-sm-6 col-12 text-center"> <a class="learn-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a> </div>
    </div>
  </div>
</section>
<!-- james-story here -->

@endsection