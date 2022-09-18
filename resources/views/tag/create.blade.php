@extends('layouts.app', ['activePage' => 'tags.create', 'titlePage' => __('إضافة حالة')])

@section('content')
@if ($message = Session::get('تمت'))
<div class="alert alert-danger" role="alert">
    {{$message}}
</div>
@endif
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
    @endif

<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
<<<<<<< HEAD
                <h1 class="display-4">إضافةحالة</h1>
                <a class="btn btn-success" href="{{route('tags')}}">جميع الحالات</a>
=======
                <h1 class="display-4">إضافة حالة</h1>
                <a class="btn btn-success" href="{{route('tags.index')}}">عوده للخلف</a>
>>>>>>> 64690d525dc049ec57ac386c0912377178cf494c
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
<<<<<<< HEAD
                    <input type="فثءف" name="tag" class="form-control">
=======
                    <input type="text" name="tag" class="form-control">
>>>>>>> 64690d525dc049ec57ac386c0912377178cf494c
                </div>


                <div class="form-group">

                    <button class="btn btn-danger" class="form-group" type="submit">save</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
