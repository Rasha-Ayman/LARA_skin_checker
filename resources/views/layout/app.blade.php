<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick-theme.css') }}">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/fancybox/jquery.fancybox.min.css') }}">

  <!-- Stylesheets -->
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico" type="image/x-icon') }}">
  <link rel="icon" href="{{ asset('frontend/images/favicon.ico" type="image/x-icon') }}">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->


<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                    <a href="index.html">
                        <img src="{{ asset('frontend/images/logo1.png') }}" alt="" width="50">
                    </a><span style="margin-left: 10px; color: #66BFC5; font-size: 18px; font-weight:bold;">SKIN CHECKER</span>
                  </figure>
            </div>
            <div class="right-side">
                <div class="link-btn">
                    <a href="try.html" class="btn-style-one">Try Skin Checker</a>
                  </div>

            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="index.html">Home</a>
                        </li>
                        <li>
                              <a href="about.html">About</a>
                        </li>
                        <li>
                              <a href="service.html">Service</a>
                        </li>
                        <li>
                              <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                              <a href="team.html">Team</a>
                        </li>
                        <li>
                              <a href="appointment.html">Appointment</a>
                        </li>
                        <li>
                              <a href="blog.html">Blog</a>
                        </li>
                        <li>
                              <a href="contact.html">Contact</a>
                        </li>
                        <li>
                          <a href="login.html">Login</a>
                       </li>
                        <li>
                            <a href="signup.html">Sign Up</a>
                      </li>
                     
                     
                     <li>
                        <a href="try.html">Try Skin Checker</a>
                     </li>
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a href="#">Action</a>
                                    </li>
                                    <li>
                                          <a href="#">Another action</a>
                                    </li>
                                    <li>
                                          <a href="#">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">Separated link</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">One more separated link</a>
                                    </li>
                              </ul>
                        </li> -->
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->




@yield('content')





<!--footer-main-->
<footer class="footer-main">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="about-widget">
              <div class="footer-logo">
                <figure>
                  <a href="index.html">
                    <img src="{{ asset('frontend/images/logo1.png') }}" alt="" width="50px">
                    <h6 style="display: inline-block;">Skin Checker</h6>
                  </a>
                </figure>
              </div>
              <p>A software for skin cancer detection.</p>
              <ul class="list-inline social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <h6>Services</h6>
            <ul class="menu-link">
              <li>
                <a href="#">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>Disease Diagnosis</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>Recommend best dermatologists</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>Publish articles about the disease</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="social-links">
              <h6>Download Skin Checker</h6>
              <p>Download Skin Checker from the App Store or Google Play and start checking your skin now.</p>
              <img src="{{ asset('frontend/images/itunes-app-store-logo.png') }}" width="150px">
              <img src="{{ asset('frontend/images/Play_Store_Badge.png') }}" width="150px"></a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container clearfix">
        <div class="copyright-text">
          <p>&copy; Copyright 2022. All Rights Reserved by
            <a href="index.html">Skin Checker</a>
          </p>
        </div>
        <ul class="footer-bottom-link">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="about.html">About</a>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="{{ asset('frontend/plugins/jquery.js') }}"></script>
<script src="{{ asset('frontend/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/bootstrap-select.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('frontend/plugins/slick/slick.min.js') }}"></script>
<!-- FancyBox -->
<script src="{{ asset('frontend/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('frontend/plugins/google-map/gmap.js') }}"></script>

<script src="{{ asset('frontend/plugins/validate.js') }}"></script>
<script src="{{ asset('frontend/plugins/wow.js') }}"></script>
<script src="{{ asset('frontend/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/plugins/timePicker.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
</body>

</html>
