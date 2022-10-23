@extends('layouts.app', ['activePage' => 'categorys.index', 'titlePage' => __('إدارة التصنيفات ')])


@section('content')



<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #153257;
    align-items: center;
    text-align: center;">
                <h1 class="display-8">جميع التصنيفات</h1>
                <a class="btn btn-red" href="{{route('categorys.create')}}"> إضافة تصنيف</a>
            </div>


            <div class="container">
                @if ($message = Session::get('تمت'))
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @endif
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    @endif

                    <table id="example" class=" table-striped " style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">مسلسل</th>
                                <th scope="col">التصنيف</th>
                                <th scope="col"> التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($categorys as $item)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$item->name}}</td>

                                <td>
                                    <a class="btn btn-ask" href="{{route('categorys.edit',['id'=> $item->id])}}">
                                        تعديل</a>

                                    <a class="btn btn-ask1"
                                        href="{{route('softCategory.delete',['id'=>$item->id])}}">حذف</a>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @if ($categorys->count() > 0 )

                </div>
                @else
                <div class="col">
                    <div class="alert alert-danger" role="alert">
                        Not tags
                    </div>
                </div>

                @endif
            </div>
        </div>


        @endsection