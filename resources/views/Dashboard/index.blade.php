@extends('layouts.frontend')
@section('content')

<!-- banner section here -->
<section class="banner-sec"> <img class="img-responsive" src="{{asset('storage/' . $data->banner_image)}}">
  <div class="banner-content">
    <h2>{{$data->main_title}}</h2>
    <p>{!! $data->main_description!!}</p>
    <a class="custom-btn" href="#">What is Vedanta?</a> <a class="custom-btn" href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Watch Swamiji</a> </div>
</section>
<!-- banner-slider section here --> 

<!-- about section here -->
<section class="about-sec">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="font-weight-light">{!!$data->secondary_title!!}</h2>
        <p>{!!$data->secondary_sub_description!!}</p>
        <p>{!!$data->secondary_description!!}</p>
        <a href="#" class="custom-btn">Find out more</a> </div>
      <div class="col">
        <iframe width="100%" height="325" style="margin-top: 40px;" src="{{$data->secondary_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<!-- about section here --> 

<!-- event section here -->
<section class="event-sec">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h6>Across the globe</h6>
        <h3>Upcoming <b>events,</b></h3>
        <p>The following is a combined itinerary for Swamiji, Sunandaji and Vedanta Academy events. For Swamiji's schedule only, <a class="text-decoration-underline" href="#">click here.</a></p>
        <p>Itinerary / Events are subject to change. Please contact us to confirm before making any travel plans based on the information presented below.</p>
        <a href="#" class="custom-btn custom-btn-bg2 min-width-auto">All events</a><a href="#" class="custom-btn">Swamiji's Schedule</a> </div>
      <div class="col">
        <div class="event-box">
          <ul>
            @foreach($events as $event)
                            <li>
                                <h4>{{$event->title}}</h4>
                                <span class="event-date">{{$event->started_at}}</span>
                                <p>{{$event->location}}</p>
                            </li>
            @endforeach
          </ul>
        </div>
        <ul class="social-icon">
          <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
          <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
          <li> <a href="#"><i class="fa fa-youtube"></i></a> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- event section here --> 

<!-- academy section here -->
<section class="academy-sec sec-padding">
  <div class="container">
    <h2>{!! $data->third_title !!}</h2>
    <div class="row">
      <div class="col">
        <p>{!! $data->third_sub_description !!}</p>
        <p>{!! $data->third_description !!}</p>
        <a href="#" class="custom-btn">Youth camps</a> <a href="#" class="custom-btn">Corporate retreats</a> <a href="#" class="custom-btn">3-year course</a> <a href="#" class="custom-btn">Family retreats</a></div>
      <div class="col">
        <iframe width="100%" height="340" src="{{$data->third_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<!-- academy section here --> 

<!-- learn section here -->
<section class="learn-sec">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-sm-6 col-12">
        <h1>Learn the Vedanta <b> philosophy anywhere</b></h1>
        <p>The online program comprises more than 400 video lectures delivered by Swamiji for the three-year residential course at the Vedanta Academy. Please visit <a class="text-decoration-underline" href="#">elearning.vedantaworld.org</a> to peruse details regarding the course and application process. To enrol for the course please complete and submit the online<a class="text-decoration-underline" href="#"> application form.</a></p>
        <a href="#" class="custom-btn custom-btn-bg2">Find out more</a> <a href="#" class="custom-btn active min-width-auto">Webcast</a> </div>
      <div class="col-lg-5 col-sm-6 col-12 text-center"><a class="learn-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a>
        <div class="row">
          <div class="col"> <a class="app-btn" href="#"><img class="img-responsive" src="./images/android-btn.png"></a> <a class="app-btn" href="#"><img class="img-responsive" src="./images/appstore-btn.png"></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- learn section here --> 

<!-- corporate section here -->
<section class="corporate-sec">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="font-weight-light"><b>Corporate</b> programmes </h1>
        <p>Swami Parthasarathy’s uniquely designed programs on the practical application of Vedanta to the business environment. On-campus programs, in-house seminars and city based seminars are conducted.</p>
        <a class="custom-btn" href="#">Find out more</a> </div>
      <div class="col"> </div>
    </div>
  </div>
</section>
<!-- corporate section here --> 

<!-- nearest section here -->
<section class="nearest-sec secondary-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="font-weight-light">Find your <b> nearest local</b> Vedanta class </h1>
        <p>Alumni of the Academy teach Vedanta to the community through <br>
          weekly study classes all over the world</p>
        <select class="custom-select">
          <option selected="">Custom select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <a class="custom-btn custom-btn-bg2" href="#">Search</a> </div>
      <div class="col"> <img class="noun_Earth" src="./images/noun_Earth.svg"> </div>
    </div>
  </div>
</section>
<!-- nearest section here --> 

<!-- book section here -->
<section class="book-sec">
  <div class="container">
    <h1 class="font-weight-light">Thought provoking <b> literature</b></h1>
    <div class="row align-items-center">
      <div class="col"> <a class="book-btn" href="#"><img class="img-responsive" src="./images/book1.png"></a> </div>
      <div class="col"> <a class="book-btn" href="#"><img class="img-responsive" src="./images/book2.png"></a> </div>
      <div class="col"> <a class="book-btn" href="#"><img class="img-responsive" src="./images/book3.png"></a> </div>
    </div>
    <div class="row text-center align-items-center">
      <div class="col">
        <ul class="available-list">
          <li> <a href="#"><img class="img-responsive" src="./images/amazon-icon.png"></a></li>
          <li> <a href="#"><img class="img-responsive" src="./images/apple-store-icon.png"></a></li>
          <li> <a href="#"><img class="img-responsive" src="./images/audible-icon.png"></a></li>
        </ul>
      </div>
    </div>
    <div class="row text-center">
      <div class="col"> <a class="custom-btn" href="#">Full catalogue</a> <a class="custom-btn" href="#">Free audio books</a> </div>
    </div>
  </div>
</section>
@endsection