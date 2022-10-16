@extends('layouts.app', ['activePage' => 'home', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')
<div class="content">

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
                </div>

                @if($places->count() > 0 )
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>مسلسل المتغير</th>
                                <th>خط العرض</th>
                                <th>خط الطول</th>
                                <th>المحافظة</th>
                                <th>المركز</th>
                                <th>القرية</th>
                                <th>الملاحظات</th>
                                <!-- <th >نوع الأملاك</th>
              <th >جهة الولاية</th>
              <th >القانونية</th>
              <th >الرد</th>
              <th >تفاصيل الرد</th>
              <th >موقف الإزالة</th>

                                <th >التاريخ</th>  -->

                                <th></th>
                                <th>التحكم</th>
                                <th></th>
                        </thead>

                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($places as $item)
                            <tr>
                                <th>
                                    {{ $item->gnump }}
                                </th>
                                <td>
                                    {{ $item->gnumh }}
                                </td>
                                <td>
                                    {{ $item->gnumw }}
                                </td>
                                <td>
                                    {{ $item->gnump1 }}
                                </td>
                                <td>
                                    {{ $item->gnump2 }}
                                </td>
                                <td>
                                    {{ $item->gnump3 }}
                                </td>
                                <!-- {{-- <td >{{ $item->gnump4 }}</td>
                                <td >{{ $item->gnump5 }}</td>
                                <td >{{ $item->gnump6 }}</td>
                                <td >{{ $item->gnump7 }}</td>
                                <td >{{ $item->gnump8 }}</td>
                                <td >{{ $item->gnump9 }}</td>
                                <td >
                                    {{ $item->gnump10 }}
                                </td> --}} -->
                                <td>
                                    {{ $item->gnump11 }}
                                </td>

                                <td>
                                    <span>
                                        <a class="btn btn-info" href="{{ route('place.edit', $item->id) }}">
                                            تعديل</a>
                                    </span>
                                </td>

                                <td>
                                    <span>
                                        <a class="btn btn-success"
                                            href="{{route('place.show',['slug'=> $item->slug])}}">عرض</a>

                                    </span>
                                </td>

                                <td>
                                    <span>

                                        <a class="btn btn-danger" href="{{ route('soft.delete', $item->slug) }}">إنهاء
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