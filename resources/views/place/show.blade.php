@extends('layouts.app', ['activePage' => 'show', 'titlePage' => __('عرض المتغير')])

@section('content')

<div class="card">
    <div class="container">
        <div class="card-header" style="
            color: rgb(255, 242, 64);
            background-color: #153257;
            align-items: center;
            text-align: center;">
            <div class="head-text">
                <h1 class="display-5">عرض بيانات المتغير</h1>
                <div class="button-group">

                    <a class="btn btn-primary btn-lg" href="{{ route('places') }}" role="button">جميع المتغيرات</a>
                    <!-- <a class="btn btn-danger btn-lg" href="{{ route('soft.delete', $place->slug ) }}"
                        role="button">إنهاء
                        عمل
                        المتغير</a> -->

                </div>
            </div>
        </div>



        <div class="card-body">

            <div class=" text-center text-lg">
                <button type="button" href="{{ route('place.edit', $place->id) }}" class="btn btn-warning btn-lg"
                    data-toggle="modal" data-target="#exampleModal">

                    تعديل بيانات المتغير رقم {{$place->gnump}}</a>
                </button>


                <div class="grey-bg container-fluid">
                    <section id="minimal-statistics">

                        <div class="col-12 mt-3 mb-1">
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات المتغير</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                غلق
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <form action="{{route('place.update',['id'=> $place->id])}}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">

                                                        <label for="exampleFormControlInput1">الإجراءات المنتهية
                                                        </label>

                                                        @foreach($tags as $item)
                                                        <input type="checkbox" name="tags[]" value="{{ $item->id }}"
                                                            @foreach ($place->tag as
                                                        $item2)
                                                        @if($item->id == $item2->id)
                                                        checked
                                                        @endif
                                                        @endforeach

                                                        >

                                                        <label for="">{{ $item->tag }}</label>
                                                        @endforeach

                                                        <br>
                                                        <div class="form-group">
                                                            <label for="category_id">حالة المتغير</label>
                                                            <select class="form-control" name="photo3" id="category">

                                                                @foreach ($categories as $category)
                                                                @if ($category->id == $place->photo3)
                                                                <option value="{{$category->id}}" selected>
                                                                    {{$category->name}}</option>

                                                                @else
                                                                <option value="{{$category->id}}">
                                                                    {{$category->name}}
                                                                </option>
                                                                @endif

                                                                @endforeach


                                                            </select>
                                                        </div>
                                                        <div class=" form-group">
                                                            <label for="exampleFormControlInput1">مسلسل المتغير
                                                            </label>
                                                            <input type="number" name="gnump" class="form-control"
                                                                value="{{ $place->gnump }}">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">خط العرض </label>
                                                            <input type="float" name="gnumh" class="form-control"
                                                                value="{{ $place->gnumh }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">خط الطول </label>
                                                            <input type="float" name="gnumw" class="form-control"
                                                                value="{{ $place->gnumw }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">المحافظة </label>
                                                            <input type="text" name="gnump1" class="form-control"
                                                                value="{{ $place->gnump1 }}">


                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1"> المركز </label>
                                                            <input type="text" name="gnump2" class="form-control"
                                                                value="{{ $place->gnump2 }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">القرية </label>
                                                            <input type="text" name="gnump3" class="form-control"
                                                                value="{{ $place->gnump3 }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">نوع الأملاك
                                                            </label>
                                                            <input type="text" name="gnump4" class="form-control"
                                                                value="{{ $place->gnump4 }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">جهة الولاية
                                                            </label>
                                                            <input type="text" name="gnump5" class="form-control"
                                                                value="{{ $place->gnump5 }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">القانونية </label>
                                                            <input type="text" name="gnump6" class="form-control"
                                                                value="{{ $place->gnump6 }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">الرد </label>
                                                            <input type="text" name="gnump7" class="form-control"
                                                                value="{{ $place->gnump7 }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">تفاصيل الرد
                                                            </label>
                                                            <input type="text" name="gnump8" class="form-control"
                                                                value="{{ $place->gnump8 }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">موقف الإزالة
                                                            </label>
                                                            <input type="text" name="gnump9" class="form-control"
                                                                value="{{ $place->gnump9 }}">

                                                        </div>
                                                        <div class="md-form">
                                                            <label for="exampleFormControlInput1"> التاريخ </label>
                                                            <input dir="rtl" name="gnump10" placeholder="التاريخ المحدد"
                                                                type="date" value="{{ $place->gnump10 }}"
                                                                class="form-control datepicker">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">الملاحظات </label>
                                                        <textarea class="form-control" type="text" name="gnump11"
                                                            rows="3">{{ $place->gnump11 }}</textarea>


                                                    </div>


                                                    <div class="form-group">

                                                        <label for="exampleFormControlInput1">الصور </label>
                                                        <input type="file" name="photo1[]" multiple />
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">المرفقات </label>
                                                        <input type="file" name="photo2[]" class="form-control"
                                                            multiple>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">

                                                <div class="form-group">

                                                    <button class="btn btn-danger" type="submit">save</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table-info">

                                <table border="1px">
                                    <tr>

                                        <th>مرفقات المتغير</th>

                                        <th>مشاهدة
                                        </th>

                                        <th>تحميل
                                        </th>
                                    </tr>
                                    @foreach ($data as $data )

                                    <tr>

                                        <td>{{$data->filename}}</td>
                                        <td><a href="{{url('/view',$data->id)}}">مشاهدة </a>
                                        </td>
                                        <td><a href="{{url('/download',$data->filename)}}">تحميل</a>
                                        </td>
                                    </tr>



                                    @endforeach

                                </table>

                        </div>
                </div>
            </div>
            <center>

                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <div class="media align-items-stretch">
                                <i class="icon-book-open primary font-large-2 float-left"></i>
                                <div class="media-body">
                                    <div class="align-self-center">

                                        <h1>حالة المتغير</h1>
                                        @foreach ($categories as $category)
                                        @if ($category->id == $place->photo3)
                                        <option value="{{$category->id}}" selected>{{$category->name}}
                                        </option>


                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <div class="media align-items-stretch">
                                <i class="icon-pointer danger font-large-2 float-left"></i>
                                <div class="media-body">
                                    <div class="align-self-center">
                                        <h1>خط العرض</h1>

                                        <span>{{ $place->gnumh }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <i class="icon-pointer danger font-large-2 float-left"></i>
                                    <div class="media-body">
                                        <div class="align-self-center">
                                            <h1>خط الطول</h1>

                                            <span>{{ $place->gnumw }}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </center>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <i class="icon-support primary font-large-2 float-left"></i>
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <div class="media-body text-left">
                                            <h3 class="danger">المحافظة</h3>
                                            <span>{{ $place->gnump1 }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <i class="icon-support primary font-large-2 float-left"></i>
                            <div class="card-body">
                                <div class="media d-flex">
                                </div>
                                <div class="media-body text-left">
                                    <div class="align-self-center">
                                        <h3 class="danger">المركز</h3>

                                    </div>
                                </div>
                                <span>{{ $place->gnump2 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <i class="icon-support primary font-large-2 float-left"></i>
                            <div class="card-body">

                                <div class="media d-flex">
                                </div>
                                <div class="media-body text-left">
                                    <div class="align-self-center">
                                    </div>
                                    <h3 class="danger">القرية</h3>
                                    <span>{{ $place->gnump3 }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <i class="icon-support primary font-large-2 float-left"></i>
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                    </div>
                                    <div class="media-body text-left">
                                        <h3 class="danger">نوع الأملاك</h3>
                                        <span>{{ $place->gnump4 }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <i class="icon-direction danger font-large-2 float-left"></i>
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">جهة الولاية</h3>
                                        <span>{{ $place->gnump5 }}</span>
                                    </div>
                                    <div class="align-self-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <i class="icon-direction danger font-large-2 float-left"></i>
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">القانونية</h3>
                                        <span>{{ $place->gnump6 }}</span>
                                    </div>
                                    <div class="align-self-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <i class="icon-direction danger font-large-2 float-left"></i>
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">التاريخ</h3>
                                        <span>{{ $place->gnump10 }}</span>
                                    </div>
                                    <div class="align-self-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <i class="icon-direction danger font-large-2 float-left"></i>
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">موقف الإزالة</h3>
                                        <span>{{ $place->gnump9 }}</span>
                                    </div>
                                    <div class="align-self-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <div class="align-self-center">
                                    <i class="icon-direction danger font-large-2 float-left"></i>
                                </div>
                                <h3 class="warning">الرد</h3>
                                <span>{{ $place->gnump7 }}</span>
                            </div>
                        </div>
                        <div class="progress mt-1 mb-0" style="height: 7px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"
                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>




                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <i class="icon-direction danger font-large-2 float-left"></i>
                                    <div class="align-self-center">
                                    </div>
                                    <h3 class="danger">تفاصيل الرد</h3>

                                    <span>{{ $place->gnump8 }}</span>

                                    <div class="progress mt-1 mb-0" style="height: 7px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <div class="align-self-center">
                                                <i class="icon-direction danger font-large-2 float-left"></i>
                                            </div>
                                            <h3 class="danger"> الحالة</h3>

                                            @foreach ($tags as $item)
                                            <span class=" warning">
                                                {{$item->tag}}

                                            </span>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="progress mt-1 mb-0" style="height: 7px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <i class="icon-direction success font-large-1 float-left"></i>
                                        <div class="align-self-center">
                                            <h3 class="success">الملاحظات</h3>
                                            <div class="media-body text-left">
                                                <span>{{ $place->gnump11 }}</span>
                                            </div>

                                        </div>

                                    </div>


                                    <form method="POST" action="{{route('comments.store')}}">
                                        @csrf

                                        <div class="form-group">
                                            <textarea type="text" name="desc" class="form-control"></textarea>
                                            <input type="hidden" name="place_id" value="{{ $place->id }}"
                                                class="form-control">
                                            <button type="submit" class="btn btn-primary">إضافة ملاحظة</button>
                                    </form>
                                </div>
                                @include('place.comments',['comments'=>$place->comments,'place_id'=>$place->id])
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
















































































































</section>

@endsection