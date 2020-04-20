
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>@yield('title')</title> -->

  <meta charset="utf-8">
  <title>RPRA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="{{ asset('js/Chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/Chart.js/samples/utils.js') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap-toastr/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap-toastr/toastr-rtl.css') }}" />

    <script src="{{ asset('jquery/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('dist/sweetalert2.js') }}"></script>
    <script src="{{ asset('bootstrap-toastr/toastr.js') }}"></script>
  <link rel="shortcut icon" href="{{ asset('themes/ico/rpra.png') }}" />
    

</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-dark" style="height: 60px;  background-color:rgba(19, 18, 18, 0.94); position: fixed; width: 100%; z-index: 400;">
            <div class="container " >
                <a href="{{ url('/') }}"><img src="{{ asset('themes/img/RPRA.png') }}" alt="" width="60px"  class="logo" /></a>

                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> 

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav " id="ul_home" style="display: none;">
                        <a class="nav-link" href="{{ url('/home') }}" style="color: white;">Home</a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_account" style="display:  none;">
                        <a class="nav-link" href="{{ url('/myaccount') }}" style="color: white;">My Account</a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_server_account" style="display:     none;">
                        <a class="nav-link" href="{{ url('/myaccount') }}" style="color: white;">Server Account</a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_userlist" style="display: none;">
                        <a class="nav-link" href="{{ url('/userlist') }}" style="color: white;">User List</a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_users" style="display: none;">
                        <a class="nav-link" href="{{ url('/users', '0') }}" style="color: white;">User Record Search</a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_search" style="display: none;">
                        <a class="nav-link" href="{{ url('/search_userrecord') }}" style="color: white;">Quick Search</a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_ctrlpanel" style="display: none;">
                        <a class="nav-link" href="{{ url('/admin445') }}" style="color: white;">Control Panel</a>   
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color: white;"><b>{{ __('Login') }}</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" style="color: white;"><b>{{ __('Register') }}</b></a>
                            </li>
                        @else
                            <li class="nav-item ">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;"><b>
                                    {{ Auth::user()->authority }} </b><span class="caret"></span>
                                </a>
                            </li> 
                            <li class="nav-item ">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;"><b>
                                    {{ Auth::user()->name }} </b><span class="caret"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" style="color: white;">
                                    <b>{{ __('Logout') }}</b>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            
                        @endguest
                    </ul>
                </div>
            </div> 
        </nav> 
    <!-- end header -->
    
    <section id="featured" style="z-index: 500; padding-top: 150px; padding-left: 50px; padding-right: 50px; padding-bottom: 50px;">
            <div>
                @yield('content')
            </div>
    </section>
  </div>


  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->



  <!-- Template Custom JavaScript File -->
  <!-- <script src="{{ asset('themes/js/custom.js') }}"></script> -->

  <script src="{{ URL::to('/') }}/" defer></script>  
</body>
</html>