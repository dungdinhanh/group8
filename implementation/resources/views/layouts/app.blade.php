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
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    <link rel="stylesheet" type="text/css"
          href="https://school.demo.moodle.net/theme/styles.php/boost/1523815278_1523818866/all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!--     Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

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
                                class="icon fa fa-bars fa-fw " aria-hidden="true" aria-label=""
                                id="yui_3_17_2_1_1523819606195_40"></i><span class="sr-only">Side panel</span></button>
                </div>

                <a href="https://school.demo.moodle.net" class="navbar-brand
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
                                                class="icon fa fa-tachometer fa-fw " aria-hidden="true"
                                                title="Dashboard"
                                                aria-label="Dashboard"></i><span class="menu-action-text"
                                                                                 id="actionmenuaction-1">Dashboard</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('profile')}}"
                                       class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle"
                                       aria-labelledby="actionmenuaction-2"><i class="icon fa fa-user fa-fw "
                                                                               aria-hidden="true" title="Profile"
                                                                               aria-label="Profile"></i><span
                                                class="menu-action-text"
                                                id="actionmenuaction-2">{{__('View Profile')}}</span></a>
                                    <a href="{{route('edit_profile')}}"
                                       class="dropdown-item menu-action" role="menuitem" data-title="grades,grades"
                                       aria-labelledby="actionmenuaction-3"><i class="icon fa fa-table fa-fw "
                                                                               aria-hidden="true" title="Grades"
                                                                               aria-label="Grades"></i><span
                                                class="menu-action-text"
                                                id="actionmenuaction-3">{{__('Edit Profile')}}</span></a>
                                    <a href="#"
                                       class="dropdown-item menu-action" role="menuitem" data-title="messages,message"
                                       aria-labelledby="actionmenuaction-4"><i class="icon fa fa-comment fa-fw "
                                                                               aria-hidden="true" title="Messages"
                                                                               aria-label="Messages"></i><span
                                                class="menu-action-text"
                                                id="actionmenuaction-4">{{__('Change Password')}}</span></a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle"
                                       aria-labelledby="actionmenuaction-6"><i class="icon fa fa-sign-out fa-fw "
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
                        <i class="icon fa fa-bell fa-fw " aria-hidden="true" title="Toggle notifications menu"
                           aria-label="Toggle notifications menu"></i>
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
                                <a href="https://school.demo.moodle.net/message/notificationpreferences.php?userid=13"
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
                           href="https://school.demo.moodle.net/message/output/popup/notifications.php">
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
                        <div class="dropdown-menu" aria-labelledby="drop-down-5ad3a457dca705ad3a45768f3416">
                            <a class="dropdown-item" href="https://school.demo.moodle.net/my/index.php?lang=ko"
                               title="한국어 ‎(ko)‎">한국어 ‎(ko)‎</a>
                            <a class="dropdown-item" href="https://school.demo.moodle.net/my/index.php?lang=ja"
                               title="日本語 ‎(ja)‎">日本語 ‎(ja)‎</a>
                            <a class="dropdown-item" href="https://school.demo.moodle.net/my/index.php?lang=zh_tw"
                               title="正體中文 ‎(zh_tw)‎">正體中文 ‎(zh_tw)‎</a>
                            <a class="dropdown-item" href="https://school.demo.moodle.net/my/index.php?lang=zh_cn"
                               title="简体中文 ‎(zh_cn)‎">简体中文 ‎(zh_cn)‎</a>
                        </div>
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
                   href="https://school.demo.moodle.net/my/"
                   data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1"
                   data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0"
                   data-preceedwithhr="0">
                    <div class="m-l-0">
                        Dashboard
                    </div>
                </a>

                <a class="list-group-item list-group-item-action "
                   href="https://school.demo.moodle.net/calendar/view.php?view=month" data-key="calendar"
                   data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0"
                   data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0"
                   data-parent-key="1">
                    <div class="m-l-0">
                        Calendar
                    </div>
                </a>
                <a class="list-group-item list-group-item-action " href="https://school.demo.moodle.net/user/files.php"
                   data-key="privatefiles" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70"
                   data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0"
                   data-preceedwithhr="0" data-parent-key="1">
                    <div class="m-l-0">
                        Private files
                    </div>
                </a>
                <div class="list-group-item" data-key="mycourses" data-isexpandable="1" data-indent="0"
                     data-showdivider="0"
                     data-type="0" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0"
                     data-hidden="0"
                     data-preceedwithhr="0" data-parent-key="myhome">
                    <div class="m-l-0">
                        My courses
                    </div>
                </div>


                <a class="list-group-item list-group-item-action "
                   href="https://school.demo.moodle.net/course/view.php?id=64" data-key="64" data-isexpandable="1"
                   data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0"
                   data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0"
                   data-parent-key="mycourses">
                    <div class="m-l-1">
                        Induction
                    </div>
                </a>
                <a class="list-group-item list-group-item-action "
                   href="https://school.demo.moodle.net/course/view.php?id=27" data-key="27" data-isexpandable="1"
                   data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0"
                   data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0"
                   data-parent-key="mycourses">
                    <div class="m-l-1">
                        Parents and Citizens Council
                    </div>
                </a>
                <a class="list-group-item list-group-item-action "
                   href="https://school.demo.moodle.net/course/view.php?id=41" data-key="41" data-isexpandable="1"
                   data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0"
                   data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0"
                   data-parent-key="mycourses">
                    <div class="m-l-1">
                        Staffroom
                    </div>
                </a>
                <a class="list-group-item list-group-item-action "
                   href="https://school.demo.moodle.net/course/index.php#"
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

    @endif

</div>
</body>
</html>
