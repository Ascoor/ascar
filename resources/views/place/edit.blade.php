@extends('layouts.app', ['activePage' => 'place.edit', 'titlePage' => __('تعديل بيانات المتغير')])


@section('content')


@if(count($errors) > 0)
<ul>
    @foreach($errors->all() as $item)
    <li>
        {{ $item }}
    </li>
    @endforeach
</ul>
@endif

<div class="card">
    <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #031f42;
    align-items: center;
    text-align: center;">
        <h3 class="display-5">تعديل بيانات المتغير </h3>


        <p class="lead" style="text-align: center; padding-top: 20px">{{$place->gnump}}</p>

        <a class="btn btn-ask1" href="{{route('place.show',['slug'=> $place->slug])}}">الرجوع للمتغير</a>
        <a class="btn btn-ask1" href="{{ route('places') }}">جميع المتغيرات</a>

    </div>
    @if($message = Session::get('تمت'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif
    @if(session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
        @endif
        <div class="container">

            <div class="card-body">


                <div class="form-group">
                    <form action="{{route('place.update',['id'=> $place->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">

                            <label for="exampleFormControlInput1">الإجراءات المنتهية </label>

                            @foreach($tags as $item)
                            <input type="checkbox" name="tags[]" value="{{ $item->id }}" @foreach ($place->tag as
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
                                <label for="category_id">تصنيف المتغير</label>
                                <select class="form-control" name="category_id" id="category">

                                    @foreach ($categories as $category)
                                    @if ($category->id == $place->category_id)
                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>

                                    @else
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif

                                    @endforeach


                                </select>
                            </div>
                            <div class=" form-group">
                                <label for="exampleFormControlInput1">مسلسل المتغير </label>
                                <input type="number" name="gnump" class="form-control" value="{{ $place->gnump }}">
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlInput1">خط العرض </label>
                                <input type="float" name="gnumh" class="form-control" value="{{ $place->gnumh }}">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">خط الطول </label>
                                <input type="float" name="gnumw" class="form-control" value="{{ $place->gnumw }}">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">المحافظة </label>
                                <input type="text" name="gnump1" class="form-control" value="{{ $place->gnump1 }}">


                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> المركز </label>
                                <input type="text" name="gnump2" class="form-control" value="{{ $place->gnump2 }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">القرية </label>
                                <input type="text" name="gnump3" class="form-control" value="{{ $place->gnump3 }}">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">نوع الأملاك </label>
                                <input type="text" name="gnump4" class="form-control" value="{{ $place->gnump4 }}">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">جهة الولاية </label>
                                <input type="text" name="gnump5" class="form-control" value="{{ $place->gnump5 }}">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">القانونية </label>
                                <input type="text" name="gnump6" class="form-control" value="{{ $place->gnump6 }}">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">الرد </label>
                                <input type="text" name="gnump7" class="form-control" value="{{ $place->gnump7 }}">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">تفاصيل الرد </label>
                                <input type="text" name="gnump8" class="form-control" value="{{ $place->gnump8 }}">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">موقف الإزالة </label>
                                <input type="text" name="gnump9" class="form-control" value="{{ $place->gnump9 }}">

                            </div>
                            <div class="md-form">
                                <label for="exampleFormControlInput1"> التاريخ </label>
                                <input dir="rtl" name="gnump10" placeholder="التاريخ المحدد" type="date"
                                    value="{{ $place->gnump10 }}" class="form-control datepicker">
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
                            <input type="file" name="photo2[]" class="form-control" multiple>
                        </div>

                        <div class="form-group">

                            <button class="btn btn-danger" type="submit">حفظ</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!--
                                    <div class="form-group">

                                        <label for="exampleFormControlInput1">المرفقات 3</label>
                                        <input type="file" name="category_id" class="form-control" >
                                    </div>


                                    <div class="form-group">

                                        <label for="exampleFormControlInput1">المرفقات 4</label>
                                        <input type="file" name="photo4" class="form-control" >
                                    </div>

         -->






































































@endsection