@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black"
        style="background-image: url('{{ asset('material') }}/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;"
        data-color="purple">

        <div class="logo">
            <img src="/img/Coat.png" class="rounded mx-auto d-block" alt="...">
        </div>
        <h1 class="text text-center" style="color: rgb(231, 244, 3);font-size: 42pt;">{{ __('محافظة الدقهلية') }}
        </h1></a>
        <h2 class="text-white text-center">{{ __('نظام إدارة المتغيرات المكانية') }}</h2>


    @yield('content')



    @include('layouts.footers.guest')
</div>
</div>
