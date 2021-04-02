
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>{{ config('app.name', 'IIUM Micro-Credentials') }}</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/International_Islamic_University_Malaysia_logo.svg/1200px-International_Islamic_University_Malaysia_logo.svg.png">
    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .jumbotron {
  padding-top: 3rem;
  padding-bottom: 3rem;
  margin-bottom: 0;
  background-color: #fff;
}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron h1 {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

.enrollbtn{
  margin-top:10px;
  margin-bottom:10px; 
  color:black;
  border-radius:5px;
  font-family: "Lucida Console", Monospace;
  font-size:18px;
}
.enrollbtn:hover{
  background-color:grey;
}

#col2{
  border:solid 1px;
  background-color:cornflowerblue;
  
}
#col3{
  border:solid 1px;
  background-color:darkcyan;
}

#desc{
  font-family: 'Monaco', monospace;
}

footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

footer p {
  margin-bottom: .25rem;
}

/////

* {
        box-sizing: border-box;
      }
      .openBtn {
        display: flex;
        justify-content: center;
        margin-top:20px;
       
      }
      .openButton {
        border: none;
        border-radius: 5px;
        background-color:darkslategrey;
        
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        position: fixed;
      }

      .openButton:hover{
        background-color: firebrick;
        
      }
      #btnid{
        background-color:teal;

      }
      .formPopup {
        display: none;
        z-index: 9;
      }
      .formContainer {
        padding: 20px;
      }
      .formContainer input[type=text],
      .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      }
      </style>

  </head>

  <body>
    @extends('layouts.app')
    @section('content')
    
    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item-p active">
            @foreach($course as $key => $data)
            <img class="bd-placeholder-img" width="100%" height="100%" src="{{$data->imagesrc}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
            <div class="container">
              <div class="carousel-caption text-center">
                <h1>{{$data->fullname}}</h1>
                <h2>{{$data->idnumber}}</h2>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      
      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          @foreach($course as $key => $data)
            <label>Course Name:</label><h2>{{$data->fullname}}</h2>
            <label>Course Code:</label><h2>{{$data->idnumber}}</h2>
            <label>Date:</label><h2>{{$data->startdate}} - {{$data->enddate}}</h2>
            <label>Summary:</label><h2>{{$data->summary}}</h2>
            <p><a class="btn btn-secondary" role="button" onclick="openForm()">Enroll</a></p>
          @endforeach
        </div>

        

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
            <div class="loginPopup">
              <div class="formPopup" id="popupForm">
            <form method="POST" action="/api/add">
               @csrf
               <div class="formContainer">
                  <label for="userid">
                    <strong>Matric Number</strong>
                  </label>
                  <input type="text" id="userid" placeholder="Your Matric Number" name="userid" required>
                    <label for="enrolid">
                      <strong>Course Code</strong>
                    </label>
                  <input type="text" id="enrolid" placeholder="Code:31" name="enrolid" required>
                  <button type="submit" class="btn" id="btnid">Submit</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
                </div>
                </form>
              </div>
            </div>
        </div>
 
       
      </div><!-- /.container -->

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  <script type="text/javascript">

function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script>
</html>