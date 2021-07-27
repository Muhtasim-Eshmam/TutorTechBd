<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
<style>
* {box-sizing: border-box;}


.button {
  background-color: dodgerblue;;
  border: none;
  color:white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  font-family:Copperplate;
}

</style>
</head>
<body>



<br>
<br>


<div style="">
    <h1 class="head">Tuitions List</h1>
    @method('delete');
    <table class="table">
      <thead class="thead-dark">
   <tr>
        {{-- <th> Id </th> --}}
        <th> ID </th>
        <th> Code </th>
        <th> BackGround </th>
        <th> Contact </th>
        <th> Subject </th>
        <th> School </th>
        <th> Location </th>
        <th> Class </th>
        <th> Salary </th>
        <th> timing </th>
        <th> Date </th>
        <th> Action </th>
</tr>
@foreach($tuitions as $row)
<tr>
        {{-- <td> {{ $row->id }} </td> --}}
        <td> {{ $row->id }} </td>
        <td> {{ $row->code }} </td>
        <td> {{ $row->bckgrnd }} </td>
        <td> {{ $row->contact }} </td>
        <td> {{ $row->subject }} </td>
        <td> {{ $row->school }} </td>
        <td> {{ $row->location }} </td>
        <td> {{ $row->class }} </td>
        <td> {{ $row->salary }} </td>
        <td> {{ $row->time }} </td>
    
        <td> {{ $row->created_at }} </td>
       
        <td>
           
            <a href="{{URL::to('delete/tuitions/'.$row->id) }}" class="btn btn-sn btn-danger">Delete</a>
            <a href="{{URL::to('edit/tuitions/'.$row->id) }}" class="btn btn-sn btn-success">Update</a>
        </td> 
    </tr>
   @endforeach

   </table>

</div>
<br>
<a href="{{ url()->previous () }}" class="button">Close</a> 
  
</body>
</html>
