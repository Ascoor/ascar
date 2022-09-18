@include('layouts.navbars.navs.auth')



<div class="container" style="align-items:center;text-align: center; ">
    <div class="btn-group" role="group" style="align-items: center">
        <a class="btn btn-primary" type="button" href="{{ route('home') }}">الرئيسية
        </a>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        إدارة الحالة
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="{{ route('tags.index') }}">{{ __('قائمة الحالات') }}</a>
        <a class="dropdown-item" href="{{ route('tags.create') }}">{{ __('إضافة حالة') }}</a>


        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        فهرس المتغيرات
</button>
<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    <a class="dropdown-item" href="{{ route('places.create') }}">{{ __('إضافة متغير') }}</a>
    <a class="dropdown-item" href="{{ route('home') }}">{{ __('المتغيرات قيد التشغيل') }}</a>
    <a class="dropdown-item" href="{{ route('place.trash') }}">{{ __('المتغيرات قيد الحفظ') }}</a>
</div>
        </div>
</div>



<div class="container" style="background: rgb(221, 225, 248)">
    <div class="container" style="align-items: center;background:rgb(220, 225, 255);">
        <div class="jumbotron jumbotron-fluid" style="color:rgb(0, 46, 65); ">
            <div class="card-body">

                @yield('content')

                @include('layouts.footers.auth')
            </div>
        </div>
