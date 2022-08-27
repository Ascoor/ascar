@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
 
  
<div class="content">
  <div class="container-fluid">

      <div class="col-md-12">
        <form method="post"  action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
          @csrf
          @method('put')

          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('إضافة متغير') }}</h4>
              <p class="card-category">{{ __(' بيانات المتغير') }}</p>
            </div>
            <div class="card-body">
              <div class="form-row">
                <div class="row">
                  <div class="col-4">
                    <input class="form-control" type="number" name="gnump" placeholder="مسلسل المتغير">
                  </div>      
                  
                  <div class="col-4">
                    <input class="form-control" type="float" name="gnumh" placeholder="خط العرض">
                  </div>  
                  <div class="col-4">
                          <input class="form-control" type="float" name="gnumw" placeholder="خط الطول">
                  </div>
             
                  <div class="col-4">
                          <input class="form-control" type="text" name="gnump1" placeholder="المحافظة">
                  </div>
             
                  <div class="col-3">
                          <input class="form-control" type="" name="gnumw2" placeholder="المركز">
                  </div>
             
                  <div class="col-2">
                    <input class="form-control" type="text" name="gnump3" placeholder="القرية">
                  </div>
                  
                  <div class="col-4">
                    <input class="form-control" type="text" name="gnump4" placeholder="نوع الأملاك">
                  </div>
                    <div class="col-4">
                      <input class="form-control" type="text" name="gnump5" placeholder="جهة الولاية">
                    </div>
                    
                    <div class="col-4">
                      <input class="form-control" type="text" name="gnump6" placeholder="القانونية">
                    </div>
                    <div class="col-6">
                    
                    <input class="form-control form-control-lg" type="text" name="gnump7" placeholder="الرد">
                  </div>
                  <div class="col-5">
                    <input class="form-control form-control-lg" type="text" placeholder="تفاصيل الرد">
                  </div>
              
                    <input class="form-control" type="text" name="gnump9" placeholder="موقف الإزالة">
                  </div>
                  
              <input class="form-control" type="text" name="gnump10" placeholder="المرفقات">
            </div>
    </div>
    <button type="submit" class="btm btn-danger">إضافة</button>
</div>
</div>  
    </div>
  </form>
</div>


@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush