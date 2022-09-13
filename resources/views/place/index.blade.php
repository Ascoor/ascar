@extends('layouts.app', ['activePage' => 'index', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')
<div class="container">

</div>

    <div class="container" style="background: rgb(221, 225, 248)">
        <div class="container" style="align-items: center;background:rgb(220, 225, 255);">
            <div class="jumbotron jumbotron-fluid" style="color:rgb(0, 46, 65); center;">
                <div class="card-body">
                    <h1 class="card-title" style="text-align: center; font-size:42pt; font-family: 'Amiri', serif;">إدارة المتغيرات المكانية</h1>
                    <p class="card-text" style="font-size:35pt;text-align: center;font-family: 'Amiri', serif">فهرس المتغيرات</p>
                    <p class="lead" style="text-align: center; padding-top: 20px;"></p>
                    <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search.index') }}"">
                        @csrf
<input  style="align-content: center" class=" form-control mr-sm-2" style="text-align:center;" type="search"
                    placeholder=" المتغير-المدينة-القرية" name=" query" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
                </form>
                <div class="container" style="align-items: center;">
                    <center> <button type="button" href="{{ route('export') }}" class="btn btn-warning">إخراج ملف Excel</button></center>




            @if($places->count() > 0 )
<div class="container-fluid">
    <div class="table-responsive-md">

    <table class="table-warning" style="text-align: center; align-items:center;">
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

                @php
                    $i = 1;
                    @endphp
                    @foreach($places as $item)
                    <tbody>
                    <tr class="table-primary">



                        <th >{{ $i++}}</th>
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
                    <tr class="table-secondary">



                        <th >{{ $i++ }}</th>
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
                    </tbody>
                    @endforeach
                    <tr class="table-success">



                        <th scope="row">{{ $i++}}</th>
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

                    <tr class="table-danger">



                        <th scope="row">{{ $i++}}</th>
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

                    <tr class="table-warning">



                        <th scope="row">{{ $i++}}</th>
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

                    <tr class="table-info">



                        <th >{{ $i++}}</th>
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


                    <tr class="table-light">



                        <th scope="row">{{ $i++}}</th>
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

