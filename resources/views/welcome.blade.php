<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/app.css">

    </head>
    <body>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/places') }}" >الصفحة الرئيسية </a>
                    @else
                        <a href="{{ route('login') }}">تسجيل الدخول</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">تسجيل مستخدم جديد</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="container-xl mt-n2 mb-3">
            
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Centered nav only <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown08">
    
                  </li>
                </ul>
            </div>
        
  <center>
      <div class="title ">
          <img class="mb-4" src="/img/Coat.png" alt="" width="300" height="300">
          <h1 class="h1 mb-1 font-weight-normal">محافظة الدقهلية </h1>
          <h3 class="h5 mb-5 font-weight-normal">نظام إدارة المتغيرات المكانية </h3>
          

            </div>
            <div class="footet">
      <footer>

        <div>
          
                <h4> Copyright Ask-ar.com 2022
                </h4>
            </center>

</footer>
                        <script src="/assets/js/bootstrap.min.js"></script>  
         
            <script src="/assets/js/jquery-3.5.1.slim.min.js"></script>  
       
    </body>
</html>
