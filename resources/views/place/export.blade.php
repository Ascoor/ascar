@extends('layouts.app', ['activePage' => 'export', 'titlePage' => __('مخرجات')])

@section('content')

@php


$connect = new PDO("mysql:host=127.0.0.1;dbname=u973484608_ask", "u973484608_ask1", "Ask@123456");

$query = "SELECT * FROM tbl_places ORDER BY name ASC";

$result = $connect->query($query);
@endphp

<script src="https://cdnjs.cloudflare.com/ajax/libs/ag-grid/10.1.0/ag-grid.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

<div class="container-fluid">
    <h2 class="text-center mt-4 mb-4">يمكن إستخراج نتائج البحث في جداول</h2>
    <div class="card">
        <div class="card-header" style="      background-color: #ffc107;">
            <div class="row">
                <div class="col col-md-6">نتائج البحث</div>
                <div class="col col-md-6 text-right">
                    <button type="button" id="export_button" class="btn btn-success btn-sm">إستخراج Excel</button>
                </div>
            </div>
        </div>

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
                </div>

                <button class="btn btn-lg btn-warning" href="{{route('categorys.sort')}}">فرز</button>
        </div>
        <div class="col col-12">
            <div class="card-body">
                <table id="employee_data" style="width:100%" class="table table-striped table-bordered">
                    <thead class="thead  text-white" style=" background-color:#153257">
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
                            <th>التاريخ</th>
                            <th>الملاحظات</th>

                        </tr>
                    </thead>
                    <?php
                    foreach ($places as $row) {
                        echo '

                        <tbody>
                    <tr>

                            <td>' . $row["gnump"] . '</td>
                            <td>' . $row["gnumh"] . '</td>
                            <td>' . $row["gnumw"] . '</td>
                            <td>' . $row["gnump1"] . '</td>
                            <td>' . $row["gnump2"] . '</td>
                            <td>' . $row["gnump3"] . '</td>
                            <td>' . $row["gnump4"] . '</td>
                            <td>' . $row["gnump5"] . '</td>
                            <td>' . $row["gnump6"] . '</td>
                            <td>' . $row["gnump7"] . '</td>
                            <td>' . $row["gnump8"] . '</td>
                            <td>' . $row["gnump9"] . '</td>
                            <td>' . $row["gnump10"] . '</td>
                            <td>' . $row["gnump11"] . '</td>


                        </tr>
                        </tbody>
                        ';
                    }
                    ?>
                    {!! $places->links() !!}
                </table>
            </div>
        </div>
    </div>
</div>
<script>
function html_table_to_excel(type) {
    var data = document.getElementById('employee_data');

    var file = XLSX.utils.table_to_book(data, {
        sheet: "sheet1"
    });

    XLSX.write(file, {
        bookType: type,
        bookSST: true,
        type: 'base64',
        RTL: true,

    });

    XLSX.writeFile(file, 'file.' + type);
}

const export_button = document.getElementById('export_button');

export_button.addEventListener('click', () => {
    html_table_to_excel('xlsx');
});
</script>
@endsection