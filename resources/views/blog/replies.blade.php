@extends('blog.app')

@section('content')



























<div class="btx-section js-dynamic-navbar btx-p-border-border" id="Desktop Intro"  data-index="2">
	<div class="btx-background" data-type="image" data-parallaxspeed="0" data-contentfade="" data-mobileparallax="1"><div class="btx-background-overlay btx-p-bg-bg" style="background-color:#f5ecea; opacity:0.9;"></div></div>	<div class="btx-section-wrapper" >
					<div class="btx-container">
							<div class="btx-row btx-row--main">
									<div class="btx-col-12">
<div class="btx-item js-item-box btx-box btx-center-align btx-p-border-border">
		<div class="btx-box-inner"  data-height="">
		<div class="btx-box-content btx-middle-vertical" style="overflow-y:hidden;">
			<div class="btx-box-body" >
															
<div class="btx-item js-item-space btx-space" style="height:10px;"></div>
											

											
<div class="btx-item js-item-space btx-space btx-mobile-hidden" style="height:60px;"></div>
												</div>
		</div>
	</div>
</div>
</div>
							</div>


					<div class="btx-row btx-row--main">
									<div class="btx-col-1">
<div class="btx-item js-item-space btx-space" style="height:20px;"></div>
</div>
									<div class="btx-col-4">
<div class="btx-item js-item-box btx-box btx-center-align anmt-item anmt-fadeinu btx-p-border-border js-box-fitted btx-light-scheme" data-group="small-image" data-scheme="light">
		<div class="btx-box-inner" style="height:auto;" data-height="auto">
		<div class="btx-box-content btx-middle-vertical" style="overflow-y:auto;">
			<div class="btx-box-body" style="padding-top:10%; padding-bottom:10%;">
															
<div class="btx-item js-item-heading btx-heading btx-heading--plain btx-center-align btx-uppercase" >
	<h6 class="btx-heading-text btx-primary-font btx-s-text-color btx-s-text-border" style="letter-spacing:2px;"><span style="font-weight: bold;">Article details</span></h6>
</div>
											
<div class="btx-item js-item-space btx-space" style="height:20px;"></div>
											
<div class="btx-item js-item-text btx-text btx-left-align btx-primary-font">
	<div class="btx-row" style="margin:0 -30px;">

					<div class="btx-text-content btx-col-12" style="padding:0 30px;">
				<div class="btx-text-content-inner">
											{{ $blog->title }}<br><br>  {{$blog->body }}	
                    
                      <div style="display:flex">

                      
                      <form action="{{ route('blogs.like', ['id' => $blog->id]) }}" method="POST">
                        @csrf
                        <button type="submit"><img style="width: 10px;" src="data:image/png;base64,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" alt=""></button>
                        <p  style="background: rgb(75, 239, 5); border-raidus:100%;margin-top:.6rem;color:white;text-align:center;"> {{ $blog->likes }}</p>
                       
                       </form>
                    
                    


                       

<form style="margin-left:1rem; margin-top:.5rem;" action="{{ route('blogs.dislike', ['id' => $blog->id]) }}" method="POST">
  @csrf
  <button type="submit"><img style="width: 10px;" src="data:image/png;base64,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" alt=""></button>
 <p style="background: rgb(192, 7, 7); border-raidus:100%;color:white;text-align:center;"> {{ $blog->dislikes }}</p>
 </form>
</div>  
                    </div>


                      

			</div>
		








      
	</div>
</div>

												</div>
		</div>
	</div>
</div>
</div>




									<div class="btx-col-1"></div>
									<div class="btx-col-5">
<div class="btx-item js-item-image btx-image btx-center-align btx-mobile-hidden anmt-item anmt-fadeinu" style="margin-bottom:0px;">
	<div class="btx-image-container">
		<div class="btx-media-wrapper" style="max-width:100%;"><div class="btx-media-wrapper-inner">

			<img src="{{ asset('storage/' . $blog->image) }}" alt="">
			
			</div></div>	</div>
</div>
</div>
									<div class="btx-col-1"></div>
							</div>
							</div>
			</div>
</div>





<div style="display:flex; ">

       
  
</div> 















<style>
    .about {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.contentBx {
    flex: 1;
}

.imgBx {
    flex: 1;
    margin-left: 20px;
}

.titleText {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 10px;
}

.title-text {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
}

.btn2 {
    display: inline-block;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    background-color: rgb(1, 1, 92);
    color: white;
    transition: background-color 0.3s ease;
}

.btn2:hover {
    opacity: 0.8;
}

.comment {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
}

.comment-info {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
}

.comment-content {
    margin-bottom: 10px;
}

.comment-reply-count {
    color: red;
    margin-bottom: 10px;
}

.comment-reply-heading {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.reply {
    margin-left: 20px;
    padding: 5px;
    border: 1px solid #eee;
    background-color: #fff;
}

.reply-info {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
}

.reply-content {
    margin-bottom: 10px;
}

.no-reply {
    color: #888;
    margin-bottom: 10px;
}

</style>


<section class="about container" id="about">
    
        <a href="#more" class="btn2">Read replies</a>
   
</section>

@if ($comments->isNotEmpty())
    @foreach ($comments as $comment)
        <div id="more" class="comment">
            <p class="comment-info">Comment by: {{ $comment->name }}</p>
            <p class="comment-content">{{ $comment->content }}</p>
            <p class="comment-reply-count">Replies: {{ $comment->replyCount() }}</p>
            <h4 class="comment-reply-heading">Replies:</h4>
            @if ($comment->comment_replies->isNotEmpty())
                @foreach ($comment->comment_replies as $reply)
                    <div class="reply">
                        <p class="reply-info">Reply by: {{ $reply->name }}</p>
                        <p class="reply-content">{{ $reply->content }}</p>
                    </div>
                @endforeach
            @else
                <p class="no-reply">No replies for this comment.</p>
            @endif
        </div>
    @endforeach
@endif


@endsection