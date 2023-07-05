@extends('blog.app')

@section('content')



<section class="about container" id="about" style="margin-top:1rem;">
  
    <div class="contentBx">
<<<<<<< HEAD
      @if(Auth::check() && Auth::user()->id == $blog->user_id)
=======
>>>>>>> 64c77872e40fa12cb5cc344b30d819bc0440c955


											
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
				<div style="margin:1rem;" class="btx-text-content-inner">
          
											{{ $blog->title }}<br><br>  {{$blog->body }}	
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




									<div class="btx-col-1"></div>
									<div class="btx-col-5">
<div class="btx-item js-item-image btx-image btx-center-align btx-mobile-hidden anmt-item anmt-fadeinu" style="margin-bottom:0px;">
	<div class="btx-image-container">
		<div class="btx-media-wrapper" style="max-width:100%;"><div class="btx-media-wrapper-inner">

      <img src="{{ asset('storage/' . $blog->image) }}" alt="" />
			
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
              <button style="border:#4CAF50;"  title="reply comment" onclick="toggleReplySection('comment-{{ $comment->id }}')">Reply</button>
                 
                          <!-- comments/edit.blade.php -->
            {{-- <form action="{{ route('comments.update', $comment->id) }}" method="POST">
              @csrf
              @method('PUT')
              <textarea name="content" required>{{ $comment->content }}</textarea><br><br>
              <button type="submit">Update</button>
            </form> --}}



            @if(auth()->check() && $comment->blog_id === auth()->user()->id)

              <button style="border: none;" title="edit comment"  ><a style="border: none;" href="/comments/{{ $comment->id }}/edit"><img style="width: 30px;" src="data:image/png;base64,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" alt=""></a></button>
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


             <button><a href="/view_replies/{{ $comment->id }}"><img style="width: 30px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAAZlBMVEUAwP/6+vr5+fn4+Pj7+/v8/Pz9/f339/f////+/v729vb19fX09PQAv/8Avf////0Auv//+fSx4vqK2f7H6PnB6v7p9Pd30/7q+f+F0/pOyf4yxf6X3f7a8f3R6/ij4f9hzfzf7vaPN3NLAAAF4UlEQVRoge1aaZeqMAxNS0sFLaGgyOL6///k68Iqi+jM49Nw5ljUTJMmtzdJEXYhJyI47ELGwt0hEISbwaP+3gye/mbvUzP8QA5C36NcBCGnlIeB4NTz94FgxPNDXzAm9OARJoL993IhcI8Qyj0z6BdOzSAYJcy+s98wQpn4iRwQPeiPzUB790vDx3KgF6RX6QtjjR60NVwvnBk79cA839imh/B7OQHabURY91qH6kCJ3cH4NTSRNHENjV8Pu+/lAphFyK5ByG4ZSSvkYBKa/qugPw3hlXIQcgc5s+QOmtxA0y3ZQJN30PxCLgRmYMC80cDsYF/YpMAHctso+f/u4uE2gd8Ewptsxk1oZROC3ITqw0loziejL+Q0hPecGGjsGdsboBBuoCGoDmGNkINPDSZ/IAe/PeGUHPyyayblwPvlIE/IefAZXA0LGk78DNawdkP5FJEFwn/m+dMXAUOk/tqNDPs11OArzK5J+iglxPoCWT6K5Jqh8tdQzR7ek5xAdrs/qiiSUkJ96dsoqh73G0PxnjThDV0LVLcUjAIYXUYRpDeF4g39w2Li4eyZynhi/p6mWKZXxhcTGcynUIpZUi5pqL+SUVwmGdL5lDyvBMMLRGMVUk54TkZwCXFeybS7qMrOEI3niqHSF8QD7fY+gnOm6Iy7JgOvWDryk7Y2Pe4UKv23O6bjVco4ZWo68JMQvo9XEZUnVNjI6dtTqdXIXmzMau7TEB5tRopJNXaUTFAN5Qgmo+jIqEqQjjfjCw1QzMvWEe0kUZnhmC4wKyNwq5H1orSaMkf6SitDQuOkaIOhzXq4++hMxpRooETObs2yrDrL4kJPMyTIHtVr205tMMzKw3odZ2PbFNVTNFrM9GHSqYnghAbCHdX3kozShrWCVcJVGjkzCe2Skce51yUtSkrrqChVPOkZeGaqn7S6dKmO0HnqYlgodm8y1qTV/U7lWZYrE1eXflnmohFzjaRL5zM4ql76bfK0IOe4M+SAWnHhdpnGSz2hygtpqF4WuWoUY2Jnlhc9IR5aV8j47JBsC4m6JFLPsllsVF2V2bWijik2rqFpN0VKGxdi6T4UZneraxuaqHqqYR+vkvb/5SUwXMfI0WqNTqoOMjOAjWRl3ROVrAaDOjm5IzFyNLjIljgT1evjGZ67ZTzRwVWl1g2ATXbXFkfVScPSAluWTaZHpzVVTg6f7V7WsGRNH495x9oXJC5PU7+yc2nY2A1loKa/pZzyeompchu5tqbyqasPCHZuBbszNYTx1rnxqpo87WfuoyM6asitjn2g64mi3qK5oyR0SiHzm/pA3exipLH6hgbCeG9XV/iizdNebsEWNyRXSFmhhvDpXDZmFg0ZOsnca+sDERRR45s7agin7dsT9vK0hqb9WDm6VjogJxqocy/bS+VoXUED9a4+wBZJUbqDpN4dssqxn6eJVaKtt4nHrEvqeJxqN0Btu01QaKOnsdSvDzBz8ddFVAI1B8oU2aAzxlqJsimUZzonaiA9+uQeZ9ymWlUrwUFvzTCtp35oJZYXVigBypuN96mSD9z1uBWDLPXqLvLirlpYu2t94M12h76WxcCf+oE3EG7eLkMYXq4lCPtFuy8MhD/YjC/XcDPK/ma8Vq177Gb8hFasSKtjnlYur7TyhiBhQJB9Z/UIEpw18wT5GdV3vvqI6r9LWtFC0mrN6JLWL6TfGmqD9AuD9NsWEnRYSIj1hYSd018qJOZKIlhfEsFESUTUTB//bXFnruXibrFMLb8oU2GiTF1RcMulgnsgOVdwT7UOEz3WuHVQE60DzLQOU01LNmyCXGgnmqCRKXNN0HQ7l+l2ztlZ5zT5o3ZuqTFtaa7xt2lMy9I0pmNOXmpMV7TYQ2KUw8zVqFhssX9wWND56d1hwfKxB7m+HnuMe1GZXsmbY4+1BzhTK1h9gLPJUdQmh2qbHA9uctC5yZHtJofPmxyjb/JAYJNHG3/P4/+ex/89j/97Hv/3PP7vefxvPo//rz8i2+LncP8AElDr1XerVb0AAAAASUVORK5CYII=" alt=""></a></button>
            </div>
             

              <div id="reply-section-comment-{{ $comment->id }}" class="reply-section">
                
