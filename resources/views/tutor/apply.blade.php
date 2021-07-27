<!DOCTYPE html>
<html>
  <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
input[type=text], select {
  width: 50%;
  padding: 15px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 4px solid #black;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 4px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}

div {
  border-radius: 4px;
  background-image: url('35.jpg');
  background-repeat: no-repeat;

  background-size: cover;
  padding: 30px;
}
</style>
<body>


  {{-- <form>
    <div class="form-group">
      <label for="formGroupExampleInput">Example label</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Another label</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
  </form> --}}




<div  class="form-group">
    <form action="{{route('store.apply')}}" method="post"> 
        @csrf
    
    <input type="text" id="name" name="name" placeholder="name" class="form-control">
    <input type="text" id="code" name="code" placeholder="code" class="form-control">
    <input type="text" id="exp" name="exp" placeholder="experience" class="form-control">
   
    <input type="text" id="address" name="address" placeholder="address" class="form-control">

    <input type="text" id="phone" name="phone" placeholder="phone" class="form-control">
    <input type="text" id="nid" name="nid" placeholder="nid" class="form-control">
    
    <input type="text" id="educate" name="educate" placeholder="Education" class="form-control">
    <input type="text" id="contact" name="contact" placeholder="Parents Number" class="form-control">
    
    <input type="submit" value="Submit" >
  </form>
  
  <a href="http://127.0.0.1:8000/tutorpanel"class="btn btn-primary btn-lg" class="submit">Back</a> <br>
</div>

</body>
</html>
