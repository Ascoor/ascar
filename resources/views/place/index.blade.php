@extends('layouts.layout')


@section('content')

<div class="head">
      <h1>محافظة الدقهلية</h1>
      <h2>وحدة المتغيرات المكانية</h2>
    </div>
    <div class="crud">
<div class="container">

    <div class="outputs">
      <div class="searchBlock">
        <input type="text" id="search" placeholder="بحث">

        <div class="btnSearch">
          <button id="searchTitle">بحث بالمركز</button>
          <button id="searchCategory">بحث بالتاريخ</button>
        </div>
        
        <div id="deleteAll"></div>


          <table>
<th class="table-warning">م</th>
<th class="table-warning">مسلسل المتغير</th>
<th class="table-warning">خط الطول</th>
<th class="table-warning">خط العرض</th>
<th class="table-warning">المحافظة</th>
<th class="table-warning">المركز</th>
<th class="table-warning">القرية</th>
<th class="table-warning">نوع الأملاك</th>
<th class="table-warning">القانونية</th>
<th class="table-warning">الرد</th>
<th class="table-warning">تفاصيل الرد</th>
<th class="table-warning">موقف الإزالة</th>
<th class="table-warning">المرفقات</th>
<th class="table-warning">تعديل</th>
<th class="table-warning">عرض</th>
<th class="table-warning">حذف</th>
</th>
<tbody>
  @foreach ($places as $item )
   
  <tr>
      <td class="table-success" scope="row">{{++$i}}</td>
      <td class="table-success" >{{ $item->gnump }}</td>
      <td class="table-success" >{{ $item->gnumh }}</td>
      <td class="table-success" >{{ $item->gnumw }}</td>
      <td class="table-success" >{{ $item->gnum1 }}</td>
      <td class="table-success" >{{ $item->gnum2 }}</td>
      <td class="table-success" >{{ $item->gnum3 }}</td>
      <td class="table-success" >{{ $item->gnum4 }}</td>
      <td class="table-success" >{{ $item->gnum5 }}</td>
      <td class="table-success" >{{ $item->gnum6 }}</td>
      <td class="table-success" >{{ $item->gnum7 }}</td>
      <td class="table-success" >{{ $item->gnum8 }}</td>
      <td class="table-success" >{{ $item->gnum9 }}</td>  
        <td class="table-success" >
        <a href="{{route('places.edit')}}">تعديل</a>
        <a href="{{route('places.show')}}">عرض</a>
        <form action="{{route('places.destroy',$item->id)}}">
        @csrf
        @method('DELETE')  
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
  </tr>
@endforeach
        </tbody>
          </table>
         {!! $place->links() !!}
        </div>
      </div>
    </div>
  <center><h3> Copyright Ask-ar.com 2022
  </h3></center>
  </div>
</div>



@endsection