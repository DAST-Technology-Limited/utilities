@extends('blog.app')

@section('content')



<section class="about container" id="about" style="margin-top:1rem;">
    <div class="contentBx">
        <h2 class="titleText">DAST</h2>
        <p class="title-text">
            DAST is a technology company that provides software development solutions, blockchain solutions and digital services to individuals, businesses and organisations.
        </p>
        <a href="#comment" style="background: rgb(1, 1, 92);color:white;" class="btn2">Comment</a>
        <a href="/create" style="background: rgb(1, 1, 92);color:white;" class="btn2">Create</a>
    </div>
    <div class="imgBx">
        <img src="https://media.istockphoto.com/id/480187760/photo/female-novelist-writing-on-the-laptop.webp?b=1&s=170667a&w=0&k=20&c=rXlELFYobibWOzFwpLmmu0lkXbHHaALFNtlheyL4mIs=" alt="" class="fitBg">
    </div>
</section>

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
      
      <div class="comment">
        <p class="comment-details">Comment by John Doe</p>
        <p class="comment-content">This is a comment...</p>
        <button onclick="toggleReplySection('comment-1')">Reply</button>
        
        <div id="reply-section-comment-1" class="reply-section">
          <form class="reply-form">
            <label for="reply-1">Your Reply:</label>
            <textarea id="reply-1" name="reply-1" required></textarea><br><br>
          
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
      
      <div class="comment">
        <p class="comment-details">Comment by Jane Smith</p>
        <p class="comment-content">Another comment...</p>
        <button onclick="toggleReplySection('comment-2')">Reply</button>
        
        <div id="reply-section-comment-2" class="reply-section">
          <form class="reply-form">
            <label for="reply-2">Your Reply:</label>
            <textarea id="reply-2" name="reply-2" required></textarea><br><br>
          
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
      
      <form class="comment-form" id="comment">
        <label for="comment">Leave a Comment:</label>
        <textarea id="comment" name="comment" required></textarea><br><br>
      
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>

