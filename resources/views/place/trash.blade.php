@extends('layouts.layout')
@section('content')
<div class="head">
    <center>
        <h1>محافظة الدقهلية</h1>
        <h2>وحدة المتغيرات المكانية</h2>
        <h3>المحذوف مؤقتاً</h3>
        <a class="btn btn-primary btn-lg" href="{{route('places.index')}}" role="Home">الصفحة الرئيسية</a>

    </center>
</div>
            <div class="tableContainer">

                <table>
              <tr>
                  <th class="table-warning">م</th>
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
                    <th class="table-warning">المرفقات</th>
                    <th class="table-warning">تعديل</th>
                    <th class="table-warning">عرض</th>
                    <th class="table-warning">حذف</th>
              </tr>
                   
                        @foreach ($places as $item)
                        <tbody>
                          <tr>
                          @php
                              $i = 0;
                            
                          @endphp
                                
           <th > {{ $item->id }}</th>
            <td>{{ $item->gnump }}</td>
            <td>{{ $item->gnumw }}</td>
            <td>{{ $item->gnumw }}</td>
            <td>{{ $item->gnump1 }}</td>
            <td>{{ $item->gnump2 }}</td>
            <td>{{ $item->gnump3 }}</td>
            <td>{{ $item->gnump4 }}</td>
            <td>{{ $item->gnump5 }}</td>
            <td>{{ $item->gnump6 }}</td>
            <td>{{ $item->gnump7 }}</td>
            <td>{{ $item->gnump8 }}</td>
            <td>{{ $item->gnump9 }}</td>
            <td>{{ $item->gnump10 }}</td>
<td>
    <span>
        <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
    </span>
</td>
<td>     
    <span>
        <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
    </span>     
</td> 
<td>

    <div id="col-sm">

        <form action="{{ route('places.destroy',$item->id) }}"   method="POST" >
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">حذف نهائي</button>
        </form>
    </div>
    <td>
        <span>
            <a class="btn btn-warring" href="{{ route('soft.delete', $item->id) }}"> تعديل</a>
        </span>
    </td>
</td>  
        
        
        </tr>
          </tbody>
                        @endforeach

                </table>
            </div>

        </div>
    </div>
    <center>
        <h3> Copyright Ask-ar.com 2022
        </h3>
    </center>
    </div>

    </div>
@endsection
