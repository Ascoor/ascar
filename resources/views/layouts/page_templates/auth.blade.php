@include('layouts.navbars.navs.auth')
</div>
</div>
</div>
</div>
<div class="container" style="align-items:center;text-align: center; ">
<form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search.index') }}">
    @csrf
    <input class=" form-control mr-sm-2" style="text-align: center;" type="search"
    placeholder=" المتغير-المدينة-القرية" name=" query" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
</form></div>
<div class="container" style="align-items:center;text-align: center; ">
    <div class="btn-group" role="group" style="align-items: center">
        <a class="btn btn-primary" type="button" href="{{ route('home') }}">الرئيسية
        </a>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        فهرس المتغيرات
    </button>
<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="{{ route('places.create') }}">{{ __('إضافة متغير') }}</a>
            <a class="dropdown-item" href="{{ route('home') }}">{{ __('المتغيرات قيد التشغيل') }}</a>
            <a class="dropdown-item" href="{{ route('place.trash') }}">{{ __('المتغيرات قيد الحفظ') }}</a>
</div>
<div>


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
