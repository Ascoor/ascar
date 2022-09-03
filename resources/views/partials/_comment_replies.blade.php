@extends('layouts.app', ['activePage' => 'post.comment_replies', 'titlePage' => __('الرد على  المنشورات')])
@foreach($comments as $comment)
<div class="display-comment">
    <strong>{{ $comment->user->name }}</strong>
    <p>{{ $comment->body }}</p>
    @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])  
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment_body" class="form-control" />
            <input type="hidden" name="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
    </form>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Reply" />
        </div>
    </div>
@endforeach
