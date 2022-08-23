@extends('layouts.app')



@section('content')

  
 <form action="{{ route('places.store') }}" method="POST">
  @csrf
      <div class="form-group">
            
       <label>مسلسل المتغير</label>
       <input class="form-control" type="number" name="gnump" placeholder="مسلسل المتغير">
       <label>خط العرض</label>
       <input class="form-control" type="float" name="gnumh" placeholder="خط العرض">
       <label>خط الطول</label>
        <input class="form-control" type="float" name="gnumw" placeholder="خط الطول">
      </div>
 
      <div class="form-group">
        <label>المحافظة</label>
      <input class="form-control" type="text" name="gnump1" placeholder="المحافظة">
      <label>المركز</label>
      <input class="form-control" type="text" name="gnump2" placeholder="المركز">
      <label>القرية</label>
      <input class="form-control" type="text" name="gnump3" placeholder="القرية">
      <label>نوع الأملاك</label>
      <input class="form-control" type="text" name="gnump4" placeholder="نوع الأملاك">
      <label>جهة الولاية</label>
      <input class="form-control" type="text" name="gnump5" placeholder="جهة الولاية">
      <label>القانونية</label>
      <input class="form-control" type="text" name="gnump6" placeholder="القانونية">
      <label>الرد</label>
      <input class="form-control" type="text" name="gnump7" placeholder="الرد">
      <label>تفاصيل الرد</label>
      <input class="form-control" type="text" name="gnump8" placeholder="تفاصيل الرد">
      <label>موقف الإزالة</label>
      <input class="form-control" type="text" name="gnump9" placeholder="موقف الإزالة">
      <label>المرفقات</label>
      <input class="form-control" type="text" name="gnump10" placeholder="المرفقات">


    </div>
    <div class="form-group">
    <button type="submit" class="btm btn-danger">إضافة</button>
</div>
    </div>
  </form>
</div>
@endsection