@extends('layouts.app', ['activePage' => 'place.create', 'titlePage' => __('إضافة متغير ')])


@section('content')

<div class="card">
    <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #153257;
    align-items: center;
    text-align: center;">
        <h1 class="display-4">اضافة بيانات المتغير</h1>


        <p class="lead" style="text-align: center; padding-top: 20px"></p>

        <a class="btn btn-ask1" href="{{ route('places') }}">جميع المتغيرات</a>
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
        {{ session('status') }}
        @endif


        @if(count($errors) > 0)

        @foreach($errors->all() as $item)
        <div class="alert alert-danger" role="alert">
            {{ $item }}

        </div>
        @endforeach

        @endif


        <form action="{{route('place.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <label for="exampleFormControlInput1">الإجراءات المنتهية </label>

                @foreach($tags as $item)
                <input type="checkbox" name="tags[]" value="{{ $item->id }}">
                <label for="">{{ $item->tag }}</label>
                @endforeach
            </div>

            <div class="form-group">
                <label for="category_id">حالة المتغير</label>
                <select class="form-control" name="photo3" id="category">

                    @foreach ($categories as $category)
                    @if ($category->id == $place->photo3)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>

                    @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif

                    @endforeach
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">مسلسل المتغير </label>
                <input type="number" name="gnump" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">خط العرض </label>
                <input type="float" name="gnumh" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">خط الطول </label>
                <input type="float" name="gnumw" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">المحافظة </label>
                <input type="text" name="gnump1" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> المركز </label>
                <input type="text" name="gnump2" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">القرية </label>
                <input type="text" name="gnump3" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">نوع الأملاك </label>
                <input type="text" name="gnump4" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">جهة الولاية </label>
                <input type="text" name="gnump5" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">القانونية </label>
                <input type="text" name="gnump6" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">الرد </label>
                <input type="text" name="gnump7" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">تفاصيل الرد </label>
                <input type="text" name="gnump8" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">موقف الإزالة </label>
                <input type="text" name="gnump9" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> التاريخ </label>
                <input type="date" name="gnump10" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">الملاحظات </label>
                <textarea class="form-control" name="gnump11" rows="3"></textarea>


            </div>

            <div class="form-group">

                <label for="exampleFormControlInput1">الصور </label>
                <input type="file" name="photo1[]" multiple>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">المرفقات </label>
                <input type="file" name="photo2" class="form-control">
            </div>

            <div class="form-group">

                <button class="btn btn-danger" type="submit">save</button>
            </div>

        </form>
    </div>
</div>
</div>

@endsection