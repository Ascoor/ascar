@extends('layouts.app', ['activePage' => 'index', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')

<div class="content">
  <div class="container-fluid">


</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">نتائج البحث</h4>
        <p class="card-category"> يمكنك البحث برقم المتغير او المركز او القرية</p>
      </div>
      <div class="card-body">
        @if ($message = Session::get('تمت'))
        <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @endif
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
      
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">




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
            <tbody>
              <tr>


                <th class="table-info">{{ $item->gnump }}</th>
                <td class="table-info">{{ $item->gnumh }}</td>
                <td class="table-info">{{ $item->gnumw }}</td>
                <td class="table-info">{{ $item->gnump1 }}</td>
                <td class="table-info">{{ $item->gnump2 }}</td>
                <td class="table-info">{{ $item->gnump3 }}</td>
                <td class="table-info">{{ $item->gnump10 }}</td>
                <!---<td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->

                <td class="table-info">
                  <span>
                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
                  </span>
                </td>
                <td class="table-info">
                  <span>
                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
                  </span>
                </td>

                <td class="table-info">
                  <span>
                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حفظ المتغير </a>
                  </span>
                </td>
                <td class="table-info">
                  <span>
                    <a class="btn btn-danger" method="post" href="{{ url('/multiuploads', $item->id) }}"> حفظ المتغير </a>
                  </span>
                </td>



              </tr>
              <tr>


                <th class="table-primary">{{ $item->gnump }}</th>
                <td class="table-primary">{{ $item->gnumh }}</td>
                <td class="table-primary">{{ $item->gnumw }}</td>
                <td class="table-primary">{{ $item->gnump1 }}</td>
                <td class="table-primary">{{ $item->gnump2 }}</td>
                <td class="table-primary">{{ $item->gnump3 }}</td>
                <td class="table-primary">{{ $item->gnump10 }}</td>
                <!---<td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->

                <td class="table-primary">
                  <span>
                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
                  </span>
                </td>
                <td class="table-primary">
                  <span>
                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
                  </span>
                </td>

                <td class="table-primary">
                  <span>
                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حفظ المتغير </a>
                  </span>
                </td>



              </tr>
              <tr>


                <th class="table-secondary">{{ $item->gnump }}</th>
                <td class="table-secondary">{{ $item->gnumh }}</td>
                <td class="table-secondary">{{ $item->gnumw }}</td>
                <td class="table-secondary">{{ $item->gnump1 }}</td>
                <td class="table-secondary">{{ $item->gnump2 }}</td>
                <td class="table-secondary">{{ $item->gnump3 }}</td>
                <td class="table-secondary">{{ $item->gnump10 }}</td>
                <!---<td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->

                <td class="table-secondary">
                  <span>
                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
                  </span>
                </td>
                <td class="table-secondary">
                  <span>
                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
                  </span>
                </td>

                <td class="table-secondary">
                  <span>
                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حفظ المتغير </a>
                  </span>
                </td>



              </tr>
              <tr>


                <th class="table-success">{{ $item->gnump }}</th>
                <td class="table-success">{{ $item->gnumh }}</td>
                <td class="table-success">{{ $item->gnumw }}</td>
                <td class="table-success">{{ $item->gnump1 }}</td>
                <td class="table-success">{{ $item->gnump2 }}</td>
                <td class="table-success">{{ $item->gnump3 }}</td>
                <td class="table-success">{{ $item->gnump10 }}</td>
                <!---<td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->

                <td class="table-success">
                  <span>
                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
                  </span>
                </td>
                <td class="table-success">
                  <span>
                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
                  </span>
                </td>

                <td class="table-success">
                  <span>
                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حفظ المتغير </a>
                  </span>
                </td>



              </tr>
              <tr>


                <th class="table-warning">{{ $item->gnump }}</th>
                <td class="table-warning">{{ $item->gnumh }}</td>
                <td class="table-warning">{{ $item->gnumw }}</td>
                <td class="table-warning">{{ $item->gnump1 }}</td>
                <td class="table-warning">{{ $item->gnump2 }}</td>
                <td class="table-warning">{{ $item->gnump3 }}</td>
                <td class="table-warning">{{ $item->gnump10 }}</td>
                <!---<td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->

                <td class="table-warning">
                  <span>
                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
                  </span>
                </td>
                <td class="table-warning">
                  <span>
                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
                  </span>
                </td>

                <td class="table-warning">
                  <span>
                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حفظ المتغير </a>
                  </span>
                </td>



              </tr>
            </tbody>
              <tr>


                <th class="table-info">{{ $item->gnump }}</th>
                <td class="table-info">{{ $item->gnumh }}</td>
                <td class="table-info">{{ $item->gnumw }}</td>
                <td class="table-info">{{ $item->gnump1 }}</td>
                <td class="table-info">{{ $item->gnump2 }}</td>
                <td class="table-info">{{ $item->gnump3 }}</td>
                <td class="table-info">{{ $item->gnump10 }}</td>
                <!---<td class="table-light">{{ $item->gnump4 }}</td>
                <td class="table-light">{{ $item->gnump5 }}</td>
                <td class="table-light">{{ $item->gnump6 }}</td>
                <td class="table-light">{{ $item->gnump7 }}</td>
                <td class="table-light">{{ $item->gnump8 }}</td>
                <td class="table-light">{{ $item->gnump9 }}</td>-->

                <td class="table-info">
                  <span>
                    <a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
                  </span>
                </td>
                <td class="table-info">
                  <span>
                    <a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
                  </span>
                </td>

                <td class="table-info">
                  <span>
                    <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حفظ المتغير </a>
                  </span>
                </td>



              </tr>
            </tbody>
            @endforeach

          </table>
        </div>
      </div>
    </div>
  </div>
 
  {!! $places->links() !!}





  @endsection

  @push('js')
  <script>
    $(document).ready(function () {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
  @endpush