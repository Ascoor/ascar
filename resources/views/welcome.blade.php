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
<style>
    .flex-container
    {
      
  background-color: green;
  opacity: .3;
}
    
  </style>
    
  </head>
<body>
  
  <div class="jumbotron text-center" >
      <div class="card texxt-center"  >
        <h1 class="bg-success text-warning">محافظة الدقهلية</h1>

    </div>
        <div class="col-md-8">
    </div>
    
  </div>
  <center>
  <div class="flex-container">
  </div>
  <div class="container">
    <h2>نظام إدارة المتغيرات المكانية</h2>
    
    <img class="card-img-top" src="img/coat.png" alt="Card image" style="width:40%">
    <div class="card-body">
        @if (Route::has('login'))
        
      @auth
                      <a class="btn btn-info" href="{{ url('/places') }}" >الصفحة الرئيسية </a>
                      
                      @else
      
      
      <a class="btn btn-warning" href="{{ route('login') }}">تسجيل الدخول</a>
      
      @if (Route::has('register'))
      
        <a class="btn btn-danger" href="{{ route('register') }}">تسجيل مستخدم جديد</a>
      </center>
      </div>
      
      @endif
      
        
        
        @endauth
        
        @endif
        </div>
  </div>
  <div class="footer">
  <center>
      
      
      <p herf="https://ask-ar.com">©2022 جميع الحقوق محفوظة لدي Ask-ar.com</p>
    </center>
  </div>
    
</div>
</div>
</body>
</html>
