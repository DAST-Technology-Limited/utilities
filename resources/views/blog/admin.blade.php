@extends('blog.app')

@section('content')


   
  
   



<section class="about container" id="about" style="margin-top:1rem;">
    <div class="contentBx">
        <h2 class="titleText">DAST Blog Admin</h2>
        <p class="title-text">
            Never miss out again with where blockchain web3 and tech is going! DAST Blog got you covered!
        </p>
        <a href="#blogs" style="background: rgb(1, 1, 92);color:white;" class="btn2">Read more</a>
        <a href="/create" style="background: rgb(1, 1, 37);color:white;" class="btn2">Create Post</a>
        <a href="/xclusive" style="background: rgb(244, 4, 4);color:white;" class="btn2">Admin X</a>

    </div>
    <div class="imgBx">
        <img src="https://media.istockphoto.com/id/1467849648/photo/indoor-shot-of-serious-elegant-female-administrator-works-from-home-poses-with-laptop.webp?b=1&s=170667a&w=0&k=20&c=LReWfbRChwb55LuF2iZLU6LmgxnoJ34Q9x8M2rFS3fM=" alt="" class="fitBg">
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
    <a style="color:{{ $blog->status === 'approved' ? 'green' : ($blog->status === 'pending' ? 'red' : 'rgb(1, 1, 56)') }};" href="/show/{{ $blog->id }}" class="post-title">{{ $blog->title }}</a>

        <p>Created at: <span class="post-date">{{ $blog->created_at->format('F d, Y') }}</span></p>
        <p class="post-description">{{ Str::limit($blog->body, 30) }}</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1198229233/photo/getting-close-enough-to-capture-the-details.jpg?s=612x612&w=0&k=20&c=8ssdkOODW1LIVQKvvUDB1UrNOeXtGHT0ey6oU2_WVhs=" alt="" class="profile-img">
            <p class="profile-name">Author: {{ $blog->author }}</p>
           
            
        </div>
        <div style="display: flex;">
            <form action="{{ route('blogs.approve', $blog->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit"><img style="width: 30px;" src="data:image/png;base64,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" alt=""></button>
            </form>
    
            <form action="{{ route('blogs.set-pending', $blog->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button title="unapprove" type="submit"><img img style="width: 30px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfUr-zEmkez076tTZ3wCMEH3GH4M7Me8z3Ow&usqp=CAU" alt=""></button>
            </form>
            
            
            <form style="margin-right:2.5rem;" action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"><img title="delete blog" style="width: 30px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAA0lBMVEX////jOTX9/f3ZNzPcNzPaNzPbNzPdNzTVNTLgAADjNjL8+PjZKiXTAADRMi7iKiXTQj7lSkfNEQb09PTg4ODu7u7n5+fW1tbmPzvjMCviJiD87+/hIBr3yMfwqajsiIbqcG3oU1D53NzpdXPwo6LiFw/IHxrIyMjM1NSzkpG8Y2G/TUu7Pju5NzToZmPzs7HdZWPhoaDz4eHXUk/aionuk5Hm0dDbp6bOcW/excXGPTrEMS3EhYTKoaDmwcHQvby/Ix6+r6+7n5+1VVOyf364bGuqxVeyAAAFC0lEQVRoge3aaXeaShgAYEEUHacSBEGWaDUqVUzS2rRNTdPE1Pz/v1QGlGUWnBHuh3tO3y/JOS6P7zIwoI3Gv/jfRs+7Hk8+TkeOpjmj6cfJ+Nrr1QvMxjdg4WsOAECKIvrjaP4C3IxndUGziY7eXyICSfpkVgMx1l0akEGuPq4meJOuViIcHa078SoQrnNOSMJxL2XGQOMjUGjgkqLNpu7ZQhWK5k6FR2DeFSJipjsXIrw7X5RA4d8JdGY24mw4Hs6Iu2TXvnCpTgH8az7jfnEpgWJxz2OML2pHFj6Hcl/R4FGuK9UqicXvcmNWOQ8UfumMeaOL5yofoFm2Xu5K1gdwtUKUHXWcz2xjXlIsR/d6hfD0kk/kf2EZ2y7x6dNwpr2GXIhGT3eyx/FXdrcMZEo8VU+DMJAyzR4nPt5XujF28SeO5LQ4MmFESvaw18I/oPaDZvSInIFEeWdqNHodBX9x36Ag34jzID8i9zodFU/lgTQ8vFiiCJELJBcLmYgogufikKlQjllgxBhDSiCk0y6+/oOMPYkYrVgZcEeMYLkQA0aukTiafVo0seikUVDwtTKjJYJCueKIPkNxv59rexJdjt43PnToSrH1PUa1xJFmMzfJ4MrgqZYogjqUU2C+Xvc1IckcZEphvm6YpwYh5DRtqeI85lqiM89yIkg20ycFXGXr0WNvUQSQ/Mo5KQMrRX6zT7v8SHF9HifZ/5n1nX21w43gR4FEyXWeuRT5Edw4KrnlyB4uXoQ0EiUbL/mOvYXiQyhEq9WKFBCmCPOgcjkSGa0oF7BLkZLN6YVIKwk1XSiyLNWNHI12W3qS5f8ISY22kiE1lysz2souReptfM7II7WOcMEAYYpUXowsQwGP8mm8HupDioYCf52O9fKXqsculqHA5xNiVD7UswzFfUkzMWtCCEMZ2CkyrHr6ZRnSzsqQqhsJhqGA9TBFDHbn+RGKocJnI91JGN+rIzRDXb5kW0jDqrhNZRhgY2WIPGQuR06Eaqjw1zDbd8nGz2q7+ibVQNXKXWwZ1ldGvUQQ3AChld/Vy0PWfAkguKHC1TB/1SgbJmNfz48Qhro0jcKlqWE90FPhRkgDHqziTQl5aJN3ekQQ0pBegyF2jc1KhQ+hGGQicSodWipd76zS2C4ohrSz8USi1ls/aKk48/PIHJJGNFqWgSNRKmZI/d5qe0ZpbKFCGiA0iUTirgS0cxfQvUYJE12m6RRDHQRER46pPFNvsPhz7BZn4XbnN59mwBU1EZSK+Ug9TsIBZIZPq5UK1yY1EaSY9o66WNROi4h2LnADbGyTYaCCvSwZCnPfTjGiZcgo1rFgL/RjGK6UGepyzyzWUXmDdEXAeCs10JJkKZKQwSxWopj2G70vEpchLd9ss9xIlP1rqVJmgNf9eSNRXjb0fcVZA264jLgvdrCG1GTKDQmuA/tMP/LKpxW9MWUGWK4+8RrJjNnBH2oyTEOCfwL73FwVmaEZJbOj/aSAbkjwNkqjZJ2zkzk8URiKIcGng2AaRwUlExxeyZ8vEHs4+HoIUBqixomJihb28XQKe2rYD6NCXUYkjIWY/SHswwJ0uo5CwmGPCOFK5ZQkm8hZvYdLV3Oyr+McuFyG76t9YCdZXGwcGSt2gmC/Oryvw83t7SZcvx+i948agZKoSCSOgZwYyoUdA0i4vFBFBjlDK5IQFUf0r4WAGpIoQJGErCSM+P3rBApUut8SiL+aOKH7PgcrAAAAAABJRU5ErkJggg==" alt=""></button>
            </form>

            <a title="edit blog" style="color:rgb(1, 1, 56);"  href="/blogs/{{ $blog->id }}/edit" class="post-title"><img img style="width: 30px;" src="data:image/png;base64,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" alt=""></a>
        </div>
    </div>
    {{ $blogs->links() }}

    @endforeach
    
</div>





