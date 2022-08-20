@extends('layouts.app')
@section('content')

<table>
    @foreach ($places as $item)
<tbody>
    <tr>
        @php
        $i = 0;
        
        @endphp
        
        <th > {{ $item->id }}</th>
        <td>{{ $item->gnump }}</td>
        <td>{{ $item->gnumw }}</td>
<td>{{ $item->gnumw }}</td>
<td>{{ $item->gnump1 }}</td>
<td>{{ $item->gnump2 }}</td>
<td>{{ $item->gnump3 }}</td>
<td>{{ $item->gnump4 }}</td>
<td>{{ $item->gnump5 }}</td>
<td>{{ $item->gnump6 }}</td>
<td>{{ $item->gnump7 }}</td>
<td>{{ $item->gnump8 }}</td>
<td>{{ $item->gnump9 }}</td>
<td>{{ $item->gnump10 }}</td>

<td>
<span>
<a class="btn btn-info" href="{{ route('places.edit', $item->id) }}"> تعديل</a>
</span>
</td>
<td>     
<span>
<a class="btn btn-success" href="{{ route('places.show', $item->id) }}">عرض</a>
</span>     
</div>
</td> 

</div>
<td>
<span>
<a class="btn btn-danger" href="{{ route('soft.delete', $item->id) }}"> حذف </a>
</span>
</td>
</td>  


</tr>
</tbody>
</table>
@endsection










