@extends('layouts.app', ['activePage' => 'view', 'titlePage' => __('عرض المرفق')])

@section('content')

<div class="container">
    <div class="card">

        <div class="card-body">
            <a class="btn btn-ask1" href="{{ route('places') }}">جميع المتغيرات</a>
            <div class="card-header" style="
                color: rgb(255, 242, 64);
                background-color: #153257;
                align-items: center;
                text-align: center;">
                <div class="head-text">
                    <h1 class="display-8">عرض المرفق</h1>
                </div>



                <center>


                    <iframe height="1050px" width="1150px" src="/storage/posts/{{$data->filename}}"></iframe>
                </center>



            </div>
        </div>
    </div>
</div>


@endsection