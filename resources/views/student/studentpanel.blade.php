<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    

    body 
{
  background-image: url('94.jpg');
  background-repeat: no-repeat;

  background-size: cover;
}
    
.desk
    {
        text-align: center;
      padding-top: 5%;
      font-size: 30px;
      display: block;

   
     
    }
  
.h6
{

color: white;


  }


  .navbar
  {
    /* font-family: "pacifico",cursive; */
    
    
  }



    </style>
<body>
  
{{--  --}}

<nav class="navbar navbar-dark bg-info" >
  <a class="navbar-brand" href="#">  <strong><i> Student Panel</i></strong></a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      {{-- <a href="http://127.0.0.1:8000/showsyllabus"class="btn btn-info btn-lg">Check Syllabus</a><br>
      <a href="http://127.0.0.1:8000/showscam"class="btn btn-info btn-lg">Check Scammerlist</a><br>
      <a href="http://127.0.0.1:8000/mytuitions"class="btn btn-info btn-lg">Check My Tuition List</a><br> --}}
      <br><h6 class="h6">Welcome Dear Parent please your the the post tuition option to post tuition and use correct information<br> Contact the admin at 018463243234<br> To confirm tuition Bkash fro registration fee 0983746526<br> thankyou</h6>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    {{-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>
<br><br>
<div class="desk">

    <a href="http://127.0.0.1:8000/tuitions"class="btn btn-info btn-lg">Post Tuitions</a><br>
    {{-- <a href="http://127.0.0.1:8000/syllabus" class="btn btn-info btn-lg">Upload Syllabus</a><br> --}}
    {{-- <a href="http://127.0.0.1:8000/applications" class="btn btn-info btn-lg">Check Tutor details</a><br> --}}
    <a href="http://127.0.0.1:8000/scammer" class="btn btn-info btn-lg">Scammer Data</a><br>
     <a href="http://127.0.0.1:8000/showsyllabus"class="btn btn-info btn-lg">Check Syllabus</a><br>
      <a href="http://127.0.0.1:8000/showscam"class="btn btn-info btn-lg">Check Scammerlist</a><br>
      <a href="http://127.0.0.1:8000/mytuitions"class="btn btn-info btn-lg">Check My Tuition List</a><br>
    <a href="http://127.0.0.1:8000/"class="btn btn-danger btn-lg"> Exit</a><br>
  

 </div>

</body>
</html>


  