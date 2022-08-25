@extends('layouts.app')


@section('content')

<div class="container" style="padding-top: 5%">
    <center>
        <h1>محافظة الدقهلية</h1>
        <h2>وحدة المتغيرات المكانية</h2>
        <a class="btn btn-primary btn-lg" style="shadow  mb-5 rounded" href="{{ route('places.index') }}"
            role="button">الصفحة الرئيسية</a>

        <a class="btn btn-primary btn-lg" style="shadow  mb-5 rounded" href="{{ route('places.create') }}"
            role="button">إضافة متغير جديد</a>
        <a class="btn btn-primary btn-lg" style="shadow  mb-5 rounded" href="{{ route('place.trash') }}"
            role="button"> المتغيرات الغير معروضة</a>
    </center>
    <div class="form-group">
        <span>
            <form  type="get" action="{{ url('/search') }}">
                <input type="search" placeholder="بحث بالمتغير" class="form-controller mr-sm2"
                name="query">
                <button class="btn btn-outline-primary pt-1 my-2 my-sm-0" type="submit>">بحث</button>
            </form>
                <form  type="get" action="{{ url('/searchp') }}">
                <input type="search" placeholder="بحث بالمركز" class="form-controller mr-sm2"
                name="queryp">
                <button class="btn btn-outline-primary pt-1 my-2 my-sm-0" type="submit>">بحث</button>
            </form>
                <form  type="get" action="{{ url('/searchw') }}">
                    <input type="search" placeholder="بحث بالقرية" class="form-controller mr-sm2"
                    name="queryw">
                <button class="btn btn-outline-primary pt-1 my-2 my-sm-0" type="submit>">بحث</button>

            </form>
    
     </span>
    </div>
    <div class="table-responsive pt-6">
        <table class="table table-bordered">
          <thead>
            <tr>
                <th>مسلسل المتغير</th>
                <th>خط العرض</th>
                <th>خط الطول</th>
                <th>المحافظة</th>
                <th>المركز</th>
                <th>القرية</th>
                <th>نوع الأملاك</th>
                <th>جهة الولاية</th>
                <th>القانونية</th>
                <th>الرد</th>
                <th>تفاصيل الرد</th>
                <th>موقف الإزالة</th>
                <th>المرفقات</th>
                <th>تعديل</th>
                <th>عرض</th>
                <th>حذف</th>
              
                        
            </tr>
        </thead>
        <tbody>
            <tr>
              @foreach ($places as $item)
          @php
              $i = 0;
            
          @endphp
            <tr class="table-info">
                                                 
        <td >{{ $item->gnump }}</td>
        <td >{{ $item->gnumh }}</td>
        <td >{{ $item->gnumw }}</td>
        <td >{{ $item->gnump1 }}</td>
        <td >{{ $item->gnump2 }}</td>
        <td >{{ $item->gnump3 }}</td>
        <td >{{ $item->gnump4 }}</td>
        <td >{{ $item->gnump5 }}</td>
        <td >{{ $item->gnump6 }}</td>
        <td >{{ $item->gnump7 }}</td>
        <td >{{ $item->gnump8 }}</td>
        <td >{{ $item->gnump9 }}</td>
        <td >{{ $item->gnump10 }}</td>
                
<td >
    <span>
        <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
    </span>
</td>
<td >     
    <span>
        <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
    </span>     
</td> 

    <td >
        <span>
            <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> إخفاء </a>
        </span>
    </td>
            </tr>
            <tr class="table-warning">
                <td >{{ $item->gnump }}</td>
                <td >{{ $item->gnumh }}</td>
                <td >{{ $item->gnumw }}</td>
                <td >{{ $item->gnump1 }}</td>
                <td >{{ $item->gnump2 }}</td>
                <td >{{ $item->gnump3 }}</td>
                <td >{{ $item->gnump4 }}</td>
                <td >{{ $item->gnump5 }}</td>
                <td >{{ $item->gnump6 }}</td>
                <td >{{ $item->gnump7 }}</td>
                <td >{{ $item->gnump8 }}</td>
                <td >{{ $item->gnump9 }}</td>
                <td >{{ $item->gnump10 }}</td>
                        
        <td >
            <span>
                <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
            </span>
        </td>
        <td >     
            <span>
                <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
            </span>     
        </td> 
        
            <td >
                <span>
                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> إخفاء </a>
                </span>
            </td>
            </tr>
            <tr class="table-success">
                <td >{{ $item->gnump }}</td>
                <td >{{ $item->gnumh }}</td>
                <td >{{ $item->gnumw }}</td>
                <td >{{ $item->gnump1 }}</td>
                <td >{{ $item->gnump2 }}</td>
                <td >{{ $item->gnump3 }}</td>
                <td >{{ $item->gnump4 }}</td>
                <td >{{ $item->gnump5 }}</td>
                <td >{{ $item->gnump6 }}</td>
                <td >{{ $item->gnump7 }}</td>
                <td >{{ $item->gnump8 }}</td>
                <td >{{ $item->gnump9 }}</td>
                <td >{{ $item->gnump10 }}</td>
                        
        <td >
            <span>
                <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
            </span>
        </td>
        <td >     
            <span>
                <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
            </span>     
        </td> 
        
            <td >
                <span>
                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> إخفاء </a>
                </span>
            </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>

</div>
{!! $places->links() !!}

@endsection
