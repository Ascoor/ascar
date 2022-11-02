@extends('layouts.app', ['activePage' => 'home', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')


<div class="container-md">

    <div class="card-header card-header" style="
                        color: rgb(255, 242, 64);
                        background-color: #031f42;
                        align-items: center;
                        text-align: center;">
        <form action="{{route('categorys.sort')}}" method="GET">

            <div class="form-group">
                <label>إختر تصنيف المتغيرات المراده</label>

                <select class="form-control" name=" category_id">
                    @foreach ($categories as $category)


                    <option value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach
                </select>

                <button class="btn btn-lg btn-success" href="{{route('categorys.sort')}}">فرز</button>
            </div>
            @if($message = Session::get('تمت'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif
            @if(session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
                @endif

                <h4 class="card-title" style="text-align: center">فهرس المتغيرات
                </h4>
                <p class="card-category" style="text-align: center">
                    يمكنك البحث برقم المتغير او المركز او القرية
                </p>

            </div>
            <div class="card-body">

                <a href="{{route('place.create')}}" class="btn btn-warning btn-lg btn-block active" role="button"
                    aria-pressed="true">إضافة
                    متغير
                    جديد</a>
                @if($places->count() > 0 )



                <table id="example" class=" table-striped " style="width:100%">
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
                        <th >تفاصيل الرد</thitem>
              <th >موقف الإزالة</th>

                                <th >التاريخ</th>  -->
                            <th>التحكم</th>





                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($places as $place)

                        @php
                        $i = 1;
                        @endphp
                        <tr>
                            <td>
                                {{ $place->gnump }}
                            </td>
                            <td>
                                {{ $place->gnumh }}
                            </td>
                            <td>
                                {{ $place->gnumw }}
                            </td>
                            <td>
                                {{ $place->gnump1 }}
                            </td>
                            <td>
                                {{ $place->gnump2 }}
                            </td>
                            <td>
                                {{ $place->gnump3 }}
                            </td>
                            <!-- {{-- <td >{{ $place->gnump4 }}</td>
                                <td >{{ $place->gnump5 }}</td>
                                <td >{{ $place->gnump6 }}</td>
                                <td >{{ $place->gnump7 }}</td>
                                <td >{{ $place->gnump8 }}</td>
                                <td >{{ $place->gnump9 }}</td>
                                <td >
                                    {{ $place->gnump10 }}
                                </td> --}} -->
                            <td>
                                {{ $place->gnump11 }}
                            </td>


                            <td>
                                <span>


                                    <a class="btn btn-success"
                                        href="{{route('place.show',['slug'=> $place->slug])}}">عرض</a>

                                </span>
                            </td>
                            <!-- <td>
                                <span>


                                    <a class="btn btn-danger" href="{{ route('soft.delete', $place->slug) }}">إنهاء
                                        عمل
                                        المتغير</a>
                                </span>
                            </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> {!! $places->links() !!}


            @else
            <div class="col">
                <div class="alert alert-danger" role="alert">
                    لا بوجد متغيرات
                </div>
            </div>
    </div>





    @endif



















    @endsection