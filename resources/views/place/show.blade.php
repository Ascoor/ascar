@extends('layouts.app', ['activePage' => 'show', 'titlePage' => __('غرض المتغير')])

@section('content')
<div class="container">


    <div class="card" style="align-items: center;
        text-align:center;" class="card-header">

            <h1 class="display-4">عرض بيانات المتغير</h1>
            <h4 class="display-5">المتغير رقم {{ $place->gnump }}</h4>

<span>


    <a class="btn btn-success" href="{{route('places.index')}}">جميع المتغيرات</a>

</span>
    <div class="card-body">
            <table class="table-warning" style="font-size:18px  ;text-align: center; align-items:center;">

                <thead >
                    <tr>




                        <th>مسلسل المتغير</th>
                        <th>خط العرض</th>
                        <th>خط الطول</th>
                        <th>المحافظة</th>
                        <th>المركز</th>
                        <th>القرية</th>
                        <th>نوع الأملاك</th>
                        <th>جهة الولاية</th>
                        <th>القانونية</th>
                        <th>الرد</th>
                        <th>تفاصيل الرد</th>
                        <th>موقف الإزالة</th>
                       <th>التاريخ</th>
                        <th>ملاحظات</th>

                    </tr>


                </thead>
                <tr class="table-info">




                    <td>{{ $place->gnump }}</td>
                    <td>{{ $place->gnumh }}</td>
                    <td>{{ $place->gnumw }}</td>
                    <td>{{ $place->gnump1 }}</td>
                    <td>{{ $place->gnump2 }}</td>
                    <td>{{ $place->gnump3 }}</td>
                    <td>{{ $place->gnump4 }}</td>
                    <td>{{ $place->gnump5 }}</td>
                    <td>{{ $place->gnump6 }}</td>
                    <td>{{ $place->gnump7 }}</td>
                    <td>{{ $place->gnump8 }}</td>
                    <td>{{ $place->gnump9 }}</td>
                    <td>{{ $place->gnump10 }}</td>
                    <td>{{ $place->gnump11 }}</td>
                    <td>{{ $place->gnump13 }}</td>


                </tr>

            </table>

            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('places.edit', $place->id) }}" role="button">
                    تعديل</a>



                    <a class="btn btn-danger btn-lg" href="{{ route('soft.delete', $place->id) }}">إنهاء عمل
                        المتغير</a>
                    </p>
                </div>
        </div>
    </div>





    {!! $place->detail !!}
    @endsection
