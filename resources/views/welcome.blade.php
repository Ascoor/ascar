<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
body {
  overflow: visible !important;
  background: -webkit-linear-gradient(45deg, #085078 10%, #85d8ce 90%);
  background: -moz-linear-gradient(45deg, #085078 10%, #85d8ce 90%);
  background: -ms-linear-gradient(45deg, #085078 10%, #85d8ce 90%);
  background: -o-linear-gradient(45deg, #085078 10%, #85d8ce 90%);
  background: linear-gradient(45deg, #085078 10%, #85d8ce 90%);
 }

            html, body {
                background-color: #fff;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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

            <div class="content">
                <div class="title m-b-md">
           محافظة الدقهلية
                </div>


                <div class="links">
      
                    <a href="">نظام إدارة المتغيرات المكانية</a>
                </div>
            </div>
        </div>
    </body>
</html>
