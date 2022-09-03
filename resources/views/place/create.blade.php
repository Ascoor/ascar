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
          <div class="card-body">
          
            <form action="{{ route('places.store')}}" method="POST">
              @csrf

              
               
              <div class="form-group">
                <input type="number" name="gnump" placeholder="مسلسل المتغير">
                <input type="float" name="gnumh" placeholder="خط العرض">
                <input type="float" name="gnumw" placeholder="خط الطول">
                <div class="form-group" row="3">
                  <input  type="text" name="gnump1" placeholder="المحافظة">
                  <input  type="text" name="gnump2" placeholder="المركز">
                  <input  type="text" name="gnump3" placeholder="القرية">
                  <div class="form-group">
                    <input  type="text" name="gnump4" placeholder="نوع الأملاك">
                    <input  type="text" name="gnump5" placeholder="جهة الولاية">
                    <input  type="text" name="gnump6" placeholder="القانونية">
                    <div class="form-group">
                          <input  type="text" name="gnump7" placeholder="الرد">
                          <input  type="text" name="gnump8" placeholder="تفاصيل الرد">
                          <input  type="text" name="gnump9" placeholder="موقف الإزالة">
                          <input  type="file" name="photo1" placeholder="مرفقات ">
                          <input  type="file" name="photo2" placeholder=" مرفقات">
                          <input  type="file" name="photo3" placeholder=" مرفقات">
                          <input  type="file" name="photo4" placeholder=" مرفقات">
                          
                          <label><a>التاريخ</a>
                          <input  type="date" name="gnump10" placeholder="التاريخ"></label>
                        </div>
                <div class="form-group">
                  <button type="submit" class="btm btn-danger">إضافة</button>
                </form>
                </div>
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