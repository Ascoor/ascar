@extends('layouts.layout')
@section('content')

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
                    <th class="table-warning">استرجاع</th>
               
                    <th class="table-warning">حذف</th>
              </tr>
                   
                        @foreach ($places as $item)
                        <tbody>
                          <tr>
                          @php
                              $i = 0;
                            
                          @endphp
                                
           <th class="table-light" > {{ $item->id }}</th>
            <td class="table-light">{{ $item->gnump }}</td>
            <td class="table-light">{{ $item->gnumw }}</td>
            <td class="table-light">{{ $item->gnumw }}</td>
            <td class="table-light">{{ $item->gnump1 }}</td>
            <td class="table-light">{{ $item->gnump2 }}</td>
            <td class="table-light">{{ $item->gnump3 }}</td>
            <td class="table-light">{{ $item->gnump4 }}</td>
            <td class="table-light">{{ $item->gnump5 }}</td>
            <td class="table-light">{{ $item->gnump6 }}</td>
            <td class="table-light">{{ $item->gnump7 }}</td>
            <td class="table-light">{{ $item->gnump8 }}</td>
            <td class="table-light">{{ $item->gnump9 }}</td>
            <td class="table-light">{{ $item->gnump10 }}</td>
   <td>
    <span>
        <a class="btn btn-success" href="{{ route('place.back.from.trash', $item->id) }}">إسترجاع</a>
    </span>     
</td> 
<td>     
    <span>
        <a class="btn btn-danger" href="{{ route('place.delete.from.database', $item->id) }}">حذف نهائ</a>
    </span>     
</td> 


</div>
        
</tr>
</tbody>
                        @endforeach

                </table>
      
                
@endsection
