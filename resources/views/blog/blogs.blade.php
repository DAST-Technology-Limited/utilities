@extends('blog.app')

@section('content')


   
  
   



<section class="about container" id="about" style="margin-top:1rem;">
    <div class="contentBx">
        <h2 class="titleText"> Latest Trends</h2>
        <p class="title-text">
            Never miss out again with where blockchain web3 and tech is going! DAST Blog got you covered!
        </p>
        <a href="#blogs" style="background: rgb(1, 1, 92);color:white;" class="btn2">Read more</a>
        <a href="/create" style="background: rgb(1, 1, 37);color:white;" class="btn2">Create Post</a>
    </div>
    <div class="imgBx">
        <img src="https://media.istockphoto.com/id/1438623716/photo/black-woman-with-laptop-reading-typing-and-working-for-online-digital-newspaper-marketing-or.webp?b=1&s=170667a&w=0&k=20&c=l6JsW73GP3gWBLPDEdYbDmp-exPW02MRWpjpEzdPjLg=" alt="" class="fitBg">
    </div>
</section>
<div class="post container" id="blogs">
    
@foreach ($blogs as $blog)

    <!-- Post 1 -->
    <div class="post-box tech">
        @if ($blog->image)
        <img class="post-img" src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
    @else
        <img src="https://app.dast.tech/assets/images/key.png" alt="Default Image">
    @endif
        <a style="color:rgb(1, 1, 56);" href="/show/{{ $blog->id }}" class="post-title">{{ $blog->title }}</a>
        <p>Created at: <span class="post-date">{{ $blog->created_at->format('F d, Y') }}</span></p>
        <p class="post-description">{{ Str::limit($blog->body, 30) }}</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1198229233/photo/getting-close-enough-to-capture-the-details.jpg?s=612x612&w=0&k=20&c=8ssdkOODW1LIVQKvvUDB1UrNOeXtGHT0ey6oU2_WVhs=" alt="" class="profile-img">
            <p class="profile-name">Author: {{ $blog->author }}</p>
            
        </div>
    </div>
    {{ $blogs->links() }}
    @endforeach
    
</div>





