@include('layouts.navbars.navs.auth')





<div class="container" style="align-items:center;text-align: center; ">

    <div class="btn-group" role="group" style="align-items: center">
        <a class="btn btn-ask btn-lg" type=" button" href="{{ route('home') }}">الرئيسية
        </a>

        <div class="btn-group" role="group">

            <a class="btn btn-ask1 btn-lg" type=" button" href="{{ route('places') }}">فهرس المتغيرات</a>
        </div>

        <!-- <button id="btnGroupDrop1" type="button" class="btn btn-ask1 btn-lg" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            فهرس المتغيرات
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

            <a class="dropdown-item" href="{{ route('place.create') }}">{{ __('إضافة متغير') }}</a>
            <a class="dropdown-item" href="{{ route('places') }}">{{ __('المتغيرات قيد التشغيل') }}</a>
            <a class="dropdown-item" href="{{ route('place.trash') }}">{{ __('المتغيرات قيد الحفظ') }}</a>
        </div> -->
        <button id="btnGroupDrop1" type="button" class="btn btn-ask1 btn-lg" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">تصنيف المتغيرات
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

            <a class="dropdown-item" href="{{ route('categorys') }}">{{ __('إدارة التصنيفات') }}</a>
            <a class="dropdown-item" href="{{ route('categorys.create') }}">{{ __('إضافة تصنيف') }}</a>
        </div>


        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-ask1 btn-lg" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                إدارة الحالة
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                <a class="dropdown-item" href="{{ route('tags') }}">{{ __('قائمة الحالات') }}</a>
                <a class="dropdown-item" href="{{ route('tag.create') }}">{{ __('إضافة حالة') }}</a>
            </div>
            <div class="btn-group" role="group" style="align-items: center">
                <a class="btn btn-ask btn-lg"" type=" button" href="{{ route('users') }}">المستخدمين
                </a>
            </div>
        </div>
    </div>












    @yield('content')
    @include('layouts.footers.auth')