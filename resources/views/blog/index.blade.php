@extends('blog.app')

@section('content')
<style>
    * .post-description{
        height: 50px;
        overflow: hidden;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<section class="home" id="home" style="margin-top:5.5rem;  background: rgb(8, 7, 18);
">
    <div class="home-text container text-center">
        <h1 class="display-4">WEB3 POWERED!</h1>
        <h4 class="home-title">TECH INITIATED! DAST PROMPTED</h4>
        <form class="subscribe-form mt-4">
            <div class="form-group">
                <input class="form-control form-control-lg" type="email" name="email" placeholder="Your Email Address">
            </div>
            <button style="color:blue;" class="btn btn-primary btn-lg mt-3" type="submit">Subscribe</button>
            <p class="text-muted mt-3">Already waiting for the next blog post? Let's keep you informed.</p>
            <p class="text-muted">Dast Technologies</p>
        </form>
    </div>
</section>
<section class="about container" id="about">
    <div class="contentBx" style="height: 5vh;">
        <h2 class="titleText">Catch up with the Latest Trends</h2>
        <p class="title-text">
            Never miss out again with where blockchain web3 and tech is going! DAST Blog got you covered!
        </p>
        <a href="#more" class="btn2">Read more</a>
    </div>
    <div class="imgBx">
        <img src="https://media.istockphoto.com/id/1337408909/photo/shot-of-a-young-woman-working-on-her-laptop-on-the-couch-at-home.jpg?s=612x612&w=0&k=20&c=8QHqDt2-SyUOGaeUQ2krv3I55A_Zrp0ns5kbyg-OFVk=" alt="" class="fitBg">
    </div>
</section>


<div class="post container" id="more">
    <!-- Post 1 -->
   
@foreach ($blogs as $blog)
<!-- Post 1 -->
<div class="post-box tech">
<a href="/show/{{ $blog->id }}">
    @if ($blog->image)
    <img class="post-img" src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
@else
    <img src="https://app.dast.tech/assets/images/key.png" alt="Default Image">
@endif
    <a style="color:rgb(1, 1, 56);" href="/show/{{ $blog->id }}" class="post-title">{{ $blog->title }}</a>
    <p>Created at: <span class="post-date">{{ $blog->created_at->format('F d, Y') }}</span></p>
   <div class="post-description"> <p >{!! $blog->body !!}</p></div>
    <div class="profile">
        <img src="https://media.istockphoto.com/id/1198229233/photo/getting-close-enough-to-capture-the-details.jpg?s=612x612&w=0&k=20&c=8ssdkOODW1LIVQKvvUDB1UrNOeXtGHT0ey6oU2_WVhs=" alt="" class="profile-img">
        <p class="profile-name">Author: {{ $blog->author }}</p>
        
    </div>
</a>
</div>
{{ $blogs->links() }}
@endforeach

    
</div>





