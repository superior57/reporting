<!DOCTYPE html>
<html>

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <title>RPRA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <link rel="stylesheet" type="text/css" href="{{asset('themes/grey/js/rs-plugin/css/settings.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{asset('themes/grey/css/isotope.css')}}" media="screen">
  <link rel="stylesheet" href="{{asset('themes/grey/css/flexslider.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('themes/grey/js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen">
  <link rel="stylesheet" href="{{asset('themes/grey/css/bootstrap.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">

  <link rel="stylesheet" href="{{asset('themes/grey/css/style.css')}}">
  <!-- skin -->
  <link rel="stylesheet" href="{{asset('themes/grey/skin/default.css')}}">
  <link rel="shortcut icon" href="{{ asset('themes/ico/rpra.png') }}" />
  <!-- =======================================================
    Theme Name: Vlava
    Theme URL: https://bootstrapmade.com/vlava-free-bootstrap-one-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body>

  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0, 0, 0, 0.74);" data-300="line-height:60px; height:60px; background-color:rgba(19, 18, 18, 0.94);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-bars color-white"></span>
        </button>
        <div class="navbar-logo">
          <a href="/"><img data-0="width:100px;" data-300=" width:60px;" src="{{ asset('themes/img/RPRA.png') }}" alt=""></a>
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#section-about">About Us</a></li>
          <li><a href="#section-contact">Contact Us</a></li>
          @if (Route::has('login'))
              @auth

                <li><a href="{{ url('/home') }}" > Panel</a></li>
                <li><a href="{{ route('logout') }}" data-toggle="modal" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf 
                </form>
              @else
                <li><a href="{{url('register')}}">Registration</a></li>
                <li><a href="{{url('/login')}}">Database Login</a></li>
              @endauth
          @endif
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>


  <!-- thank you -->
  <section id="section-thanks" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <br><br><br>
            <h2 class="section-heading animated" data-animation="bounceInUp">Sorry but your account is not approved yet.</h2>
            <br />
            <h4><br>You will receive an email with login information from the Administrator soon.<br> Please wait.</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /thank you -->

  <section id="footer" class="section footer" style="background-color: rgb(43, 45, 47);">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row align-center mar-bot20">
        <ul class="footer-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Get in touch</a></li>
        </ul>
      </div>
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; All rights reserved</p>
        </div>
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Vlava
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <!-- Javascript Library Files -->
  <script src="{{asset('themes/grey/js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
  <script src="{{ asset('themes/js/jquery.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{asset('themes/grey/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('themes/grey/js/jquery.isotope.min.js')}}"></script>
  <script src="{{asset('themes/grey/js/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('themes/grey/js/fancybox/jquery.fancybox.pack.js')}}"></script>
  <script src="{{asset('themes/grey/js/skrollr.min.js')}}"></script>
  <script src="{{asset('themes/grey/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('themes/grey/js/jquery.localScroll.min.js')}}"></script>
  <script src="{{asset('themes/grey/js/stellar.js')}}"></script>
  <!-- <script src="js/jquery.appear.js"></script> -->
  <script src="{{asset('themes/grey/js/jquery.flexslider-min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('themes/grey/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('themes/grey/js/main.js')}}"></script>

</body>

</html>
