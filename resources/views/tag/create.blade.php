@extends('layouts.app', ['activePage' => 'create', 'titlePage' => __('إضافة متغير')])

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">إضافةحالة</h1>
                <a class="btn btn-success" href="{{route('tags')}}">جميع الحالات</a>
            </div>
        </div>

    </div>
    <div class="row">

        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $item)
            <li>
                {{$item}}
            </li>
            @endforeach
        </ul>
        @endif


        <div class="col">
            <form action="{{route('tag.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">الحالة</label>
                    <input type="فثءف" name="tag" class="form-control">
                </div>


                <div class="form-group">

                    <button class="btn btn-danger" class="form-group" type="submit">save</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
