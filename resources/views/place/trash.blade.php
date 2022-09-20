@extends('layouts.app', ['activePage' => 'trash', 'titlePage' => __('متغيرات قيد العمل')])

@section('content')
<div class="content">
    <div class="container pt-3-fluid">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header" style="
        color: rgb(255, 242, 64);
        background-color: #153257;
        align-items: center;
        text-align: center;">
          <h4 class="card-title ">متغيرات قيد الحفظ</h4>
          <p class="card-category"> يمكنك إستئناف العمل في تلك المتغيرات</p>
        </div>
        <div class="card-body">
          <div class="table-responsive-sm">
            <table class="table">
              <thead >

                      <th class="table-warning">مسلسل المتغير</th>
                      <th class="table-warning">خط العرض</th>
                      <th class="table-warning">خط الطول</th>
                      <th class="table-warning">المحافظة</th>
                      <th class="table-warning">المركز</th>
                      <th class="table-warning">القرية</th>
                      <th class="table-warning">نوع الأملاك</th>
                      <th class="table-warning">جهة الولاية</th>
                      <th class="table-warning">القانونية</th>
                      <th class="table-warning">الرد</th>
                      <th class="table-warning">تفاصيل الرد</th>
                      <th class="table-warning">موقف الإزالة</th>
                      <th class="table-warning">التاريخ</th>

                      <th class="table-warning">التحكم</th>


            </thead>
            @foreach ($places as $item)
            <tbody>
              <tr>
              @php
                  $i = 0;

              @endphp
<th class="table-primary">{{ $item->gnump }}</th>
<td class="table-primary">{{ $item->gnumh }}</td>
<td class="table-primary">{{ $item->gnumw }}</td>
<td class="table-primary">{{ $item->gnump1 }}</td>
<td class="table-primary">{{ $item->gnump2 }}</td>
<td class="table-primary">{{ $item->gnump3 }}</td>
<td class="table-primary">{{ $item->gnump4 }}</td>
<td class="table-primary">{{ $item->gnump5 }}</td>
<td class="table-primary">{{ $item->gnump6 }}</td>
<td class="table-primary">{{ $item->gnump7 }}</td>
<td class="table-primary">{{ $item->gnump8 }}</td>
<td class="table-primary">{{ $item->gnump9 }}</td>
<td class="table-primary">{{ $item->gnump10 }}</td>

<span>
<td class="table-primary">
        <a class="btn btn-success" href="{{ route('place.back.from.trash', $item->id) }}">إستئناف العمل</a>
    </td>
</span>



</tr>
</tbody>
@endforeach

      </table>
                    </div>


      @endsection

