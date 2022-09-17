@extends('layouts.app', ['activePage' => 'home', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')
<div class="container">
<<<<<<< HEAD
    <div class="container" style="align-items: center;">
        <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search.index') }}"">
                            @csrf
                            <input class=" form-control mr-sm-2" style="text-align: center;" type="search"
            placeholder=" المتغير-المدينة-القرية" name=" query" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
    </div>
</div>
=======

>>>>>>> bcd0adc9f35d09c0bc1151de3e043f80d23083aa

        <div class="card">
            <div class="card-body">
            <div class="card-header card-header" style="
            color: rgb(255, 242, 64);
            background-color: #d3e6ff;
            align-items: center;
            text-align: center;
        <h1 class="display-4">ت
                <img class="card-img-top" style="width:350px;
                height:350px ;
                padding:auto ;   " src="/img/main.png">
                </div>

@if($places->count() > 0 )

    <div class="table-responsive-md">

        <table class="table-warning" style="text-align: center; align-items:center;">
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
            @foreach($places as $item)
            <tbody>

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
    </div>
</div>
{!!$places->links() !!}
</div>

</div>
</div>
</div>
@else
<div class="col">
    <div class="alert alert-danger" role="alert">
        Not places
    </div>
</div>

@endif
</div>







@endsection
