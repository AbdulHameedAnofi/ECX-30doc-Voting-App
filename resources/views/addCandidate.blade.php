@include('header')
<h3>Add Candidate</h3>
<div class="container">
  <form method="post" action="storeData" 
		enctype="multipart/form-data">
    @csrf
      <label><b>Name:</b></label><br>
      <input type="text" name="name" class="form-control" required name="image"><br><br>
      <label><b>Profile Picture:</b></label><br>
      <input type="file" name="image" class="form-control" required name="image"><br><br>
      <label><b>Details:</b></label><br>
      <input type="text" name="details" class="form-control" required name="image"><br><br>
      <button type="submit" class="btn btn-success">Add</button>
  </form>
</div>
</form>