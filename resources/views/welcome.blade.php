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
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
        <style>
            
body {
    overflow: visible !important;
  background: -webkit-linear-gradient(45deg, #548caa 10%, #6ea7c5 90%);
  background: -moz-linear-gradient(45deg, #548caa 10%, #6ea7c5 90%);

  background: -o-linear-gradient(45deg, #548caa 10%, #6ea7c5 90%);
  background: linear-gradient(45deg, #548caa 10%, #6ea7c5 90%);
 }

            html, body {
                background-color: rgb(41, 44, 16);
                color: #e8f533;

                font-family: 'Noto Naskh Arabic';font-size: 22px;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                box-shadow: rgb(121, 245, 134);
            }

            .links > a {
                color: #f2f2f2;
                padding: 0 25px;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                box-shadow: rgb(121, 245, 134);
            }
            .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .h5,mb-5 font-weight-normal{

        color: #ffffff
      }
    .h1,mb-1 font-weight-normal{
        text-shadow: #f2f2f2
    }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        .collapse,navbar-collapsejustify-content-md-center{
            background: rgb(46, 2, 2)
        }
    }

        </style>
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"> 
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
            <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-lg">
                <img class="mb-4" src="/img/Coat.png" alt="" width="300" height="300">
                <h1 class="h1 mb-1 font-weight-normal">محافظة الدقهلية </h1>
                <h3 class="h5 mb-5 font-weight-normal">نظام إدارة المتغيرات المكانية </h3>
    

              
           
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous"></script>
                </div>
                 </div>
        </div>
    </body>
</html>
