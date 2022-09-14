@extends('layouts.app', ['activePage' => 'place.edit', 'titlePage' => __('الصفحة الرئيسية')])


@section('content')


@if ($message = Session::get('تمت'))
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @endif
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
                @endif


<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
  <h4 class="card-title"> رقم المتغير {{ $place->gnump }}</h4>
            <p class="card-category">{{ __(' تعديل بيانات المتغير') }}</p>
        </div>
      </div>

    </div>
    <div class="row">

        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $item)
                <li>
                    {{$item}}
                </li>
            @endforeach
        </ul>
        @endif


      <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                    <form action={{ route('places.update', $place->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlInput1">مسلسل المتغير  </label>
            <input type="number" name="gnump" value="{{ $place->gnump }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">خط العرض </label>
            <input type="float" name="gnumh" value="{{ $place->gnumh }}">

        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">خط الطول  </label>
            <input type="float" name="gnumw" value="{{ $place->gnumw }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">المحافظة  </label>
                <input type="text" name="gnump1" value="{{ $place->gnump1 }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> المركز  </label>
                <input type="text" name="gnump2" value="{{ $place->gnump2 }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">القرية   </label>
            </div>
            <input type="text" name="gnump3" value="{{ $place->gnump3 }}">
            <div class="form-group">
              <label for="exampleFormControlInput1">نوع الأملاك  </label>
              <input type="text" name="gnump4" value="{{ $place->gnump4 }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">جهة الولاية  </label>
                <input type="text" name="gnump5" value="{{ $place->gnump5 }}">
              </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">القانونية  </label>
                <input type="text" name="gnump6" value="{{ $place->gnump6 }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">الرد  </label>
                <input type="text" name="gnump7" value="{{ $place->gnump7 }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">تفاصيل الرد  </label>
                <input type="text" name="gnump8" value="{{ $place->gnump8 }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">موقف الإزالة  </label>
                <input type="text" name="gnump9" value="{{ $place->gnump9 }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> التاريخ </label>
                <input type="date" name="gnump10" value="{{ $place->gnump10 }}">

            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">التعليق  </label>
                <input type="text" name="gnump11" value="{{ $place->gnump11 }}">

            </div>


            <div class="form-group">


                <label for="exampleFormControlInput1">Photo  </label>
                <input type="file"  name="photo1" class="form-control"   >
            </div>


                <div class="form-group">

                <button class="btn btn-danger" class="form-group"type="submit">save</button>
            </div>

          </form>
      </div>
    </div>
  </div>            </div>
            </div>
        </div>

        @endsection
