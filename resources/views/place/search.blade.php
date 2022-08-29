@extends('layouts.app', ['activePage' => 'search', 'titlePage' => __('Dashboard')])

@section('content')
  
<div class="content">
  <div class="container-fluid">
    <div class="search" >
      <span>      <form class="form-group" type="get"  action="{{ url('/search')  }}">
          <input type="search" placeholder="بحث "  class="form-controller mr-sm2"  name="query" >
          <button class="btn btn-outline-danger pt-1 my-2 my-sm-0" type="submit>">بحث</button></input>
      

              
          </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">نتائج البحث</h4>
            <p class="card-category"> يمكنك البحث برقم المتغير او المركز او القرية</p>
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
         <!--     <th class="table-warning">نوع الأملاك</th>
              <th class="table-warning">جهة الولاية</th>
              <th class="table-warning">القانونية</th>
              <th class="table-warning">الرد</th>
              <th class="table-warning">تفاصيل الرد</th>
              <th class="table-warning">موقف الإزالة</th>--->


              <th class="table-warning">التاريخ</th>
              <th class="table-warning">تعديل</th>
              <th class="table-warning">عرض</th>
              <th class="table-warning">التحكم</th>

            </thead>
            <tbody>
              @foreach ($places as $item)
            <tbody>
              <tr>



                <th class="table-light">{{ $item->gnump }}</th>
                <td class="table-light">{{ $item->gnumh }}</td>
                <td class="table-light">{{ $item->gnumw }}</td>
                <td class="table-light">{{ $item->gnump1 }}</td>
                <td class="table-light">{{ $item->gnump2 }}</td>
                <td class="table-light">{{ $item->gnump3 }}</td>
                <!---<td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->
                 <td class="table-light">{{ $item->gnump10 }}</td>

<td class="table-light">
<span>
    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
</span>
</td>
<td class="table-light">     
<span>
    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
</span>     
</td> 

<td class="table-light">
    <span>
        <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حفظ المتغير </a>
    </span>
</td>



</tr>
</tbody>
@endforeach
                
              </table>
            </div>
          </div>
        </div>
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