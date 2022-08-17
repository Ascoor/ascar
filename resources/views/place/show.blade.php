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

  @csrf
          
  
  <label for="exampleforControllerinput"
  
  
  
  
  <label class="form-controlleronput">{{$place->gnump }}</label>
          <label for=""></label>
   
   


</div>
<center><h3> Copyright Ask-ar.com 2022
</h3></center>
</div>


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

 <div class="card-body">

   <tr>
  
    <div class="show">
      <th>مسلسل المتغير:</th>
      <td >{{ $place->gnump}}</td>
    </div>
    <div class="show">
      <th class="table-warning">خط العرض:</th>
      <td class="table-primary">{{ $place->gnumh }}</td> 
    </div>  
    <div class="show">
      <th class="table-warning">خط الطول:</th>
      <td class="table-secondary">{{ $place->gnumw }}</td>
    </div>
    <div class="show">
      <th class="table-warning">المحافظة:</th>
      <td  class="table-primary">{{ $place->gnump1 }}</td>
    </div>
    <div class="show">
      <th class="table-warning">المركز:</th>
      <td  class="table-danger">{{ $place->gnump2 }}</td>
    </div>
    <div class="show">
      <th class="table-warning">القرية:</th>
      <td  class="table-primary">{{ $place->gnump3 }}</td>
    </div>
    <div class="show">
      <th class="table-warning">نوع الأملاك:</th>
      <td  class="table-secondary">{{ $place->gnump4 }}</td>
    </div>
    <div class="show">
      <th class="table-warning">جهة الولاية:</th>
      <td  class="table-success">{{ $place->gnump5 }}</td>
    </div>
    <div class="show">
      <th class="table-warning">القانونية:</th>
      <td  class="table-danger">{{ $place->gnump6 }}</td>
    </div>
    <div class="show">
      <th class="table-warning">الرد:</th>
      <td  class="table-warning">{{ $place->gnump7 }}</td>
    </div>
    <div class="show">
      <th class="table-warning">تفاصيل الرد:</th>
      <td  class="table-info">{{ $place->gnump8 }}</td>>
    </div>
    <div class="show">
      <th class="table-warning">موقف الإزالة:</th>
      <td  class="table-light">{{ $place->gnump9 }}</td>
    </div>
    <div class="show">
      <th class="table-warning">المرفقات:</th>
      <td  class="table-dark">{{ $place->gnump10 }}</td>
    </div>
    {!! $place->detail !!}

    
</tr>

</div>
</div>
</div>
<center>
  <h3> Copyright Ask-ar.com 2022
  </h3>
</center>
</div>
@endsection