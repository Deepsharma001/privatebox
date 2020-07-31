@extends('layouts.frontend')
@section('content')
<!-- banner section here -->
<section class="banner-sec course-page-banner"> <img class="img-responsive" src="./images/courses-banner.png">
  <div class="banner-content">
    <h2>{{$pages->main_title }}</h2>
    <p>{!! $pages->main_sub_description !!}</p>
    <a class="custom-btn custom-btn-bg2" href="#">Youth camps</a> <a class="custom-btn custom-btn-bg2" href="#">3-year course</a> <a class="custom-btn custom-btn-bg2" href="#">Family retreats</a> <a class="custom-btn custom-btn-bg2" href="#">Corporate retreats</a> </div>
</section>
<!-- banner-slider section here --> 

<!-- camp section here -->
<section class="camp-sec">
  <div class="container"> 
    <h2><strong>{{$pages->secondary_title }}</strong></h2>
    <div class="row align-items-center">
      <div class="col">
        <p><strong>{{$pages->secondary_sub_description }}</strong></p>
        {!! $pages->secondary_description !!}
        <a href="#" class="custom-btn">Read more about retreats and youth camps</a> </div>
      <div class="col">
        <div class="youth-camp-box">
          <div class="custom-box">
            <h3>Youth camp schedule</h3>
            <ul class="youth-camp-list">
              <li>
                <h4>eLearning retreat</h4>
                <span class="event-date">21 May 2020</span>
                <p>Vedanta Academy</p>
              </li>
              <li>
                <h4>International retreat</h4>
                <span class="event-date">22 May 2020</span>
                <p>Vedanta Academy</p>
              </li>
            </ul>
            <ul class="social-icon">
              <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
              <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
              <li> <a href="#"><i class="fa fa-youtube"></i></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- camp section here --> 

<!-- three-year-course section here -->
<section class="three-year-course">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h2><strong>{{$pages->third_title }}</strong></h2>
        <p><strong>{{$pages->third_sub_description}}</strong></p>
       {!! $pages->third_description !!}
        <a href="#" class="custom-btn custom-btn-bg2">Download the full syllabus</a> </div>
      <div class="col">
        <div class="youth-camp-box">
          <div class="custom-box">
            <h3>Apply for the 3 year course</h3>
            <p><b>Students between 18 and 30 years are eligible to apply for the three-year course. Matriculation and a basic knowledge of English is required. Please contact us for further information.</b></p>
            <form class="3-year-course-form" action="/action_page.php">
              <input class="form-control" type="text" id="name" name="name" value="" placeholder="Full Name">
              <input class="form-control" type="email" id="email" name="email" value="" placeholder="Email address">
              <input class="custom-btn" type="submit" value="Get in touch about the course">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- three-year-course section here --> 

<!-- family-retreats section here -->
<section class="camp-sec family-retreats">
  <div class="container">
    <h2><strong>{{$pages->card_title}}</strong></h2>
    <div class="row align-items-center">
      <div class="col">
        <p><strong>{{$pages->card_sub_description}}</strong></p>
         {!! $pages->card_description !!}
        <a href="#" class="custom-btn">Read more about retreats and youth camps</a> </div>
      <div class="col">
        <div class="youth-camp-box">
          <div class="custom-box">
            <h3>Family retreat schedule</h3>
            <ul class="youth-camp-list">
              <li>
                <h4><b>Vedanta International Retreat</b></h4>
                <span class="event-date">21 May 2020</span>
                <p>Vedanta Academy</p>
              </li>
            </ul>
            <hr>
            <ul class="social-icon">
              <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
              <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
              <li> <a href="#"><i class="fa fa-youtube"></i></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- family-retreats section here --> 

<!-- corporate-retreats section here -->
<section class="corporate-retreats">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2><strong>{{$pages->retreats}}</strong></h2>
        <p><strong>{{$pages->retreats_sub_description}}</strong> </p>
      {!! $pages->retreats_description !!}
      </div>
      <div class="col">
        <div class="youth-camp-box">
          <div class="custom-box">
            <h3>{{$pages->topic_card}}</h3>
           {!! $pages->description !!}
          </div>
        </div>
      </div>
    </div>
    <img class="img-responsive corporate-banner" src="./images/corporate-banner.png"> </div>
</section>
<!-- corporate-retreats section here --> 
@endsection