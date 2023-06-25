@extends('blog.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


   
  
<style>
    * .post-description{
        height: 50px;
        overflow: hidden;
    }
</style>



<section class="about container" id="about" style="margin-top:1rem;">
    
    <div class="contentBx">
        @if(session('success'))
    <div style="color:green;" id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <h2 class="titleText">DAST Blog Admin</h2>
        <p class="title-text">
            Never miss out again with where blockchain web3 and tech is going! DAST Blog got you covered!
        </p>
        <a href="#blogs" style="background: rgb(1, 1, 92);color:white;" class="btn2">Read more</a>
        <a href="/create" style="background: rgb(1, 1, 37);color:white;" class="btn2">Create Post</a>
        @if (Auth::user() && Auth::user()->level_id == 3)
        <a href="/xclusive" style="background: rgb(244, 4, 4); color: white;" class="btn2">Admin X</a>
    @endif
    

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
        <a href="/show/{{ $blog->id }}">
        <img class="post-img" src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
        </a>
    @else
    
    <a href="/show/{{ $blog->id }}">
        <img src="https://app.dast.tech/assets/images/key.png" alt="Default Image">
    </a>
    @endif
    <a style="color:{{ $blog->status === 'approved' ? 'green' : ($blog->status === 'pending' ? 'red' : 'rgb(1, 1, 56)') }};" href="/show/{{ $blog->id }}" class="post-title">{{ $blog->title }}</a>

        <p>Created at: <span class="post-date">{{ $blog->created_at->format('F d, Y') }}</span></p>
        <div class="post-description"> <p >{!! $blog->body !!}</p></div>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1198229233/photo/getting-close-enough-to-capture-the-details.jpg?s=612x612&w=0&k=20&c=8ssdkOODW1LIVQKvvUDB1UrNOeXtGHT0ey6oU2_WVhs=" alt="" class="profile-img">
            <p class="profile-name">Author: {{ $blog->author }}</p>
           
            
        </div>
        <div style="display: flex;">
            @if(Auth::user()->level_id == 3)
            <form action="{{ route('blogs.approve', $blog->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit">
                    <img style="width: 40px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAAaVBMVEX///8A/wEA/wD//f+X/pYn/yfk/uXa/9lX/1Yy/zI6/zyR/pJQ/1Cm/6XS/tLu/+9z/nO6/rpF/kX3/vew/7GN/ozE/sOE/oKd/pzx/vGp/qgb/xt9/nxe/l+2/rSI/4lm/mXK/sls/mwhJyXaAAADAElEQVRoge2Ya5OrIAyGJSrWXrzU2vt2z/b//8hDAGvQlU5je+Z84J3ZGbUsD0kgBKIoKCgoKCgoKCjo/1Mjs3q3qzPZfApQrBYCrMRiVbwfJNtcE4SWfspb+UZAHJ0q3S0Q6ZeqVD9aFfOQcQKP4af5cpmnnVEgkq7RFWAzgyG32KH6W2+K0nwqi81amK9Ladogcc9m7I0VIhm4Qyb4FdbIrU2oUi6j1l4R7S9zqfkG+MKHA1h/3rgMDPF2IqjyiKy16CbdgsXY6zEefE1kbhEKsuQwpP7fxNvk0jPgyIHoOZPEnhYF9AzxzWEkGA+vr/YPhIJ4LZ5SiUHf+lrcegbTV1GFLvAliyPxFc8OFXVlSOtpsCJ28OIRRS324cnnByCQK4/R4Pz3+OAqiP7wGDg5SUSyc+n+fBfEjrUyOCsYkBVmv+5FzYHUmQJXwhCpYpwuvvBNaaEgdocoU71JEUoLdIGclHMvnMTV4MZkPZDaHk/dj2eKENhKbf++STIhiSEpO5ts/rPd/FBfQY224lb5+v6bKQfpTSg+92M2HpGC2pF0xkL2MqRW/5Xjw4mmWbUc4tKx426aq/muTXpNO7Dbg+ubY9Qs6XuX2tRH2PEhhTOR4PxFXsWlmws8yMNd0Z32CoImE3gsQJ67HoHXo6QU8tgXDrzAkykc5ZRC7OgzbylYU5guxvLyK4UscZ3oGBU4SSu4tYwwcCGdboBXDzkJUg4ZgxCs1fuKAXFTvbNaBkE3lgIn1Q82rZtLcYuYRH3IWYcid/uNNw7EqRUbpHK2E1tIkPog6W2BPuvb4fjLGo+GJVELD8bPcDSi4jHGxd0BLMOdSFvMNaeIqVGZWplziFtVYmkE3oLZr1HBXem40FHHOlTeYvaJxkeHSgwWRKKbzDr5jg9Bt5XT4UHMO5FqPTnO4cEYxOsbyYgyfTDV60PMZzw7YivN9JXtbeKywMCnPPmqpq89Zq2PoUpzgUNucER3gfNOffwqyugfXKpZ0KevB4OCgoKCgoKCguboL5elGmQrXF/oAAAAAElFTkSuQmCC" alt="">
                </button>
            </form>
        @endif
          @if(Auth::user()->level_id == 3)
            <form action="{{ route('blogs.set-pending', $blog->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button title="unapprove" type="submit"><img img style="width: 30px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfUr-zEmkez076tTZ3wCMEH3GH4M7Me8z3Ow&usqp=CAU" alt=""></button>
            </form>
            
            @endif
            @if(Auth::user()->id == $blog->user_id)
    <form style="margin-right:2.5rem;" action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"><img title="delete blog" style="width: 30px;" src="data:image/png;base64,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" alt=""></button>
    </form>
@endif

@if(Auth::user()->id == $blog->user_id)

            <a title="edit blog" style="color:rgb(1, 1, 56);"  href="/blogs/{{ $blog->id }}/edit" class="post-title"><img img style="width: 30px;" src="data:image/png;base64,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" alt=""></a>
@endif

        </div>
    </div>
   

    @endforeach
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }
    
        .pagination li {
            margin-right: 5px;
        }
    
        .pagination li a,
        .pagination li span {
            display: inline-block;
            padding: 5px 10px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            color: #333;
            text-decoration: none;
            border-radius: 3px;
        }
    
        .pagination li.active a,
        .pagination li.active span {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }
    
        .pagination li.disabled span {
            pointer-events: none;
            background-color: #f2f2f2;
            border-color: #ccc;
            color: #ccc;
        }
    </style>
<div class="pagination">
    {{ $blogs->links() }}
</div>
    
    
</div>
<script>
    $(document).ready(function() {
        // Fade out the success message after 3 seconds
        $('#success-message').delay(3000).fadeOut('slow');
    });
</script>






