<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>@yield('title')</title>
    <!-- Scripts -->
    {{--<script src="" defer></script>--}}
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    @yield('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/lib/tableSorter.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!--     Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        i.icon{
            margin-top: -7px;
        }
    </style>

</head>
@if (Auth::guest())
<body>
<main class="">
    @yield('content')
</main>
@else
<body id="page-my-index"
      class="format-site path-my safari dir-ltr lang-en yui-skin-sam yui3-skin-sam school-demo-moodle-net pagelayout-mydashboard course-1 context-160 jsenabled drawer-ease drawer-open-left">

<div id="app">
    <div id="page-wrapper">


        <header role="banner"
                class="pos-f-t navbar navbar-full navbar-light bg-faded navbar-static-top moodle-has-zindex"
                id="yui_3_17_2_1_1523819606195_44">

            <div class="container-fluid navbar-nav" id="yui_3_17_2_1_1523819606195_43">
                <div data-region="drawer-toggle" id="yui_3_17_2_1_1523819606195_42">
                    <button onclick="tryMe2()" aria-expanded="true" aria-controls="nav-drawer" type="button"
                            class="btn pull-xs-left m-r-1 btn-secondary" data-action="toggle-drawer" data-side="left"
                            data-preference="drawer-open-nav" id="yui_3_17_2_1_1523819606195_41"><i
                                class="icon bars" aria-hidden="true" aria-label=""
                                id="yui_3_17_2_1_1523819606195_40"></i>
                        <span class="sr-only">Side panel</span></button>
                </div>

                <a href="#" class="navbar-brand
                            hidden-sm-down ">
                    <span class="site-name hidden-sm-down">Mount Orange School</span>
                </a>

                <!-- user_menu -->
                <div class="usermenu">
                    <div class="action-menu moodle-actionmenu nowrap-items" id="action-menu-1"
                         data-enhance="moodle-core-actionmenu">

                        <div class="menubar" id="action-menu-1-menubar" role="menubar">

                            <div class="dropdown d-inline" onclick="tryMe()">
                                <a onclick="tryMe()" class=" dropdown-toggle" id="dropdown-1" title="" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="userbutton"><span
                                                class="usertext">{{ Auth::user()->full_name }} </span><span
                                                class="avatars"><span class="avatar current"><img
                                                        src="https://school.demo.moodle.net/pluginfile.php/160/user/icon/boost/f2?rev=1"
                                                        alt="My messy desk" title="My messy desk" class="userpicture"
                                                        width="35" height="35" role="presentation"></span></span></span><b
                                            class="caret"></b></a>
                                <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-1-menu"
                                     data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu"
                                     data-align="tr-br">
                                    <a href="/home" class="dropdown-item menu-action"
                                       role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1"><i
                                                class="icon tachometer alternate fa-fw " aria-hidden="true"
                                                title="Dashboard"
                                                aria-label="Dashboard"></i><span class="menu-action-text"
                                                                                 id="actionmenuaction-1">Dashboard</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('profile')}}"
                                       class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle"
                                       aria-labelledby="actionmenuaction-2"><i class="icon user fa-fw "
                                                                               aria-hidden="true" title="Profile"
                                                                               aria-label="Profile"></i><span
                                                class="menu-action-text"
                                                id="actionmenuaction-2">{{__('View Profile')}}</span></a>
                                    <a href="{{route('edit_profile')}}"
                                       class="dropdown-item menu-action" role="menuitem" data-title="grades,grades"
                                       aria-labelledby="actionmenuaction-3"><i class="icon table fa-fw "
                                                                               aria-hidden="true" title="Grades"
                                                                               aria-label="Grades"></i><span
                                                class="menu-action-text"
                                                id="actionmenuaction-3">{{__('Edit Profile')}}</span></a>

                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle"
                                       aria-labelledby="actionmenuaction-6"><i class="icon sign in alternate fa-fw "
                                                                               aria-hidden="true" title="Log out"
                                                                               aria-label="Log out"></i><span
                                                class="menu-action-text"
                                                id="actionmenuaction-6">{{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                    <div class="dropdown-divider"></div>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>

                <!-- navbar_plugin_output -->
                <div class="popover-region collapsed popover-region-notifications"
                     id="nav-notification-popover-container"
                     data-userid="13" data-region="popover-region">
                    <div class="popover-region-toggle nav-link" data-region="popover-region-toggle" aria-role="button"
                         aria-controls="popover-region-container-5ad3a457db2285ad3a45768f3413" aria-haspopup="true"
                         aria-label="Show notification window with no new notifications" tabindex="0">
                        <i style="font-size: 1.5em;" class="alarm icon" aria-hidden="true" title="Toggle notifications menu"
                           aria-label="Toggle notifications menu"></i>
                        <div class="count-container" data-region="count-container">2</div>

                        <div class="count-container hidden" data-region="count-container"></div>

                    </div>
                    <div id="popover-region-container-5ad3a457db2285ad3a45768f3413" class="popover-region-container"
                         data-region="popover-region-container" aria-expanded="false" aria-hidden="true"
                         aria-label="Notification window" role="region">
                        <div class="popover-region-header-container">
                            <h3 class="popover-region-header-text" data-region="popover-region-header-text">
                                Notifications</h3>
                            <div class="popover-region-header-actions" data-region="popover-region-header-actions"><a
                                        class="mark-all-read-button" href="#" title="Mark all as read"
                                        data-action="mark-all-read" role="button">
                                <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true"
                                                             title="Mark all as read" aria-label="Mark all as read"></i></span>
                                    <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                                    src="https://school.demo.moodle.net/theme/image.php/boost/core/1523815278/y/loading"></span>
                                </a>
                                <a href=""
                                   title="Notification preferences">
                                    <i class="icon fa fa-cog fa-fw " aria-hidden="true" title="Notification preferences"
                                       aria-label="Notification preferences"></i>
                                </a>
                            </div>
                        </div>
                        <div class="popover-region-content-container" data-region="popover-region-content-container">
                            <div class="popover-region-content" data-region="popover-region-content">
                                <div class="all-notifications" data-region="all-notifications" role="log"
                                     aria-busy="false"
                                     aria-atomic="false" aria-relevant="additions"></div>
                                <div class="empty-message" tabindex="0" data-region="empty-message">You have no
                                    notifications
                                </div>

                            </div>
                            <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                            src="https://school.demo.moodle.net/theme/image.php/boost/core/1523815278/y/loading"></span>
                        </div>
                        <a class="see-all-link"
                           href="">
                            <div class="popover-region-footer-container">
                                <div class="popover-region-seeall-text">See all</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- search_box -->
                <span class="hidden-md-down">

                    </span>

                <nav class="nav navbar-nav hidden-md-down">
                    <!-- custom_menu -->
                    <div class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" id="drop-down-5ad3a457dca705ad3a45768f3416"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            English ‎(en)‎
                        </a>
                    </div>
                    <!-- page_heading_menu -->

                </nav>
            </div>
        </header>

        <main class="">
            @yield('content')
        </main>
        @if (route('profile'))
        @else

        @endif
        <div id="nav-drawer" data-region="drawer" class="hidden-print moodle-has-zindex" aria-hidden="false"
             tabindex="-1">
            <nav class="list-group">
                <a class="list-group-item list-group-item-action font-weight-bold"
                   href="/home"
                   data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1"
                   data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0"
                   data-preceedwithhr="0">
                    <div class="m-l-0">
                        Dashboard
                    </div>
                </a>
                @if(Auth::user()->role_id == 2)
                <a href="{{route('list_course_teacher', ['user_id'=>Auth::user()->id])}}" class="list-group-item list-group-item-action "
                   data-key="mycourses" data-isexpandable="1" data-indent="0"
                   data-showdivider="0"
                   data-type="0" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0"
                   data-hidden="0"
                   data-preceedwithhr="0" data-parent-key="myhome">
                    <div class="m-l-0">
                        My courses
                    </div>
                </a>
                @endif

                <a class="list-group-item list-group-item-action "
                   href=""
                   data-key="courseindexpage" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="60"
                   data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0"
                   data-preceedwithhr="0" data-parent-key="mycourses">
                    <div class="m-l-1">
                        More...
                    </div>
                </a>
            </nav>
        </div>
    </div>
    <div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div>
    <footer id="page-footer" class="p-y-1 bg-inverse">
        <div class="container">
            <div id="course-footer"></div>

            <p class="helplink"><a href="/home">
                    <i class="icon fa fa-info-circle fa-fw iconhelp icon-pre" aria-hidden="true" aria-label=""></i>Welcome
                    to Moodle system</a>
            </p>

            <div class="logininfo">You are logged in as <a href=""
                                                           title="View profile">{{ Auth::user()->full_name }}</a> (<a
                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>)
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </div>
            <div class="tool_usertours-resettourcontainer"></div>
            <div class="homelink"><a href="/home">Home</a></div>
            <a>Designed & developed by @NickyDo</a>
            <div id="resetcountdown"
                 style="padding: 3px 1em; position: fixed; bottom: 0px; right: 0px; overflow: hidden; background-color: red; font-weight: bold;">
                Login as a
                @if(Auth::user()->role_id == 2)
                    Teacher!
                @endif
                @if(Auth::user()->role_id == 1)
                    Student!
                @endif
                Your account is activated
            </div>
        </div>
    </footer>

    @endif

</div>
</body>

<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
    @yield('js')
</html>
