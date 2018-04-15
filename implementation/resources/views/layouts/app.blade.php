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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
       .navbar a:hover{
            background-color: #103050!important;
        }
    </style>
</head>
<body>
    <div id="app">
        @if (Auth::guest())

        @else
        <nav style="background: none repeat scroll 0% 0% #103050; border-color:#103050; font-weight: bold" class="navbar navbar-expand-md navbar-light navbar-laravel">
<!--            <div class="container">-->
                <a style=" color: white" class="navbar-brand" href="{{ url('/') }}">
                    <img style="width: 80px" src="http://moodle.hust.edu.vn/theme/image.php/klass/theme/1484300353/home/logo"/>
                    {{ config('app.name', 'Moodle') }}
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <input style="width: 500px; border-radius: 4px" placeholder="search" type="search" >
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a style=" color: white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hello {{ Auth::user()->full_name }} <span class="caret"></span>
                                </a>

                                <div style="left: -50px; background: none repeat scroll 0% 0% #103050; border-color:#103050;" class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a style="color: white" class="dropdown-item" href="{{route('profile')}}">
                                        {{__('View Profile')}}
                                    </a>

                                    <a style="color: white" class="dropdown-item" href="{{route('edit_profile')}}">
                                        {{__('Edit Profile')}}
                                    </a>

                                    <a style="color: white" class="dropdown-item" href="#">
                                        {{__('Change Password')}}
                                    </a>

                                    <a style="color: white" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                        @endguest
                    </ul>
                </div>
<!--            </div>-->
        </nav>
        @endif
        <main class="">
            @yield('content')
        </main>
    </div>
</body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
@yield('js')

</html>
