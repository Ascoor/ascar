@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('material') }}/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
  <div class="container" style="height: 1250px;
  width:1650;
  ">
   <div class="logo">
       <img src="/img/coat.png" class="rounded mx-auto d-block" alt="...">
    </div>
    <h1 class="text-warning text-center">{{ __('محافظة الدقهلية') }}</h1></a>
    <h2 class="text-white text-center">{{ __('نظام إدارة المتغيرات المكانية') }}</h2>


@yield('content')

</div>
    @include('layouts.footers.guest')
  </div>
</div>
