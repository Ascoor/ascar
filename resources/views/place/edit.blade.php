@extends('layouts.layout')



@section('content')
@extends('layouts.layout')



@section('content')
<div class="cotainer">
</div>
    <div class="head">
      <center>
      <h1>محافظة الدقهلية</h1>
      <h2>وحدة المتغيرات المكانية</h2>
    </center>
    </div>

    <div class="container" style="padding-top: 12%">
 <form action="{{ route('places.update', $place->id) }}" method="POST">
  @csrf
  @method ('PUT')
      <div class="form-group">
        <input value="{{ $place->gnump}}" type="number" name="gnump" placeholder="مسلسل المتغير">
        <input class="form-control" type="number" name="gnumh" placeholder="خط العرض">
        <input class="form-control" type="number" name="gnumw" placeholder="خط الطول">
      </div>
 
      <div class="form-group">
      <input class="form-control" type="text" name="gnump1" placeholder="المحافظة">
      <input class="form-control" type="text" name="gnump2" placeholder="المركز">
      <input class="form-control" type="text" name="gnump3" placeholder="القرية">
      <input class="form-control" type="text" name="gnump4" placeholder="نوع الأملاك">
      <input class="form-control" type="text" name="gnump5" placeholder="جهة الولاية">
      <input class="form-control" type="text" name="gnump6" placeholder="القانونية">
      <input class="form-control" type="text" name="gnump7" placeholder="الرد">
      <input class="form-control" type="text" name="gnump8" placeholder="تفاصيل الرد">
      <input class="form-control" type="text" name="gnump9" placeholder="موقف الإزالة">
      <input class="form-control" type="text" name="gnump10" placeholder="المرفقات">
  {!! $place->detail !!}
    </div>
    <div class="form-group">
    <button type="submit" class="btm btn-danger">تحديث</button>
</div>
    </div>
  </form>

</div>
<center><h3> Copyright Ask-ar.com 2022
</h3></center>
</div>

@endsection
@endsection