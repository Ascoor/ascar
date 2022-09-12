@extends('layouts.app', ['activePage' => 'index', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')


<div class="content">
  <div class="container pt-3">


</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">نتائج البحث</h4>
        <p class="card-category"> يمكنك البحث برقم المتغير او المركز او القرية</p>
      </div>
      @if ($places->count() > 0 )


        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">




              <th class="table-warning ">م </th>
              <th class="table-warning">مسلسل المتغير</th>
              <th class="table-warning">خط العرض</th>
              <th class="table-warning">خط الطول</th>
              <th class="table-warning">المحافظة</th>
              <th class="table-warning">المركز</th>
              <th class="table-warning">القرية</th>


              <th class="table-warning">التاريخ</th>

              <th class="table-warning">ملاحظات</th>

              <th class="table-warning">التحكم</th>

              <!--     <th class="table-warning">نوع الأملاك</th>
                   <th class="table-warning">جهة الولاية</th>
                   <th class="table-warning">القانونية</th>
                   <th class="table-warning">الرد</th>
                   <th class="table-warning">تفاصيل الرد</th>
                   <th class="table-warning">موقف الإزالة</th>--->
</tr>
            </thead>
            <tbody>
                 @php
                        $i = 1;
                    @endphp
                    @foreach ($places as $item)
              <tr>


              <th class="table-warning scope="row">{{$i++}}</th>
                <td class="table-info">{{ $item->gnump }}</td>
                <td class="table-info">{{ $item->gnumh }}</td>
                <td class="table-info">{{ $item->gnumw }}</td>
                <td class="table-info">{{ $item->gnump1 }}</td>
                <td class="table-info">{{ $item->gnump2 }}</td>
                <td class="table-info">{{ $item->gnump3 }}</td>
                <td class="table-info">{{ $item->gnump10 }}</td>
                <td class="table-info">{{ $item->gnump11 }}</td>
                 <!---<td class="table-info">{{ $item->gnump12 }}</td>
               <td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->
                <span>
                <td class="table-warning">



                  <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>

                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>

                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}">إنهاء عمل المتغير</a>

                </td>

                </span>


              </tr>
              <tr>

              <th class="table-warning scope="row">{{$i++}}</th>
                <td class="table-primary">{{ $item->gnump }}</td>
                <td class="table-primary">{{ $item->gnumh }}</td>
                <td class="table-primary">{{ $item->gnumw }}</td>
                <td class="table-primary">{{ $item->gnump1 }}</td>
                <td class="table-primary">{{ $item->gnump2 }}</td>
                <td class="table-primary">{{ $item->gnump3 }}</td>
                <td class="table-primary">{{ $item->gnump10 }}</td>
                <td class="table-primary">{{ $item->gnump11 }}</td>
               <!--- <td class="table-primary">{{ $item->gnump12 }}</td>
            <td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->

                <span>
                <td class="table-warning">

                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>


                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>

                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}">إنهاء عمل المتغير</a>

                </td>

                </span>



              </tr>
              <tr>

              <th class="table-warning scope="row">{{$i++}}</th>
                <td class="table-secondary">{{ $item->gnump }}</td>
                <td class="table-secondary">{{ $item->gnumh }}</td>
                <td class="table-secondary">{{ $item->gnumw }}</td>
                <td class="table-secondary">{{ $item->gnump1 }}</td>
                <td class="table-secondary">{{ $item->gnump2 }}</td>
                <td class="table-secondary">{{ $item->gnump3 }}</td>
                <td class="table-secondary">{{ $item->gnump10 }}</td>
                <td class="table-secondary">{{ $item->gnump11 }}</td>
                  <!---<td class="table-secondary">{{ $item->gnump12 }}</td>
              <td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->
                <span>
                <td class="table-warning">

                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>


                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>

                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}">إنهاء عمل المتغير</a>

                </td>

                </span>
              </tr>
              <tr>

              <th class="table-warning scope="row">{{$i++}}</th>
                <td class="table-success">{{ $item->gnump }}</td>
                <td class="table-success">{{ $item->gnumh }}</td>
                <td class="table-success">{{ $item->gnumw }}</td>
                <td class="table-success">{{ $item->gnump1 }}</td>
                <td class="table-success">{{ $item->gnump2 }}</td>
                <td class="table-success">{{ $item->gnump3 }}</td>
                <td class="table-success">{{ $item->gnump10 }}</td>
                <td class="table-success">{{ $item->gnump11 }}</td>
                 <!---<td class="table-success">{{ $item->gnump12 }}</td>
               <td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->

                <span>
                <td class="table-warning">

                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>


                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>

                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}">إنهاء عمل المتغير</a>

                </td>

                </span>


              </tr>

            </tbody>
              <tr>

              <th class="table-warning scope="row">{{$i++}}</th>
                <td class="table-info">{{ $item->gnump }}</td>
                <td class="table-info">{{ $item->gnumh }}</td>
                <td class="table-info">{{ $item->gnumw }}</td>
                <td class="table-info">{{ $item->gnump1 }}</td>
                <td class="table-info">{{ $item->gnump2 }}</td>
                <td class="table-info">{{ $item->gnump3 }}</td>
                <td class="table-info">{{ $item->gnump10 }}</td>
                <td class="table-info">{{ $item->gnump11 }}</td>
                 <!---<td class="table-info">{{ $item->gnump12 }}</td>
               <td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->
                <span>
                <td class="table-warning">

                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>


                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>

                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}">إنهاء عمل المتغير</a>

                </td>

                </span>



              </tr>
              @endforeach
            </tbody>

          </table>
          {!!$places->links()  !!}
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

  @push('js')
  <script>
    $(document).ready(function () {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
  @endpush
