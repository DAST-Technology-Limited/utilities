@extends('blog.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    
<section class="about container" id="about">
    <div class="contentBx">
        <h2 class="titleText">{{ $blog->title }}</h2>
        <p class="title-text">
            {{ $blog->body }}
        </p>
        <a href="#more" class="btn2">Read replies</a>
    </div>
    <div class="imgBx">
        <img class="fitBg" src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
    </div>
</section>



<style>
    .comment {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
    }

    .comment p {
        margin-bottom: 5px;
    }

    .comment h4 {
        margin-bottom: 10px;
    }

    .reply {
        margin-left: 20px;
        padding: 5px;
        border: 1px solid #eee;
        background-color: #fff;
    }
</style>
@if ($comments->isNotEmpty())
    @foreach ($comments as $comment)
        <div id="more" class="comment">
            <p>Comment by: {{ $comment->name }}</p>
            <p>{{ $comment->content }}</p>
            <p style="color:red;">Replies: {{ $comment->replyCount() }}</p>
            <h4>Replies:</h4>
            @if ($comment->comment_replies->isNotEmpty())
                @foreach ($comment->comment_replies as $reply)
                    <div class="reply">
                        <p>Reply by: {{ $reply->name }}</p>
                        <p>{{ $reply->content }}</p>
                    </div>
                @endforeach
            @else
                <p>No replies for this comment.</p>
            @endif
        </div>
    @endforeach
@endif


