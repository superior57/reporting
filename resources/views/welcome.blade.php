<!DOCTYPE>
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
  <link rel="stylesheet" href="{{asset('themes/grey/css/overwrite.css')}}">
  <!-- skin -->
  <link rel="stylesheet" href="{{asset('themes/grey/skin/default.css')}}">
  <link rel="shortcut icon" href="{{ asset('themes/ico/rpra.png') }}" />
  <!-- =======================================================
    Theme Name: Vlava
    Theme URL: https://bootstrapmade.com/vlava-free-bootstrap-one-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

  <style>
.dropbtn {
  background-color: #4CAF5000;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  min-height: 250px;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: rgb(0, 0, 1);
  min-width: 160px;
  width: 230px;
  text-align: left;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: grey;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  color: #95cbdd;
  background-color: #4CAF5000;
}
</style>

</head>

<body>
<script>
  (function () {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'https://app.termly.io/embed.min.js';
    s.id = 'ae922e95-23f5-4a69-9fe8-adb9bdeba145';
    s.setAttribute("data-name", "termly-embed-banner");
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  })();
</script>

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
          <li class="dropdown" style="float: left;">
            <a href="#section-about">About us</a>
            <div class="dropdown-content" style="left:0; ">
              <a href="https://form.jotform.com/92155252423148" target="_blank">Work For Us!</a>
            </div>
          </li>
          <li>
            <a href="#section-contact">Contact Us</a>
          </li>
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
                <li class="dropdown">
                  <a href="{{url('register')}}">registration</a>
                  <div class="dropdown-content" style="left:0; ">
                    <a href="{{asset('files/Appeal-Procedure.pdf')}}" download>Appeal Procedure</a>
                    <a href="{{asset('files/GettingStarted-RegularUsers.pdf')}}" download>Getting Started - Server</a>
                    <a href="{{asset('files/GettingStarted-ServerAdmins.pdf')}}" download>Getting Started - Regular User</a>
                    <a href="{{asset('files/Server-Rules.pdf')}}" download>Rules - Server</a>
                    <a href="{{asset('files/Regularuser-Rules.pdf')}}" download>Rules - Regular User</a>                    
                  </div>
                </li>
                <li><a href="{{url('/login')}}">Database Login</a></li>
              @endauth
          @endif
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section id="intro">
    <div class="intro-content">
      <h2>Welcome!</h2>
      <h3>Built by admins, for admins</h3>
      <div>
        <a href="{{url('register')}}" class="btn-get-started">Register for 
E-Verify</a>
      </div>
    </div>
  </section>

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-lg-6">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-screen">screen</a>
            </div>
          </div>
          <h3 class="text-bold">Effective</h3>
          <p>Accurate Results with easy access !</p>

          <div class="clear"></div>
        </div>


        <div class="col-lg-6">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-images">images</a>
            </div>
          </div>
          <h3 class="text-bold">Quick data input/Output</h3>
          <p>Easy entry of data, easy to access the data !</p>

          <div class="clear"></div>
        </div>

      </div>
      <div class="row" style="margin-bottom:10px;">
        <div class="col-lg-6">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-archive">archive</a>
            </div>
          </div>
          <h3 class="text-bold">Sophisticated yet simple</h3>
          <p>Sophisticated data systems that make the input and output simple for the user to access and input.</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-6">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-clock">Faster</a>
            </div>
          </div>
          <h3 class="text-bold">Fast loading</h3>
          <p>Fast processing of data. Immediate results.</p>

          <div class="clear"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="flexslider testimonials-slider">
              <ul class="slides">
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="{{asset('themes/img/RPRA.png')}}" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
                        This system is for all users and server administrators.
                      </h5>
                    <br/>
                    <span class="author">&mdash; SARAH DOE <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>

                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="{{asset('themes/grey/img/testimonial/testimonial2.png')}}" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
                        This system is for all users and server administrators.
                        </h5>
                    <br/>
                    <span class="author">&mdash; NICOLE DOE <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="{{asset('themes/grey/img/testimonial/testimonial3.png')}}" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
                      This system is for all users and server administrators.
                      </h5>
                    <br/>
                    <span class="author">&mdash; DASON KRUN <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- about -->
  <section id="section-about" class="section appear clearfix" hidden>
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">ABOUT US</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="{{asset('themes/grey/img/team/member1.jpg')}}" alt=""></figure>
            <div class="team-detail">
              <h4>Jason Doe</h4>
              <span>User experiences</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="{{asset('themes/grey/img/team/member2.jpg')}}" alt=""></figure>
            <div class="team-detail">
              <h4>Timothy Clark</h4>
              <span>Web developer</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="{{asset('themes/grey/img/team/member3.jpg')}}" alt=""></figure>
            <div class="team-detail">
              <h4>Vicky Tan</h4>
              <span>Web designer</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="{{asset('themes/grey/img/team/member4.jpg')}}" alt=""></figure>
            <div class="team-detail">
              <h4>Kevin Peterson</h4>
              <span>UI designer</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /about -->

  <!-- thank you -->
  <section id="section-thanks" class="section appear clearfix" style="display:none;">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Thank you for your register</h2>
            <br />
            <h4>You succeeded in registration. <br>You will receive an email with login information from the super administrator soon.<br> Please wait.</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /thank you -->


  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
            <p>Contact us if you have any questions.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cform" id="contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="{{url('contactus')}}" method="post" class="contactForm">
              <input type="hidden" value="{{csrf_token()}}" name="_token">
              <div class="field your-name form-group">
                <input type="text" name="name" placeholder="Your Name" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
              </div>
              <div class="field your-email form-group">
                <input type="text" name="email" placeholder="Your Email" class="cform-text" size="40" data-rule="email" data-msg="Please enter a valid email">
                <div class="validation"></div>
              </div>
              <div class="field subject form-group">
                <input type="text" name="subject" placeholder="Subject" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validation"></div>
              </div>

              <div class="field message form-group">
                <textarea name="message" class="cform-textarea" cols="40" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validation"></div>
              </div>

              <div class="send-btn">
                <input type="submit" value="SEND MESSAGE" class="btn btn-theme">
              </div>

            </form>
          </div>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>

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
          <li><a href="https://docs.google.com/document/d/1i4sA6TrTuB4DP6ivNIEwORkNJazUWgDN8G7aRtPOj90/edit?usp=sharing" target="_blank">Privacy policy</a></li>
          <li><a href="#">Get in touch</a></li>
        </ul>
      </div>
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright 2019 &copy; All rights reserved</p>
        </div>
      </div>
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
