@extends('layouts.app', ['activePage' => 'tag.edit', 'titlePage' => __('تعديل إسم الحالة')])


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

                        <h1 class="display-4">تعديل إسم الحالة</h1>
                        <h4 class="display-5">إسم الحالة {{ $tag->tag }}</h4>


                        <p class="lead" style="text-align: center; padding-top: 20px;"></p>

                        <a class="btn btn-success" href="{{route('tags.index')}}">جميع الحالات</a>
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
                            <div class="form-group form-file-upload form-file-multiple">
                                <form action="{{ route('tags.update', $tag->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">إسم الحالة</label>
                                        <input type="number" name="tag" value="{{ $tag->tag }}">
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