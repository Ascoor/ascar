@extends('layouts.app', ['activePage' => ' home', 'titlePage' => __('لوحة التحكم')])

@section('content')
<div class="content">
    <div class="container pt-3">

        <div class="container" style="align-items: center;">
            <div class="jumbotron jumbotron-fluid" style="align-items: center;">
                <h1 class="display-4" style="text-align: center;">إدارة المتغيرات المكانية</h1>
                <p class="lead" style="text-align: center; padding-top: 20px;"></p>
             @auth   <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search.index') }}"">
@csrf
<input class=" form-control mr-sm-2" style="text-align:center;" type="search" placeholder=" المتغير-المدينة-القرية"
                    name=" query" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
                </form>
                @endauth
            </div>
            <div class="container">
            </div>








            @endsection