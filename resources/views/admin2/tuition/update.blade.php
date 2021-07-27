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
  border-radius: 5px;
  background-color:lightblue;
  padding: 40px;
}
</style>
<body>

<h3>Update tuitions</h3>

<div>
    <form action="{{ url('update/tuitions/'.$tuitions->id)}}" method="get"> 
        @csrf
   
    <input type="text" id="code" name="code" placeholder="code" value="{{$tuitions->code}}">
    <input type="text" id="subject" name="subject" placeholder="Subject"  value="{{$tuitions->subject}}">
    <input type="text" id="bckgrnd" name="bckgrnd" placeholder="bckgrnd"  value="{{$tuitions->bckgrnd}}">
    <input type="text" id="contact" name="contact" placeholder="contact"  value="{{$tuitions->contact}}">
    <input type="text" id="class" name="class" placeholder="class"  value="{{$tuitions->class}}">
    <input type="text" id="school" name="school" placeholder="School"  value="{{$tuitions->school}}">
    <input type="text" id="location" name="location" placeholder="location"  value="{{$tuitions->location}}">
    <input type="text" id="salary" name="salary" placeholder="salary"  value="{{$tuitions->salary}}">
    <input type="text" id="time" name="time" placeholder="time"  value="{{$tuitions->time}}">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
