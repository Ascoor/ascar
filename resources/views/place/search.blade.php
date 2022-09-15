@extends('layouts.app', ['activePage' => 'search', 'titlePage' => __('البحث')])

@section('content')

<div class="content">
    <div class="container pt-3">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header" style="background-color:#e78125;align-items: center;">
                        <h4 class="card-title " style="color:#fff;text-align: center;">نتائج البحث</h4>
                        <p class="card-category" style="color:rgb(255, 255, 255);text-align: center;"> يمكنك البحث برقم المتغير او المركز او
                            القرية
                        </p>
                        <p class="lead" style="text-align: center; padding-top: 20px;"></p>
                        <div class="container" style="align-items: center;">
                            <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search.index') }}"">
                            @csrf
                            <input class=" form-control mr-sm-2" style="text-align: center;" type="search"
                                placeholder=" المتغير-المدينة-القرية" name=" query" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
                        </div>



                    </div>

                    <a class="btn btn-danger" href="{{ route('export') }}" type="button"> إستخراج نتيجة البحث ملف Excel</a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
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

                                <tbody>
                                    @foreach ($places as $item)
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
                                                <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}">
                                                    تعديل</a>
                                            </span>
                                        </td>
                                        <td class="table-primary">
                                            <span>
                                                <a class="btn btn-success"
                                                    href="{{ route('places.show', $item->id) }}">عرض</a>
                                            </span>
                                        </td>

                                        <td class="table-primary">
                                            <span>
                                                <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}">
                                                    حفظ
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

            @push('js')
            <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();
            });
            </script>
            @endpush
