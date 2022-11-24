<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('public/admin') }}/images/favicon/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin') }}/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin') }}/css/typography.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin') }}/css/responsive.css">
    <style>
        /* ********tab-Area-start************ */
#tab-section{
margin-top: 1rem;
}
.curriculum-section{
margin: 0 auto;
}
.tab-list{
/* border-top:.1rem solid #ededed; */
border-bottom:.1rem solid #ededed;
}
.our-item{
list-style: none;
text-align: center;
/* margin-bottom: 30px; */
width: 70%;
}
.curriculum-item{
display: block;
}
ul.our-item li,
ul.curriculum-item li{
flex-grow: 1;
}
ul.our-item li a,
ul.curriculum-item li a {
padding: 13px 0px;
font-size: 14px;
display: block;
color: #000;
text-transform: capitalize;
color: #F16A4F;
border: 1px solid #ac9696;
border-radius: 3px;
margin-right: 20px;
}
ul.curriculum-item li a {
text-align: start;
padding-left: 2rem;
padding-right: 5px;
border-bottom: 1px solid #fff;
padding-bottom: 1rem;
font-weight: 1;
border-right: unset;
}

ul.our-item li a i,
ul.curriculum-item li a i{
margin-right: 1rem;
}
ul.our-item li a.active,
ul.curriculum-item li a.active{
background:#f7f7f7;
border-bottom: .3rem solid #F16A4F;
position: relative;
}
ul.our-item li a.active::after{
border-left: 8px solid rgba(0, 0, 0, 0);
border-right: 8px solid rgba(0, 0, 0, 0);
border-top: 9px solid #F16A4F;
content: "";
display: block;
height: 20px;
position: absolute;
bottom: -23px;
left: 50%;
width: 15px;
z-index: 99;
transform: translate(-50%);
-webkit-transform: translate(-50%);
-moz-transform: translate(-50%);
-ms-transform: translate(-50%);
-o-transform: translate(-50%);
}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
