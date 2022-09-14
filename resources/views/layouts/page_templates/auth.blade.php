@include('layouts.navbars.navs.auth')
<div class="container">
    <ul class="nav nav-tabs" style="padding-right:228px ">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link ">الصفحة الرئيسية</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">فهرس المتغيرات</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('places.create') }}">{{ __('إضافة متغير') }}</a>
                <a class="dropdown-item" href="{{ route('home') }}">{{ __('المتغيرات قيد التشغيل') }}</a>
                <a class="dropdown-item" href="{{ route('place.trash') }}">{{ __('المتغيرات قيد الحفظ') }}</a>

            </div>
        </li>

    </ul>
</div>


<div class="container" style="background: rgb(221, 225, 248)">
    <div class="container" style="align-items: center;background:rgb(220, 225, 255);">
        <div class="jumbotron jumbotron-fluid" style="color:rgb(0, 46, 65); ">
            <div class="card-body">
                <center>
                    <img style="width:350px;
                
            
                height:350px ;
                padding:auto ;   " src="/img/main.png">
                </center>

                @yield('content')

                @include('layouts.footers.auth')
            </div>
        </div>hei