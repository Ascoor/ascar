@extends('layouts.app', ['activePage' => 'category.sort', 'titlePage' => __('فهرس المتغيرات ')])
@section('content')
<div class="container-md">

    <div class="card-header card-header" style="
                        color: rgb(255, 242, 64);
                        background-color: #153257;
                        align-items: center;
                        text-align: center;">

        @if($message = Session::get('تمت'))
        <div class="alert alert-success" role="alert">
            @if(session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
                @endif
                {{ $message }}
            </div>
        </div>
    </div>
    @endif


    <h4 class="card-title" style="text-align: center">فهرس المتغيرات
    </h4>
    <p class="card-category" style="text-align: center">
        يمكنك البحث برقم المتغير او المركز او القرية
    </p>

</div>
@if($places->count() > 0 )




<div class="card-body">
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
                        <th >تفاصيل الرد</th>
              <th >موقف الإزالة</th>

                                <th >التاريخ</th>  -->
                <th></th>
                <th>التحكم</th>
                <th></th>




            </tr>
        </thead>
        <tbody>

            @php
            $i = 1;
            @endphp
            @foreach ($places as $item)
            <tr>
                <td>
                    {{ $item->gnump }}
                </td>
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


                        <a class="btn btn-success" href="{{route('place.show',['slug'=> $item->slug])}}">عرض</a>

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
        {!! $places->links() !!}
    </table>
</div>
@else
<div class="col">
    <div class="alert alert-danger" role="alert">
        لا بوجد متغيرات
    </div>
</div>
</div>

@endif



@endsection