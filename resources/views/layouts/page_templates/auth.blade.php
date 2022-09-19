@include('layouts.navbars.navs.auth')
s

<div class="container" style="background: rgb(221, 225, 248)">
    <div class="container" style="align-items: center;background:rgb(220, 225, 255);">

        <div class="card-body">
            <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search.index') }}"">
                            @csrf
                            <input class=" form-control mr-sm-2" style="text-align: center;" type="search"
                placeholder=" المتغير - المدينة  - القرية" name=" query" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
        </div>
    </div>

    <div class="container">
        <div class="container" style="align-items:center;text-align: center; ">

            <div class="btn-group" role="group" style="align-items: center">
                <a class="btn btn-primary btn-lg"" type=" button" href="{{ route('home') }}">الرئيسية
                </a>
            </div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-success btn-lg" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    فهرس المتغيرات
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                    <a class="dropdown-item" href="{{ route('places.create') }}">{{ __('إضافة متغير') }}</a>
                    <a class="dropdown-item" href="{{ route('places.index') }}">{{ __('المتغيرات قيد التشغيل') }}</a>
                    <a class="dropdown-item" href="{{ route('place.trash') }}">{{ __('المتغيرات قيد الحفظ') }}</a>
                </div>
            </div>

            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-success btn-lg" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    إدارة الحالة
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                    <a class="dropdown-item" href="{{ route('tags') }}">{{ __('قائمة الحالات') }}</a>
                    <a class="dropdown-item" href="{{ route('tag.create') }}">{{ __('إضافة حالة') }}</a>
                </div>
            </div>





            <div class="card">
                <div class="card-body">
                    <div class="card-header card-header" style="
            color: rgb(255, 242, 64);
            background-color: #d3e6ff;
            align-items: center;
            text-align: center;">
                        <h1 class=" display-4">
                            <img class="card-img-top" style="width:350px;
                height:350px ;
                padding:auto ;   " src="/img/main.png">
                    </div>

                    @yield('content')

                    @include('layouts.footers.auth')
                </div>
            </div>