@extends('layouts.frontend')
@section('content')
<section class="banner-sec course-page-banner"> <img class="img-responsive" src="{{asset('storage/' . $pages->banner_image)}}">
  <div class="banner-content">
      <h2>{{$pages->title}}</h2>
      <p>The Vedanta Academy offers various courses to suit individuals</p>
  </div>
</section>
<!-- banner-slider section here --> 

<!-- camp section here -->
<section class="camp-sec">
    <div class="container">
       {!! $pages->description  !!}
    </div>
</section>

@endsection