@extends('layouts.app', ['activePage' => 'show', 'titlePage' => __('غرض المتغير')])

@section('content')


        <div class="container" style="align-items: center;">
     
          <div class="jumbotron jumbotron-fluid" style="align-items: center;">
          </div>    
            <h1 class="display-4" style="text-align: center;">إدارة المتغيرات المكانية</h1>
                <p class="lead" style="text-align: center; padding-top: 20px;"></p>
                <div class="card ">
                    <div class="card-header card-header-primary">
                      <h3 class="card-category">{{ __(' بيانات المتغير') }}</h3>
                        <h4 class="card-title" style="text-align: center;">المتغير رقم {{ $place->gnump }}</h4>
                        <div class="card-body">
                          

                            <table>
                                <tr>



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
                                    <th class="table-warning">المرفقات</th>



                                </tr>

                                <tbody>
                                    <tr>


                                        <th class="table-success">{{ $place->gnump}}</td>
                                        <td class="table-success">{{ $place->gnumh }}</td>
                                        <td class="table-success">{{ $place->gnumw }}</td>
                                        <td class="table-success">{{ $place->gnump1 }}</td>
                                        <td class="table-success">{{ $place->gnump2 }}</td>
                                        <td class="table-success">{{ $place->gnump3 }}</td>
                                        <td class="table-success">{{ $place->gnump4 }}</td>
                                        <td class="table-success">{{ $place->gnump5 }}</td>
                                        <td class="table-success">{{ $place->gnump6 }}</td>
                                        <td class="table-success">{{ $place->gnump7 }}</td>
                                        <td class="table-success">{{ $place->gnump8 }}</td>
                                        <td class="table-success">{{ $place->gnump9 }}</td>
                                        <td class="table-success">{{ $place->gnump10 }}</td>
                                        <td class="table-success">{{ $place->gnump11 }}</td>



                                        <span>
                                            <a class="btn btn-info" href="{{ route('places.edit', $place->id) }}">
                                                تعديل</a>



                                            <a class="btn btn-danger"
                                                href="{{ route('soft.delete', $place->id) }}">إنهاء
                                                عمل
                                                المتغير</a>

                                                
                                              </span>
                                    </tr>

                                </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                </div>
                {!! $place->detail !!}



            </div>
        </div>


        @endsection

        @push('js')
        <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
        </script>