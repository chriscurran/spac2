<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('header')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                            <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container spac-container">
            <div class="row">

                <div class="col-md-2 spac-menu">
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <ul class="nav navbar-nav spac-menu-items">
                          <li class="active"><a href="{{ url('/') }}">Home</a></li>
                          <li><a href="/about">About</a></li>
                          <li><a href="http://telescopelab.com/" target="_blank">Mirror Lab</a></li>
                          <li><hr></li>
                          <li><a href="/newsletter">Newsletters</a></li>
                          <li><a href="/membership">Membership</a></li>
                          <li><a href="http://www.cafepress.com/spac_online" target="_blank">Club Apparel</a></li>
                          <li><a href="/memberResources">Resources</a></li>
                          <li><hr></li>
                          <li><a href="/calendar">Calendar</a></li>
                          <li><a href="/viewing">Star Parties</a></li>
                          <li><a href="/obs">OBS Star Party</a></li>
                          <li><hr></li>
                          <!-- <li><a href="https://nightsky.jpl.nasa.gov/club-view.cfm?Club_ID=318" target="_blank">Night&nbsp;Sky Network</a></li> -->
                          <li><a href="http://www.sciencecenterofpinellas.org/eic" target="_blank">Science Center</a></li>
                          <li><a href="/contact">Contact Us</a></li>

                        @if (!Auth::guest() && Auth::user()->isMember())
                            <li><hr></li>
                            <li><a href="/members">Members Only</a></li>
                        @endif

                        @if (!Auth::guest() && Auth::user()->isAdmin())
                            <li><a href="/admin">Admin</a></li>
                        @endif

                        </ul>
                    </div>
                </div>
                
                <div class="col-md-10 spac-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('footer')
</body>
</html>
