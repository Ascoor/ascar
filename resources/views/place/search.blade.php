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
        <a href="{!! route('places.export-filter') !!}" class="btn btn-success">
            <i class="la la-download"></i>
            Export Filter
        </a>
    </div>


</div>
<div class="card-body">

    <table class="table">
        <div class="table-responsive-md">
            <thead class=" text-dark">





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
            @if($places->isNotEmpty())
            @foreach ($places as $item)
            <tbody>
                <tr>



                    <th class="table-primary">{{ $item->gnump }}</th>
                    <td class="table-primary">{{ $item->gnumh }}</td>
                    <td class="table-primary">{{ $item->gnumw }}</td>
                    <td class="table-primary">{{ $item->gnump1 }}</td>
                    <td class="table-primary">{{ $item->gnump2 }}</td>
                    <td class="table-primary">{{ $item->gnump3 }}</td>
                    <!---<td class="table-primary">{{ $item->gnump4 }}</td>
                <td class="table-primary">{{ $item->gnump5 }}</td>
                <td class="table-primary">{{ $item->gnump6 }}</td>
                <td class="table-primary">{{ $item->gnump7 }}</td>
                <td class="table-primary">{{ $item->gnump8 }}</td>
                <td class="table-primary">{{ $item->gnump9 }}</td>-->
                    <td class="table-primary">{{ $item->gnump10 }}</td>

                    <td class="table-primary">
                        <span>
                            <a class="btn btn-info" href="{{ route('place.edit', $item->id) }}">
                                تعديل</a>
                        </span>
                    </td>
                    <td class="table-primary">
                        <span>
                            <span>
                                <a class="btn btn-success" href="{{route('place.show',['slug'=> $item->slug])}}">عرض</a>
                            </span>
                    </td>

                    <td class="table-primary">
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