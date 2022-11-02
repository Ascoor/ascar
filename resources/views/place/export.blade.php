@extends('layouts.app', ['activePage' => 'export', 'titlePage' => __('مخرجات')])

@section('content')

@php


$connect = new PDO("mysql:host=127.0.0.1;dbname=asc", "root", "");

$query = "SELECT * FROM tbl_places ORDER BY name ASC";

$result = $connect->query($query);
@endphp


<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

<div class="container">
    <h2 class="text-center mt-4 mb-4">Export HTML table data to excel using JavaScript</h2>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">Sample Data</div>
                <div class="col col-md-6 text-right">
                    <button type="button" id="export_button" class="btn btn-success btn-sm">Export</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="employee_data" class="table table-striped table-bordered">
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
                <?php
                foreach ($places as $row) {
                    echo '

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
                        ';
                }
                ?>
                {!! $places->links() !!}
            </table>
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
            type: 'base64'
        });

        XLSX.writeFile(file, 'file.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () => {
        html_table_to_excel('xlsx');
    });
    </script>

    @endsection