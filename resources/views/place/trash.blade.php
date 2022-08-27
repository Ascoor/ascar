@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">متغيرات قيد الحفظ</h4>
          <p class="card-category"> يمكنك إستئناف العمل في تلك المتغيرات</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
         
                      <th class="table-warning">مسلسل المتغير</th>
                      <th class="table-warning">خط العرض</th>
                      <th class="table-warning">خط الطول</th>
                      <th class="table-warning">المحافظة</th>
                      <th class="table-warning">المركز</th>
                      <th class="table-warning">القرية</th>
                      <th class="table-warning">نوع الأملاك</th>
                      <th class="table-warning">جهة الولاية</th>
                      <th class="table-warning">القانونية</th>
                      <th class="table-warning">الرد</th>
                      <th class="table-warning">تفاصيل الرد</th>
                      <th class="table-warning">موقف الإزالة</th>
                      <th class="table-warning">التاريخ</th>
          
                      <th class="table-warning">التحكم</th>
  

            </thead>
            @foreach ($places as $item)
            <tbody>
              <tr>
              @php
                  $i = 0;
                
              @endphp
                    
                  
                    <th class="table-light">{{ $item->gnump }}</th>
                    <td class="table-light">{{ $item->gnumh }}</td>
                    <td class="table-light">{{ $item->gnumw }}</td>
                    <td class="table-light" >{{ $item->gnump1 }}</td>
                    <td class="table-light">{{ $item->gnump2 }}</td>
<td class="table-light">{{ $item->gnump3 }}</td>
<td class="table-light">{{ $item->gnump4 }}</td>
<td class="table-light">{{ $item->gnump5 }}</td>
<td class="table-light">{{ $item->gnump6 }}</td>
<td class="table-light">{{ $item->gnump7 }}</td>
<td class="table-light">{{ $item->gnump8 }}</td>
<td class="table-light">{{ $item->gnump9 }}</td>
<td class="table-light">{{ $item->gnump10 }}</td>
                  
                  
        
                
<td class="table-light">
<span>
        <a class="btn btn-success" href="{{ route('place.back.from.trash', $item->id) }}">إستئناف العمل</a>
    </span>     
<!---</td> 
<td>     
    <span>
        <a class="btn btn-danger" href="{{ route('place.delete.from.database', $item->id) }}">حذف </a>
</span>
</td>-->



</tr>
</tbody>
@endforeach
        
      </table>
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