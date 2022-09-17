@extends('layouts.app', ['activePage' => 'home', 'titlePage' => __('الصفحة الرئيسية')])

@section('content')
<div class="container">
    <div class="container" style="align-items: center;">
        <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search.index') }}"">
                            @csrf
                            <input class=" form-control mr-sm-2" style="text-align: center;" type="search"
            placeholder=" المتغير-المدينة-القرية" name=" query" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
    </div>
</div>


@if($tags->count() > 0 )
<div class="container-fluid">
    <div class="table-responsive-md">

        <table class="table-warning" style="text-align: center; align-items:center;">
            <thead>
                <tr>
                    <th>الحالة</th>

                </tr>

            </thead>

            @php
            $i = 1;
            @endphp
            @foreach($tags as $item)
            <tbody>

                <tr class="table-primary">



                    <td>{{ $item->tag }}</td>

                    <td>
                        <a class="btn btn-info" href="{{ route('tags.edit', $item->id) }}">
                            تعديل</a>

                        <a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}">حذف</a>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
{!!$tags->links() !!}
</div>

</div>
</div>
</div>
@else
<div class="col">
    <div class="alert alert-danger" role="alert">
        Not tags
    </div>
</div>

@endif
</div>







@endsection