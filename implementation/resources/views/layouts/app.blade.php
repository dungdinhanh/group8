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
        @if (route('profile'))
        <div id="page" class="container-fluid">
            <header id="page-header" class="row">
                <div class="col-xs-12 p-a-1" id="yui_3_17_2_1_1523828301733_42">
                    <div class="card" id="yui_3_17_2_1_1523828301733_41">

                    </div>
                </div>
            </header>

            <div id="page-content" class="row">
                <div id="region-main-box" class="col-xs-12">
                    <section id="region-main" class="has-blocks">
                        <div class="card card-block">
                            <span class="notifications" id="user-notifications"></span>
                            <div role="main"><span id="maincontent"></span>
                                <aside id="block-region-content" class="block-region" data-blockregion="content"
                                       data-droptarget="1"><a href="#sb-3" class="sr-only sr-only-focusable">Skip Try
                                        Moodle as a teacher</a>

                                    <span id="sb-3"></span><a href="#sb-4" class="sr-only sr-only-focusable">Skip Course
                                        overview</a>

                                    <aside id="inst248" class=" block block_myoverview  card m-b-1" role="complementary"
                                           data-block="myoverview" aria-labelledby="instance-248-header">

                                        <div class="card-block">


                                            <h3 id="instance-248-header" class="card-title">Course overview</h3>

                                            <div class="card-text content">
                                                <div id="block-myoverview-5ad3c64cd3d045ad3c64cc86722"
                                                     class="block-myoverview" data-region="myoverview">
                                                    <ul id="block-myoverview-view-choices-5ad3c64cd3d045ad3c64cc86722"
                                                        class="nav nav-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="#myoverview_timeline_view"
                                                               role="tab" data-toggle="tab" data-tabname="timeline">
                                                                Timeline
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="#myoverview_courses_view"
                                                               role="tab" data-toggle="tab" data-tabname="courses">
                                                                Courses
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content content-centred">
                                                        <div role="tabpanel" class="tab-pane fade in active"
                                                             id="myoverview_timeline_view">
                                                            <div id="timeline-view-5ad3c64cd3d045ad3c64cc86722"
                                                                 data-region="timeline-view">
                                                                <div class="row text-xs-center">
                                                                    <div class="btn-group m-t-2" role="group"
                                                                         data-toggle="btns">
                                                                        <a class="btn btn-default active"
                                                                           href="#myoverview_timeline_dates"
                                                                           data-toggle="tab">
                                                                            Sort by dates
                                                                        </a>
                                                                        <a class="btn btn-default"
                                                                           href="#myoverview_timeline_courses"
                                                                           data-toggle="tab">
                                                                            Sort by courses
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-content">
                                                                    <div class="tab-pane active fade in"
                                                                         id="myoverview_timeline_dates">
                                                                        <div data-region="timeline-view-dates"
                                                                             id="timeline-view-dates-5ad3c64cd3d045ad3c64cc86722">
                                                                            <div data-region="event-list-container"
                                                                                 data-limit="20" data-course-id=""
                                                                                 data-last-id="446"
                                                                                 data-midnight="1523746800"
                                                                                 id="event-list-container-" class=""
                                                                                 data-loaded-all="true"
                                                                                 data-has-events="true">

                                                                                <div data-region="event-list-content">
                                                                                    <div data-region="event-list-group-container"
                                                                                         data-start-day="-14"
                                                                                         data-end-day="0"
                                                                                         class="hidden">

                                                                                        <h5 class="h6 m-t-1 text-danger"
                                                                                            id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                            <strong>Recently
                                                                                                overdue</strong></h5>
                                                                                        <ul class="list-group unstyled"
                                                                                            data-region="event-list"
                                                                                            aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div data-region="event-list-group-container"
                                                                                         data-start-day="0"
                                                                                         data-end-day="1"
                                                                                         class="hidden">

                                                                                        <h5 class="h6 m-t-1 "
                                                                                            id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                            <strong>Today</strong></h5>
                                                                                        <ul class="list-group unstyled"
                                                                                            data-region="event-list"
                                                                                            aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div data-region="event-list-group-container"
                                                                                         data-start-day="1"
                                                                                         data-end-day="7"
                                                                                         class="hidden">

                                                                                        <h5 class="h6 m-t-1 "
                                                                                            id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                            <strong>Next 7 days</strong>
                                                                                        </h5>
                                                                                        <ul class="list-group unstyled"
                                                                                            data-region="event-list"
                                                                                            aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div data-region="event-list-group-container"
                                                                                         data-start-day="7"
                                                                                         data-end-day="30"
                                                                                         class="hidden">

                                                                                        <h5 class="h6 m-t-1 "
                                                                                            id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                            <strong>Next 30
                                                                                                days</strong></h5>
                                                                                        <ul class="list-group unstyled"
                                                                                            data-region="event-list"
                                                                                            aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div data-region="event-list-group-container"
                                                                                         data-start-day="30"
                                                                                         data-end-day="" class="">

                                                                                        <h5 class="h6 m-t-1 "
                                                                                            id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                            <strong>Future</strong></h5>
                                                                                        <ul class="list-group unstyled"
                                                                                            data-region="event-list"
                                                                                            aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722"
                                                                                            id="yui_3_17_2_1_1523828301733_39">
                                                                                            <li class="list-group-item event-list-item"
                                                                                                data-region="event-list-item">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                        <div class="d-inline-block icon-large event-icon">


                                                                                                            <img class="icon "
                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/lesson/1523822493/icon"
                                                                                                                 alt="Activity event"
                                                                                                                 title="Activity event">

                                                                                                        </div>
                                                                                                        <div class="d-inline-block event-name-container">
                                                                                                            <a class="event-name text-truncate"
                                                                                                               href="https://school.demo.moodle.net/mod/lesson/view.php?id=799">FOBO?
                                                                                                                Let us
                                                                                                                help you
                                                                                                                cure it!
                                                                                                                closes</a>
                                                                                                            <p class="small text-muted text-truncate m-b-0">
                                                                                                                Digital
                                                                                                                Literacy </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                                26 May,
                                                                                                                12:10
                                                                                                            </div>
                                                                                                            <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                                <a href="https://school.demo.moodle.net/mod/lesson/view.php?id=799">Start
                                                                                                                    lesson</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>


                                                                                            <li class="list-group-item event-list-item"
                                                                                                data-region="event-list-item">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                        <div class="d-inline-block icon-large event-icon">


                                                                                                            <img class="icon "
                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/lesson/1523822493/icon"
                                                                                                                 alt="Activity event"
                                                                                                                 title="Activity event">

                                                                                                        </div>
                                                                                                        <div class="d-inline-block event-name-container">
                                                                                                            <a class="event-name text-truncate"
                                                                                                               href="https://school.demo.moodle.net/mod/lesson/view.php?id=763">Can
                                                                                                                you make
                                                                                                                a
                                                                                                                revolution?
                                                                                                                closes</a>
                                                                                                            <p class="small text-muted text-truncate m-b-0">
                                                                                                                History:
                                                                                                                Russia
                                                                                                                in
                                                                                                                Revolution</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                                16 Aug,
                                                                                                                09:20
                                                                                                            </div>
                                                                                                            <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                                <a href="https://school.demo.moodle.net/mod/lesson/view.php?id=763">Start
                                                                                                                    lesson</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>


                                                                                            <li class="list-group-item event-list-item"
                                                                                                data-region="event-list-item">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                        <div class="d-inline-block icon-large event-icon">


                                                                                                            <img class="icon "
                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/assign/1523822493/icon"
                                                                                                                 alt="Activity event"
                                                                                                                 title="Activity event">

                                                                                                        </div>
                                                                                                        <div class="d-inline-block event-name-container">
                                                                                                            <a class="event-name text-truncate"
                                                                                                               href="https://school.demo.moodle.net/mod/assign/view.php?id=788">Assignment
                                                                                                                2
                                                                                                                (Upload)
                                                                                                                is due
                                                                                                                to be
                                                                                                                graded</a>
                                                                                                            <p class="small text-muted text-truncate m-b-0">
                                                                                                                Digital
                                                                                                                Literacy </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                                5 Sep,
                                                                                                                01:00
                                                                                                            </div>
                                                                                                            <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=788&amp;action=grader">Grade</a>
                                                                                                                <span class="tag tag-pill tag-default">1</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>


                                                                                            <li class="list-group-item event-list-item"
                                                                                                data-region="event-list-item">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                        <div class="d-inline-block icon-large event-icon">


                                                                                                            <img class="icon "
                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/workshop/1523822493/icon"
                                                                                                                 alt="Activity event"
                                                                                                                 title="Activity event">

                                                                                                        </div>
                                                                                                        <div class="d-inline-block event-name-container">
                                                                                                            <a class="event-name text-truncate"
                                                                                                               href="https://school.demo.moodle.net/mod/workshop/view.php?id=803">Workshop:
                                                                                                                Transmediation
                                                                                                                deadline
                                                                                                                for
                                                                                                                submissions</a>
                                                                                                            <p class="small text-muted text-truncate m-b-0">
                                                                                                                Digital
                                                                                                                Literacy </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                                21 Nov,
                                                                                                                10:00
                                                                                                            </div>
                                                                                                            <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                                <a href="https://school.demo.moodle.net/mod/workshop/view.php?id=803">View
                                                                                                                    workshop
                                                                                                                    summary</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>


                                                                                            <li class="list-group-item event-list-item"
                                                                                                data-region="event-list-item">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                        <div class="d-inline-block icon-large event-icon">


                                                                                                            <img class="icon "
                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/data/1523822493/icon"
                                                                                                                 alt="Activity event"
                                                                                                                 title="Activity event">

                                                                                                        </div>
                                                                                                        <div class="d-inline-block event-name-container">
                                                                                                            <a class="event-name text-truncate"
                                                                                                               href="https://school.demo.moodle.net/mod/data/view.php?id=649">Database:
                                                                                                                Food for
                                                                                                                Moodlers
                                                                                                                closes</a>
                                                                                                            <p class="small text-muted text-truncate m-b-0">
                                                                                                                Celebrating
                                                                                                                Cultures</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                                16 Feb,
                                                                                                                11:05
                                                                                                            </div>
                                                                                                            <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                                <a href="https://school.demo.moodle.net/mod/data/view.php?id=649">Add
                                                                                                                    entry</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>


                                                                                            <li class="list-group-item event-list-item"
                                                                                                data-region="event-list-item">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8 col-lg-6 col-xl-7">
                                                                                                        <div class="d-inline-block icon-large event-icon">


                                                                                                            <img class="icon "
                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/assign/1523822493/icon"
                                                                                                                 alt="Activity event"
                                                                                                                 title="Activity event">

                                                                                                        </div>
                                                                                                        <div class="d-inline-block event-name-container">
                                                                                                            <a class="event-name text-truncate"
                                                                                                               href="https://school.demo.moodle.net/mod/assign/view.php?id=775">(Mobile
                                                                                                                assignment)
                                                                                                                View
                                                                                                                from
                                                                                                                your
                                                                                                                window
                                                                                                                is due
                                                                                                                to be
                                                                                                                graded</a>
                                                                                                            <p class="small text-muted text-truncate m-b-0">
                                                                                                                Celebrating
                                                                                                                Cultures</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4 col-lg-6 col-xl-5">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-5 text-xs-right text-lg-left text-truncate">
                                                                                                                2 Mar,
                                                                                                                00:00
                                                                                                            </div>
                                                                                                            <div class="hidden-md-down col-lg-7 text-truncate">
                                                                                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=775&amp;action=grader">Grade</a>
                                                                                                                <span class="tag tag-pill tag-default">3</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>

                                                                                    <div class="text-xs-center text-center m-y-2">
                                                                                        <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-action="view-more"
                                                                                                disabled="">
                                                                                            View more
                                                                                            <span class="hidden"
                                                                                                  data-region="loading-icon-container">
                                        <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                                        src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
                                    </span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="hidden text-xs-center text-center m-t-3"
                                                                                     data-region="empty-message">
                                                                                    <img class="empty-placeholder-image-lg"
                                                                                         src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                         alt="No upcoming activities due"
                                                                                         role="presentation">
                                                                                    <p class="text-muted m-t-1">No
                                                                                        upcoming activities due</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade"
                                                                         id="myoverview_timeline_courses">
                                                                        <div id="sort-by-courses-view-5ad3c64cd3d045ad3c64cc86722">
                                                                            <ul class="list-group unstyled hidden"
                                                                                data-region="course-block">
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-66"
                                                                                         data-course-id="66">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-66">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    23%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                23%</title>
                                                                                                                            <circle class="circle percent-23"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=66"
                                                                                                               class="">Digital
                                                                                                                Literacy </a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    23%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                23%</title>
                                                                                                                            <circle class="circle percent-23"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=66"
                                                                                                               class="">Digital
                                                                                                                Literacy </a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="progress-doughnut">
                                                                                                                            <div class="progress-text has-percent">
                                                                                                                                23%
                                                                                                                            </div>
                                                                                                                            <div class="progress-indicator">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <g>
                                                                                                                                        <title aria-hidden="true">
                                                                                                                                            23%</title>
                                                                                                                                        <circle class="circle percent-23"
                                                                                                                                                r="27.5"
                                                                                                                                                cx="35"
                                                                                                                                                cy="35"></circle>
                                                                                                                                    </g>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=66"
                                                                                                                       class="">Digital
                                                                                                                        Literacy </a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        Introducing the
                                                                                                        concept of
                                                                                                        Digital
                                                                                                        Literacy.
                                                                                                        Optimised for
                                                                                                        mobile.
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="66"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-66">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=66"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course Digital Literacy ">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-62"
                                                                                         data-course-id="62">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-62">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    6%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                6%</title>
                                                                                                                            <circle class="circle percent-6"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=62"
                                                                                                               class="">Psychology
                                                                                                                in
                                                                                                                Cinema</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    6%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                6%</title>
                                                                                                                            <circle class="circle percent-6"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=62"
                                                                                                               class="">Psychology
                                                                                                                in
                                                                                                                Cinema</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="progress-doughnut">
                                                                                                                            <div class="progress-text has-percent">
                                                                                                                                6%
                                                                                                                            </div>
                                                                                                                            <div class="progress-indicator">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <g>
                                                                                                                                        <title aria-hidden="true">
                                                                                                                                            6%</title>
                                                                                                                                        <circle class="circle percent-6"
                                                                                                                                                r="27.5"
                                                                                                                                                cx="35"
                                                                                                                                                cy="35"></circle>
                                                                                                                                    </g>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=62"
                                                                                                                       class="">Psychology
                                                                                                                        in
                                                                                                                        Cinema</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        In this course
                                                                                                        we study three
                                                                                                        films: Spider, A
                                                                                                        Beautiful Mind,
                                                                                                        and Fight
                                                                                                        Club. The main
                                                                                                        focus of the
                                                                                                        course will be
                                                                                                        the ways in
                                                                                                        which ...
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="62"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-62">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=62"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course Psychology in Cinema">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-63"
                                                                                         data-course-id="63">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-63">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text ">
                                                                                                                    0%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                0%</title>
                                                                                                                            <circle class="circle percent-0"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=63"
                                                                                                               class="">The
                                                                                                                Impressionists</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text ">
                                                                                                                    0%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                0%</title>
                                                                                                                            <circle class="circle percent-0"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=63"
                                                                                                               class="">The
                                                                                                                Impressionists</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="progress-doughnut">
                                                                                                                            <div class="progress-text ">
                                                                                                                                0%
                                                                                                                            </div>
                                                                                                                            <div class="progress-indicator">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <g>
                                                                                                                                        <title aria-hidden="true">
                                                                                                                                            0%</title>
                                                                                                                                        <circle class="circle percent-0"
                                                                                                                                                r="27.5"
                                                                                                                                                cx="35"
                                                                                                                                                cy="35"></circle>
                                                                                                                                    </g>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=63"
                                                                                                                       class="">The
                                                                                                                        Impressionists</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        An introduction
                                                                                                        to the
                                                                                                        Impressionist
                                                                                                        movement in
                                                                                                        France, with
                                                                                                        students
                                                                                                        being allowed to
                                                                                                        select an artist
                                                                                                        to focus on for
                                                                                                        in-depth study.
                                                                                                        ...
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="63"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-63">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=63"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course The Impressionists">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-59"
                                                                                         data-course-id="59">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-59">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    10%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                10%</title>
                                                                                                                            <circle class="circle percent-10"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=59"
                                                                                                               class="">Celebrating
                                                                                                                Cultures</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    10%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                10%</title>
                                                                                                                            <circle class="circle percent-10"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=59"
                                                                                                               class="">Celebrating
                                                                                                                Cultures</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="progress-doughnut">
                                                                                                                            <div class="progress-text has-percent">
                                                                                                                                10%
                                                                                                                            </div>
                                                                                                                            <div class="progress-indicator">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <g>
                                                                                                                                        <title aria-hidden="true">
                                                                                                                                            10%</title>
                                                                                                                                        <circle class="circle percent-10"
                                                                                                                                                r="27.5"
                                                                                                                                                cx="35"
                                                                                                                                                cy="35"></circle>
                                                                                                                                    </g>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=59"
                                                                                                                       class="">Celebrating
                                                                                                                        Cultures</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        Mount Orange is
                                                                                                        proud to have in
                                                                                                        its community
                                                                                                        students,
                                                                                                        teachers,
                                                                                                        parents
                                                                                                        and helpers from
                                                                                                        a wide variety
                                                                                                        of different
                                                                                                        cultures. This
                                                                                                        ...
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="59"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-59">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=59"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course Celebrating Cultures">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-56"
                                                                                         data-course-id="56">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-56">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text ">
                                                                                                                    0%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                0%</title>
                                                                                                                            <circle class="circle percent-0"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=56"
                                                                                                               class="">History:
                                                                                                                Russia
                                                                                                                in
                                                                                                                Revolution</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text ">
                                                                                                                    0%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                0%</title>
                                                                                                                            <circle class="circle percent-0"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=56"
                                                                                                               class="">History:
                                                                                                                Russia
                                                                                                                in
                                                                                                                Revolution</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="progress-doughnut">
                                                                                                                            <div class="progress-text ">
                                                                                                                                0%
                                                                                                                            </div>
                                                                                                                            <div class="progress-indicator">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <g>
                                                                                                                                        <title aria-hidden="true">
                                                                                                                                            0%</title>
                                                                                                                                        <circle class="circle percent-0"
                                                                                                                                                r="27.5"
                                                                                                                                                cx="35"
                                                                                                                                                cy="35"></circle>
                                                                                                                                    </g>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=56"
                                                                                                                       class="">History:
                                                                                                                        Russia
                                                                                                                        in
                                                                                                                        Revolution</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        This course is
                                                                                                        designed for
                                                                                                        students
                                                                                                        studying Russian
                                                                                                        history. While
                                                                                                        it is
                                                                                                        aimed at British
                                                                                                        students working
                                                                                                        towards an
                                                                                                        examination, the
                                                                                                        ...
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="56"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-56">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=56"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course History: Russia in Revolution">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-35"
                                                                                         data-course-id="35">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-35">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    13%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                13%</title>
                                                                                                                            <circle class="circle percent-13"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=35"
                                                                                                               class="">World
                                                                                                                of
                                                                                                                Water</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    13%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                13%</title>
                                                                                                                            <circle class="circle percent-13"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=35"
                                                                                                               class="">World
                                                                                                                of
                                                                                                                Water</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="progress-doughnut">
                                                                                                                            <div class="progress-text has-percent">
                                                                                                                                13%
                                                                                                                            </div>
                                                                                                                            <div class="progress-indicator">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <g>
                                                                                                                                        <title aria-hidden="true">
                                                                                                                                            13%</title>
                                                                                                                                        <circle class="circle percent-13"
                                                                                                                                                r="27.5"
                                                                                                                                                cx="35"
                                                                                                                                                cy="35"></circle>
                                                                                                                                    </g>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=35"
                                                                                                                       class="">World
                                                                                                                        of
                                                                                                                        Water</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        We all need
                                                                                                        water! Let's
                                                                                                        look at things
                                                                                                        we are doing
                                                                                                        well and not so
                                                                                                        well
                                                                                                        in managing this
                                                                                                        precious
                                                                                                        resource.

                                                                                                        Ages 11-adult

                                                                                                        Moodle.net ...
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="35"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-35">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=35"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course World of Water">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                            <ul class="list-group unstyled hidden"
                                                                                data-region="course-block">
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-49"
                                                                                         data-course-id="49">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-49">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    6%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                6%</title>
                                                                                                                            <circle class="circle percent-6"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=49"
                                                                                                               class="">Pilgrimage</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text has-percent">
                                                                                                                    6%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                6%</title>
                                                                                                                            <circle class="circle percent-6"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=49"
                                                                                                               class="">Pilgrimage</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="progress-doughnut">
                                                                                                                            <div class="progress-text has-percent">
                                                                                                                                6%
                                                                                                                            </div>
                                                                                                                            <div class="progress-indicator">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <g>
                                                                                                                                        <title aria-hidden="true">
                                                                                                                                            6%</title>
                                                                                                                                        <circle class="circle percent-6"
                                                                                                                                                r="27.5"
                                                                                                                                                cx="35"
                                                                                                                                                cy="35"></circle>
                                                                                                                                    </g>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=49"
                                                                                                                       class="">Pilgrimage</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        This course in
                                                                                                        &nbsp;Religious
                                                                                                        Education
                                                                                                        studird the
                                                                                                        concept of
                                                                                                        pilgrimage. It
                                                                                                        includes forums
                                                                                                        for reflection
                                                                                                        on the wider
                                                                                                        meaning and ...
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="49"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-49">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=49"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course Pilgrimage">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-64"
                                                                                         data-course-id="64">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-64">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text ">
                                                                                                                    0%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                0%</title>
                                                                                                                            <circle class="circle percent-0"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=64"
                                                                                                               class="">New
                                                                                                                staff
                                                                                                                induction</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text ">
                                                                                                                    0%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                0%</title>
                                                                                                                            <circle class="circle percent-0"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=64"
                                                                                                               class="">New
                                                                                                                staff
                                                                                                                induction</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="progress-doughnut">
                                                                                                                            <div class="progress-text ">
                                                                                                                                0%
                                                                                                                            </div>
                                                                                                                            <div class="progress-indicator">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <g>
                                                                                                                                        <title aria-hidden="true">
                                                                                                                                            0%</title>
                                                                                                                                        <circle class="circle percent-0"
                                                                                                                                                r="27.5"
                                                                                                                                                cx="35"
                                                                                                                                                cy="35"></circle>
                                                                                                                                    </g>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=64"
                                                                                                                       class="">New
                                                                                                                        staff
                                                                                                                        induction</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">

                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="64"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-64">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=64"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course New staff induction">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-27"
                                                                                         data-course-id="27">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-27">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="no-progress">
                                                                                                                <img class="icon "
                                                                                                                     alt=""
                                                                                                                     src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=27"
                                                                                                               class="">Parents
                                                                                                                and
                                                                                                                Citizens
                                                                                                                Council</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="no-progress">
                                                                                                                <img class="icon "
                                                                                                                     alt=""
                                                                                                                     src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=27"
                                                                                                               class="">Parents
                                                                                                                and
                                                                                                                Citizens
                                                                                                                Council</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="no-progress">
                                                                                                                            <img class="icon "
                                                                                                                                 alt=""
                                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=27"
                                                                                                                       class="">Parents
                                                                                                                        and
                                                                                                                        Citizens
                                                                                                                        Council</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        A space for
                                                                                                        members of
                                                                                                        Parents and
                                                                                                        Citizens
                                                                                                        council, an
                                                                                                        important part
                                                                                                        of
                                                                                                        our school
                                                                                                        community.
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="27"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-27">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=27"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course Parents and Citizens Council">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-41"
                                                                                         data-course-id="41">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-41">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text ">
                                                                                                                    0%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                0%</title>
                                                                                                                            <circle class="circle percent-0"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=41"
                                                                                                               class="">Staffroom</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="progress-doughnut">
                                                                                                                <div class="progress-text ">
                                                                                                                    0%
                                                                                                                </div>
                                                                                                                <div class="progress-indicator">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <g>
                                                                                                                            <title aria-hidden="true">
                                                                                                                                0%</title>
                                                                                                                            <circle class="circle percent-0"
                                                                                                                                    r="27.5"
                                                                                                                                    cx="35"
                                                                                                                                    cy="35"></circle>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=41"
                                                                                                               class="">Staffroom</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="progress-doughnut">
                                                                                                                            <div class="progress-text ">
                                                                                                                                0%
                                                                                                                            </div>
                                                                                                                            <div class="progress-indicator">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <g>
                                                                                                                                        <title aria-hidden="true">
                                                                                                                                            0%</title>
                                                                                                                                        <circle class="circle percent-0"
                                                                                                                                                r="27.5"
                                                                                                                                                cx="35"
                                                                                                                                                cy="35"></circle>
                                                                                                                                    </g>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=41"
                                                                                                                       class="">Staffroom</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        A space for
                                                                                                        staff only - not
                                                                                                        normally
                                                                                                        accessible to
                                                                                                        students.

                                                                                                        Important
                                                                                                        professional
                                                                                                        news, updates,
                                                                                                        documents as
                                                                                                        well as social
                                                                                                        ...
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="41"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-41">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=41"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course Staffroom">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item m-y-1">
                                                                                    <div data-region="course-events-container"
                                                                                         id="course-events-container-38"
                                                                                         data-course-id="38">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-3">
                                                                                                <div class="course-info-container"
                                                                                                     id="course-info-container-38">
                                                                                                    <div class="hidden-sm-up hidden-tablet hidden-phone">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="no-progress">
                                                                                                                <img class="icon "
                                                                                                                     alt=""
                                                                                                                     src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=38"
                                                                                                               class="">Moodle
                                                                                                                History
                                                                                                                Quiz</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-sm-down hidden-tablet hidden-desktop">
                                                                                                        <div class="progress-chart-container m-b-1">
                                                                                                            <div class="no-progress">
                                                                                                                <img class="icon "
                                                                                                                     alt=""
                                                                                                                     src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h4 class="h5">
                                                                                                            <a href="https://school.demo.moodle.net/course/view.php?id=38"
                                                                                                               class="">Moodle
                                                                                                                History
                                                                                                                Quiz</a>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div class="hidden-xs-down hidden-md-up visible-tablet">
                                                                                                        <div class="media">
                                                                                                            <div class="media-left">
                                                                                                                <div class="media-object">
                                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                                        <div class="no-progress">
                                                                                                                            <img class="icon "
                                                                                                                                 alt=""
                                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="media-body">
                                                                                                                <h4 class="h5">
                                                                                                                    <a href="https://school.demo.moodle.net/course/view.php?id=38"
                                                                                                                       class="">Moodle
                                                                                                                        History
                                                                                                                        Quiz</a>
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <p class="text-muted">
                                                                                                        This is an
                                                                                                        example of the
                                                                                                        Single activity
                                                                                                        course format.
                                                                                                        It only displays
                                                                                                        one activity,
                                                                                                        which in this
                                                                                                        case is a Quiz,
                                                                                                        allowing the ...
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <div data-region="event-list-container"
                                                                                                     data-limit="10"
                                                                                                     data-course-id="38"
                                                                                                     data-last-id=""
                                                                                                     data-midnight="1523746800"
                                                                                                     id="event-list-container-38">

                                                                                                    <div data-region="event-list-content">
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="-14"
                                                                                                             data-end-day="0"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 text-danger"
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Recently
                                                                                                                    overdue</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="0"
                                                                                                             data-end-day="1"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Today</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="1"
                                                                                                             data-end-day="7"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    7
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="7"
                                                                                                             data-end-day="30"
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Next
                                                                                                                    30
                                                                                                                    days</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div data-region="event-list-group-container"
                                                                                                             data-start-day="30"
                                                                                                             data-end-day=""
                                                                                                             class="hidden">

                                                                                                            <h5 class="h6 m-t-1 "
                                                                                                                id="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                                <strong>Future</strong>
                                                                                                            </h5>
                                                                                                            <ul class="list-group unstyled"
                                                                                                                data-region="event-list"
                                                                                                                aria-describedby="event-list-title-5ad3c64cd3d045ad3c64cc86722">
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                        <div class="text-xs-center text-center m-y-2">
                                                                                                            <button type="button"
                                                                                                                    class="btn btn-secondary"
                                                                                                                    data-action="view-more">
                                                                                                                View
                                                                                                                more
                                                                                                                <span class="hidden"
                                                                                                                      data-region="loading-icon-container">
                <span class="loading-icon"><img class="icon " alt="Loading" title="Loading"
                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
            </span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hidden text-xs-center text-center m-y-3"
                                                                                                         data-region="empty-message">
                                                                                                        <img class="empty-placeholder-image-sm"
                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/activities"
                                                                                                             alt="No upcoming activities due"
                                                                                                             role="presentation">
                                                                                                        <p class="text-muted m-t-1">
                                                                                                            No upcoming
                                                                                                            activities
                                                                                                            due</p>
                                                                                                        <a href="https://school.demo.moodle.net/course/view.php?id=38"
                                                                                                           class="btn btn-secondary text-primary"
                                                                                                           aria-label="View course Moodle History Quiz">
                                                                                                            View course
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                            <div class="text-xs-center text-center m-t-1">
                                                                                <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-action="more-courses">
                                                                                    More courses
                                                                                    <span class="hidden"
                                                                                          data-region="loading-icon-container">
                                                <span class="loading-icon"><img class="icon " alt="Loading"
                                                                                title="Loading"
                                                                                src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/y/loading"></span>
                                            </span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane fade "
                                                             id="myoverview_courses_view">
                                                            <div id="courses-view-5ad3c64cd3d045ad3c64cc86722"
                                                                 data-region="courses-view">
                                                                <div class="text-xs-center text-center">
                                                                    <div class="btn-group m-y-2" role="group"
                                                                         data-toggle="btns">
                                                                        <a class="btn btn-default active"
                                                                           href="#myoverview_courses_view_in_progress"
                                                                           data-toggle="tab">
                                                                            In progress
                                                                        </a>
                                                                        <a class="btn btn-default"
                                                                           href="#myoverview_courses_view_future"
                                                                           data-toggle="tab">
                                                                            Future
                                                                        </a>
                                                                        <a class="btn btn-default"
                                                                           href="#myoverview_courses_view_past"
                                                                           data-toggle="tab">
                                                                            Past
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active fade in"
                                                                         id="myoverview_courses_view_in_progress">
                                                                        <div id="courses-view-in-progress"
                                                                             data-status="1">

                                                                            <div id="pc-for-in-progress"
                                                                                 data-region="paging-content">
                                                                                <div data-region="paging-content-item"
                                                                                     data-page="1" class=" row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-66">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="progress-doughnut">
                                                                                                            <div class="progress-text has-percent">
                                                                                                                23%
                                                                                                            </div>
                                                                                                            <div class="progress-indicator">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <g>
                                                                                                                        <title aria-hidden="true">
                                                                                                                            23%</title>
                                                                                                                        <circle class="circle percent-23"
                                                                                                                                r="27.5"
                                                                                                                                cx="35"
                                                                                                                                cy="35"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=66"
                                                                                                                class="">Digital
                                                                                                            Literacy </a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="progress-doughnut">
                                                                                                                        <div class="progress-text has-percent">
                                                                                                                            23%
                                                                                                                        </div>
                                                                                                                        <div class="progress-indicator">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <g>
                                                                                                                                    <title aria-hidden="true">
                                                                                                                                        23%</title>
                                                                                                                                    <circle class="circle percent-23"
                                                                                                                                            r="27.5"
                                                                                                                                            cx="35"
                                                                                                                                            cy="35"></circle>
                                                                                                                                </g>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=66"
                                                                                                                   class="">Digital
                                                                                                                    Literacy </a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    Introducing the
                                                                                                    concept of Digital
                                                                                                    Literacy. Optimised
                                                                                                    for mobile.
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-62">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="progress-doughnut">
                                                                                                            <div class="progress-text has-percent">
                                                                                                                6%
                                                                                                            </div>
                                                                                                            <div class="progress-indicator">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <g>
                                                                                                                        <title aria-hidden="true">
                                                                                                                            6%</title>
                                                                                                                        <circle class="circle percent-6"
                                                                                                                                r="27.5"
                                                                                                                                cx="35"
                                                                                                                                cy="35"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=62"
                                                                                                                class="">Psychology
                                                                                                            in
                                                                                                            Cinema</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="progress-doughnut">
                                                                                                                        <div class="progress-text has-percent">
                                                                                                                            6%
                                                                                                                        </div>
                                                                                                                        <div class="progress-indicator">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <g>
                                                                                                                                    <title aria-hidden="true">
                                                                                                                                        6%</title>
                                                                                                                                    <circle class="circle percent-6"
                                                                                                                                            r="27.5"
                                                                                                                                            cx="35"
                                                                                                                                            cy="35"></circle>
                                                                                                                                </g>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=62"
                                                                                                                   class="">Psychology
                                                                                                                    in
                                                                                                                    Cinema</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    In this course we
                                                                                                    study three films:
                                                                                                    Spider, A Beautiful
                                                                                                    Mind, and Fight
                                                                                                    Club. The main focus
                                                                                                    of the course will
                                                                                                    be the ways in which
                                                                                                    ...
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-63">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="progress-doughnut">
                                                                                                            <div class="progress-text ">
                                                                                                                0%
                                                                                                            </div>
                                                                                                            <div class="progress-indicator">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <g>
                                                                                                                        <title aria-hidden="true">
                                                                                                                            0%</title>
                                                                                                                        <circle class="circle percent-0"
                                                                                                                                r="27.5"
                                                                                                                                cx="35"
                                                                                                                                cy="35"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=63"
                                                                                                                class="">The
                                                                                                            Impressionists</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="progress-doughnut">
                                                                                                                        <div class="progress-text ">
                                                                                                                            0%
                                                                                                                        </div>
                                                                                                                        <div class="progress-indicator">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <g>
                                                                                                                                    <title aria-hidden="true">
                                                                                                                                        0%</title>
                                                                                                                                    <circle class="circle percent-0"
                                                                                                                                            r="27.5"
                                                                                                                                            cx="35"
                                                                                                                                            cy="35"></circle>
                                                                                                                                </g>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=63"
                                                                                                                   class="">The
                                                                                                                    Impressionists</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    An introduction to
                                                                                                    the Impressionist
                                                                                                    movement in France,
                                                                                                    with students
                                                                                                    being allowed to
                                                                                                    select an artist to
                                                                                                    focus on for
                                                                                                    in-depth study. ...
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-59">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="progress-doughnut">
                                                                                                            <div class="progress-text has-percent">
                                                                                                                10%
                                                                                                            </div>
                                                                                                            <div class="progress-indicator">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <g>
                                                                                                                        <title aria-hidden="true">
                                                                                                                            10%</title>
                                                                                                                        <circle class="circle percent-10"
                                                                                                                                r="27.5"
                                                                                                                                cx="35"
                                                                                                                                cy="35"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=59"
                                                                                                                class="">Celebrating
                                                                                                            Cultures</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="progress-doughnut">
                                                                                                                        <div class="progress-text has-percent">
                                                                                                                            10%
                                                                                                                        </div>
                                                                                                                        <div class="progress-indicator">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <g>
                                                                                                                                    <title aria-hidden="true">
                                                                                                                                        10%</title>
                                                                                                                                    <circle class="circle percent-10"
                                                                                                                                            r="27.5"
                                                                                                                                            cx="35"
                                                                                                                                            cy="35"></circle>
                                                                                                                                </g>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=59"
                                                                                                                   class="">Celebrating
                                                                                                                    Cultures</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    Mount Orange is
                                                                                                    proud to have in its
                                                                                                    community students,
                                                                                                    teachers, parents
                                                                                                    and helpers from a
                                                                                                    wide variety of
                                                                                                    different cultures.
                                                                                                    This ...
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-56">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="progress-doughnut">
                                                                                                            <div class="progress-text ">
                                                                                                                0%
                                                                                                            </div>
                                                                                                            <div class="progress-indicator">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <g>
                                                                                                                        <title aria-hidden="true">
                                                                                                                            0%</title>
                                                                                                                        <circle class="circle percent-0"
                                                                                                                                r="27.5"
                                                                                                                                cx="35"
                                                                                                                                cy="35"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=56"
                                                                                                                class="">History:
                                                                                                            Russia in
                                                                                                            Revolution</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="progress-doughnut">
                                                                                                                        <div class="progress-text ">
                                                                                                                            0%
                                                                                                                        </div>
                                                                                                                        <div class="progress-indicator">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <g>
                                                                                                                                    <title aria-hidden="true">
                                                                                                                                        0%</title>
                                                                                                                                    <circle class="circle percent-0"
                                                                                                                                            r="27.5"
                                                                                                                                            cx="35"
                                                                                                                                            cy="35"></circle>
                                                                                                                                </g>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=56"
                                                                                                                   class="">History:
                                                                                                                    Russia
                                                                                                                    in
                                                                                                                    Revolution</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    This course is
                                                                                                    designed for
                                                                                                    students studying
                                                                                                    Russian history.
                                                                                                    While it is
                                                                                                    aimed at British
                                                                                                    students working
                                                                                                    towards an
                                                                                                    examination, the ...
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-35">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="progress-doughnut">
                                                                                                            <div class="progress-text has-percent">
                                                                                                                13%
                                                                                                            </div>
                                                                                                            <div class="progress-indicator">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <g>
                                                                                                                        <title aria-hidden="true">
                                                                                                                            13%</title>
                                                                                                                        <circle class="circle percent-13"
                                                                                                                                r="27.5"
                                                                                                                                cx="35"
                                                                                                                                cy="35"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=35"
                                                                                                                class="">World
                                                                                                            of Water</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="progress-doughnut">
                                                                                                                        <div class="progress-text has-percent">
                                                                                                                            13%
                                                                                                                        </div>
                                                                                                                        <div class="progress-indicator">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <g>
                                                                                                                                    <title aria-hidden="true">
                                                                                                                                        13%</title>
                                                                                                                                    <circle class="circle percent-13"
                                                                                                                                            r="27.5"
                                                                                                                                            cx="35"
                                                                                                                                            cy="35"></circle>
                                                                                                                                </g>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=35"
                                                                                                                   class="">World
                                                                                                                    of
                                                                                                                    Water</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    We all need water!
                                                                                                    Let's look at things
                                                                                                    we are doing well
                                                                                                    and not so well
                                                                                                    in managing this
                                                                                                    precious resource.

                                                                                                    Ages 11-adult

                                                                                                    Moodle.net ...
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div data-region="paging-content-item"
                                                                                     data-page="2" class="hidden row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-49">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="progress-doughnut">
                                                                                                            <div class="progress-text has-percent">
                                                                                                                6%
                                                                                                            </div>
                                                                                                            <div class="progress-indicator">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <g>
                                                                                                                        <title aria-hidden="true">
                                                                                                                            6%</title>
                                                                                                                        <circle class="circle percent-6"
                                                                                                                                r="27.5"
                                                                                                                                cx="35"
                                                                                                                                cy="35"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=49"
                                                                                                                class="">Pilgrimage</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="progress-doughnut">
                                                                                                                        <div class="progress-text has-percent">
                                                                                                                            6%
                                                                                                                        </div>
                                                                                                                        <div class="progress-indicator">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <g>
                                                                                                                                    <title aria-hidden="true">
                                                                                                                                        6%</title>
                                                                                                                                    <circle class="circle percent-6"
                                                                                                                                            r="27.5"
                                                                                                                                            cx="35"
                                                                                                                                            cy="35"></circle>
                                                                                                                                </g>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=49"
                                                                                                                   class="">Pilgrimage</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    This course in
                                                                                                    &nbsp;Religious
                                                                                                    Education studird
                                                                                                    the concept of
                                                                                                    pilgrimage. It
                                                                                                    includes forums for
                                                                                                    reflection on the
                                                                                                    wider meaning and
                                                                                                    ...
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-64">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="progress-doughnut">
                                                                                                            <div class="progress-text ">
                                                                                                                0%
                                                                                                            </div>
                                                                                                            <div class="progress-indicator">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <g>
                                                                                                                        <title aria-hidden="true">
                                                                                                                            0%</title>
                                                                                                                        <circle class="circle percent-0"
                                                                                                                                r="27.5"
                                                                                                                                cx="35"
                                                                                                                                cy="35"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=64"
                                                                                                                class="">New
                                                                                                            staff
                                                                                                            induction</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="progress-doughnut">
                                                                                                                        <div class="progress-text ">
                                                                                                                            0%
                                                                                                                        </div>
                                                                                                                        <div class="progress-indicator">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <g>
                                                                                                                                    <title aria-hidden="true">
                                                                                                                                        0%</title>
                                                                                                                                    <circle class="circle percent-0"
                                                                                                                                            r="27.5"
                                                                                                                                            cx="35"
                                                                                                                                            cy="35"></circle>
                                                                                                                                </g>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=64"
                                                                                                                   class="">New
                                                                                                                    staff
                                                                                                                    induction</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">

                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-27">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon "
                                                                                                                 alt=""
                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=27"
                                                                                                                class="">Parents
                                                                                                            and Citizens
                                                                                                            Council</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="no-progress">
                                                                                                                        <img class="icon "
                                                                                                                             alt=""
                                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=27"
                                                                                                                   class="">Parents
                                                                                                                    and
                                                                                                                    Citizens
                                                                                                                    Council</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    A space for members
                                                                                                    of Parents and
                                                                                                    Citizens council, an
                                                                                                    important part of
                                                                                                    our school
                                                                                                    community.
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-41">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="progress-doughnut">
                                                                                                            <div class="progress-text ">
                                                                                                                0%
                                                                                                            </div>
                                                                                                            <div class="progress-indicator">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <g>
                                                                                                                        <title aria-hidden="true">
                                                                                                                            0%</title>
                                                                                                                        <circle class="circle percent-0"
                                                                                                                                r="27.5"
                                                                                                                                cx="35"
                                                                                                                                cy="35"></circle>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=41"
                                                                                                                class="">Staffroom</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="progress-doughnut">
                                                                                                                        <div class="progress-text ">
                                                                                                                            0%
                                                                                                                        </div>
                                                                                                                        <div class="progress-indicator">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <g>
                                                                                                                                    <title aria-hidden="true">
                                                                                                                                        0%</title>
                                                                                                                                    <circle class="circle percent-0"
                                                                                                                                            r="27.5"
                                                                                                                                            cx="35"
                                                                                                                                            cy="35"></circle>
                                                                                                                                </g>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=41"
                                                                                                                   class="">Staffroom</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    A space for staff
                                                                                                    only - not normally
                                                                                                    accessible to
                                                                                                    students.

                                                                                                    Important
                                                                                                    professional news,
                                                                                                    updates, documents
                                                                                                    as well as social
                                                                                                    ...
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-38">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon "
                                                                                                                 alt=""
                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=38"
                                                                                                                class="">Moodle
                                                                                                            History
                                                                                                            Quiz</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="no-progress">
                                                                                                                        <img class="icon "
                                                                                                                             alt=""
                                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=38"
                                                                                                                   class="">Moodle
                                                                                                                    History
                                                                                                                    Quiz</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    This is an example
                                                                                                    of the Single
                                                                                                    activity course
                                                                                                    format. It only
                                                                                                    displays
                                                                                                    one activity, which
                                                                                                    in this case is a
                                                                                                    Quiz, allowing the
                                                                                                    ...
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="text-xs-center text-center">
                                                                                <nav aria-label=""
                                                                                     id="pb-for-in-progress"
                                                                                     data-region="paging-bar"
                                                                                     data-page-count="2">

                                                                                    <ul class="pagination">
                                                                                        <li class="page-item  "
                                                                                            data-region="page-item"
                                                                                            data-page-number="first">

                                                                                            <a href="#"
                                                                                               class="page-link"
                                                                                               data-region="page-link">
                                                                                                «
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="page-item active "
                                                                                            data-region="page-item"
                                                                                            data-page-number="1">

                                                                                            <a href="#"
                                                                                               class="page-link"
                                                                                               data-region="page-link">
                                                                                                1
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="page-item  "
                                                                                            data-region="page-item"
                                                                                            data-page-number="2">

                                                                                            <a href="#"
                                                                                               class="page-link"
                                                                                               data-region="page-link">
                                                                                                2
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="page-item  "
                                                                                            data-region="page-item"
                                                                                            data-page-number="last">

                                                                                            <a href="#"
                                                                                               class="page-link"
                                                                                               data-region="page-link">
                                                                                                »
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </nav>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade"
                                                                         id="myoverview_courses_view_future">
                                                                        <div class="text-xs-center text-center m-t-3">
                                                                            <img class="empty-placeholder-image-lg"
                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/block_myoverview/1523822493/courses"
                                                                                 alt="No future courses"
                                                                                 role="presentation">
                                                                            <p class="text-muted m-t-1">No future
                                                                                courses</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade"
                                                                         id="myoverview_courses_view_past">
                                                                        <div id="courses-view-past" data-status="0">

                                                                            <div id="pc-for-in-progress"
                                                                                 data-region="paging-content">
                                                                                <div data-region="paging-content-item"
                                                                                     data-page="1" class=" row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card m-b-1 courses-view-course-item">
                                                                                            <div class="card-block course-info-container"
                                                                                                 id="course-info-container-51">
                                                                                                <div class="hidden-sm-up hidden-phone">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon "
                                                                                                                 alt=""
                                                                                                                 src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="h5"><a
                                                                                                                href="https://school.demo.moodle.net/course/view.php?id=51"
                                                                                                                class="">
                                                                                                            Moodle and
                                                                                                            Mountaineering</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="hidden-xs-down visible-phone">
                                                                                                    <div class="media">
                                                                                                        <div class="media-left">
                                                                                                            <div class="media-object">
                                                                                                                <div class="progress-chart-container m-b-1">
                                                                                                                    <div class="no-progress">
                                                                                                                        <img class="icon "
                                                                                                                             alt=""
                                                                                                                             src="https://school.demo.moodle.net/theme/image.php/boost/core/1523822493/i/course">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="media-body">
                                                                                                            <h4 class="h5">
                                                                                                                <a href="https://school.demo.moodle.net/course/view.php?id=51"
                                                                                                                   class="">
                                                                                                                    Moodle
                                                                                                                    and
                                                                                                                    Mountaineering</a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="text-muted">
                                                                                                    This course is for
                                                                                                    senior students
                                                                                                    planning an ascent
                                                                                                    of Mont Blanc in
                                                                                                    July. It is also
                                                                                                    designed to take
                                                                                                    Moodle newbies
                                                                                                    through a number ...
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="text-xs-center text-center">
                                                                                <nav aria-label="" id="pb-for-past"
                                                                                     data-region="paging-bar"
                                                                                     data-page-count="1">

                                                                                    <ul class="pagination">
                                                                                        <li class="page-item  disabled"
                                                                                            data-region="page-item"
                                                                                            data-page-number="first">

                                                                                            <a href="#"
                                                                                               class="page-link"
                                                                                               data-region="page-link">
                                                                                                «
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="page-item active disabled"
                                                                                            data-region="page-item"
                                                                                            data-page-number="1">

                                                                                            <a href="#"
                                                                                               class="page-link"
                                                                                               data-region="page-link">
                                                                                                1
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="page-item  disabled"
                                                                                            data-region="page-item"
                                                                                            data-page-number="last">

                                                                                            <a href="#"
                                                                                               class="page-link"
                                                                                               data-region="page-link">
                                                                                                »
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </nav>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer"></div>

                                            </div>

                                        </div>

                                    </aside>

                                    <span id="sb-4"></span></aside>
                            </div>


                        </div>
                    </section>
                    <section data-region="blocks-column" class="hidden-print">
                        <aside id="block-region-side-pre" class="block-region" data-blockregion="side-pre"
                               data-droptarget="1"><a href="#sb-1" class="sr-only sr-only-focusable">Skip Online
                                users</a>

                            <aside id="inst247" class=" block block_online_users  card m-b-1" role="complementary"
                                   data-block="online_users" aria-labelledby="instance-247-header">

                                <div class="card-block">


                                    <h3 id="instance-247-header" class="card-title">Online users</h3>

                                    <div class="card-text content">
                                        <div class="info">(last 5 minutes: 1)</div>
                                        <ul class="list">
                                            <li class="listentry">
                                                <div class="user"><a
                                                            href="https://school.demo.moodle.net/user/view.php?id=13&amp;course=1"
                                                            title="now"><img
                                                                src="https://school.demo.moodle.net/pluginfile.php/160/user/icon/boost/f2?rev=1"
                                                                alt="" title="" class="userpicture" width="16"
                                                                height="16">{{ Auth::user()->full_name }}</a></div>
                                            </li>
                                        </ul>
                                        <div class="clearer"><!-- --></div>
                                        <div class="footer"></div>

                                    </div>

                                </div>

                            </aside>

                            <span id="sb-1"></span><a href="#sb-2" class="sr-only sr-only-focusable">Skip Latest
                                announcements</a>

                            <aside id="inst278" class=" block block_news_items  card m-b-1" role="complementary"
                                   data-block="news_items" aria-labelledby="instance-278-header">

                                <div class="card-block">


                                    <h3 id="instance-278-header" class="card-title">Latest announcements</h3>

                                    <div class="card-text content">

                                        <ul class="unlist">
                                            <li class="post">
                                                <div class="head clearfix">
                                                    <div class="date">8 Jan, 12:57</div>
                                                    <div class="name">Anna Alexander</div>
                                                </div>
                                                <div class="info"><a
                                                            href="https://school.demo.moodle.net/mod/forum/discuss.php?d=176">Try
                                                        the new features of Moodle 3.4 on Mount Orange!</a></div>
                                            </li>
                                            <li class="post">
                                                <div class="head clearfix">
                                                    <div class="date">29 May, 11:34</div>
                                                    <div class="name">Anna Alexander</div>
                                                </div>
                                                <div class="info"><a
                                                            href="https://school.demo.moodle.net/mod/forum/discuss.php?d=174">Mount
                                                        Orange is using Moodle 3.3!</a></div>
                                            </li>
                                            <li class="post">
                                                <div class="head clearfix">
                                                    <div class="date">17 Feb, 09:44</div>
                                                    <div class="name">Anna Alexander</div>
                                                </div>
                                                <div class="info"><a
                                                            href="https://school.demo.moodle.net/mod/forum/discuss.php?d=170">Mount
                                                        Orange is running Moodle 3.2!</a></div>
                                            </li>
                                        </ul>

                                        <div class="footer"><a
                                                    href="https://school.demo.moodle.net/mod/forum/view.php?f=17">Older
                                                topics</a> ...
                                        </div>

                                    </div>

                                </div>

                            </aside>

                            <span id="sb-2"></span></aside>
                    </section>
                </div>
            </div>
        </div>
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
    <main class="">
        @yield('content')
    </main>
</div>
</body>
</html>
