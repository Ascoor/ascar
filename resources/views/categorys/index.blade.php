@extends('layouts.app', ['activePage' => 'categorys.index', 'titlePage' => __('إدارة التصنيفات ')])


@section('content')



<div class="container">
    <div class="card">
        <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #031f42;
    align-items: center;
    text-align: center;">
            إدارة التصنيفات
        </div>

        <div class="card">

            <button type="button" href="{{route('categorys.create')}}" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">
                إضافة تصنيف
            </button>
        </div>
    </div>
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
                            <form action="{{route('categorys.store')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">التصنيف</label>

                                        <input type="text" name="name" class="form-control">





                                        <div class="modal-footer">
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





<div class="card-body">

    <table id="example" class=" table-striped " style="width:100%">
        <thead>
            <tr>
                <th scope="col">مسلسل</th>
                <th scope="col">التصنيف</th>



                <th scope="col"> التحكم

                </th>

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
                    <button type="button" href="{{route('categorys.edit',['id'=> $item->id])}}" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal">

                        تعديل
                    </button>
                </td>


                <div class="grey-bg container-fluid">
                    <section id="minimal-statistics">


                        <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            تعديل
                                            بيانات
                                            التصنيف</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            غلق
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <form action="{{ route('categorys.update', $item->id) }}" method="post">
                                                @csrf

                                                <label for="exampleFormControlInput1">إسم
                                                    التصنيف</label>

                                                <div class="row">
                                                    <input type="text" name="name" value="{{ $item->name }}">

                                                </div>
                                        </div>


                                        <div class="modal-footer">
                                            <div class="form-group">

                                                <button class="btn btn-danger" class="form-group" type="submit">حفظ</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--
                                    <a class="btn btn-ask" ">
                                        تعديل</a> -->

                            <!--
                                    <td>

                                        <a class=" btn btn-ask1"
                                            href="{{route('softCategory.delete',['id'=>$item->id])}}">حذف</a>

                                    </td> -->
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