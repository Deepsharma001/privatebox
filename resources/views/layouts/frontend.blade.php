<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Index</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" type="text/css" media="all">
    @stack('css')
  </head>
<body>
    <!-- header section here -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="{{ URL::asset('images/logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item active"> <a class="nav-link" href="/vedanta">What is Vedanta </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Testimonials</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/about_swamiji">About Swamiji</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/about_sunandaji">About Sununderji</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/courses">COURSES</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/event">EVENTS</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/media">Media</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">SWAMIJI TV</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@yield('content')
    <!-- footer here -->
    <footer>
        <div class="container">
            <a class="footer-logo" href="#"><img src="{{ URL::asset('images/footer-logo.png')}}"></a>
            <div class="row">
                <div class="col">
                    <h4>About Us</h4>
                    <ul class="footer-list">
                        <li> <a href="#">History</a> </li>
                        <li> <a href="#">Philosophy</a> </li>
                        <li> <a href="#">Press</a> </li>
                        <li> <a href="#">Media</a> </li>
                        <li> <a href="#">Swamiji TV</a> </li>
                        <li> <a href="#">Log in</a> </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Courses</h4>
                    <ul class="footer-list">
                        <li> <a href="#">Latest courses</a> </li>
                        <li> <a href="#">Popular courses </a> </li>
                        <li> <a href="#">Short courses </a> </li>
                        <li> <a href="#">Learn online</a> </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Events</h4>
                    <ul class="footer-list">
                        <li> <a href="#">Event calendar</a> </li>
                        <li> <a href="#">Buy tickets</a> </li>
                        <li> <a href="#">Global meetups</a> </li>
                        <li> <a href="#">Event locations</a> </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Locations</h4>
                    <ul class="footer-list">
                        <li> <a href="#">Australia</a> </li>
                        <li> <a href="#">Canada</a> </li>
                        <li> <a href="#">India</a> </li>
                        <li> <a href="#">Malaysia</a> </li>
                        <li> <a href="#">South Africa</a> </li>
                        <li> <a href="#">Sri Lanka</a> </li>
                        <li> <a href="#">Singapore</a> </li>
                        <li> <a href="#">United Kingdom</a> </li>
                        <li> <a href="#">United States</a> </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>E-learning</h4>
                    <ul class="footer-list">
                        <li> <a href="#">About</a> </li>
                        <li> <a href="#">Courses</a> </li>
                        <li> <a href="#">3 Year course</a> </li>
                        <li> <a href="#">1 Year course</a> </li>
                        <li> <a href="#">1 month course</a> </li>
                        <li> <a href="#">Qualifications</a> </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Contact us</h4>
                    <ul class="footer-list">
                        <li> <a href="#">hello@Vedantaworld.org</a> </li>
                        <br>
                        <li> <a href="#">+33 7688 765 234</a> </li>
                        <br>
                        <li> 123 Building Address street New York United States</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>© 2020 Vedanta World | Terms and Conditions</p>
            </div>
        </div>
    </footer>
    <!-- footer here -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="{{ URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script> 
<script>

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('header').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
  }
});

</script>
    @stack('script')
</body>

</html>