@if(Auth::check() && Auth::user()->name)

<form class="reply-form" action="{{ route('reply.store', ['comment_id' => $comment->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
    <input type="hidden" name="comment_id" value="{{ $comment->id }}">
    <input type="hidden" id="name" name="name" value="{{ Auth::user()->name }}" required>

    <label for="reply-{{ $comment->id }}">Your Reply:</label>
<<<<<<< HEAD
    <textarea id="reply-{{ $comment->id }}" name="content" required></textarea><br><br>

=======
    <textarea id="reply-{{ $comment->id }}" name="content" required></textarea>
    <p id="word-count">0/20 words</p>
    
    <script>
      const textarea = document.getElementById("reply-{{ $comment->id }}");
      const wordCount = document.getElementById("word-count");
      
      textarea.addEventListener("input", function() {
        const content = this.value;
        const words = content.trim().split(/\s+/);
        const wordCountText = words.length + "/20 words";
        
        if (words.length > 20) {
          // Truncate the content to the first 20 words
          const truncatedContent = words.slice(0, 20).join(" ");
          textarea.value = truncatedContent;
          wordCountText = "20/20 words";
        }
        
        wordCount.textContent = wordCountText;
      });
    </script>
    
    <input style="background: rgb(1, 1, 54);color:white;" type="submit" value="Submit">
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

              <input  style="background: rgb(1, 1, 54);color:white;"  type="submit" value="Submit">
          </form>
      </div>
  </div>
</div>

@endsection