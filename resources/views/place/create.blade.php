@extends('layouts.app', ['activePage' => 'create', 'titlePage' => __('إضافة متغير')])

@section('content')

<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">إضافة متغير</h1>
            <a class="btn btn-success" href="{{route('places.index')}}">جميع المتغيرات</a>
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
      <form action="{{route('places.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">مسلسل المتغير  </label>
              <input type="number" name="gnump" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">خط العرض </label>
              <input type="float" name="gnumh" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">خط الطول  </label>
              <input type="float" name="gnumw" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">المحافظة  </label>
              <input type="text" name="gnump1" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"> المركز  </label>
              <input type="text" name="gnump2" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">القرية   </label>
              <input type="text" name="gnump3" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">نوع الأملاك  </label>
              <input type="text" name="gnump4" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">جهة الولاية  </label>
              <input type="text" name="gnump5" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">القانونية  </label>
              <input type="text" name="gnump6" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">الرد  </label>
              <input type="text" name="gnump7" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">تفاصيل الرد  </label>
              <input type="text" name="gnump8" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">موقف الإزالة  </label>
              <input type="text" name="gnump9" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"> التاريخ </label>
              <input type="date" name="gnump10" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">التعليق  </label>
              <input type="text" name="gnump11" class="form-control"   >
            </div>




                <label for="exampleFormControlInput1">Photo  </label>
                <input type="file"  name="photo1" class="form-control"   >


            <div class="form-group">

                <button class="btn btn-danger" class="form-group"type="submit">save</button>
            </div>

          </form>
      </div>
    </div>
  </div>

        @endsection

