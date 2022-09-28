@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="white"
        style="background-image: url('{{ asset('material') }}/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;"
        data-color="purple">
<div class="container">

    <div class="card-body">
        <center>

            <div class="logo">
                <img src="/img/Coat.png" class="rounded mx-auto d-block" alt="...">


                <p class="font-weight-bold text-warning

                align-bottom" style="color:#e7d212;font-size: 42pt;">{{ __('محافظة الدقهلية') }}
                </p>
                <p class="font-weight-bolder text-white text-center" style="color:warning;font-size: 42pt;">{{ __('نظام إدارة المتغيرات المكانية') }}</p>
            </center>

    </div>
    @yield('content')

    </div>
    </div>
    </div>
    </div>

    @include('layouts.footers.guest')
</div>
</div>
