@extends('layouts.app', ['activePage' => 'place.edit', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')

             
<div class="content">
  <div class="container-fluid">

      <div class="col-md-12">
        
        <div class="card ">
          <div class="card-header card-header-primary">
            <h4 class="card-title"> رقم المتغير {{ $place->gnump }}</h4>
            <p class="card-category">{{ __(' تعديل بيانات المتغير') }}</p>
          </div>
          <div class="card-body">
            <form action="{{ route('places.update', $place->id) }}" method="POST">
              @csrf
              
                  @method ('PUT')
                  <div class="form-group">
              
                 <label>مسلسل المتغير</label>
                 <input value="{{ $place->gnump }}" type="number" name="gnump" placeholder="مسلسل المتغير">
              
                 <label>خط العرص</label>
                 <input value="{{ $place->gnumh }}" type="float" name="gnumh" placeholder="خط العرض">
                 <label>خط الطول</label>
                 <input value="{{ $place->gnumw }}" type="float" name="gnumw" placeholder="خط الطول">
                </div>
                
                <div class="form-group">
                  <label>المحافظة</label>
                  <input value="{{ $place->gnump1 }}" type="text" name="gnump1" placeholder="المحافظة">
                  <label>المركز</label>
                  <input value="{{ $place->gnump2 }}" type="text" name="gnump2" placeholder="المركز">
                  <label>القرية</label>
                  <input value="{{ $place->gnump3 }}" type="text" name="gnump3" placeholder="القرية">
                  <label>نوع الأملاك</label>
                  <input value="{{ $place->gnump4 }}" type="text" name="gnump4" placeholder="نوع الأملاك">
                  <label>جهة الولاية</label>
                  <input value="{{ $place->gnump5 }}" type="text" name="gnump5" placeholder="جهة الولاية">
                  <label>القانونية</label>
                  <input value="{{ $place->gnump6 }}" type="text" name="gnump6" placeholder="القانونية">
                  <label>الرد</label>
                  <input value="{{ $place->gnump7 }}" type="text" name="gnump7" placeholder="الرد">
                  <label>تفاصيل الرد</label>
                  <input value="{{ $place->gnump8 }}" type="text" name="gnump8" placeholder="تفاصيل الرد">
                  <label>موقف الإزالة</label>
                  <input value="{{ $place->gnump9 }}" type="text" name="gnump9" placeholder="موقف الإزالة">
                  <input value="{{ $place->gnump10 }}" type="date" name="gnump10" placeholder="التاريخ">

                <div class="form-group">
                  <button type="submit" class="btm btn-danger">تحديث</button>
                </div>
              </div>
            </form>
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


