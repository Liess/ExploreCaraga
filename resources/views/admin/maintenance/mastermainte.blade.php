<!DOCTYPE html>
<html>
    <head>

        <!-- Title -->
        <title>Maintenance - @yield('Maintenance title')</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

         <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="admin/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="admin/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="admin/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="admin/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="admin/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="admin/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="admin/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="admin/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="admin/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="admin/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
        <link href="admin/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	
        <link href="admin/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css">
        <link href="admin/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        
        <!-- Theme Styles -->
        <link href="admin/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="admin/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="admin/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="admin/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="admin/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
<body class="page-header-fixed  pace-done page-sidebar-fixed">

        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="images/venmar.jpg" width="60" alt=""/><span>Venmar Vicente</span></div>
                <div class="profile-menu-list">
                    <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
                    <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                    <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                    <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
        </div>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="index.html" class="logo-text"><span>CARAGA</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right">

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 3 pending tasks !</p></li>
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                        <p class="task-details">New user registered.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24min ago</span>
                                                        <p class="task-details">Database error.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                                        <p class="task-details">Reached 24k likes</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="login.html" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>

                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
        @include('includes.Navigation')
            <div class="page-inner">
                <div class="page-title">
                    @yield('Page title')
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                             @yield ('breadcrumb')
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                    @yield ('Content')
                    </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>


       <!-- Javascripts -->
        <script src="admin/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="admin/plugins/pace-master/pace.min.js"></script>
        <script src="admin/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="admin/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="admin/plugins/switchery/switchery.min.js"></script>
        <script src="admin/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="admin/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="admin/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="admin/plugins/waves/waves.min.js"></script>
        <script src="admin/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="admin/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="admin/plugins/moment/moment.js"></script>
        <script src="admin/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="admin/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="admin/js/pages/table-data.js"></script>
    </body>
</html>
