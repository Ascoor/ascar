@include('layouts.navbars.navs.auth')



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




            @yield('content')
            @include('layouts.footers.auth')
