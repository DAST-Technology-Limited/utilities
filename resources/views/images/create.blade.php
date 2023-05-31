<form action="/images" method="POST" enctype="multipart/form-data">
    @csrf
   
    <label for="image">Image:</label>
    <input type="file" name="image" id="image">
    <br>
    <button type="submit">Upload</button>
</form>
