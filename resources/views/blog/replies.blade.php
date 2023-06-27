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
                    
                      







                                            <div style="margin:1rem;" class="btx-text-content-inner">
          
                                               	
                          {{-- <img src="{{ asset('storage/' . $blog->image) }}" alt="" /> --}}
                      
                          <div style="display:flex">
    
                          
                          <form action="{{ route('blogs.like', ['id' => $blog->id]) }}" method="POST">
                            @csrf
                            <button type="submit">like</button>
                           
                           
                           </form>
                        
                        
    
    
                           
    
    <form style="" action="{{ route('blogs.dislike', ['id' => $blog->id]) }}" method="POST">
      @csrf
      <button type="submit">dislike</button>
     </form>
    
     
    </div>  
    
    <div style="display:inline;">
    
    
    <p  style="background: rgb(5, 1, 41); border-raidus:100%;margin-top:.6rem;color:white;text-align:center; width:15%;"> {{ $blog->likes }}</p>
    <p style="background: rgb(172, 5, 5); border-raidus:100%;color:white;text-align:center; width:15%;;"> {{ $blog->dislikes }}</p>
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