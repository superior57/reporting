<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>RPRA | ADMINISTRATOR</title>
    <!-- Favicon-->
    <link rel="icon" href="../../themes/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('themes/admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{url('themes/admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('themes/admin/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <link href="{{url('css/sweetalert2.css')}}" rel="stylesheet">
    <!-- <link href="../../themes/admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" /> -->

    <!-- JQuery DataTable Css -->
    <link href="{{url('themes/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{url('themes/admin/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('themes/admin/css/themes/all-themes.css')}}" rel="stylesheet" />
    <script src="{{url('dist/sweetalert2.js')}}"></script>
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{url('/')}}" ><img src="{{ asset('themes/img/RPRA.png') }}" alt="" width="37px" class="logo" /></a>
                <a href="" class="navbar-brand">ADMINISTRATOR - CONTROL PANEL</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Jake</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{url('images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jake</div>
                    <div class="email">Jake.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Users Manage</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="{{url('admin445/userlist')}}">Users List</a>
                            </li>
                            <li >
                                <a href="{{url('admin445/newusers')}}">New Users</a>
                            </li>
                            <li>
                                <a href="{{ url('admin445/homepage') }}">Homepage Manage</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">AdminJake - RPRA Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    
                    <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Users Manage
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Registration#</th>
                                            <th>D.O.B</th>
                                            <th>Email Address</th>
                                            <th>Steam</th>
                                            <th>Five M User</th>
                                            <th>Active</th>
                                            <th>Flag</th>
                                            <th>Status</th>
                                            <th>Authentication</th>
                                            <th>Approved</th>
                                            <th>Action sta</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Registration#</th>
                                            <th>D.O.B</th>
                                            <th>Email Address</th>
                                            <th>Steam</th>
                                            <th>Five M User</th>
                                            <th>Active</th>
                                            <th>Flag</th>
                                            <th>Status</th>
                                            <th>Authentication</th>
                                            <th>Approved</th>
                                            <th>Action sta</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="tbody_userlist">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>


    <!-- Jquery Core Js -->
    <script src="{{url('themes/admin/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{url('themes/admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{url('themes/admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{url('themes/admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    
    <script src="{{url('themes/admin/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{url('themes/admin/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{url('themes/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{url('themes/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('themes/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{url('themes/admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{url('themes/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{url('themes/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{url('themes/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{url('themes/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <script src="{{url('themes/admin/js/pages/ui/notifications.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{url('themes/admin/js/admin.js')}}"></script>
    <script src="{{url('themes/admin/js/pages/tables/jquery-datatable.js')}}"></script>
    <!-- <script src="../../themes/admin/plugins/sweetalert/sweetalert.min.js"></script> -->
    <script src="{{url('themes/admin/plugins/node-waves/waves.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{url('themes/admin/js/pages/ui/dialogs.js')}}"></script>
    <script src="{{url('themes/admin/js/demo.js')}}"></script>
</body>

<script type="text/javascript">

        $(document).ready(function(){
            table_reload();
        });

        function table_reload()
        {

           $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
             });
             $.ajax({
                  url : '/ajax_get_userlist',
                  type: "GET",
                  dataType: "JSON",
                  data : { '_token' : '{{ csrf_token() }}'},
                  success: function(users)
                  {
                     //if success reload ajax table
                        
                        $('#tbody_userlist').empty();
                        var data = "";
                        for ( var i = 0; i < users.length; i ++ ){

                            var row = "<tr>";
                            var no = i +1;
                            var flag = "<td>Not Flagged</td>";
                            var verify = "<td>Not Verified</td>";
                            var activity = "<td>Not Active</td>"
                            var approve_status = "<div class='switch'><label><input value='"+users[i]['id']+"' type='checkbox' onchange='set_approve(this)' ><span class='lever switch-col-blue'></span></label></div>"

                            if ( users[i]['flag'] == "1" )
                              flag = "<td style='color:red'>Flagged</td>"
                            if ( users[i]['verify'] == "1" )
                              verify = "<td style='color:blue'>Verified</td>"
                            else if (users[i]['verify'] == "2" )
                              verify = "<td style='color:red'>Under Review</td>"
                            else if (users[i]['verify'] == "3")
                              verify = "<td style='color:red'>Pending Appeal</td>"                                    
                            if ( users[i]['active'] == "1" )
                              activity = "<td style='color:green'>Active</td>"
                            if (users[i]['approve_status'] == "1")
                                var approve_status = "<div class='switch'><label><input value='"+users[i]['id']+"' type='checkbox' onchange='set_approve(this)' checked><span class='lever switch-col-blue'></span></label></div>"


                            row += "<td>"+no+"</td><td>"+users[i]['name']+"</td><td>"+users[i]['reg_id']+"</td><td>"+users[i]['age']+"</td><td>"+users[i]['email']+"</td><td>"+users[i]['steam']+"</td><td>"+users[i]['five']+"</td>"+activity+""+flag+""+verify+"<td>"+users[i]['authority']+"</td><td>"+approve_status+"</td><td><button value='"+users[i]['id']+"' class='btn btn-sm btn-default' onclick='edit_user(this)' ><i class='glyphicon glyphicon-pencil'></i></button>&nbsp<button value='"+users[i]['id']+"' id=''  onclick='delete_user(this)' class='btn btn-sm btn-default'><i class='glyphicon glyphicon-trash'></i></button></td>"
                            row += "</tr>";
                            data += row;
                        }


                        $('#tbody_userlist').append(data);
                 },
                 error: function (jqXHR, textStatus, errorThrown)
                 {
                  alert('Error adding / update data');
                }
              });
    }

    function edit_user(element)
    {

    }

    function set_approve(element)
    {
        var approved = "0";
        var id = $(element).attr('value');
        var colorName = "bg-black";
        var placementFrom = "top";
        var placementAlign = "right";
        var animateEnter = "animated bounceInRight";
        var animateExit = "animated bounceOutRight";
        var text = "";    

        if ( $(element).is(':checked') )
            approved = "1";

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
             });
             $.ajax({
                  url : '/ajax_user_approve',
                  type: "GET",
                  dataType: "JSON",
                  data : { '_token' : '{{ csrf_token() }}', 'id' : id, "updated_approve" : approved },
                  success: function(users)
                  {
                     //if success reload ajax table
                     console.log(users);
                    if (approved == "1")
                        text = "Successed to approve one user"
                    else
                        text = "Successed to disapprove one user";
                    showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit);
                        
                },
                 error: function (jqXHR, textStatus, errorThrown)
                 {
                    text = "Failed to approve or disapprove one user!"        
                    showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit); 
                }
              });
    }

    function delete_user(element)
    {
        var select_id = $(element).attr('value');
        var colorName = "bg-black";
        var placementFrom = "top";
        var placementAlign = "right";
        var animateEnter = "animated bounceInRight";
        var animateExit = "animated bounceOutRight";
        var text = "";   

         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            closeOnConfirm: false
      }).then(function(isConfirm) {

     // ajax delete data to database
     $.ajax({
      url : '/ajaxDelete',
      type: "GET",
      dataType: "JSON",
      data : { '_token' : '{{ csrf_token() }}', 'id' : select_id},
      success: function(data)
      {

               //if success reload ajax table
               table_reload();
               text = "Successed to delete one user!"
               showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit);
               
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              text = "Failed to delete one user!"
               showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit);
            }
          });
       })
    }

    function confirm_user(element)
    {
        var colorName = "bg-black";
        var placementFrom = "top";
        var placementAlign = "right";
        var animateEnter = "animated bounceInRight";
        var animateExit = "animated bounceOutRight";
        var text = "Confirmed user"; 
        showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit);
    }

    function decline_user(element)
    {
        var colorName = "bg-black";
        var placementFrom = "top";
        var placementAlign = "right";
        var animateEnter = "animated bounceInRight";
        var animateExit = "animated bounceOutRight";
        var text = "Declined user"; 
        showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit);
    }
    
    </script>

</html>
