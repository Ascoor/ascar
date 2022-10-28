@extends('layouts.app', ['activePage' => 'tag.index', 'titlePage' => __('إدارة الإجراءات ')])


@section('content')



<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #031f42;
    align-items: center;
    text-align: center;">
                <h3 class="display-8">جميع الإجراءات</h3>
            </div>

            <div class="card">
                <button type="button" href="{{route('categorys.create')}}" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">
                    إضافة إجراء
                </button>

                <div class="grey-bg container-fluid">
                    <section id="minimal-statistics">


                        <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">إضافة
                                            تصنيف جديد</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            غلق
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="{{route('tag.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">الإجراء</label>

                                                <input type="text" name="tag" class="form-control">



                                                <div class="modal-footer">
                                                    <div class="form-group">


                                                        <div class="form-group">

                                                            <div class="form-group">

                                                                <button class="btn btn-danger" class="form-group" type="submit">save</button>
                                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>




<div class="card">
    <div class="card-body">

        @if($message = Session::get('تمت'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif
        @if(session('status'))
        <div class="alert alert-warning" role="alert">
            {{ session('status') }}
            @endif



            <table id="example" class=" table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">مسلسل</th>
                        <th scope="col">الإجراء</th>
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
                            <button type="button" href="{{route('tag.edit',['id'=> $item->id])}}" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal">

                                تعديل
                            </button>
                        </td>

                        <!--     <a class="btn btn-ask1" href="{{route('softtag.delete',['id'=>$item->id])}}">حذف</a>-->
                        <div class="grey-bg container-fluid">
                            <section id="minimal-statistics">


                                <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    تعديل
                                                    بيانات
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    غلق
                                                </button>

                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <form action="{{ route('categorys.update', $item->id) }}" method="post">
                                                            @csrf



                                                            <label for="exampleFormControlInput1">إسم
                                                                التصنيف</label>
                                                            <input type="text" name="tag" value="{{ $item->tag }}">

                                                    </div>


                                                    <div class="modal-footer">
                                                        <div class="form-group">

                                                            <button class="btn btn-danger" class="form-group" type="submit">حفظ</button>
                                                        </div>
                                                        </form>

                    </tr>

                    @endforeach

                </tbody>
            </table>
            @if ($tags->count() > 0 )

        </div>
        @else
        <div class="col">
            <div class="alert alert-danger" role="alert">
                لا يوجد إجراءات
            </div>














































            @endif

            @endsection