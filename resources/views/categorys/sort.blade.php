@extends('layouts.app', ['activePage' => 'category.sort', 'titlePage' => __('فهرس المتغيرات ')])

@section('content')
<!-- PAGE HEADER -->
<div class="container">
    <div class="row">
        <div class="col-md-10">


            <div class="container-md">

                <div class="card-header card-header" style="
                    color: rgb(255, 242, 64);
                    background-color: #153257;
                    align-items: center;
                    text-align: center;">


                    <div class="form-group">
                        <label>إختر حالة المتغيرات المراده</label>

                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)


                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach
                        </select>
                        <a class="btn btn-lg btn-info" href="{{route('categorys.sort',$category->id)}}">فرز</a>
                    </div>
                    @if($places->count() > 0 )
                    <div class="place-category">
                        <table id="example" class=" table " style="width:100%">
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
                        </table>
                    </div> {!! $places->links() !!}
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
