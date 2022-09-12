@extends('layouts.app', ['activePage' => 'index', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')


<div class="content">
    <div class="container pt-3">

        <div class="container" style="align-items: center;">
            <div class="jumbotron jumbotron-fluid" style="align-items: center;">
                <h1 class="display-4" style="text-align: center;">إدارة المتغيرات المكانية</h1>
                <p class="lead" style="text-align: center; padding-top: 20px;"></p>
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search.index') }}"">
@csrf
<input class=" form-control mr-sm-2" style="text-align:center;" type="search"
                    placeholder=" المتغير-المدينة-القرية" name=" query" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
                </form>
            </div>
            <div class="container">
            </div>

            @if($places->count() > 0 )


            <table class="table">
                <thead>
                    <tr>



                        <th>م </th>
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

                <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($places as $item)
                    <tr class="table-primary">



                        <th scope="row">{{ $i++ }}</th>
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
            {!!$places->links() !!}
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

