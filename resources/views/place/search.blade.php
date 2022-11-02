@extends('layouts.app', ['activePage' => 'search', 'titlePage' => __('بحث')])

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #031f42;
    align-items: center;
    text-align: center;">


            <h4 class="card-title " style="text-align: center;">نتائج البحث</h4>
            <p class="card-category" style="text-align: center;"> يمكنك البحث برقم المتغير او المركز او القرية
            </p>
        </div>




        <a href=" {{ route('export' )}}" class="btn btn-success">
            <i class="la la-download"></i>
            Export Filter
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive-md">
            <table id="example" class=" table-striped " style="width:100%">
                <thead class="thead text-white" style=" background-color:#153257">

                    <tr>


                        <!--     <th >نوع الأملاك</th>
                                <th >جهة الولاية</th>
              <th >القانونية</th>
              <th >الرد</th>
              <th >تفاصيل الرد</th>
              <th >موقف الإزالة</th>--->

                        <th>مسلسل المتغير</th>
                        <th>خط العرض</th>
                        <th>خط الطول</th>
                        <th>المحافظة</th>
                        <th>المركز</th>
                        <th>القرية</th>


                        <th>الملاحظات</th>

                        <th>التحكم</th>

                    </tr>
                </thead>
                <tbody>
                    @if($places->isNotEmpty())
                    @foreach ($places as $item)
                    <tr>



                        <td>{{ $item->gnump }}</td>
                        <td>{{ $item->gnumh }}</td>
                        <td>{{ $item->gnumw }}</td>
                        <td>{{ $item->gnump1 }}</td>
                        <td>{{ $item->gnump2 }}</td>
                        <td>{{ $item->gnump3 }}</td>
                        <!---<td >{{ $item->gnump4 }}</td>
                <td >{{ $item->gnump5 }}</td>
                <td >{{ $item->gnump6 }}</td>
                <td >{{ $item->gnump7 }}</td>
                <td >{{ $item->gnump8 }}</td>
                <td >{{ $item->gnump9 }}</td>-->
                        <td>{{ $item->gnump11 }}</td>
                        <td>
                            <span>

                                <a class="btn btn-lg btn-warning"
                                    href="{{route('place.show',['slug'=> $item->slug])}}">عرض</a>
                            </span>
                        </td>

                        <!-- <td>
                        <span>
                            <a class="btn btn-info" href="{{ route('place.edit', $item->id) }}">
                                تعديل</a>
                        </span>
                    </td>
                    <td>
                        <td>
                            <span>
                                <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حفظ
                                    المتغير </a>
                            </span>
                        </td>
 -->


                    </tr>
                    @endforeach
                </tbody>
                {!! $places->links() !!}
            </table>
        </div>


    </div>
</div>

@else
<div>
    <h2>No places found</h2>
</div>
@endif
</div>










@endsection