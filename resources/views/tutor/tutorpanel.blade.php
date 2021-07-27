<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    

    body {
  background-image: url('class.jpg');
  background-repeat: no-repeat;

  background-size: cover;
}
    
.desk
    {
      padding-left:4%;
      padding-top: 14%;
    
      font-size: 35px;
   
     
    }



    </style>
<body>
  
{{--  --}}

<nav class="navbar navbar-dark bg" style="background-color:green">
  <a class="navbar-brand" href="#"> <strong> Welcome Tutor !!</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      {{-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
          About US
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          {{-- <a class="dropdown-item" href="#">Take Courses</a> --}}
          {{-- <div class="dropdown-divider"></div> 
          <a class="dropdown-item" href="#">Tutoring can help strengthen subject comprehension, boost confidence, and build important learning skills.<br> Tutoring gives students individualized attention that they don't get in a crowded classroom</a>
         
         
        </div>
      </li> --}}
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
          Contact Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          {{-- <a class="dropdown-item" href="#">Take Courses</a> --}}
          {{-- <div class="dropdown-divider"></div> --}}
          <a class="dropdown-item" href="#">01236452637 admin@gmail.com</a>
         
         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    {{-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>

<div class="desk">

  <a href="http://127.0.0.1:8000/apply"class="btn btn-outline-success btn-lg">Apply For tuitions </a> <br>
  <a href="http://127.0.0.1:8000/tuitioncheck"class="btn btn-outline-success btn-lg">Search Tutions </a> <br>

  <a href="http://127.0.0.1:8000/advice"class="btn btn-outline-success btn-lg">Check Advice</a> <br> 
  <a href="http://127.0.0.1:8000/syllabusview"class="btn btn-outline-success btn-lg">Check Syllabus </a> <br>
  <a href="http://127.0.0.1:8000/scammerview"class="btn btn-outline-success btn-lg"> Check Scammer Board</a> <br>
  <a href="http://127.0.0.1:8000/"class="btn btn-outline-danger btn-lg">Exit</a> <br>
 
 </div>

</body>
</html>
