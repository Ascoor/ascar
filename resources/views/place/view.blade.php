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

                    <iframe id="T:theTaskFlow:contentTmplt:j_id524352088_4b05cad6:if1" title=""
                        class="embed-responsive-item m-auto af_inlineFrame p_AFFlow" frameborder="2"
                        src="/storage/posts/{{$data->filename}}" _adfloaded="1"
                        style="min-width: 1100px; min-height: 1000px;"></iframe>
                </center>



            </div>
        </div>
    </div>










    @endsection