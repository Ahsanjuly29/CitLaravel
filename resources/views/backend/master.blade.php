<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Meteor | Responsive Admin Dashboard Template</title>

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />

        <!-- Styles -->
        <link href="{{ url('/') }}/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="{{ url('/') }}/assets/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="{{ url('/') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="{{ url('/') }}/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/> -->
        
        <!-- Theme Styles -->
        <link href="{{ url('/') }}/assets/css/meteor.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/css/custom.css" rel="stylesheet" type="text/css"/>
    @yield('header_css')
    </head>

    <body class="compact-menu">
        <div class="overlay"></div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Messages</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="icon-close"></i></a></h3>
            <div class="slimscroll">
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
            </div>
		</nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3><span class="pull-left">Michael Lewis</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Duis aute irure dolor?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Lorem ipsum dolor sit amet, dapibus quis, laoreet et.
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Ut ullamcorper, ligula.
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        In hac habitasse platea dict umst. ligula eu tempor eu id tincidunt.
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Curabitur pretium?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Etiam tempor. Ut tempor! ull amcorper.
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
		</nav>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="{{route('home')}}" class="logo-text"><span>METEOR</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="sidebar-toggle"><i class="icon-arrow-left"></i></a>
                                </li>
                                <li>
                                    <a href="#cd-nav" class="cd-nav-trigger"><i class="icon-support"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-settings"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Horizontal bar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check" checked>
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Hover Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Boxed Layout 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>	
                                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                                </li>
                                <li>
                                    <a href="{{route('/')}}" class="show-search"><i class="icon-globe"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-open"></i><span class="badge badge-danger pull-right">6</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 6 new  messages!</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Michael Lewis</p>
                                                        <p class="msg-text">Yeah science!</p>
                                                        <p class="msg-time">3 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">John Doe</p>
                                                        <p class="msg-text">Hi Nick</p>
                                                        <p class="msg-time">8 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
                                                        <p class="msg-name">Emma Green</p>
                                                        <p class="msg-text">Let's meet!</p>
                                                        <p class="msg-time">56 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
                                                        <p class="msg-name">Nick Doe</p>
                                                        <p class="msg-text">Nice to meet you</p>
                                                        <p class="msg-time">2 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Michael Lewis</p>
                                                        <p class="msg-text">Yeah science!</p>
                                                        <p class="msg-time">5 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="{{ url('/') }}/assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">John Doe</p>
                                                        <p class="msg-text">Hi Nick</p>
                                                        <p class="msg-time">9 hours ago</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i><span class="badge badge-danger pull-right">3</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 3 pending tasks!</p></li>
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="fa fa-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1m</span>
                                                        <p class="task-details">New user registered</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-primary"><i class="fa fa-refresh"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">3 Charts refreshed</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="fa fa-phone"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">2 Missed calls</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-name">{{Auth::user()->name}}<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="{{ url('/') }}/assets/images/{{Auth::user()->image}}" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li class=" @yield('profile')" role="presentation"><a href="{{route('admin')}}"><i class="icon-user"></i>Profile</a></li>
                                        {{--<li role="presentation"><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>--}}
                                        {{--<li role="presentation"><a href="inbox.html"><i class="icon-envelope-open"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>--}}
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="lock-screen.html"><i class="icon-lock"></i>Lock screen</a></li>
                                        <li role="presentation">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" id="showRight">
                                        <i class="icon-bubbles"></i>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->

            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">
                        <li class=""><a href="{{route('home')}}" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
                       
                        {{--<li class=" @yield('profile')"><a href="{{route('admin')}}" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Profile</p></a></li>--}}
                       
                        <li class="droplink @yield('catactive')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-layers"></span><p>Category</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class=" @yield('catadd')"><a href="{{ route('CategoryForm') }}"><i class="fa fa-plus"></i>&nbsp;Add</a></li>
                                <li class=" @yield('catview')"><a href="{{ route('CategoryView') }}"><i class="fa fa-eye"></i>&nbsp;View</a></li>
                                <li class=" @yield('catdel')"><a href="{{ route('CategoryTrash') }}"><i class="fa fa-trash"></i>&nbsp;Trash</a></li>
                            </ul>
                        </li>
                        <li class="droplink @yield('subcatactive')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span><p>Sub Category</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class=" @yield('subcatadd')"><a href="{{ route('subCategory') }}"><i class="fa fa-plus"></i>&nbsp;Add</a></li>
                                <li class=" @yield('subcatview')"><a href="{{ route('subCategoryList') }}"><i class="fa fa-eye"></i>&nbsp;View</a></li>
                                {{--<li class=" @yield('subcatdel')"><a href=" "><i class="fa fa-trash"></i>&nbsp;Trash</a></li>--}}
                            </ul>
                        </li>
                        <li class="droplink @yield('coloractive')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>Color</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class=" @yield('coloradd')"><a href="{{ route('coloradd') }}"><i class="fa fa-plus"></i>&nbsp;Add</a></li>
                                <li class=" @yield('colorview')"><a href="{{ route('colorview') }}"><i class="fa fa-eye"></i>&nbsp;View</a></li>
{{--                                <li class=" @yield('colordel')"><a href="{{ route('colorview') }}"><i class="fa fa-trash"></i>&nbsp;Trash</a></li>--}}
                            </ul>
                        </li> 
                        <li class="droplink @yield('sizeactive')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-size-actual"></span><p>Size</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class=" @yield('sizeadd')"><a href="{{ route('sizeadd') }}"><i class="fa fa-plus"></i>&nbsp;Add</a></li>
                                <li class=" @yield('sizeview')"><a href="{{ route('sizeview') }}"><i class="fa fa-eye"></i>&nbsp;View</a></li>
                                {{--<li class=" @yield('sizedel')"><a href="{{ route('sizeview') }}"><i class="fa fa-trash"></i>&nbsp;Trash</a></li>--}}
                            </ul>
                        </li> 
                        <li class="droplink @yield('productactive')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-present"></span><p>Products</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class=" @yield('productadd')"><a href="{{ route('ProductAdd') }}">Add</a></li>
                                <li class=" @yield('ProductList')"><a href="{{ route('ProductList') }}">View</a></li>
                                {{--<li class=" @yield('ProductList')"><a href="{{ route('ProductList') }}">Trash</a></li>--}}
                            </ul>
                        </li>
                        <li class="droplink @yield('blogactive')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-present"></span><p>Blog</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class=" @yield('blogadd')"><a href="{{ route('blog.create') }}">Add</a></li>
                                <li class=" @yield('blogList')"><a href="{{ route('blog.index') }}">View</a></li>
{{--                                <li class=" @yield('ProductList')"><a href="{{ route('blog.show','1') }}">Trash</a></li>--}}
                            </ul>
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->

            @yield('content')

        </main><!-- Page Content -->
<!--         <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>DEMOS</h3>
            </header>
            <div class="col-md-6 demo-block demo-selected demo-active">
                <p>Dark<br>Design</p>
            </div>
            <div class="col-md-6 demo-block">
                <a href="../admin2/index.html"><p>Light<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block">
                <a href="../admin3/index.html"><p>Material<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Horizontal<br>(Coming)</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
        </nav> -->
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        <script src="{{ url('/') }}/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="{{ url('/') }}/assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/pace-master/pace.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="{{ url('/') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/switchery/switchery.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="{{ url('/') }}/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="{{ url('/') }}/assets/plugins/waves/waves.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="{{ url('/') }}/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <!-- <script src="{{ url('/') }}/assets/plugins/toastr/toastr.min.js"></script> -->
        <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="{{ url('/') }}/assets/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="{{ url('/') }}/assets/js/meteor.min.js"></script>
        <script src="{{ url('/') }}/assets/js/pages/dashboard.js"></script>
        <script src="{{ url('/') }}/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

        @yield('footer_js')
    </body>
</html>
