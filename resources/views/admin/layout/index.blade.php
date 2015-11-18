<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Saigon Industrial Development Control Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- The styles -->
    <link href="{{asset('css/bootstrap-cerulean.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/charisma-app.css')}}" rel="stylesheet">
    <link href='{{asset('bower_components/fullcalendar/dist/fullcalendar.css')}}' rel='stylesheet'>
    <link href='{{asset('bower_components/fullcalendar/dist/fullcalendar.print.css')}}' rel='stylesheet' media='print'>
    <link href='{{asset('bower_components/chosen/chosen.min.css')}}' rel='stylesheet'>
    <link href='{{asset('bower_components/colorbox/example3/colorbox.css')}}' rel='stylesheet'>
    <link href='{{asset('bower_components/responsive-tables/responsive-tables.css')}}' rel='stylesheet'>
    <link href='{{asset('bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css')}}' rel='stylesheet'>
    <link href='{{asset('css/jquery.noty.css')}}' rel='stylesheet'>
    <link href='{{asset('css/noty_theme_default.css')}}' rel='stylesheet'>
    <link href='{{asset('css/elfinder.min.css')}}' rel='stylesheet'>
    <link href='{{asset('css/elfinder.theme.css')}}' rel='stylesheet'>
    <link href='{{asset('css/jquery.iphone.toggle.css')}}' rel='stylesheet'>
    <link href='{{asset('css/uploadify.css')}}' rel='stylesheet'>
    <link href='{{asset('css/animate.min.css')}}' rel='stylesheet'>
    <link href='{{asset('css/site.css')}}' rel='stylesheet'>

    <!-- jQuery -->
    <script src="{{asset('bower_components/jquery/jquery.min.js')}}"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('admin/')}}"> <img alt="Logo" src="{{asset('img/logo20.png')}}" class="hidden-xs"/>
                <span>SID Panel</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::to('admin/logout') }}">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="{{ URL::to('/') }}"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="{{ URL::to('/admin')  }}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{ URL::to('/admin/category')  }}"><i class="glyphicon glyphicon-th-list"></i><span> Category</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{ URL::to('/admin/products')  }}"><i class="glyphicon glyphicon-edit"></i><span> Products</span></a></li>
                        <li><a class="ajax-link" href="{{ URL::to('/admin/users')  }}"><i class="glyphicon glyphicon-user"></i><span> Users</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{ URL::to('/admin/intro')  }}"><i class="glyphicon glyphicon-road"></i><span> Introduce</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{ URL::to('/admin/news')  }}"><i class="glyphicon glyphicon-star"></i><span> News</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{ URL::to('/admin/technical')  }}"><i class="glyphicon glyphicon-align-justify"></i><span> Technical</span></a></li>

                        <li><a class="ajax-link" href="{{ URL::to('/admin/contact')  }}"><i class="glyphicon glyphicon-calendar"></i><span> Contact</span></a>
                        </li>
                        <li>
                            <a class="ajax-link" href="{{ URL::to('/admin/recruitment')  }}"><i class="glyphicon glyphicon-tag"></i><span> Recruitment</span></a>
                        </li>

                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
        </ul>
</div>
<div class=" row">
    @if(Session::has('message'))
        <div class="alert alert-success">
                {{Session::get('message')}}<br>
        </div>
    @endif
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="{{URL::to('admin/users')}}">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Members</div>
            <div>507</div>
            <span class="notification">6</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Pro Members</div>
            <div>228</div>
            <span class="notification green">4</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="#">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Sales</div>
            <div>$13320</div>
            <span class="notification yellow">$34</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="#">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Messages</div>
            <div>25</div>
            <span class="notification red">12</span>
        </a>
    </div>
</div>

<div class="row">
    @yield('content')
</div>

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="#" target="_blank">TP</a> 2014 - 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="#">TP</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- library for cookie management -->
<script src="{{asset('js/jquery.cookie.js')}}"></script>
<!-- calender plugin -->
<script src='{{asset('bower_components/moment/min/moment.min.js')}}'></script>
<script src='{{asset('bower_components/fullcalendar/dist/fullcalendar.min.js')}}'></script>
<!-- data table plugin -->
<script src='{{asset('js/jquery.dataTables.min.js')}}'></script>

<!-- select or dropdown enhancer -->
<script src="{{asset('bower_components/chosen/chosen.jquery.min.js')}}"></script>
<!-- plugin for gallery image view -->
<script src="{{asset('bower_components/colorbox/jquery.colorbox-min.js')}}"></script>
<!-- notification plugin -->
<script src="{{asset('js/jquery.noty.js')}}"></script>
<!-- library for making tables responsive -->
<script src="{{asset('bower_components/responsive-tables/responsive-tables.js')}}"></script>
<!-- tour plugin -->
<script src="{{asset('bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js')}}"></script>
<!-- star rating plugin -->
<script src="{{asset('js/jquery.raty.min.js')}}"></script>
<!-- for iOS style toggle switch -->
<script src="{{asset('js/jquery.iphone.toggle.js')}}"></script>
<!-- autogrowing textarea plugin -->
<script src="{{asset('js/jquery.autogrow-textarea.js')}}"></script>
<!-- multiple file upload plugin -->
<script src="{{asset('js/jquery.uploadify-3.1.min.js')}}"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{asset('js/jquery.history.js')}}"></script>
<!-- application script for Charisma demo -->
<script src="{{asset('js/charisma.js')}}"></script>
<script src="{{asset('js/myscript.js')}}"></script>
<script type="text/javascript">
      var CLIENT_ID = '302066283904-nbslege32jnsup9pulqo78fv3b39s80i.apps.googleusercontent.com';
      var SCOPES = [
          'https://www.googleapis.com/auth/drive.file',
          'email',
          'profile',
          // Add other scopes needed by your application.
        ];

      /**
       * Called when the client library is loaded.
       */
      function handleClientLoad() {
        checkAuth();
      }

      /**
       * Check if the current user has authorized the application.
       */
      function checkAuth() {
        gapi.auth.authorize(
            {'client_id': CLIENT_ID, 'scope': SCOPES, 'immediate': true},
            handleAuthResult);
      }

      /**
       * Called when authorization server replies.
       *
       * @param {Object} authResult Authorization result.
       */
      function handleAuthResult(authResult) {
        if (authResult) {
          // Access token has been successfully retrieved, requests can be sent to the API
        } else {
          // No access token could be retrieved, force the authorization flow.
          gapi.auth.authorize(
              {'client_id': CLIENT_ID, 'scope': SCOPES, 'immediate': false},
              handleAuthResult);
        }
      }
    </script>
<script type="text/javascript" src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
</body>
</html>
