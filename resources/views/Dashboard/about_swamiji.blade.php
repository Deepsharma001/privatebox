@extends('layouts.frontend')
@section('content')
<!-- banner section here -->
<section class="banner-sec"> <img class="img-responsive" src="{{asset('storage/' . $page->banner_image)}}">
  <div class="banner-content">
    <h2>{{$page->main_title}}</h2>
    <p>{!! $page->main_description !!}</p>
    <a class="custom-btn" href="#">About Swamiji</a> <a class="custom-btn" href="#">Swamiji's Schedule</a> </div>
</section>
<!-- banner-slider section here --> 

<!-- about-swamiji section here -->
<section class="about-swamiji">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-12">
        <h2>{!! $page->secondary_title !!}</h2>
        <p>{!! $page->secondary_sub_description !!}</p>
        <p>{!! $page->secondary_description !!}</p>
      </div>
      <div class="col-lg-6 col-sm-6 col-12 padding-none">
        <div class="row row-sm">
          <div class="col"><img class="img-responsive swami-jiimg" src="{{asset('storage/' . $page->image)}}"></div>
          <div class="col"><img class="img-responsive swami-jiimg" src="{{asset('storage/' . $page->image_1)}}"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about-swamiji section here --> 

<!-- youth-game section here -->
<section class="youth-game">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-6"> <img class="img-responsive academy-game" src="{{asset('storage/' . $page->side_image)}}">
        <p>{!! $page->description !!}</p>
      </div>
      <div class="col-sm-6">
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
<!-- swamiji-video section here -->
<section class="watch-swamiji-video secondary-bg color-primary text-center">
  <div class="container">
    <h2><b>Videos</b></h2>
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
<!-- swamiji-video section here --> 

<!-- swamiji-author section here -->
<section class="swamiji-author">
  <div class="container">
    <div class="row author-sec">
      <div class="col-lg-6 col-sm-6 col-12">
        <h2>{!! $page->author_title !!}</h2>
        <p>{!! $page->author_sub_description !!}</p>
        <p>{!! $page->author_description !!}</p>
        <a class="custom-btn" href="#">View library of works</a> </div>
      <div class="col-lg-6 col-sm-6 col-12 padding-none">
        <div class="row row-sm">
          <div class="col"><img class="img-responsive author-img" src="{{asset('storage/' . $page->author_image)}}"></div>
        </div>
      </div>
    </div>
    <div class="row align-items-end academic-sec">
      <div class="col-lg-6 col-sm-6 col-12 order-2 padding-none ">
        <h2>{!! $page->academic_title !!}</h2>
        <p>{!! $page->academic_sub_description !!}</p>
        <p>{!! $page->academic_description !!}</p>
      </div>
      <div class="col-lg-6 col-sm-6 col-12 order-1">
        <div class="row row-sm">
          <div class="col"><img class="img-responsive academic-img" src="{{asset('storage/' . $page->academic_image)}}"></div>
        </div>
      </div>
    </div>
    <div class="row corporate-guru">
      <div class="col-lg-6 col-sm-6 col-12">
        <h2>{!! $page->corporate_guru_title !!}</h2>
        <p>{!! $page->corporate_guru_sub_description !!}</p>
        <p>{!! $page->corporate_guru_description !!}</p>
        <a class="custom-btn" href="#">MORE ON CORPORATE LEARNING</a> </div>
      <div class="col-lg-6 col-sm-6 col-12 padding-none"> <img class="img-responsive corporate-guru-img" src="./images/swami-jiimg5.jpg"> </div>
    </div>
    <div class="time-article-box"> <img class="img-responsive time-logo" src="./images/time-logo.png">
      <h4><b>A man who adds new meaning to the phrase 'Business Guru'</b></h4>
      <a class="custom-btn" href="#">View Time article</a></div>
  </div>
</section>
<!-- swamiji-author section here --> 

<!-- speaking-credential section here -->
<section class="speaking-credential">
  <div class="container">
    <div class="row">
      <div class="col-l2">
        <h2>{!! $page->footer_title !!}</h2>
        <h5>{!! $page->footer_description !!}</h5>
        <a class="custom-btn" href="#">Upcoming events</a> </div>
    </div>
  </div>
</section>
<!-- speaking-credential section here --> 

<!-- organisation-bodies section here -->
<section class="organisation-bodies">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <h2><b>Organisations and Educational Institutions</b></h2>
        <ul>
          <li>Aspen Ideas Festival </li>
          <li>Festival of Thinkers </li>
          <li>World Economic Forum </li>
          <li>World Bank </li>
          <li>World Presidents' Organisation </li>
          <li>Young Presidents' Organisation</li>
          <li>Young Entrepreneurs'</li>
          <li>European Business Council </li>
          <li>Confederation of Indian Industry </li>
          <li>Malaysian State Assembly</li>
          <li>Indian Cricket Team </li>
          <li>NASA</li>
          <li>Harvard University</li>
          <li>Wharton Business School</li>
          <li>Oxford University</li>
          <li>Stanford University </li>
          <li>Kellogg School of Management</li>
          <li>Indian Institutes of Technology </li>
          <li>Gordon Inst. of Business Science</li>
          <li>Malaysia Inst. of Management</li>
          <li>University of Singapore </li>
          <li>WITS University</li>
          <li>Zayed University</li>
          <li>Welingkar Inst. of Management</li>
          <li>Symbiosis Institutes</li>
        </ul>
      </div>
      <div class="col-lg-6 col-sm-12">
        <h2><b>Corporate Bodies</b></h2>
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <ul>
              <li>Google</li>
              <li>Microsoft Corporation</li>
              <li>Nestle</li>
              <li>Tata Consultancy Services</li>
              <li>Johnson & Johnson</li>
              <li>LG</li>
              <li>Chanel</li>
              <li>JP Morgan</li>
              <li>Merrill Lynch</li>
              <li>Fairmont Hotels</li>
              <li>Nomura</li>
              <li>Credit Suisse</li>
              <li>Barclays</li>
              <li>Walt Disney</li>
              <li>Chrysler</li>
              <li>Ernst & Young</li>
              <li>Deloitte</li>
              <li>KPMG</li>
              <li>Amdocs</li>
              <li>First National Bank </li>
              <li>Edward Nathan Sonnenbergs </li>
              <li>ANZ Bank </li>
              <li>Smollan Group</li>
              <li>Rand Merchant Bank</li>
              <li>Emtel Mauritius</li>
              <li>Telekom Malaysia Ltd</li>
              <li>YTL Corporation </li>
              <li>Nedbank </li>
              <li>Piaggio</li>
              <li>Aditya Birla Group</li>
              <li>Bajaj Auto </li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-12">
            <ul>
              <li>JSW Group</li>
              <li>Essar Group</li>
              <li>Reserve Bank of India</li>
              <li>State Bank of India</li>
              <li>Tata Steel</li>
              <li>HDFC</li>
              <li>IIFL</li>
              <li>IL&FS </li>
              <li>Indian Railway Board</li>
              <li>Bombay Stock Exchange</li>
              <li>Thermax</li>
              <li>Finolex</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- organisation-bodies section here --> 
@endsection
