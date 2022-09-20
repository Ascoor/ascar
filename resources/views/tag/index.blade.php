@extends('layouts.app', ['activePage' => 'tag.index', 'titlePage' => __('إدارة الحالات ')])


@section('content')



<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #153257;
    align-items: center;
    text-align: center;">
                <h1 class="display-4">جميع الحالات</h1>
                <a class="btn btn-success" href="{{route('tag.create')}}"> إضافة حالة</a>
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
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">الحالة</th>
                                <th scope="col"> التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($tags as $item)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$item->tag}}</td>

                                <td>
                                    <a class="btn btn-info" href="{{route('tag.edit',['id'=> $item->id])}}">
                                        تعديل</a>

                                    <a class="btn btn-danger"
                                        href="{{route('softtag.delete',['id'=>$item->id])}}">حذف</a>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @if ($tags->count() > 0 )
                    {!!$tags->links() !!}
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