@extends('layouts.app', ['activePage' => 'home', 'titlePage' => __(' الصفحة الرئيسية')])


@section('content')


<div class="container">
    <div class="container" style="align-items:center;text-align: center; ">

        <div class="btn-group" role="group" style="align-items: center">
            <a class="btn btn-primary" type="button" href="{{ route('home') }}">الرئيسية
            </a>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-danger">              إدارة الحالة</button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('tags') }}">{{ __('قائمة الحالات') }}</a>
                <a class="dropdown-item" href="{{ route('tag.create') }}">{{ __('إضافة حالة') }}</a>
              <div class="dropdown-divider"></div>

            </div>
          </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary">            فهرس المتغيرات</button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ route('places.create') }}">{{ __('إضافة متغير') }}</a>
                <a class="dropdown-item" href="{{ route('places.index') }}">{{ __('المتغيرات قيد التشغيل') }}</a>
                <a class="dropdown-item" href="{{ route('place.trash') }}">{{ __('المتغيرات قيد الحفظ') }}</a>              <div class="dropdown-divider"></div>

            </div>
          </div>


    <div class="card">
        <div class="card-body">
            <div class="card-header card-header" style="
        color: rgb(255, 242, 64);
        background-color: #d3e6ff;
        align-items: center;
        text-align: center;
        <h1 class=" display-4">ت
                    <img class="card-img-top" style="width:350px;
            height:350px ;
            padding:auto ;   " src="/img/main.png">
                </div>




            </div>

        </div>
                @endsection
