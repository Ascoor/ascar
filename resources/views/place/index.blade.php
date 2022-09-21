@extends('layouts.app', ['activePage' => 'home', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')
<div class="content">
    <div class="container pt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="card-header card-header" style="
                        color: rgb(255, 242, 64);
                        background-color: #153257;
                        align-items: center;
                        text-align: center;">
                        <h1 class=" display-4">
                            <h4 class="card-title" style="text-align: center">فهرس المتغيرات
                            </h4>
                            <p class="card-category" style="text-align: center">
                                يمكنك البحث برقم المتغير او المركز او القرية
                            </p>

                            <div class="card-body">
                                <div class="table-responsive">
                                    @if($places->count() > 0 )
                                    <table class="table">
                                        <thead class="text-dark">
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
                                        </thead> @php
                                        $i = 1;
                                        @endphp
                                        <tbody>
                                            @foreach ($places as $item)
                                        <tbody>
                                            <tr>
                                                <th class="table-primary">
                                                    {{ $item->gnump }}
                                                </th>
                                                <td class="table-primary">
                                                    {{ $item->gnumh }}
                                                </td>
                                                <td class="table-primary">
                                                    {{ $item->gnumw }}
                                                </td>
                                                <td class="table-primary">
                                                    {{ $item->gnump1 }}
                                                </td>
                                                <td class="table-primary">
                                                    {{ $item->gnump2 }}
                                                </td>
                                                <td class="table-primary">
                                                    {{ $item->gnump3 }}
                                                </td>
                                                <!---<td class="table-primary">{{ $item->gnump4 }}</td>
                <td class="table-primary">{{ $item->gnump5 }}</td>
                <td class="table-primary">{{ $item->gnump6 }}</td>
                <td class="table-primary">{{ $item->gnump7 }}</td>
                <td class="table-primary">{{ $item->gnump8 }}</td>
                <td class="table-primary">{{ $item->gnump9 }}</td>-->
                                                <td class="table-primary">
                                                    {{ $item->gnump10 }}
                                                </td>

                                                <td class="table-primary">
                                                    <span>
                                                        <a class="btn btn-info"
                                                            href="{{ route('places.edit', $item->id) }}">
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

                                                        <a class="btn btn-danger"
                                                            href="{{ route('soft.delete', $item->id) }}">إنهاء
                                                            عمل
                                                            المتغير</a>

                                                    </span>
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