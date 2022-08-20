@extends('layouts.app')



@section('content')
 



  
  <div class="card">
    <div class="container" style="padding-top: 2%">
      <div id="card-body">
        <span ><a  href="/places"   class="card-text">عودة للخلف </a></span> المتغير رقم: {{ $place->gnump }}
        
      </p>
    </div>
  </div>
  <div class="container" style="padding-top: 2%">
  <form action="{{ route('places.update', $place->id) }}" method="POST">
    @csrf
    
        @method ('PUT')
        <div class="form-group">
    
       <label>مسلسل المتغير</label>
       <input value="{{ $place->gnump }}" type="number" name="gnump" placeholder="مسلسل المتغير">
    
       <label>خط العرص</label>
       <input value="{{ $place->gnumh }}" type="number" name="gnumh" placeholder="خط العرض">
       <label>خط الطول</label>
       <input value="{{ $place->gnumw }}" type="number" name="gnumw" placeholder="خط الطول">
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
                <label>المرفقات</label>
        <input value="{{ $place->gnump10 }}" type="text" name="gnump10" placeholder="المرفقات">
  {!! $place->detail !!}
    </div>
    <div class="form-group">
    <button type="submit" class="btm btn-danger">تحديث</button>
</div>
    </div>
  </form>


@endsection