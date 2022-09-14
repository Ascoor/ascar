
  @include('layouts.navbars.navs.auth')
<div class="container">
    <ul class="nav nav-tabs" style="padding-right:228px ">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link ">الصفحة الرئيسية</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">فهرس المتغيرات</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('places.create') }}">{{ __('إضافة متغير') }}</a>
            <a class="dropdown-item" href="{{ route('home') }}">{{ __('المتغيرات قيد التشغيل') }}</a>
            <a class="dropdown-item" href="{{ route('place.trash') }}">{{ __('المتغيرات قيد الحفظ') }}</a>

        </div>
    </li>
    <li class="nav-item">
        <a  class="nav">       <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search.index') }}"">
            @csrf
            <input class=" form-control mr-sm-2" style="text-align: center;" type="search"
                            placeholder=" المتغير-المدينة-القرية"name=" query" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
                        </div>
                        </a>
            </li>

</ul>
</div>
<div class="container">

</div>

    <div class="container" style="background: rgb(221, 225, 248)">
        <div class="container" style="align-items: center;background:rgb(220, 225, 255);">
            <div class="jumbotron jumbotron-fluid" style="color:rgb(0, 46, 65); center;">
                <div class="card-body">
                    <h1 class="card-title" style="text-align: center; font-size:42pt; font-family: 'Amiri', serif;">إدارة المتغيرات المكانية</h1>

@yield('content')

    @include('layouts.footers.auth')
  </div>
</div>
