





@extends('blog.app')

@section('content')

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>

<head>
  
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    input[type="file"] {
      display: block;
      margin-top: 5px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Responsive styles */
    @media screen and (max-width: 600px) {
      form {
        max-width: 100%;
        padding: 20px;
      }

      input[type="submit"] {
        width: 100%;
      }
  
      input[type="submit"]:hover {
        background-color: #45a049;
      }
  
      /* Responsive styles */
      @media screen and (max-width: 600px) {
        form {
          max-width: 100%;
          padding: 20px;
        }
  
        input[type="submit"] {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <section class="about container" id="about" style="margin-top:1rem;">
      
      <div class="imgBx" style="margin-top:1rem;">
        <img src="https://media.istockphoto.com/id/1425936006/photo/influencer-reviewing-her-live-broadcast-schedule.webp?b=1&s=170667a&w=0&k=20&c=ehFBnmRqVnrByCyTFrYO281sOqSCs2dIbUd5WcPjqIw=" alt="" class="fitBg">
      </div>
    </section>
  
    <form id="create" action="/store" method="post" enctype="multipart/form-data">
      @csrf
      <label for="title">Blog Title:</label>
      <input type="text" id="title" name="title" required><br><br>
  
      <label for="author">Blog author:</label>
      <input type="text" id="author" name="author" required><br><br>
  
      <label for="details">Blog Details:</label>
      <textarea id="details" name="body" required></textarea><br><br>
  
      <label for="file">Upload File:</label>
      <input type="file" id="file" name="image"><br><br>
  
      <input type="submit" value="Submit">
    </form>
    
@endsection
