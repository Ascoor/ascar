@include('layouts.navbars.navs.auth')





<div class="container" style="align-items:center;text-align: center; ">

    <div class="btn-group" role="group" style="align-items: center">
        <a class="btn btn-ask btn-lg" type=" button" href="{{ route('home') }}">الرئيسية
        </a>



        <a class="btn btn-ask1 btn-lg" type=" button" href="{{ route('places') }}">فهرس المتغيرات</a>
        <a class="btn btn-ask1 btn-lg" type=" button" href="{{ route('categorys') }}"> التصنيفات</a>
        <a class="btn btn-ask1 btn-lg" type=" button" href="{{ route('tags') }}">الإجراءات</a>

        <a class="btn btn-ask btn-lg" type=" button" href="{{ route('users') }}">المستخدمين
        </a>
    </div>
</div>












@yield('content')
@include('layouts.footers.auth')
