<!doctype html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
        integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('وحدة المتغيرات المكانية') }}</title>


    <!-- Font ----->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/app.css">
</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/places') }}">
                    وحدة المتغيرات المكانية
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
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



            <div class="container" style="padding-top: 5%">
                <center>
                    <h1>محافظة الدقهلية</h1>
                    <h2>وحدة المتغيرات المكانية</h2>
                    <a class="btn btn-primary btn-lg" style="shadow  mb-5 rounded" href="{{ route('places.index') }}"
                        role="button">الصفحة الرئيسية</a>

                    <a class="btn btn-primary btn-lg" style="shadow  mb-5 rounded" href="{{ route('places.create') }}"
                        role="button">إضافة متغير جديد</a>
                    <a class="btn btn-primary btn-lg" style="shadow  mb-5 rounded" href="{{ route('place.trash') }}"
                        role="button"> المتغيرات الغير معروضة</a>
                </center>
                <div class="form-group">
                    <span>
                        <form  type="get" action="{{ url('/search') }}">
                            <input type="search" placeholder="بحث بالمتغير" class="form-controller mr-sm2"
                            name="query">
                            <button class="btn btn-outline-primary pt-1 my-2 my-sm-0" type="submit>">بحث</button>
                        </form>
                            <form  type="get" action="{{ url('/searchp') }}">
                            <input type="search" placeholder="بحث بالمركز" class="form-controller mr-sm2"
                            name="queryp">
                            <button class="btn btn-outline-primary pt-1 my-2 my-sm-0" type="submit>">بحث</button>
                        </form>
                            <form  type="get" action="{{ url('/searchw') }}">
                                <input type="search" placeholder="بحث بالقرية" class="form-controller mr-sm2"
                                name="queryw">
                            <button class="btn btn-outline-primary pt-1 my-2 my-sm-0" type="submit>">بحث</button>

                        </form>
                
             \       </span>
                </div>

                @yield('content')
                <footer>

                    <div>
                        <center>
                            <h3> Copyright Ask-ar.com 2022
                            </h3>
                        </center>
                    </div>
            </div>
    </div>
    </footer>

    </div>
    <!-- jQuery and JS bundle w/ Popper.js -->

    </div>
    @if ($message = Session::get('تمت'))
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js"
        integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous">
    </script>
    </div>

</body>

</html>
