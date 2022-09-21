@extends('layouts.app', ['activePage' => 'home', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')
<div class="container">

    @if($places->count() > 0 )

    <div class="container" style="align-items: center;">
        <div class="card-body">
            <div class="table-responsive-sm">

                <table class="table-warning">
                    <thead>
                        <tr>
                            <th>مسلسل المتغير</th>
                            <th>خط العرض</th>
                            <th>خط الطول</th>
                            <th>المحافظة</th>
                            <th>المركز</th>
                            <th>القرية</th>
                            <th>التاريخ</th>
                            <th>ملاحظات</th>
                            <th>التحكم</th>
                            <!--     <th>نوع الأملاك</th>
                        <th>جهة الولاية</th>
             <th>القانونية</th>
             <th>الرد</th>
             <th>تفاصيل الرد</th>
             <th>موقف الإزالة</th>--->
                        </tr>

                    </thead>

                    @php
                    $i = 1;
                    @endphp
                    <tbody>
                        @foreach($places as $item)

                        <tr class="table-primary">



                            <td>{{ $item->gnump }}</td>
                            <td>{{ $item->gnumh }}</td>
                            <td>{{ $item->gnumw }}</td>
                            <td>{{ $item->gnump1 }}</td>
                            <td>{{ $item->gnump2 }}</td>
                            <td>{{ $item->gnump3 }}</td>
                            <td>{{ $item->gnump10 }}</td>
                            <td>{{ $item->gnump11 }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}">
                                    تعديل</a>

                                <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>

                                <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}">إنهاء عمل
                                    المتغير</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                {!! $places->links() !!}
            </div>
        </div>
    </div>


    @else
    <div class="col">
        <div class="alert alert-danger" role="alert">
            لا بوجد متغيرات
        </div>
    </div>

    @endif
</div>
@endsection
