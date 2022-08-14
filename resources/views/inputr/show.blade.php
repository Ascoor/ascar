@extends('layouts.layout')



@section('content')
<div class="head">
    <h1>محافظة الدقهلية</h1>
    <h2>وحدة المتغيرات المكانية</h2>
  </div>

  <div class="inputs">

    <div class="price">
      <input type="text" id="" placeholder="التاريخ">
      <input type="number" id="" placeholder="مسلسل المتغير">
      <input type="number" id="" placeholder="خط العرض">
      <input type="number" id="" placeholder="خط الطول">
    </div>
    <input type="text" id="" placeholder="المحافظة">
    <input type="text" id="" placeholder="المركز">
    <input type="text" id="" placeholder="القرية">
    <input type="text" id="" placeholder="نوع الأملاك">
    <input type="text" id="" placeholder="جهة الولاية">
    <input type="text" id="" placeholder="القانونية">
    <input type="text" id="" placeholder="الرد">
    <input type="text" id="" placeholder="تفاصيل الرد">
    <input type="text" id="" placeholder="موقف الإزالة">
    <input type="text" id="" placeholder="المرفقات">
    <button id="submit">إضافة</button>
  </div>

  <div class="outputs">
    <div class="searchBlock">
      <input type="text" id="search" placeholder="بحث">

      <div class="btnSearch">
        <button id="">بحث بالمركز</button>
        <button id="">بحث بالتاريخ</button>
      </div>
      
      <div id="deleteAll"></div>

      <div class="tableContainer">
        <table>
          <tr>
            <th>م</th>
            <th>التاريخ</th>
            <th>مسلسل المتغير</th>
           <th>خط الطول</th>
           <th>خط العرض</th>
           <th>المحافظة</th>
           <th>المركز</th>
           <th>القرية</th>
           <th>نوع الأملاك</th>
           <th>جهةالولاية</th>
           <th>القانونية</th>
           <th>الرد</th>
           <th>تفاصيل الرد</th>
           <th>موقف الإزالة</th>
           <th>المرفقات</th>
          </tr>

          <tbody id=""></tbody>
        </table>
      </div>
    </div>
  </div>
<center><h3> Copyright Ask-ar.com 2022
</h3></center>
</div>


@endsection