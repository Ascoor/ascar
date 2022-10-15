@extends('layouts.app', ['activePage' => 'search', 'titlePage' => __('بحث')])

@section('content')

<div class="card">
    <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #153257;
    align-items: center;
    text-align: center;">


        <h4 class="card-title " style="text-align: center;">نتائج البحث</h4>
        <p class="card-category" style="text-align: center;"> يمكنك البحث برقم المتغير او المركز او القرية
        </p>
        <a href="{{  route('export')  }}" class="btn btn-success">
            <i class="la la-download"></i>
            Export Filter
        </a>
    </div>


</div>
<div class="card-body">

    <table class="table">
        <div class="table-responsive-md">
            <thead class=" text-dark">





                <th>مسلسل المتغير</th>
                <th>خط العرض</th>
                <th>خط الطول</th>
                <th>المحافظة</th>
                <th>المركز</th>
                <th>القرية</th>
                <!--     <th >نوع الأملاك</th>
                                <th >جهة الولاية</th>
              <th >القانونية</th>
              <th >الرد</th>
              <th >تفاصيل الرد</th>
              <th >موقف الإزالة</th>--->


                <th>التاريخ</th>
                <th>تعديل</th>
                <th>عرض</th>
                <th>التحكم</th>

            </thead>
            @if($places->isNotEmpty())
            @foreach ($places as $item)
            <tbody>
                <tr>



                    <th>{{ $item->gnump }}</th>
                    <td>{{ $item->gnumh }}</td>
                    <td>{{ $item->gnumw }}</td>
                    <td>{{ $item->gnump1 }}</td>
                    <td>{{ $item->gnump2 }}</td>
                    <td>{{ $item->gnump3 }}</td>
                    <!---<td >{{ $item->gnump4 }}</td>
                <td >{{ $item->gnump5 }}</td>
                <td >{{ $item->gnump6 }}</td>
                <td >{{ $item->gnump7 }}</td>
                <td >{{ $item->gnump8 }}</td>
                <td >{{ $item->gnump9 }}</td>-->
                    <td>{{ $item->gnump10 }}</td>

                    <td>
                        <span>
                            <a class="btn btn-info" href="{{ route('place.edit', $item->id) }}">
                                تعديل</a>
                        </span>
                    </td>
                    <td>
                        <span>
                            <span>
                                <a class="btn btn-success" href="{{route('place.show',['slug'=> $item->slug])}}">عرض</a>
                            </span>
                    </td>

                    <td>
                        <span>
                            <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حفظ
                                المتغير </a>
                        </span>
                    </td>



                </tr>
                @endforeach
                @else
                <div>
                    <h2>No places found</h2>
                </div>
                @endif
            </tbody>
            {!! $places->links() !!}
    </table>
</div>


</div>
</div>

</div>




@endsection
