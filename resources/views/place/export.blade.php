@extends('layouts.app', ['activePage' => 'export', 'titlePage' => __('إستيراد بيانات')])

@section('content')

<div class="container">
</div>
    <div class="card">
        <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #153257;
    align-items: center;
    text-align: center;">


<div class="card-header card-header" style="align-items: center;">
    <h4 class="card-title " style="text-align: center;">نتائج البحث</h4>
    <p class="card-category" style="text-align: center;"> يمكنك البحث برقم المتغير او المركز او القرية
    </p>
</div>
<table>
    <thead style="background-color: green; color: skyblue; border: 3px solid #ee00ee">
    <tr>


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
    @foreach($places as $place)

    <tbody>
        <tr>



            <th class="table-primary">{{ $+->gnump }}</th>
            <td class="table-primary">{{ $place->gnumh }}</td>
            <td class="table-primary">{{ $place->gnumw }}</td>
            <td class="table-primary">{{ $place->gnump1 }}</td>
            <td class="table-primary">{{ $place->gnump2 }}</td>
            <td class="table-primary">{{ $place->gnump3 }}</td>
            <!---<td class="table-primary">{{ $place->gnump4 }}</td>
<td class="table-primary">{{ $place->gnump5 }}</td>
<td class="table-primary">{{ $place->gnump6 }}</td>
<td class="table-primary">{{ $place->gnump7 }}</td>
<td class="table-primary">{{ $place->gnump8 }}</td>
<td class="table-primary">{{ $place->gnump9 }}</td>-->
            <td class="table-primary">{{ $place->gnump10 }}</td>

            <td class="table-primary">
                <span>
                    <a class="btn btn-info" href="{{ route('place.edit', $place->id) }}">
                        تعديل</a>
                </span>
            </td>
            <td class="table-primary">
                <span>
                    <span>
                        <a class="btn btn-success"
                        href="{{route('place.show',['slug'=> $place->slug])}}">عرض</a>
                </span>
            </td>

            <td class="table-primary">
                <span>
                    <a class="btn btn-danger" href="{{ route('soft.delete', $place->id) }}"> حفظ
                        المتغير </a>
                </span>
            </td>



        </tr>
        @endforeach

</tbody>
</table>
</div>


</div>
</div>

</div>




@endsection

