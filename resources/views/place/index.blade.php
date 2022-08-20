@extends('layouts.app')


@section('content')


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

                
                <div class="tableContainer">
                    
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
                                
                               
                                <th class="table-light">{{ $item->gnump }}</th>
                                <td class="table-light">{{ $item->gnumw }}</td>
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
        <span>
            <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حذف </a>
        </span>
    </td>
    
    
  
</tr>
</tbody>
@endforeach
</table>
    {!! $places->links() !!}

@endsection
