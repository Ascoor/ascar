@extends('layouts.app', ['activePage' => 'show', 'titlePage' => __('عرض المتغير')])

@section('content')


<div class="container">

    <div class="card">

        <p class="lead-white" style="text-align: center; padding-top: 20px;"></p>
        <a class="btn btn-ask1" href="{{ route('places') }}">جميع المتغيرات</a>
        <div class="card-header" style="
                color: rgb(255, 242, 64);
                background-color: #153257;
                align-items: center;
                text-align: center;">


            <div class="head-text">
                <h1 class="display-8">عرض بيانات المتغير</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="grey-bg container-fluid">
                <section id="minimal-statistics">
                    <div class="col-12 mt-3 mb-1">
                        <div class="row">

                        </div>
                        <div class=" text-ask ">
                                <h2>المتغير رقم : {{ $place->slug }}</h2>
                        </div>

                        <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
                            <div class="row py-3 shadow-5">
                                <div class="col-12 mb-1">
                                    <div class="lightbox">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
                                            alt="Gallery image 1" class="ecommerce-gallery-main-img active w-100" />
                                    </div>
                                </div>
                                <div class="col-3 mt-1">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
                                        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
                                        alt="Gallery image 1" class="active w-100" />
                                </div>
                                <div class="col-3 mt-1">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                                        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                                        alt="Gallery image 2" class="w-100" />
                                </div>
                                <div class="col-3 mt-1">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
                                        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
                                        alt="Gallery image 3" class="w-100" />
                                </div>
                                <div class="col-3 mt-1">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.webp"
                                        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.webp"
                                        alt="Gallery image 4" class="w-100" />
                                </div>
                            </div>
                        </div>


                        <div class=" row">

                            <div class="col-xl-6 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="card-content">
                                        <div class="card-body cleartfix">
                                            <div class="media align-items-stretch">
                                                <div class="align-self-center">
                                                    <i class="icon-pointer danger font-large-2 float-right"></i>
                                                    <div class="media-body">
                                                        <h1>خط العرض</h1>

                                                        <div class="align-self-center">
                                                            <span>{{ $place->gnumh }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="card-body cleartfix">
                                        <div class="media align-items-stretch">
                                            <div class="align-self-center">
                                                <i class="icon-pointer danger font-large-2 float-right"></i>
                                                <div class="media-body">
                                                    <h1>خط الطول</h1>
                                                </div>
                                                <div class="align-self-center">
                                                    <span>{{ $place->gnumw }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <i class="icon-support primary font-large-2 float-right"></i>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <div class="media-body text-right">
                                                    <h3>المحافظة</h3>
                                                    <span>{{ $place->gnump1 }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <i class="icon-support primary font-large-2 float-right"></i>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                        </div>
                                        <div class="media-body text-right">
                                            <div class="align-self-center">
                                                <h3>المركز</h3>

                                            </div>
                                        </div>
                                        <span>{{ $place->gnump2 }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <i class="icon-support primary font-large-2 float-right"></i>
                                    <div class="card-body">

                                        <div class="media d-flex">
                                        </div>
                                        <div class="media-body text-right">
                                            <div class="align-self-center">
                                            </div>
                                            <h3>القرية</h3>
                                            <span>{{ $place->gnump3 }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <i class="icon-support primary font-large-2 float-right"></i>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>نوع الأملاك</h3>
                                                <span>{{ $place->gnump4 }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <i class="icon-direction danger font-large-2 float-right"></i>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-right">
                                                <h3 class="danger">جهة الولاية</h3>
                                                <span>{{ $place->gnump5 }}</span>
                                            </div>
                                            <div class="align-self-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <i class="icon-direction danger font-large-2 float-right"></i>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-right">
                                                <h3 class="danger">القانونية</h3>
                                                <span>{{ $place->gnump6 }}</span>
                                            </div>
                                            <div class="align-self-center">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <i class="icon-direction danger font-large-2 float-right"></i>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-right">
                                                <h3 class="danger">التاريخ</h3>
                                                <span>{{ $place->gnump10 }}</span>
                                            </div>
                                            <div class="align-self-center">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <i class="icon-direction danger font-large-2 float-right"></i>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-right">
                                                <h3 class="danger">موقف الإزالة</h3>
                                                <span>{{ $place->gnump9 }}</span>
                                            </div>
                                            <div class="align-self-center">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-right">
                            <h3 class="warning">الرد</h3>
                            <span>{{ $place->gnump7 }}</span>
                        </div>
                        <div class="align-self-center">
                            <i class="icon-direction danger font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="35"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-right">
                        <h3 class="success">الملاحظات</h3>
                        <span>{{ $place->gnump11 }}</span>
                    </div>
                    <div class="align-self-center"> <i class="icon-direction danger font-large-2 float-right"></i>
                    </div>
                </div>
                <div class="progress mt-1 mb-0" style="height: 7px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="60"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-right">
                        <h3 class="danger">تفاصيل الرد</h3>
                        <span>{{ $place->gnump8 }}</span>
                    </div>
                    <div class="align-self-center">
                        <i class="icon-direction danger font-large-2 float-right"></i>
                    </div>
                </div>
                <div class="progress mt-1 mb-0" style="height: 7px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="40"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-right">
                        <h3 class="danger"> الحالة</h3>
                        <span class=" warning"> @foreach ($tags as $item)

                            {{$item->tag}}
                            @endforeach

                        </span>
                    </div>
                    <div class="align-self-center">
                        <i class="icon-direction danger font-large-2 float-right"></i>
                    </div>
                </div>
                <div class="progress mt-1 mb-0" style="height: 7px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="40"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>


    <span class="btn-group">
        <a class="btn btn-primary btn-md" href="{{ route('place.edit', $place->id) }}" role="button">
            تعديل</a>
        <a class="btn btn-danger btn-md" href="{{ route('soft.delete', $place->id) }}">إنهاء عمل
            المتغير</a>
    </span>

    </section>
</div>
@endsection
