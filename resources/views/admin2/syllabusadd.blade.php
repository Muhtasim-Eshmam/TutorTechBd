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
  border-radius: 6px;
  background-image: url('35.jpg');
  background-repeat: no-repeat;

  background-size: cover;
  padding: 80px;
}
</style>
<body>

<h3>Upload Syllabus</h3>

<div>
    <form action="{{route('store.syllabus')}}" method="post"> 
        @csrf
   
    <input type="text" id="class" name="class" placeholder="Class">

   
    <input type="text" id="subject" name="subject" placeholder="Subject">

    <input type="text" id="bookname" name="bookname" placeholder="BookName">
    <input type="text" id="syllabus" name="syllabus" placeholder="Syllabus">
    <input type="text" id="school" name="school" placeholder="School">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
