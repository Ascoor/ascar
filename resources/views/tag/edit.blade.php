<<<<<<< HEAD
@extends('layouts.app', ['activePage' => 'tag.edit', 'titlePage' => __('تعديل  الحالة')])
=======
@extends('layouts.app', ['activePage' => 'tags.edit', 'titlePage' => __('تعديل  الحالة')])
>>>>>>> 64690d525dc049ec57ac386c0912377178cf494c


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

    <div class="container pt-3">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header"
                        style="color:rgb(255, 242, 64);background-color:#153257;align-items: center;text-align:center;">

                        <h1 class="display-4">تعديل  الحالة</h1>
<<<<<<< HEAD
                        <h4  class="display-6"> الحالة :  {{ $tag->tag }}</h4>
=======
                        <h4 class="display-5"> الحالة : {{ $tag->tag }}</h4>
>>>>>>> 64690d525dc049ec57ac386c0912377178cf494c


                        <p class="lead" style="text-align: center; padding-top: 20px;"></p>

<<<<<<< HEAD
                        <a class="btn btn-success" href="{{route('tag.index')}}">جميع الحالات</a>
=======
                        <a class="btn btn-success" href="{{route('tags.index')}}">عوده للخلف </a>
>>>>>>> 64690d525dc049ec57ac386c0912377178cf494c
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

<div class="container">
    <div class="card">
      <div class="card-body">

                           <div class="col">
                            <div class="form-group form-file-upload form-file-multiple">
                                <form action="{{ route('tag.update', $tag->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">إسم الحالة</label>
                                        <input type="text" name="tag" value="{{ $tag->tag }}">
                                    </div>



                                    <div class="form-group">

                                        <button class="btn btn-danger" class="form-group" type="submit">save</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
