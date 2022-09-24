@extends('layouts.app', ['activePage' => 'show', 'titlePage' => __('عرض المتغير')])

@section('content')


        <div class="container">
        </div>

    <div class="card">

        <div class="card-header" style="
                color: rgb(255, 242, 64);
                background-color: #153257;
                align-items: center;
                text-align: center;">

<p class="lead" style="text-align: center; padding-top: 20px"></p>

<a class="btn btn-success" href="{{ route('places') }}">جميع المتغيرات</a>
<h1 class="display-4">عرض بيانات المتغير</h1>
<h4 >المتغير رقم : {{ $place->slug }}</h4>
        </div>
<div class="card-body">


    <div class="table-responsive">

        <table class="table-warning">
            <thead class="text-dark">

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

                                    <th></th>
                                    <th>الحالة</th>

                                </thead>
                                <tbody class="table-info">
                                    <tr class="text-dark">

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
<td>         @foreach ($tags as $item)

{{$item->tag}}
 @endforeach</td>
                                <td>


                                    <a class="btn btn-primary btn-md" href="{{ route('place.edit', $place->id) }}"
                                    role="button">
                                    تعديل</a>
                                </td>
                                <td>

                                 <a class="btn btn-danger btn-md" href="{{ route('soft.delete', $place->id) }}">إنهاء عمل
                                    المتغير</a>

                                </td>
                            </tr>
                    </tbody>
        </table>
</div>
        </div>
</div>

</div>
@endsection
