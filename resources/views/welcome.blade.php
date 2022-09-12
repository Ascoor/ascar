@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'welcome', 'titlePage' => __('إدارة المتغيرات المكانية')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
        <div class="logo">
          <img src="/img/coat.png" class="rounded mx-auto d-block" alt="...">
        </div>
          <h1 class="text-warning text-center">{{ __('محافظة الدقهلية') }}</h1></a>
          <h2 class="text-white text-center">{{ __('نظام إدارة المتغيرات المكانية') }}</h2>
      </div>
  </div>
</div>
@endsection
