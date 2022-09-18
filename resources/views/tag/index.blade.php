@extends('layouts.app', ['activePage' => 'tags', 'titlePage' => __('إدارة الحالة ')])

@section('content')
<div class="container">
    <div class="container" style="align-items: center;">
        <a href="{{ route('tags.create') }}" class="btn btn-primary" type="bottom"> إضافة حالة</a>
    </div>
</div>
@if ($message = Session::get('تمت'))
<div class="alert alert-danger" role="alert">
    {{$message}}
   </div>
@endif

@if($tags->count() > 0 )
<div class="container-fluid">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">الحالة</th>
            <th scope="col">التحكم</th>

          </tr>
        </thead>

        @php
        $i = 1;
        @endphp
        @foreach($tags as $item)
        <tbody>
          <tr>
            <th scope="row">{{  $item->id }}</th>

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

</div>
@endif







@endsection


