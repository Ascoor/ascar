@extends('layouts.app', ['activePage' => 'tags', 'titlePage' => __('إضافة إجراء')])

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

        <div class="card">
            <div class="card-header card-header" style="
    color: rgb(255, 242, 64);
    background-color: #153257;
    align-items: center;
    text-align: center;">

                <h1 class="display-4">إضافةإجراء</h1>
                <a class="btn btn-success" href="{{route('tags')}}">جميع الإجراءات</a>

            </div>

            <div class="card-body">
                <div class="col">
                    <form action="{{route('tag.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">الإجراء</label>

                            <input type="text" name="tag" class="form-control">




                            <div class="form-group">

                                <button class="btn btn-danger" class="form-group" type="submit">save</button>
                            </div>

                    </form>
                </div>

                @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $item)
                    <li>
                        {{$item}}
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        @endsection