<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('themes/register/img/favicon.ico')}}">

    <title>RPRA</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{url('themes/register/img/favicon.png')}}" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{url('themes/register/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('themes/register/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="shortcut icon" href="{{ asset('themes/ico/rpra.png') }}" />
</head>

<body>
    <div class="image-container set-full-height" onclick="" style="background-image: url('{{url('themes/register/img/back.png')}}')">

            <!-- <div class="logo">
              <a href="{{ url('/') }}" style="position: absolute; top: 30px; left: 45%; z-index: 100;"><img src="{{ asset('themes/img/RPRA.png') }}" alt="" width="100px" class="logo" /></a>
            </div> -->

        <!--  Made With Material Kit  -->
        <!-- <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
            <div class="brand">MK</div>
            <div class="made-with">Made with <strong>Material Kit</strong></div>
        </a> -->

        <!--   Big container   -->
        <div class="container" id="dialog">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="dark" id="wizardProfile">
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" >
                                @csrf
                        <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                
                                <input class="accountType" type="hidden" value="RegularUser" name="accountType" >
                                <input class="registration_id" type="hidden" value="{{ $regist_id['reg_id'] }}" name="registration_id" >
                                <input type="hidden" value="" name="avatar_data" id="avatar_data" >
                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                       Registration An Account
                                    </h3>
                                    <!-- <h5>This information will let us know more about you.</h5> -->
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">About</a></li>
                                        <li><a href="#account" data-toggle="tab">Account</a></li>
                                        <li><a href="#address" data-toggle="tab">Setup</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                      <div class="row">
                                            <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="{{asset('themes/register/img/default-avatar.png')}}" class="picture-src" id="wizardPicturePreview" name="wizardPicturePreview" title=""/>
                                                        <input type="file" id="wizard-picture" name="wizard-picture">
                                                    </div> 
                                                    <h6>Choose Picture</h6> 
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Name <small>(required)</small></label>
                                                      <input id="user_name" name="user_name" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">vpn_lock</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Password <small>(required)</small></label>
                                                      <input id="password" name="password" type="password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email <small>(required)</small></label>
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                        
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Country</label>
                                                    <select id="countryfrom" name="countryfrom" class="form-control" required>
                                                        <option disabled="" selected=""></option>
                                                        @foreach($countries as $country)
                                                            <option value="{{ $country->name }}"> {{ $country->name }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h4 class="info-text"> Choice you will request which account type (checkbox) </h4>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-6">
                                                    <div class="choice active" data-toggle="wizard-radio" id="acctype_user" value="RegularUser">
                                                        <input type="checkbox" name="admintype" value="RegularUser">
                                                        <div class="icon">
                                                            <i class="fa fa-user-o"></i>
                                                        </div>
                                                        <h6>Regular User</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="choice" data-toggle="wizard-radio" id="acctype_server" value="ServerAdmin">
                                                        <input type="checkbox" name="admintype" value="ServerAdmin">
                                                        <div class="icon">
                                                            <i class="fa fa-server"></i>
                                                        </div>
                                                        <h6>Server Admin</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row" id="regular_user" style="display: block;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Provide Your Details For Regular User Account </h4>
                                                </div>
                                                <div class="col-sm-4 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input type="email" class="form-control" id="user_email" name="user_email" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Discord ID</label>
                                                        <input type="text" class="form-control" id="user_discordid" name="user_discordid" placeholder="Username#0000" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Steam Hex Key</label>
                                                        <input type="text" class="form-control" id="user_steamid" name="user_steamid" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Five M User ID</label>
                                                        <input type="text" class="form-control" id="user_fiveid" name="user_fiveid" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group label-floating" id="reguser_birth">
                                                        <label class="control-label" style="">D.O.B</label>
                                                        <input type="date" class="form-control" id="user_birth" name="user_birth" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Current Server</label>
                                                        <input type="text" class="form-control" id="user_curserver" name="user_curserver" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="server_admin" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Provide Your Details For Server Admin Account </h4>
                                                </div>
                                                <div class="col-sm-3 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Server ID #</label>
                                                        <input type="text" class="form-control" id="server_id" name="server_id" value="{{ $regist_id['server_id'] }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Server Name</label>
                                                        <input type="text" class="form-control" id="server_name" name="server_name" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Admin Email</label>
                                                        <input type="text" class="form-control" id="server_email" name="server_email" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Admin First Name</label>
                                                        <input type="text" class="form-control" id="server_fname" name="server_fname" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Admin Last Name</label>
                                                        <input type="text" class="form-control" id="server_lname" name="server_lname" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"># Of User In Server</label>
                                                        <input type="text" class="form-control" id="server_userid" name="server_userid" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"># Of Admins</label>
                                                        <input type="text" class="form-control" id="server_adminid" name="server_adminid" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Discord Link</label>
                                                        <input type="text" class="form-control" id="server_discordlink" name="server_discordlink" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Website Link</label>
                                                        <input type="text" class="form-control" id="server_sitelink" name="server_sitelink" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-offset-1 checkbox" id="verify_div">
                                                <label>
                                                    <input type="checkbox" id="verify_privacy" name="server_verify_privacy" required>
                                                    <small>(required)</small>
                                                </label>
                                                <a > Agree to the <strong><a href="https://docs.google.com/document/d/1i4sA6TrTuB4DP6ivNIEwORkNJazUWgDN8G7aRtPOj90/edit?usp=sharing" target="_blank">Privacy Policy</a></strong></a>

                                                <label class="col-sm-offset-1">
                                                    <input type="checkbox" id="verify_thirteenold" name="server_verify_thirteenold" required>
                                                    <small>(required)</small>
                                                </label>
                                                <a  > You are above the age of 13 years old.</a>

                                                <br>

                                                <label class="col-sm-1" style="margin-top: 10px;">
                                                    <input type="checkbox" id="verify_liveinusa" name="server_verify_liveinusa" required>
                                                    <small>(required)</small>
                                                </label>
                                                <a  class="col-sm-9" style="margin-top: 10px; margin-left: 0px;"> Agree that if you are under the age of 16 and living in the EU you must have parental consent before continuing. By checking this box, it shows that you are either above 16 or you have parental consent if living in EU Territory.</a>

                                                <label class="col-sm-2 col-sm-offset-2" style="margin-top: 10px;">
                                                    <input type="checkbox" id="verify_liveinusa" name="server_verify_liveinusa" required>
                                                    <small>(required)</small>
                                                </label>
                                                <a class="col-sm-8" style="margin-top: 10px; margin-left: 0px;" href="https://docs.google.com/document/d/1FUC1fhA4OZamJbqgrlCTj0gQIos5bDu7JH1mTm6_xRA/edit?usp=sharing" target="_blank"><strong> Terms and Conditions</strong></a>
                                            </div>
                                        </div>
                                    </div>                                        
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' id="btn_next" name='next' value='Next' />
                                        <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' id="btn_save" name='Submit' value='Submit' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

    </div>

</body>
    <!--   Core JS Files   -->
    <script src="{{url('themes/register/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <script src="{{url('themes/register/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{url('themes/register/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="{{url('themes/register/js/material-bootstrap-wizard.js')}}"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
    <script src="{{url('themes/register/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#reguser_birth').removeClass('is-empty');
            $('#user_discordid').parent().removeClass('is-empty');
        });
    </script>

</html>
