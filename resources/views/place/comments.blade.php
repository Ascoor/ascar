@foreach ($comments as $item )
<div @if ($item->parent_id !=null )
    style="margin-left:60px;
    color:red;
    font-size:20px;
"
@endif>


    <strong> {{$item->user->name}}</strong>
    <p>{{ $item->desc }}</p>
    <form method="POST" action="{{route('comments.store')}}">
        @csrf
        <div class="form-group">

            <input type="text" name="desc" class="form-control">

            <input type="hidden" name="place_id" value="{{ $place_id }}" class="form-control">
            <input type="hidden" name="parent_id" value="{{ $item->id }}" class="form-control">

        </div>
            <button type="submit" class="btn btn-danger text-white">رد </button>
    </form>
    @include('place.comments',['comments'=>$item->replies])





</div>








@endforeach
