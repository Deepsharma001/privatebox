@extends('layouts.frontend')
@section('content')
<!-- banner section here -->
<section class="banner-sec media-banner"> <img class="img-responsive" src="{{asset('storage/' . $page->banner_image)}}">
  <div class="banner-content">
    <h2>{{$page->main_title}}</h2>
    <p>{!! $page->main_description !!}</p>
  </div>
</section>
<!-- banner-slider section here --> 

<!-- media blog section here -->
<section class="media-blog">
  <div class="container">
    <ul>
@foreach($events as $item)
      <li>
        <img  src="{{asset('storage/' . $item->image)}}" height="251px" width="384px">
        <div class="media-content">
          <h4>{{$item->title}}</h4>
          <h5>{!! substr($item->description, 0, 100 ) !!} ... </h5>
          <a href="#" class="custom-btn">Read more</a> </div>
      </li>
@endforeach
    </ul>
  </div>
</section>
<!-- banner-slider section here --> 

<!-- media-video section here -->
<section class="media-video text-center color-secondary">
  <div class="container">
    <h2><b>Recent videos</b></h2>
    <div class="row row-sm">
      <div class="col">
        <iframe width="100%" height="315" style="margin-bottom:30px;" src="{{$page->link_1}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col">
        <iframe width="100%" height="315" style="margin-bottom:30px;" src="{{$page->link_2}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="row row-sm">
      <div class="col">
        <iframe width="100%" height="315" style="margin-bottom:30px;" src="{{$page->link_3}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col">
        <iframe width="100%" height="315" style="margin-bottom:30px;" src="{{$page->link_4}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <a class="custom-btn custom-btn-bg2" href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Watch Swamiji</a> </div>
</section>
<!-- media-video section here --> 
@endsection