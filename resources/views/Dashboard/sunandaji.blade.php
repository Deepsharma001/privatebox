@extends('layouts.frontend')
@section('content')
<!-- banner section here -->
<section class="banner-sec"> <img class="img-responsive" src="{{asset('storage/' . $page->banner_image)}}">
  <div class="banner-content">
    <h2>{{$page->main_title}}</h2>
    <p>{!! $page->main_description !!}</p>
    <a class="custom-btn custom-btn-bg2" href="#">About Sunandaji</a> <a class="custom-btn custom-btn-bg2" href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Watch Sunandaji</a> </div>
</section>
<!-- banner-slider section here --> 

<!-- about Sunandaji section here -->
<section class="about-sunandaji">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>{!! $page->secondary_title !!}</h2>
        <p>{!! $page->secondary_sub_description !!}</p>
        <p>{!! $page->secondary_description !!}</p>
      </div>
      <div class="col about-sunandaji-banner"> <img class="img-responsive" src="{{asset('storage/' . $page->about_image)}}"> </div>
    </div>
  </div>
</section>
<!-- about Sunandaji section here --> 

<!-- sunandaji-video section here -->
<section class="sunandaji-video">
  <div class="container">
    <h2><strong>Videos</strong></h2>
    <div class="row">
      <div class="col">
        <iframe width="100%" height="315" style="margin-bottom:30px;" src="{{$page->link_1}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col">
        <iframe width="100%" height="315" style="margin-bottom:30px;" src="{{$page->link_2}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <iframe width="100%" height="315" style="margin-bottom:30px;" src="{{$page->link_3}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col">
        <iframe width="100%" height="315" style="margin-bottom:30px;" src="{{$page->link_4}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <a class="custom-btn custom-btn-bg2" href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Watch Sunandaji</a> </div>
</section>
<!-- sunandaji-video section here --> 
@endsection