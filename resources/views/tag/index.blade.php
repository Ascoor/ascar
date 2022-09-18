@extends('layouts.app', ['activePage' => 'tag.index', 'titlePage' => __('إدارة الحالات ')])


@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">All Tags  </h1>
        <a class="btn btn-success" href="{{route('tag.create')}}"> create tag</a>
           </div>
      </div>
    </div>
    <div class="row">


        @if ($tags->count() > 0 )
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col"> Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($tags as $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->tag}}</td>

                        <td>
                            <a class="btn btn-info" href="{{route('tag.edit',['id'=> $item->id])}}">
                                تعديل</a>

                            <a class="btn btn-danger" href="{{route('tag.destroy',['id'=> $item->id])}}">حذف</a>

                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>

          </div>
        @else
        <div class="col">
            <div class="alert alert-danger" role="alert">
                Not tags
              </div>
        </div>

        @endif


    </div>
  </div>
@endsection
