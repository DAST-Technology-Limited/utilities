








@extends('blog.app')

@section('content')

  <body>
    <section class="about container" id="about" style="margin-top:1rem;">
      
      <div class="imgBx" style="margin-top:1rem;">
        <img src="https://media.istockphoto.com/id/1425936006/photo/influencer-reviewing-her-live-broadcast-schedule.webp?b=1&s=170667a&w=0&k=20&c=ehFBnmRqVnrByCyTFrYO281sOqSCs2dIbUd5WcPjqIw=" alt="" class="fitBg">
      </div>
    </section>


    <!-- resources/views/categories/create.blade.php -->




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
      background-color: #100931;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  
    input[type="submit"]:hover {
      background-color: #3309af;
      color: white;
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

 
  <form action="{{ route('categories.store') }}" method="POST">


    @if ($errors->any())
    <div id="error-message" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<script>
    setTimeout(function() {
        var errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 35000); // 35 seconds in milliseconds
</script>

    <style>
      <style>
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .alert li {
        margin-bottom: 5px;
    }
</style>

    </style>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @csrf
    <a href="/create"><h4>Create Blog</h4></a>
    <label for="name">Category Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Category Description:</label>
    <textarea id="description" name="description" required></textarea><br><br>

    <input type="submit" value="Create Category">
</form>


  
  
  



@endsection