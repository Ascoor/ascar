@extends('layouts.app', ['activePage' => 'trash', 'titlePage' => __('متغيرات قيد العمل')])

@section('content')


    @if($places->count() > 0 )



    <div class="card-header card-header" style="
            color: rgb(255, 242, 64);
            background-color: #153257;
            align-items: center;
            text-align: center;">
        <h4 class="card-title ">متغيرات قيد الحفظ</h4>
        <p class="card-category"> يمكنك إستئناف العمل في تلك المتغيرات</p>

    </div>
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

                            <a class="btn btn-success" href="{{ route('place.back.from.trash', $item->id) }}">إستئناف
                                العمل</a>

                            <a class="btn btn-success" href="{{ route('place.delete.from.database', $item->id) }}">
                                حذف</a>


                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
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
