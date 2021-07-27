<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tutor Tech</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
              #myVideo {
  
  
  width: 120%; 
  height: 150%;
  


}
            html, body {
    
             background-image: url('teach3.jpg');
            background-repeat: no-repeat;

             background-size: cover;

                color: blue; 
                font-family:'Times New Roman', Times, sexrif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                font-family: Arial, Helvetica, sans-serif;
               
              
            }

            .content {
           
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 200;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                color: white;
            }

            .m-b-md {
                margin-bottom: 40px;
                margin-left: 40px;
            }

 
        </style>
    </head>
    <body>


       


        <div class="flex-center position-ref full-height">



            {{-- <video autoplay muted loop id="myVideo">
                <source src="80.mp4" type="video/mp4"  frameborder="0">
                Your browser does not support HTML5 video.
              </video> --}}
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                 
                </div>

                 <div class="links">
                     <i class="bi bi-door-open-fill"></i>
                    <a href="http://127.0.0.1:8000/adminlogin"class="btn btn-outline-primary"> <i class="bi bi-door-open-fill"></i>Admin </a> 
                    <a href="http://127.0.0.1:8000/advice"class="btn btn-outline-primary">Advice </a> 
                    <a href="http://127.0.0.1:8000/tutorpanel"class="btn btn-outline-primary">Tutors </a> 
                </div> 
            </div>
        </div>
    </body>
</html>
