@extends('layouts.app', ['activePage' => 'tag.edit', 'titlePage' => __('تعديل الإجراء')])


@section('content')
</div>
</div>
</div>
</div>
</div>

@if($message = Session::get('تمت'))
<div class="alert alert-danger" role="alert">
    {{ $message }}
</div>
@endif
@if(session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
    @endif

    <div class="container">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header" style="color:rgb(255, 242, 64);background-color:#153257;align-items: center;text-align:center;">

                    <h3>تعديل الإجراء</h3>
                    <h4 class="display-6"> الإجراء : {{ $tag->tag }}</h4>


                    <p class="lead" style="text-align: center; padding-top: 20px;"></p>

                    <a class="btn btn-success" href="{{route('tags')}}">جميع الإجراءات</a>
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


                <div class="card-body">

                    <form action="{{ route('tag.update', $tag->id) }}" method="post">
                        <div class="form-group">
                            @csrf


                            <div class="form-group">
                                <label for="exampleFormControlInput1">إسم الإجراء</label>
                                <input type="text" name="tag" value="{{ $tag->tag }}">
                            </div>



                            <div class="form-group">

                                <button class="btn btn-danger" class="form-group" type="submit">save</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>

        @endsection