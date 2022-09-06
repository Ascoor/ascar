@extends('layouts.app', ['activePage' => 'create', 'titlePage' => __('إضافة متغير')])

@section('content')


<div class="content">
  <div class="container-fluid">

    <div class="col-md-12">

      <div class="card ">
        <div class="card-header card-header-primary">
          <h4 class="card-title">إضافة متغير</h4>
          <p class="card-category">{{ __(' بيانات المتغير') }}</p>
        </div>
<div class="row">
  @if (count($errors)>0)
      <ul>
        @foreach ($errors as $item)
            <li>
              {{$items}}
            </li>
        @endforeach
      </ul>
  @endif
</div>

        <div class="card-body">
          <div class="col">
            <form action="{{route('places.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <input type="number" name="gnump" placeholder="مسلسل المتغير">
              </div>
              <div class="form-group">
                <input type="float" name="gnumh" placeholder="خط العرض">
              </div>
              <div class="form-group">
                <input type="float" name="gnumw" placeholder="خط الطول">
              </div>
              <div class="form-group">
                <input type="text" name="gnump1" placeholder="المحافظة">
              </div>
              <div class="form-group">
                <input type="text" name="gnump2" placeholder="المركز">
              </div>
              <div class="form-group">
                <input type="text" name="gnump3" placeholder="القرية">
              </div>
              <div class="form-group">
                <input type="text" name="gnump4" placeholder="نوع الأملاك">

              </div>

              <div class="form-group">
                <input type="text" name="gnump5" placeholder="جهة الولاية">
              </div>
              <div class="form-group">
                <input type="text" name="gnump6" placeholder="القانونية">

              </div>
              <div class="form-group">
                <input type="text" name="gnump7" placeholder="الرد">
              </div>
              <div class="form-group">
                <input type="text" name="gnump8" placeholder="تفاصيل الرد">
              </div>
              <div class="form-group">
                <input type="text" name="gnump9" placeholder="موقف الإزالة">
              </div>
              <div class="form-group">
                <label><a>التاريخ</a>
                  <input type="date" name="gnump10" placeholder="التاريخ">
                </div>
                
                <div class="form-group">
                <label><a>الملاحظات</a>
                  <input type="text" name="gnump11" placeholder="الملاحظات"></label>
                </div>
                <div class="form-group">
                  <label><a>التعليق</a>
                  <input type="text" name="gnump13" placeholder="التعليق"></label>
                </div>
              <div class="form-group form-file-upload form-file-simple">
                <label><a>المرفق الأول </a>
                <input type="text"  class="form-control inputFileVisible" placeholder="Simple chooser..."></label>
                <input type="file" name="photo1" class="inputFileHidden">
     


              <div class="form-group">
                <button class="btn btn-danger" type="submit">حفظ</button>
              </div>

            </form>
         
        </div>
        <br>



        @if ($message = Session::get('تمت'))
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif

        @endsection

        @push('js')
        <script>
          $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
      });
        </script>
        @endpush