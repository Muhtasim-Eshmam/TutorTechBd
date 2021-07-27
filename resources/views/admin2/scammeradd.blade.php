<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 50%;
  padding: 15px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #black;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}

div {
  border-radius: 8px;
  background-image: url('35.jpg');
  background-repeat: no-repeat;

  background-size: cover;
  padding: 110px;
}
</style>
<body>

<h3>Upload Scammer List</h3>

<div>
    <form action="{{route('store.scam')}}" method="post"> 
        @csrf
   
    <input type="text" id="name" name="name" placeholder="name">

   
    <input type="text" id="address" name="address" placeholder="address">

    <input type="text" id="phone" name="phone" placeholder="phone">
    <input type="text" id="details" name="details" placeholder="details">
    
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
