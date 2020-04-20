
<html lang="{{ app()->getLocale() }}">
    <head>
      
  <meta charset="utf-8">
  <title>RPRA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('themes/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/jcarousel.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/flexslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{ asset('themes/skins/default.css') }}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('themes/ico/apple-touch-icon-144-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('themes/ico/apple-touch-icon-114-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('themes/ico/apple-touch-icon-72-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" href="{{ asset('themes/ico/apple-touch-icon-57-precomposed.png') }}" />
  <link rel="shortcut icon" href="{{ asset('themes/ico/rpra.png') }}" />

  <style type="text/css">
    .margin-zero{
      margin-bottom: 0px;
    }
  </style>

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
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
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Springville center X264, Park Ave S.01</li>
              <li>About me <i class="icon-phone"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
        <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/home') }}" ><i class="icon-user"></i> Home</a></li>
                            <li><a href="{{ route('logout') }}" data-toggle="modal" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                            </form>
                            
                        @else
                            <li><a href="{{url('/register')}}" ><i class="icon-user"></i> Register</a></li>
                            <li><a href="#mySignin_1" data-toggle="modal">Log in</a></li>
                        @endauth
                    @endif
                
              </ul>
            </div>            
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="{{ url('/') }}" style="position: absolute; top: 30px; left: 10px;"><img src="{{ asset('themes/img/RPRA.png') }}" alt="" width="100px" class="logo" /></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="{{ url('/') }}">Home</a>                   
                    </li>                    
                    <li>
                      <a href="#section-about">About Us</a>
                    </li>
                    <li>
                      <a href="#section-contact">Contact Us</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->    
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="{{ asset('themes/img/slides/nivo/bg-1.jpg') }}" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="{{ asset('themes/img/slides/nivo/bg-2.jpg') }}" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="{{ asset('themes/img/slides/nivo/bg-3.jpg') }}" alt="" title="#caption-3" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>You can <strong>See</strong></h2>
                  <p>
                    Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>You can <strong>Input</strong></h2>
                  <p>
                    Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2>Inpute <strong>Maintenance of PC</strong></h2>
                  <p>
                    Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section id="section-about" class="section appear clearfix">
      <div class="container">
        <div class="row">
          <div class="span6">
            <h2>About <strong> Us</strong></h2>
            <p>
              Ei mel semper vocent persequeris, nominavi patrioque vituperata id vim, cu eam gloriatur philosophia deterruisset. Meliore perfecto repudiare ea nam, ne mea duis temporibus. Id quo accusam consequuntur, eum ea debitis urbanitas. Nibh reformidans vim ne.
            </p>
            <p>
              Iudico definiebas eos ea, dicat inermis hendrerit vel ei, legimus copiosae quo at. Per utinam corrumpit prodesset te, liber praesent eos an. An prodesset neglegentur qui, usu ancillae posidonium in, mea ex eros animal scribentur. Et simul fabellas sit.
              Populo inimicus ne est.
            </p>
            <p>
              Alii wisi phaedrum quo te, duo cu alia neglegentur. Quo nonumy detraxit cu, viderer reformidans ut eos, lobortis euripidis posidonium et usu. Sed meis bonorum minimum cu, stet aperiam qualisque eu vim, vide luptatum ei nec. Ei nam wisi labitur mediocrem.
              Nam saepe appetere ut, veritus graecis minimum no vim. Vidisse impedit id per.
            </p>
          </div>
          <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="{{ asset('themes/img/works/full/image-01-full.jpg') }}" alt="" />
                </li>
                <li>
                  <img src="{{ asset('themes/img/works/full/image-02-full.jpg') }}" alt="" />
                </li>
                <li>
                  <img src="{{ asset('themes/img/works/full/image-03-full.jpg') }}" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->        
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
      </div>
    </section>
    <section id="section-contact">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

      <div class="container">
        <div class="row">
          <div class="span12">
            <h4>Get in touch with us by filling <strong>contact form below</strong></h4>

            <form action="" method="post" role="form" class="contactForm">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>    
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">About our company</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">Explore our portfolio</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Flattern forum</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
                <strong>Flattern studio, Pte Ltd</strong><br>
                 Springville center X264, Park Ave S.01<br>
                 Semarang 16425 Indonesia
              </address>
              <p>
                <i class="icon-phone"></i>  <br>
                <i class="icon-envelope-alt"></i> director@repreortingagency.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('themes/js/jquery.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('themes/js/bootstrap.js') }}"></script>
  <script src="{{ asset('themes/js/jcarousel/jquery.jcarousel.min.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.fancybox-media.js') }}"></script>
  <script src="{{ asset('themes/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('themes/js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('themes/js/portfolio/setting.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.nivo.slider.js') }}"></script>
  <script src="{{ asset('themes/js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.ba-cond.min.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.slitslider.js') }}"></script>
  <script src="{{ asset('themes/js/animate.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('themes/js/custom.js') }}"></script>
  <script type="text/javascript">
    function callsignup()
    {
      var requireUsertype = $('#cmbUsrtype').val()

      $('#txtEmail_2').val($('#txtEmail').val());
      $('#name').val($('#txtName').val());
      $('#password').val($('#txtPassword').val());

      $('#mySignup_1').modal('hide');
      if ( requireUsertype == "0" ){
        $('#acctype').val("user");
        var reg_id =  1 + Math.floor(Math.random() * 100000000);
        reg_id = "V" + reg_id;
        console.log("registration id = " + reg_id);

        // if ( $('#txtName').val() != "" && $('#txtEmail').val() != "" && $('#txtPassword').val() != "" && $('#txtPassword-confirm').val() != "" ) {
            
            $('#mySignup_2').modal('show');
        // }
      }
      else
      {    
        $('#acctype').val("admin");
        var reg_id =  1 + Math.floor(Math.random() * 10000);
        reg_id = "A" + reg_id;
        console.log("server id = " + reg_id);
        $('#txtServer_id').val(reg_id);
        $('#mySignup_3').modal('show')
      }
    }
  </script>
    </body>

        <!-- Sign in Modal -->
            <div id="mySignin_1" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">

                  <div class="col-md-4"></div>
                  <div class="col-md-3" style="text-align: center;"><img src="{{ asset('themes/img/RPRA.png') }}" alt="" width="100px"  class="logo" /></div>
                  <div class="col-md-4"></div>

              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                  @csrf

                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Log in</button>
                    </div>
                    <p class="aligncenter margintop20"> 
                      Forgot password? <a href="#myReset_1" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Signup Modal -->
            <div id="mySignup_1" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Registration an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" aria-label="{{ __('Register') }}">
                  @csrf
                  <div class="control-group">
                    <label class="control-label" >Name</label>
                    <div class="controls">
                      <input id="txtName" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input id="txtEmail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input id="txtPassword" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input id="txtPassword-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" >Account Type Request</label>
                    <div class="controls">
                      <select style="font-size: 15px;" id="cmbUsrtype" name="cmbUsrtype" class="form-control">
                       <option value="0"> Regular User</option>
                       <option value="1">Server Admin</option>
                       <option value="1">Technician</option>
                      </select>
                  </div>
                  </div>
                  <input type="hidden" name="authority" value="Client" />
                  <div class="control-group">
                    <div class="controls">
                      <button type="button" class="btn" onclick="callsignup()">Submit</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- setup account regular Modal -->
            <div id="mySignup_2" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Setup an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                  @csrf
                  <div class="control-group" style="margin-bottom: 5px;">
                    <div class="row" style="text-align: center;">
                      <div class="col-md-4">       
                        <img src="{{ asset('themes/img/users/1.jpg') }}" width="150px;" height="160px;">        
                      </div>
                    </div>
                  </div>
                  <input id="name" type="hidden" name="name">
                  <input id="password" type="hidden" name="password">
                  <input id="acctype" type="hidden" name="acctype">

                  <div class="control-group" style="margin-bottom: 5px;">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input id="txtEmail_2" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="txtEmail_2" value="" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 5px;">
                    <label class="control-label" >Discord ID</label>
                    <div class="controls">
                      <input id="txtDis_id" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="txtDis_id" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 5px;">
                    <label class="control-label" >Five M User ID</label>
                    <div class="controls">
                      <input id="txtFive_id" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="txtFive_id" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 5px;">
                    <label class="control-label" >D.O.B</label>
                    <div class="controls">
                      <input id="txtBirth" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="txtBirth" value="{{ old('name') }}" style="padding: 0 !important;" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 5px;">
                    <label class="control-label" >Current Server</label>
                    <div class="controls">
                      <input id="txtServer" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="txtServer" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" ><input type="checkbox" id="chbPrivacy_regular" name="chbPrivacy_regular" required></label>
                    <div class="controls">
                      <a href="" class="form-control" required autofcus> Agree to the <strong>Privacy Policy</strong></a>
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" ><input type="checkbox" id="chbPrivacy13_regular" name="chbPrivacy13_regular" required></label>
                    <div class="controls">
                      <a href="" class="form-control" required autofcus> You are above the age of 13 years old.</a>
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" ><input type="checkbox" id="chbPrivacy16_regular" name="chbPrivacy16_regular" required></label>
                    <div class="controls">
                      <a href="" class="form-control" required autofcus> Agree that if you are under the age of 16 and living in the EU you must have
                        parental consent before continuing. By checking this box, it shows that you are either above 16
                        or you have parental consent if living in EU Territory</a>
                    </div>
                  </div>
                  <input type="hidden" name="authority" value="Client" />
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Submit</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end setup regular account modal -->
            <!-- setup server account Modal -->
            <div id="mySignup_3" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Setup an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                  @csrf
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" >Server ID #</label>
                    <div class="controls">
                      <input id="txtServer_id" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="txtServer_id" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" >Sever name</label>
                    <div class="controls">
                      <input id="txtServername" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" for="inputEmail">Admin email</label>
                    <div class="controls">
                      <input id="txtAdminemail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="admin123@gmail.com" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" >Admin First Name</label>
                    <div class="controls">
                      <input id="txtFname" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" >Admin Last Name</label>
                    <div class="controls">
                      <input id="txtLname" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" ># of users in server</label>
                    <div class="controls">
                      <input id="txtServer" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" ># of admins</label>
                    <div class="controls">
                      <input id="txtAdmins" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" >Discord Link</label>
                    <div class="controls">
                      <input id="txtDiscordlink" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" >Website Link</label>
                    <div class="controls">
                      <input id="txtWebsitelink" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" ><input type="checkbox" id="chbPrivacy_server" name="chbPrivacy_server" required></label>
                    <div class="controls">
                      <a href="" class="form-control" required autofcus> Agree to the <strong>Privacy Policy</strong></a>
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" ><input type="checkbox" id="chbPrivacy13_server" name="chbPrivacy13_server" required></label>
                    <div class="controls">
                      <a href="" class="form-control" required autofcus> You are above the age of 13 years old.</a>
                    </div>
                  </div>
                  <div class="control-group" style="margin-bottom: 0px;">
                    <label class="control-label" ><input type="checkbox" id="chbPrivacy16_server" name="chbPrivacy16_server" required></label>
                    <div class="controls">
                      <a href="" class="form-control" required autofcus> Agree that if you are under the age of 16 and living in the EU you must have
                        parental consent before continuing. By checking this box, it shows that you are either above 16
                        or you have parental consent if living in EU Territory</a>
                    </div>
                  </div>
                  <input type="hidden" name="authority" value="Client" />
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Submit</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end setup server account modal -->
            <!-- Reset Modal -->
            <div id="myReset_1" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->

</html>


