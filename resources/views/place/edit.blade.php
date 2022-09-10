@extends('layouts.app', ['activePage' => 'place.edit', 'titlePage' => __('الصفحة الرئيسية')])


@section('content')


<div class="content">
    <div class="container pt-3">
    </div>
    <div class="col-md-12">
    </div>



    <div class="card ">

        <div class="card-header card-header-primary">
            <h4 class="card-title"> رقم المتغير {{ $place->gnump }}</h4>
            <p class="card-category">{{ __(' تعديل بيانات المتغير') }}</p>
        </div>

        <div class="card-body">
            <div class="row">
                @if (count($errors)>0)
                <ul>
                    @foreach ($errors->all() as $item)
                    <li>
                        {{$item}}
                    </li>
                    @endforeach
                </ul>
                @endif
                <div class="col">
                    <div class="form-group form-file-upload form-file-multiple">
                    <form action={{ route('places.update', $place->id) }}" method="PUT" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input type="number" name="gnump" value="{{ $place->gnump }}">
                        </div>

                        <div class="form-group">
                            <input type="float" name="gnumh" value="{{ $place->gnumh }}">
                        </div>
                        <div class="form-group">
                            <input type="float" name="gnumw" value="{{ $place->gnumw }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="gnump1" value="{{ $place->gnump1 }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="gnump2" value="{{ $place->gnump2 }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="gnump3" value="{{ $place->gnump3 }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="gnump4" value="{{ $place->gnump4 }}">

                        </div>

                        <div class="form-group">
                            <input type="text" name="gnump5" value="{{ $place->gnump5 }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="gnump6" value="{{ $place->gnump6 }}">

                        </div>
                        <div class="form-group">
                            <input type="text" name="gnump7" value="{{ $place->gnump7 }} ">
                                               </div>
                        <div class="form-group">
                            <input type="text" name="gnump8" value="{{ $place->gnump8 }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="gnump9" value="{{ $place->gnump9 }}">
                        </div>
                        <div class="form-group">
                            <label><a>التاريخ</a>
                                <input type="date" name="gnump10" value="{{ $place->gnump10 }}">
                        </div>

                        <div class="form-group">
                            <label><a>الملاحظات</a>
                                <input type="text" name="gnump11" value="{{ $place->gnump11 }}"></label>
                            </div>

                        </div>
                                            <div class="form-group">
                                                <label><a>التعليق</a>
                                                    <input type="text" name="gnump13" value="{{ $place->gnump13 }}"></label>
                                            </div>

<div class="form-group">
  <label for=""></label>
  <input type="file" name="photo1" id="" class="form-control" placeholder="" aria-describedby="helpId">
  <small id="photo1" class="text-muted">Help text</small>
</div>
    <input type="file" name="photo1" multiple="" class="inputFileHidden">

                        <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



            @if ($message = Session::get('تمت'))
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @endif
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
                @endif
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
        @endpush
