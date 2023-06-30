@extends('blog.app')

@section('content')


<style>
    .comment-update {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
}

.comment-update h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.comment-update textarea {
  width: 100%;
  height: 150px;
  resize: vertical;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
}

.comment-update button {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 18px;
  font-weight: bold;
  background-color: #4285f4;
  color: #fff;
  border: none;
  cursor: pointer;
}

/* Responsive styles */
@media (max-width: 600px) {
  .comment-update {
    padding: 10px;
  }
  
  .comment-update h2 {
    font-size: 20px;
    margin-bottom: 5px;
  }
  
  .comment-update textarea {
    height: 100px;
    widows: 100%;
    font-size: 14px;
  }
  
  .comment-update button {
    font-size: 16px;
  }
}

.comment-update {
  width: 100%;
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
}


</style>

<div class="comment-update">
    <h2>Update Your Comment</h2>
    <form class="edit-form" action="{{ route('comments.update', $comment->id) }}" method="POST">
      @csrf
      @method('PUT')
      <textarea style="color:black;" name="content" required>{{ $comment->content }}</textarea>
      <button type="submit">Update</button>
    </form>
  </div>
  








@endsection