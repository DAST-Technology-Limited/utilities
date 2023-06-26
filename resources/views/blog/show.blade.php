@extends('blog.app')

@section('content')



<section class="about container" id="about" style="margin-top:1rem;">
  
    <div class="contentBx">


											
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
  .btn2 {
  display: inline-block;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn2:hover {
  opacity: 0.8;
}

.btn2.comment {
  background-color: rgb(1, 1, 92);
  color: white;
}

.btn2.edit {
  background-color: rgb(5, 166, 8);
  color: white;
}

/* Adjust the button styles for different screen sizes if needed */
@media screen and (max-width: 767px) {
  .btn2 {
    font-size: 14px;
    padding: 8px 16px;
  }
}

</style>

</div>













<style>
  body {
    font-family: Arial, sans-serif;
  }
  
  .blog-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .blog-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  .blog-details {
    margin-bottom: 20px;
  }
  
  .comment-section {
    border-top: 1px solid #ccc;
    padding-top: 20px;
  }
  
  .comment-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  .comment-form {
    margin-top: 20px;
  }
  
  .comment-form label {
    display: block;
    margin-bottom: 5px;
  }
  
  .comment-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  
  .comment-form input[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .comment-form input[type="submit"]:hover {
    background-color: #45a049;
  }
  
  .comment {
    margin-bottom: 20px;
  }
  
  .comment-details {
    font-size: 14px;
    margin-bottom: 5px;
  }
  
  .comment-content {
    margin-bottom: 10px;
  }
  
  .reply-section {
    margin-top: 10px;
    display: none;
  }
  
  .reply-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  
  .reply-form input[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .reply-form input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
<script>
  function toggleReplySection(commentId) {
    var replySection = document.getElementById('reply-section-' + commentId);
    replySection.style.display = (replySection.style.display === 'none') ? 'block' : 'none';
  }
</script>

<div class="blog-container">
  <div class="comment-section">
      <h2 class="comment-title">Comments</h2>

      @foreach ($blog->comments as $comment)
          <div class="comment">
             <div style="display: flex;">
              <p>Comment by: {{ $comment->name }}</p>
              <p style="color:green;margin-left:1rem;">on: {{ $comment->created_at->format('F j, Y') }}</p>

             </div>
              <p>{{ $comment->content }}</p>
            <div style="display: flex;" >
              <button title="reply comment" onclick="toggleReplySection('comment-{{ $comment->id }}')"><img style="width: 30px;" src="data:image/png;base64,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" alt=""></button>
                 
                          <!-- comments/edit.blade.php -->
            {{-- <form action="{{ route('comments.update', $comment->id) }}" method="POST">
              @csrf
              @method('PUT')
              <textarea name="content" required>{{ $comment->content }}</textarea><br><br>
              <button type="submit">Update</button>
            </form> --}}



            @if(auth()->check() && $comment->blog_id === auth()->user()->id)

              <button title="edit comment"  ><a href="/comments/{{ $comment->id }}/edit"><img style="width: 30px;" src="data:image/png;base64,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" alt=""></a></button>
              @endif



              @if(auth()->check() && $comment->blog_id === auth()->user()->id)
    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button title="Delete comment" type="submit">
            <img style="width: 30px;" src="data:image/png;base64,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" alt="">
        </button>
    </form>
@endif


             <button><a href="/view_replies/{{ $comment->id }}"><img style="width: 30px;" src="data:image/png;base64,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" alt=""></a></button>
            </div>
             

              <div id="reply-section-comment-{{ $comment->id }}" class="reply-section">
                
@if(Auth::check() && Auth::user()->name)

<form class="reply-form" action="{{ route('reply.store', ['comment_id' => $comment->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
    <input type="hidden" name="comment_id" value="{{ $comment->id }}">
    <input type="hidden" id="name" name="name" value="{{ Auth::user()->name }}" required>

    <label for="reply-{{ $comment->id }}">Your Reply:</label>
    <textarea id="reply-{{ $comment->id }}" name="content" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>

@endif
              </div>
                {{-- <!-- Display the replies here -->
        @foreach ($comment->replies as $reply)
        <div class="reply">
            <p>Reply by: {{ $reply->name }}</p>
            <p>{{ $reply->content }}</p>
        </div>
    @endforeach --}}
          </div>
      @endforeach







      
      <div class="comment">
          <form action="{{ route('comments.store') }}?comment={{ urlencode(Request::url()) }}" class="reply-form" id="comment" method="POST">
              @csrf
              <input type="hidden" name="blog_id" value="{{ $blog->id }}">
              <input type="hidden" id="name" name="name" value="{{ Auth::check() ? Auth::user()->name : '' }}" required>


              <label for="comment">Leave a Comment:</label>
              <textarea id="comment" name="content" required></textarea><br><br>

              <input type="submit" value="Submit">
          </form>
      </div>
  </div>
</div>