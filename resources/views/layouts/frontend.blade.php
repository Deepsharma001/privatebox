<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Batch Code</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animated-headline.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    @stack('css')
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ URL::asset('img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <ul>      
                                        <li>Call Us: (+91)89 49 764990</li>
                                        <li>info@office.com </li>
                                    </ul>
                                    <div class="header-social">    
                                        <ul>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a  href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="\"><img src="{{ URL::asset('img/logo/logo.png') }}" height="60px" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                       
                                                <li><a href="\">Home</a></li>
                                                <li><a href="\about">About</a></li>
                                                <li><a href="\package">Package</a></li>
                                                <li><a href="\features">Features</a></li>
                                                <li><a href="\blog">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="\contact">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-30">
                                        <a href="contact.html" class="btn header-btn">Get Started</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main>
    @yield('content')
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="{{ URL::asset('img/gallery/footer_bg.png') }}">
            <div class="container">
                 <!-- Brand Area Start -->
                <div class="brand-area pt-25 pb-30">
                    <div class="container">
                        <div class="brand-active brand-border pt-50 pb-40">
                            <div class="single-brand">
                                <img src="{{ URL::asset('img/gallery/brand1.png') }}" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="{{ URL::asset('img/gallery/brand2.png') }}" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="{{ URL::asset('img/gallery/brand3.png') }}" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="{{ URL::asset('img/gallery/brand4.png') }}" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="{{ URL::asset('img/gallery/brand2.png') }}" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="{{ URL::asset('img/gallery/brand3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Brand Area End -->
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ URL::asset('img/logo/logo2_footer.png') }}" height="65px" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Receive updates and latest news direct from Simply enter.</p>
                                    </div>
                                </div>
                                <div class="footer-number">
                                    <h4><span>+564 </span>7885 3222</h4>
                                    <p>youremail@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Our Support</h4>
                                    <ul>
                                        <li><a href="#">Advanced</a></li>
                                        <li><a href="#"> Management</a></li>
                                        <li><a href="#">Corporate</a></li>
                                        <li><a href="#">Customer</a></li>
                                        <li><a href="#">Information</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Link</h4>
                                    <ul>
                                        <li><a href="#">New Law</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Licenses</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Newslatter</h4>
                                    <div class="footer-pera">
                                        <p class="info1">Subscribe now to get daily updates</p>
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Send
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    @stack('script')
    <script src="{{ URL::asset('/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ URL::asset('/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ URL::asset('/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ URL::asset('/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ URL::asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ URL::asset('/js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('/js/animated.headline.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ URL::asset('/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ URL::asset('/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ URL::asset('/js/jquery.barfiller.js') }}"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ URL::asset('/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('/js/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::asset('/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ URL::asset('/js/contact.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.form.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('/js/mail-script.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.ajaxchimp.min.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ URL::asset('/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('/js/main.js') }}"></script>
    
    </body>
</html>