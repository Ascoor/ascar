@extends('layouts.app', ['activePage' => 'show', 'titlePage' => __('تسلسل المتغيرات')])

@section('content')

@section('content')

             
<div class="content">
  <div class="container-fluid">

      <div class="col-md-12">
        
        <div class="card ">
          <div class="card-header card-header-primary">
            <h4 class="card-title">المتغير رقم {{ $place->gnump }}:</h4>
            <p class="card-category">{{ __(' بيانات المتغير') }}</p>
          </div>
          <div class="card-body">
        <center>
        <span ><a  href="/places" >عودة للخلف </a></span></center>

</div>



    
<div class="table">
  <table>
    <tr>
      
      
          
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
        </tr>
        <tbody>
          <tr>
            
            <th class="table-light">{{ $place->gnump}}</td>
      <td class="table-light">{{ $place->gnumh }}</td> 
      <td class="table-light">{{ $place->gnumw }}</td>
      <td  class="table-light">{{ $place->gnump1 }}</td>
      <td  class="table-light">{{ $place->gnump2 }}</td>
      <td  class="table-light">{{ $place->gnump3 }}</td>
      <td  class="table-light">{{ $place->gnump4 }}</td>
      <td  class="table-light">{{ $place->gnump5 }}</td>
      <td  class="table-light">{{ $place->gnump6 }}</td>
      <td  class="table-light">{{ $place->gnump7 }}</td>
      <td  class="table-light">{{ $place->gnump8 }}</td>
      <td  class="table-light">{{ $place->gnump9 }}</td>
      <td  class="table-light">{{ $place->gnump10 }}</td>
<td class="table-light">
        <span>
            <a class="btn btn-info" href="{{ route('places.edit', $place->id) }}"> تعديل</a>
        </span>
    </td>
    </tr>
        </tbody>
</table>
    </div>
    {!! $place->detail !!}

    

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