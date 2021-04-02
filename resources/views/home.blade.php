<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>

  <body>
    @extends('layouts.app')
    @section('content')

    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="bd-placeholder-img" width="100%" height="100%" src="https://images.unsplash.com/photo-1612682039244-0029417865a4?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1950&q=80" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>International Islamic University Malaysia</h1>
                <p>Integration, Islamization, Internationalization and Comprehensive Excellence</p>
                <p><a class="btn btn-lg btn-primary" href="https://www.iium.edu.my/" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="https://images.unsplash.com/photo-1605278048834-32242fd0f1b4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
            <div class="container">
              <div class="carousel-caption">
                <h1>Sejahtera Academic Framework</h1>
                <p>SAF is a measure by IIUM to humanize education</p>
                <p><a class="btn btn-lg btn-primary" href="photos.iium.edu.my/flip/saf/" role="button">Click here to read</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="https://images.unsplash.com/photo-1611590002454-cbbb52f0c0dd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Leading the Way</h1>
                <p>Becoming a leading international centre of educational excellence</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
        <div class="col-md-12" id="list_kulliyyah">
          <h2>List of Kulliyyah</h2>
          <div class="container">
            <a href="#" class="btn btn-warning btn-lg">Ahmad Ibrahim Kulliyyah of Laws</a>
            <a href="#" class="btn btn-warning btn-lg">Kulliyyah of Architecture and Environmental Design </a>
            <a href="#" class="btn btn-warning btn-lg">Kulliyyah of Economics and Management Sciences</a>
            <a href="#" class="btn btn-warning btn-lg">Kulliyyah of Education</a>
            <a href="{{ url('/koe') }}" class="btn btn-warning btn-lg">Kulliyyah of Engineering</a>
            <a href="{{ url('/kict') }}" class="btn btn-warning btn-lg">Kulliyyah of Information and Communication Technology</a>
            <a href="#" class="btn btn-warning btn-lg">Kulliyyah of Islamic Revealed Knowledge and Human Sciences</a>
          </div>
        </div>
        <hr class="featurette-divider">
        <!-- Three columns of text below the carousel -->
        <div class="row-hots" id="course_categories">
          @foreach($hots as $key => $data)
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <h2>{{$data->fullname}}</h2>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          @endforeach
        </div>
        <p class="text-right"><a class="btn btn-primary" href="{{ url('/all') }}" role="button">View All &raquo;</a></p>
        <hr class="featurette-divider">
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
</html>
