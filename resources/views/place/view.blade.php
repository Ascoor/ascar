@extends('layouts.app', ['activePage' => 'view', 'titlePage' => __('عرض المرفق')])

@section('content')

<div class="container">
    <div class="card">

        <div class="card-body">
            <a class="btn btn-ask1" href="{{ route('places') }}">جميع المتغيرات</a>
            <div class="card-header" style="
                color: rgb(255, 242, 64);
                background-color: #153257;

                text-align: center;">
                <div class="head-text">
                    <h1 class="display-8">عرض المرفق</h1>
                </div>
            </div>

            <!-- <img src="/storage/posts/{{$data->filename}}" class="img-fluid" alt=""> -->



            <center>
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="responsive-item" src="/storage/posts/{{$data->filename}}"
                            allowfullscreen></iframe>
                    </div>

                </div>
            </center>
        </div>




























        @endsection