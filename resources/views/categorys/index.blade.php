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
                @if($message = Session::get('تمت'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
                @endif
                @if(session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                    @endif


                    <table id="example" class=" table-striped " style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">مسلسل</th>
                                <th scope="col">التصنيف</th>
                                <th></th>


                                <th scope="col"> التحكم</th>
                                <th></th>
                                <th></th>
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
                                    <button type="button" href="{{route('categorys.edit',['id'=> $item->id])}}"
                                        class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal">

                                        تعديل
                                    </button>
                                </td>

                                <div class="grey-bg container-fluid">
                                    <section id="minimal-statistics">


                                        <div class="modal" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات
                                                            المتغير</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            غلق
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <form action="{{ route('categorys.update', $item->id) }}"
                                                                method="post">
                                                                @csrf



                                                                <label for="exampleFormControlInput1">إسم
                                                                    التصنيف</label>
                                                                <input type="text" name="name"
                                                                    value="{{ $item->name }}">

                                                        </div>
                                                    </div>


                                                    <div class="modal-footer">
                                                        <div class="form-group">

                                                            <button class="btn btn-danger" class="form-group"
                                                                type="submit">حفظ</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!--
                                    <a class="btn btn-ask" ">
                                        تعديل</a> -->


                                        <td>

                                            <a class=" btn btn-ask1"
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