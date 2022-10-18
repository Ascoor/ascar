@extends('layouts.app', ['activePage' => 'users.index', 'titlePage' => __('إدارة المستخدمين ')])


@section('content')



<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #153257;
    align-items: center;
    text-align: center;">

                <h3 class="display-8    ">جميع المستخدمين</h3>
                <a class="btn btn-ask2" href="{{route('user.create')}}"> إضافة مستخدم</a>
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
                        <thead class="thead text-white" style=" background-color:#153257">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">الإسم</th>

                                <th scope="col"> اللإيميل</th>
                                <th scope="col"> التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($users as $item)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>


                                <td>

                                    <span>
                                        <a class="btn btn-success"
                                            href="{{route('user.destroy',['id'=> $item->id])}}">حذف</a>

                                    </span>
                                </td>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>


                </div>


            </div>

        </div>




        @endsection