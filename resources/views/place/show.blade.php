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

  <div class="container" style="padding-top: 2%">
        <div class="card-body">
    
        <span ><a  href="/places"   class="card-text">عودة للخلف </a></span> المتغير رقم: {{ $place->gnump }}
        
      </p>
    </div>
  
    <div class="row">
      <div class="col">
      <span>{{ $place->gnumh }}<a>مسلسل المتغير  </a></span>
      </div>
      <div class="col">
        <span>2 of 3</span>
      </div>
      <div class="col">
        <span>3 of 3</span>
      </div>
    </div>
  </div>
      <th>مسلسل المتغير:</th>
      <td >{{ $place->gnump}}</td>
   
      <th class="table-warning">خط العرض:</th>
      <td class="table-primary">{{ $place->gnumh }}</td> 
      <th class="table-warning">خط الطول:</th>
      <td class="table-secondary">{{ $place->gnumw }}</td>
   
      <th class="table-warning">المحافظة:</th>
      <td  class="table-primary">{{ $place->gnump1 }}</td>
   
      <th class="table-warning">المركز:</th>
      <td  class="table-danger">{{ $place->gnump2 }}</td>
   
      <th class="table-warning">القرية:</th>
      <td  class="table-primary">{{ $place->gnump3 }}</td>
      <th class="table-warning">نوع الأملاك:</th>
      <td  class="table-secondary">{{ $place->gnump4 }}</td>
      <th class="table-warning">جهة الولاية:</th>
      <td  class="table-success">{{ $place->gnump5 }}</td>
      <th class="table-warning">القانونية:</th>
      <td  class="table-danger">{{ $place->gnump6 }}</td>
    
      <th class="table-warning">الرد:</th>
      <td  class="table-warning">{{ $place->gnump7 }}</td>
      <th class="table-warning">تفاصيل الرد:</th>
      <td  class="table-info">{{ $place->gnump8 }}</td>

      <th class="table-warning">موقف الإزالة:</th>
      <td  class="table-light">{{ $place->gnump9 }}</td>

      <th class="table-warning">المرفقات:</th>
      <td  class="table-dark">{{ $place->gnump10 }}</td>
    </div>
    {!! $place->detail !!}



</div>
</div>
</div>
<center>
  <h3> Copyright Ask-ar.com 2022
  </h3>
</center>
</div>
@endsection
