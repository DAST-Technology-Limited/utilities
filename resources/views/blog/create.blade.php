





@extends('blog.app')

@section('content')

<!DOCTYPE html>
<html>
  <!DOCTYPE html>
  <html>
  <head>
    {{-- <script src="https://cdn.tiny.cloud/1/m59rfc8dip9te6iwg5kmocq1dbxs5zk4jeed3tcrowww4534/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        tinymce.init({
          selector: 'textarea',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
          mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
          ],
        });
  
        document.getElementById('create').addEventListener('submit', function(event) {
          event.preventDefault(); // Prevent the default form submission
  
          // Perform any necessary validation or preprocessing here
  
          // Submit the form programmatically
          this.submit();
        });
      });
    </script> --}}
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
      }
    </style>

<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">

  </head>
  <body>
    <section class="about container" id="about" style="margin-top:1rem;">
      
      <div class="imgBx" style="margin-top:1rem;">
        <img src="https://media.istockphoto.com/id/1425936006/photo/influencer-reviewing-her-live-broadcast-schedule.webp?b=1&s=170667a&w=0&k=20&c=ehFBnmRqVnrByCyTFrYO281sOqSCs2dIbUd5WcPjqIw=" alt="" class="fitBg">
      </div>
    </section>


   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.16/css/bootstrap-multiselect.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.16/js/bootstrap-multiselect.min.js"></script>
    

    <form id="create" action="/store" method="post" enctype="multipart/form-data">
      @csrf
      @if (session('message'))
      <script>
          toastr.success('{{ session('message') }}', '', { timeOut: 3000 });
      </script>
  @endif

  
  <script>
    toastr.options = {
    closeButton: true,
    progressBar: true,
    positionClass: 'toast-top-right',
    preventDuplicates: false,
    showDuration: 300,
    hideDuration: 1000,
    timeOut: 5000,
    extendedTimeOut: 1000,
    showEasing: 'swing',
    hideEasing: 'linear',
    showMethod: 'fadeIn',
    hideMethod: 'fadeOut'
};

  </script>
      <a href="/categories/create"><h5>Create Category</h5></a>
      <label for="title">Blog Title:</label>
      <input type="text" id="title" name="title" required><br><br>

      <label for="author">Blog author:</label>
      <input type="text" id="author" name="author" required><br><br>

      <label for="category_id">Categories:</label>
      <div class="checkbox-container">
        @foreach($categories as $category)
          <div class="category-item">
            <input type="checkbox" name="category_id[]" id="category_{{ $category->id }}" value="{{ $category->id }}">
            <label for="category_{{ $category->id }}">{{ $category->name }}</label>
          </div>
        @endforeach
      </div>
      
<style>
  .checkbox-container {
  display: flex;
  flex-wrap: wrap;
}

.category-item {
  display: flex;
  align-items: center;
  margin-right: 20px;
}

.category-item input[type="checkbox"] {
  margin-right: 5px;
}

.category-item label {
  font-weight: bold;
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
  .category-item {
    margin-right: 10px;
  }
}

@media screen and (max-width: 480px) {
  .category-item {
    margin-right: 5px;
  }
}

</style>
      

      <label for="details">Blog Details:</label>
      <textarea id="details" name="body" required></textarea><br><br>

      <label for="file">Upload File:</label>
      <input type="file" id="file" name="image"><br><br>

      <input type="submit" value="Submit"  style="background: rgb(1, 1, 54);color:white;" >
  </form>



<script>
  $(document).ready(function() {
  $('.multiselect').multiselect({
    buttonWidth: '200px',
    enableFiltering: true,
    includeSelectAllOption: true
  });
});

</script>

@endsection